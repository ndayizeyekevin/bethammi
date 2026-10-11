# Beth Ammi website redesign

This is a responsive static redesign of the Beth Ammi Christian Fellowship Church website. It includes the updated homepage and shared navigation, the published church pages, the news and sermon archive, and the existing donation information. The contact form prepares a message in WhatsApp for the visitor to review and send.

## Build and preview

Run `npm run build` with Node.js 18 or newer. The build creates a deployable `dist/` folder containing the homepage, one standalone HTML file per church page and story, shared assets, and the content snapshot. Page shells are generated from `page.html`, so shared layout changes only need to be made once.

To preview the generated site, serve `dist/` over HTTP—for example, place its contents under `C:\xampp\htdocs\bethammi-redesign` and open `http://localhost/bethammi-redesign/`. For deployment, publish the contents of `dist/` (or configure the hosting provider's publish directory as `dist`). This static output works on hosting that serves HTML, CSS, and JavaScript; it does not require PHP.

Use the shared navigation to open the church pages. The News & Sermons page lists all articles in the included content snapshot and has a client-side search. Pages are served at `pages/<slug>.html`; stories are served at `stories/<slug>.html`.

## Content and external services

`site-content.json` is a snapshot of the public WordPress pages and articles at `bethammicfc.org`, exported on October 11, 2026. The build generates independent page URLs from `page.html`; `page.js` loads the content snapshot for the requested slug. To refresh the snapshot, re-export the WordPress REST API page and post collections and their featured-media URLs into `site-content.json`, then run `npm run build`.

Uploaded WordPress images, YouTube videos, and Google Fonts load from their original external services. Replace stock photography with approved church images before launch. Contact and giving details should be checked with the church before deployment.
