const chartDataElement = document.querySelector("#dashboard-chart-data");

if (chartDataElement instanceof HTMLScriptElement) {
  const chartData = JSON.parse(chartDataElement.textContent ?? "{}");
  const published = chartData.published;
  const unpublished = chartData.unpublished;
  const categories = chartData.categories;
  const publishedTotal = published.reduce((total, count) => total + count, 0);
  const unpublishedTotal = unpublished.reduce((total, count) => total + count, 0);
  const rootStyles = getComputedStyle(document.documentElement);
  const palette = {
    gold: "#c49a58",
    green: rootStyles.getPropertyValue("--green").trim() || "#347455",
    blue: "#667b9a",
    muted: rootStyles.getPropertyValue("--muted").trim() || "#77827e",
    grid: rootStyles.getPropertyValue("--line").trim() || "#edf0eb",
    ink: rootStyles.getPropertyValue("--navy").trim() || "#173c3d",
  };
  const chartFont = {
    family: '"DM Sans", Arial, sans-serif',
    size: 11,
  };

  Chart.defaults.font.family = chartFont.family;
  Chart.defaults.color = palette.muted;

  const breakdownCanvas = document.querySelector("#content-breakdown-chart");
  if (breakdownCanvas instanceof HTMLCanvasElement) {
    new Chart(breakdownCanvas, {
      type: "bar",
      data: {
        labels: categories,
        datasets: [
          {
            label: "Published",
            data: published,
            backgroundColor: [palette.gold, palette.green, palette.blue],
            borderRadius: 5,
            borderSkipped: false,
            maxBarThickness: 26,
          },
          {
            label: "Unpublished",
            data: unpublished,
            backgroundColor: document.documentElement.dataset.adminTheme === "dark"
              ? ["#4a4031", "#2d4637", "#35404d"]
              : ["#eee5d5", "#e2eee6", "#e5eaf0"],
            borderRadius: 5,
            borderSkipped: false,
            maxBarThickness: 26,
          },
        ],
      },
      options: {
        indexAxis: "y",
        maintainAspectRatio: false,
        responsive: true,
        animation: window.matchMedia("(prefers-reduced-motion: reduce)").matches
          ? false
          : { duration: 650, easing: "easeOutQuart" },
        interaction: { intersect: false, mode: "index" },
        plugins: {
          legend: {
            align: "end",
            labels: { usePointStyle: true, pointStyle: "circle", boxWidth: 7, boxHeight: 7, padding: 16, font: chartFont },
          },
          tooltip: {
            backgroundColor: "#173c3d",
            padding: 11,
            titleFont: { ...chartFont, weight: "700" },
            bodyFont: chartFont,
            displayColors: true,
            usePointStyle: true,
          },
        },
        scales: {
          x: {
            beginAtZero: true,
            ticks: { precision: 0, font: chartFont, padding: 8 },
            grid: { color: palette.grid, drawBorder: false },
            border: { display: false },
          },
          y: {
            ticks: { font: { ...chartFont, weight: "600" }, padding: 10 },
            grid: { display: false, drawBorder: false },
            border: { display: false },
          },
        },
      },
    });
  }

  const visibilityCanvas = document.querySelector("#content-visibility-chart");
  if (visibilityCanvas instanceof HTMLCanvasElement) {
    const centerLabel = {
      id: "visibilityCenterLabel",
      afterDraw(chart) {
        const { ctx, chartArea } = chart;
        if (!chartArea) return;
        const centerX = (chartArea.left + chartArea.right) / 2;
        const centerY = (chartArea.top + chartArea.bottom) / 2;
        ctx.save();
        ctx.textAlign = "center";
        ctx.textBaseline = "middle";
        ctx.fillStyle = palette.ink;
        ctx.font = '700 27px "Manrope", Arial, sans-serif';
        ctx.fillText(String(publishedTotal), centerX, centerY - 5);
        ctx.fillStyle = palette.muted;
        ctx.font = '10px "DM Sans", Arial, sans-serif';
        ctx.fillText("PUBLISHED", centerX, centerY + 17);
        ctx.restore();
      },
    };

    new Chart(visibilityCanvas, {
      type: "doughnut",
      data: {
        labels: ["Published", "Unpublished"],
        datasets: [{
          data: [publishedTotal, unpublishedTotal],
          backgroundColor: [palette.green, document.documentElement.dataset.adminTheme === "dark" ? "#35433f" : "#e8ece8"],
          hoverBackgroundColor: ["#286344", document.documentElement.dataset.adminTheme === "dark" ? "#43534e" : "#dce2dc"],
          borderWidth: 0,
          spacing: 4,
          borderRadius: 5,
        }],
      },
      plugins: [centerLabel],
      options: {
        cutout: "78%",
        maintainAspectRatio: false,
        responsive: true,
        animation: window.matchMedia("(prefers-reduced-motion: reduce)").matches
          ? false
          : { duration: 700, easing: "easeOutQuart" },
        plugins: {
          legend: {
            position: "bottom",
            labels: { usePointStyle: true, pointStyle: "circle", boxWidth: 7, boxHeight: 7, padding: 18, font: chartFont },
          },
          tooltip: {
            backgroundColor: "#173c3d",
            padding: 11,
            titleFont: { ...chartFont, weight: "700" },
            bodyFont: chartFont,
            usePointStyle: true,
          },
        },
      },
    });
  }
}
