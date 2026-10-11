# Beth Ammi website

The website uses shared PHP head, header, and footer includes for the live homepage, content pages, and posts, with a MySQL/MariaDB database for posts, team profiles, and parish information. The header login button opens a sign-in modal. A protected dashboard at `/admin/` lets administrators create, edit, publish, hide, and delete those records.

## Local setup with XAMPP

Requirements: PHP 8.1+, PDO MySQL, `mbstring`, `iconv`, and MySQL or MariaDB.

1. Start Apache and MySQL in the XAMPP Control Panel.
2. Create a database named `bethammi_redesign` in phpMyAdmin using `utf8mb4`.
3. Import [`database/schema.sql`](./database/schema.sql) into that database.
4. Copy `config/database.example.php` to `config/database.local.php`, then enter the local database settings. This local file is ignored by Git. For production, set the `DB_HOST`, `DB_PORT`, `DB_NAME`, `DB_USER`, and `DB_PASSWORD` environment variables instead.
5. From the project root, import the existing published posts once: `php tools/import-content.php`. The importer skips existing slugs and will not overwrite later admin edits.
6. Create the first dashboard account: `php tools/create-admin.php admin`. Enter a unique password of at least 12 characters when prompted.
7. Open `http://localhost/bethammi-redesign/` and manage content at `http://localhost/bethammi-redesign/admin/`. The live homepage and content routes use `index.php`, `page.php`, and `post.php`; the shared shell lives in `includes/site-head.php`, `includes/site-header.php`, and `includes/site-footer.php`.

Do not deploy `config/database.local.php`. Use a dedicated database user with only the permissions the site needs, and serve the admin area over HTTPS.

## Database content

- **Posts** store a title, URL slug, publication date, highlight image URL/path, short card summary, full plain-text description, and publication status. The homepage and News & Sermons archive query published posts; selecting a post opens its full description.
- **Team members** store name, title, photo URL/path, optional short bio, display order, and publication status. The Our Staff page lists published profiles.
- **Parishes** store name, country, region, location, photo URL/path, short summary, additional description, optional member count, display order, and publication status. The Our Parishes page lists published entries.

The import command populates posts from the included WordPress snapshot. Team profiles and parish records are managed in the dashboard and are not fabricated from the old page markup. Images can be provided as public `https://` URLs or site-relative paths such as `assets/images/photo.jpg`.

## Static preview

If the church's eventual host does not support PHP, run `npm run build` with Node.js 18+ and publish `dist/`. That is a static preview built from the included snapshot; database updates and the admin dashboard require PHP and MySQL/MariaDB.

Uploaded WordPress images, YouTube videos, and Google Fonts load from their original external services. Replace stock photography with approved church images before launch. Contact and giving details should be checked with the church before deployment.

Bootstrap 5.3.3 and Bootstrap Icons 1.11.3 are loaded from jsDelivr for the public site and admin controls; visitors need an internet connection to load those assets.
