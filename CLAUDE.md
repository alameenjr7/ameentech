# CLAUDE.md — AmeenTech Codebase Guide

This file provides context and conventions for AI assistants (Claude and others) working on this repository.

---

## Project Overview

**AmeenTech** is a Laravel 9 web application for a technology company. It has two distinct interfaces:

- **Public frontend** — showcases services, projects (realizations), blog posts (publications), and client testimonials, with contact and subscription forms.
- **Admin backend** — authenticated CRUD panel for managing all content.

---

## Technology Stack

| Layer | Technology |
|---|---|
| Language | PHP 8.0.2+ |
| Framework | Laravel 9.2 |
| Database | MySQL (`ameentech` database) |
| Frontend CSS | Bootstrap 5.1.3 + Sass |
| Frontend JS | Axios, Lodash, Popper.js |
| Asset build | Laravel Mix 6 (Webpack wrapper) |
| Auth | Laravel built-in + Laravel Sanctum (API tokens) |
| File manager | unisharp/laravel-filemanager 2.4 |
| WYSIWYG editor | Summernote (loaded via CDN/vendor assets) |
| Testing | PHPUnit 9.5 |
| Linting | StyleCI (PHP Laravel preset) + StandardJS |

---

## Directory Structure

```
app/
  Console/            Artisan commands
  Exceptions/         Exception handlers
  Filesystem/         File system utilities
  Http/
    Controllers/
      Auth/           Login, register, password reset
      Backend/        Admin panel controllers (19 controllers)
      Frontend/       Public-facing controllers (8 controllers)
    Middleware/       HTTP middleware
    Kernel.php        Middleware registration
  Models/             16 Eloquent models
  Providers/          Service providers
  helpers.php         Global helper functions

config/               16 config files (app, auth, database, lfm, etc.)

database/
  factories/          Model factories for testing
  migrations/         21 migrations (all created March–April 2022)
  seeders/            Database seeders

public/
  backend/            Admin static assets
  frontend/           Public static assets
  vendor/             Third-party assets (Summernote, Laravel FileManager)
  css/                Compiled CSS output
  js/                 Compiled JS output

resources/
  css/                Source CSS (app.css)
  js/                 Source JS (app.js, bootstrap.js)
  sass/               SCSS source files
  views/
    auth/             Authentication views
    backend/          Admin panel Blade views
    frontend/         Public Blade views
    layouts/          Shared layout templates
    vendor/           Vendor view overrides (pagination)

routes/
  web.php             Root loader — includes frontend.php + backend.php
  frontend.php        All public routes
  backend.php         All admin routes (prefix: /admin, middleware: auth)
  api.php             API routes (Laravel Sanctum)
  channels.php        Broadcasting channels
  console.php         Artisan console routes

tests/
  Feature/            Feature tests
  Unit/               Unit tests
```

---

## Models

All models live in `app/Models/`. Key models and their primary fields:

| Model | Table | Notable Fields |
|---|---|---|
| `User` | `users` | prenom, nom, photo, email, password |
| `Banner` | `banners` | title, subtitle, description, photo, status |
| `Category` | `categories` | title, slug, description, is_parent, parent_id |
| `Language` | `languages` | title, url, photo, is_language, framework_id |
| `Service` | `services` | title, slug, photo, icon, description |
| `Realisation` | `realisations` | title, photo, content, category, language, client, status, condition |
| `Publication` | `publications` | title, slug, content, category, language, photo, status |
| `About` | `abouts` | photo, title, description |
| `Client` | `clients` | name, email, position, rate, feedback, social URLs |
| `Message` | `messages` | full_name, email, telephone, subject, message |
| `Mailing` | `mailings` | email |
| `Question` | `questions` | full_name, email, question, response, status |
| `Project` | `projects` | fullname, email, telephone, residence, project, budget, needs |
| `PublicationReview` | `publication_reviews` | rate, name, email, review, status |
| `RealisationReview` | `realisation_reviews` | rate, name, email, review, status |
| `Setting` | `settings` | 40+ fields for branding, contact info, social URLs, maps |

`Category` and `Language` both support hierarchical structures via `parent_id` / `framework_id` self-referencing foreign keys.

---

## Routes

### Frontend (public, no auth)
| Method | URI | Description |
|---|---|---|
| GET | `/` | Homepage |
| GET | `/apropos` | About page |
| GET | `/publication` | Blog listing |
| GET | `/publication-detail/{slug}` | Blog post detail |
| POST | `/publication-filter` | Filter publications |
| GET | `/auto-recherch` | Auto-complete search |
| GET | `/recherche` | Full search |
| POST | `/publication-review/{slug}` | Submit review |
| GET | `/realisation` | Projects listing |
| GET | `/contact` | Contact page |
| POST | `/message-contact` | Submit contact message |
| POST | `/mail-contact` | Subscribe to mailing list |
| GET | `/service` | Services listing |
| POST | `/question-response` | Submit FAQ question |
| POST | `/projet-response` | Submit project request |

### Backend (prefix: `/admin`, middleware: `auth`)
All admin routes require authentication. Resource routes are generated for:
`banniere`, `langage`, `apropos`, `client`, `service`, `categorie`, `realisation`, `publication`

Each resource also has a status-toggle endpoint. Additional routes:
- `GET /admin/home` — Dashboard
- `GET /admin/rea-commentaires` / `GET /admin/pub-commentaires` — Review moderation
- `GET /admin/parametre` + `PUT /admin/parametre` — Site settings

### File Manager
- `/laravel-filemanager/*` — Authenticated file browsing/upload (unisharp/laravel-filemanager)

---

## Helper Functions

Defined in `app/helpers.php`:

```php
get_setting($key)   // Reads a field from the settings table row
short_string($str)  // Truncates string to 10 characters
```

Use `get_setting()` in views and controllers to access site-wide configuration (logo, address, phone, social links, etc.) instead of directly querying the `Setting` model.

---

## Key Conventions

### PHP / Laravel
- **4-space indentation** (enforced by `.editorconfig`)
- **LF line endings** for all files
- Controllers follow **resource controller** conventions where applicable (`index`, `create`, `store`, `show`, `edit`, `update`, `destroy`)
- The `HomeController` redirects authenticated users to `/admin/home`
- `RouteServiceProvider::HOME` is set to `'admin/home'`
- Blade views use the standard Laravel template inheritance with `@extends` and `@section`
- Backend views live under `resources/views/backend/`, frontend views under `resources/views/frontend/`
- Status fields on models (`Banner`, `Realisation`, `Publication`, reviews) are toggled via dedicated POST endpoints, not the full update route

### JavaScript / CSS
- **StandardJS** is used for JS linting (no semicolons, 2-space indent in JS)
- **Bootstrap 5** classes throughout all Blade templates
- JS entry point: `resources/js/app.js` → compiled to `public/js/app.js`
- SCSS entry point: `resources/sass/app.scss` → compiled to `public/css/app.css`
- Do **not** edit files in `public/css/` or `public/js/` directly — they are build artifacts

### Database
- All migrations follow the standard Laravel `up()` / `down()` pattern
- Use `php artisan migrate` to apply, `php artisan migrate:rollback` to revert
- Factories exist under `database/factories/` for use in tests
- The `settings` table always has a **single row** — use `Setting::first()` or `get_setting()`

---

## Development Workflow

### Initial Setup
```bash
composer install
cp .env.example .env
php artisan key:generate
# Configure DB credentials in .env
php artisan migrate
php artisan db:seed        # if seeders exist
npm install
npm run dev
php artisan serve
```

### Asset Compilation
```bash
npm run dev        # One-time development build
npm run watch      # Watch mode (rebuild on file change)
npm run prod       # Minified production build
```

### Running Tests
```bash
php artisan test
# or
./vendor/bin/phpunit
```

Tests require a configured MySQL database. The `phpunit.xml` uses the same `DB_CONNECTION=mysql` from `.env` (SQLite option is commented out).

### Common Artisan Commands
```bash
php artisan migrate               # Run pending migrations
php artisan migrate:fresh --seed  # Drop all tables and re-migrate+seed
php artisan cache:clear           # Clear application cache
php artisan view:clear            # Clear compiled Blade views
php artisan route:list            # List all routes
php artisan tinker                # Interactive REPL
php artisan storage:link          # Create public/storage symlink
```

---

## Environment Variables

Key variables in `.env` (see `.env.example` for all):

```dotenv
APP_NAME=AmeenTech
APP_ENV=local          # local | production
APP_DEBUG=true         # false in production
APP_URL=http://localhost

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=ameentech
DB_USERNAME=root
DB_PASSWORD=

MAIL_MAILER=smtp
MAIL_HOST=mailhog      # Use mailhog locally for email testing
MAIL_PORT=1025
MAIL_FROM_ADDRESS="hello@example.com"
```

---

## Code Quality / CI

- **StyleCI** (`.styleci.yml`) runs on push: PHP Laravel preset + JS + CSS checks
- Excluded from StyleCI: `index.php`, `webpack.mix.js`
- **4-space indentation** for PHP/Blade/HTML; **2-space** for YAML; **4-space** for JS (per StandardJS, overrides .editorconfig)
- Trailing whitespace is trimmed on save (enforced by `.editorconfig`)

---

## Common Pitfalls

1. **Don't edit compiled assets** — `public/css/app.css` and `public/js/app.js` are generated by Mix. Edit source files in `resources/` instead.
2. **Settings are a single row** — the `settings` table is designed to hold one configuration record. Never insert a second row.
3. **File uploads** — use the Laravel FileManager (`/laravel-filemanager`) for media. Config is in `config/lfm.php`.
4. **Authentication redirect** — `RouteServiceProvider::HOME` is `'admin/home'`, not the default `/home`. Adjust middleware/guards accordingly.
5. **Categories and Languages are hierarchical** — `Category` has `is_parent` + `parent_id`; `Language` has `is_language` + `framework_id`. Always filter on these flags when rendering parent/child lists.
6. **Review moderation** — `PublicationReview` and `RealisationReview` have a `status` field. Only show approved reviews on the frontend.
7. **Slugs** — `Publication`, `Category`, and `Service` use slugs for frontend URLs. Ensure slugs are unique and URL-safe when creating or updating records.
