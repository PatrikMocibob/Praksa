[README (1).md](https://github.com/user-attachments/files/27735445/README.1.md)
# 👁️ R.E.P.O. Wiki

A multi-page fan wiki and game guide website for **R.E.P.O.** — an online co-op horror game featuring physics-based gameplay, proximity voice chat, and terrifying monsters. The site covers game mechanics, enemy guides, map information, and purchasable items, built with PHP and Bootstrap.

---

## Overview

The R.E.P.O. Wiki gives players a comprehensive reference for the game. Visitors can browse detailed enemy profiles across three difficulty levels, explore map locations with images and secrets, and look up every purchasable item from the Service Station — complete with sortable tables for medkits, upgrades, and weapons. The site uses a shared header/footer structure for consistent navigation across all pages.

---

## Features

- **Enemy guides across 3 difficulty levels:**
  - **Level 1** — Peeper, Shadow Child, Gnome, Apex Predator (Duck), Spewer
  - **Level 2** — mid-tier enemies with expanded tactics
  - **Level 3** — high-threat enemies and boss-tier encounters
- **Map pages** — detailed location breakdowns with screenshots, secrets, and tips
  - Service Station, McJannek Station, Headman's Manor, Disposal Arena
- **Service Station item database** — sortable tables for:
  - Medkits (Small / Medium / Large Health Pack with heal amounts and price ranges)
  - Upgrades (Stamina, Sprint Speed, Extra Jump, Grab Strength, and more)
  - Weapons (Grenades, Mines, Melee, Firearms — 18 items with prices and descriptions)
- **Contact page** — form with email submission via `submit_contact.php`
- **Image lightbox modals** — click any screenshot to enlarge it
- **Responsive design** — Bootstrap 4 grid with mobile sort buttons on all tables
- **Reusable components** — shared `header.php` and `footer.php` across all pages

---

## Tech Stack

| Layer      | Technology                                          |
| ---------- | --------------------------------------------------- |
| Frontend   | HTML, CSS, Bootstrap 4, Font Awesome 6, Orbitron font (Google Fonts) |
| Backend    | PHP (server-side includes, form handling)           |
| Scripting  | Vanilla JavaScript (table sorting, modal images)    |
| Assets     | Local images (`/slike`) organized by map and enemy  |

---

## Project Structure

```
/
├── index.php               # Landing page — game overview with video and image gallery
├── header.php              # Shared navigation bar (included on every page)
├── footer.php              # Shared footer (included on every page)
├── styles.css              # Custom styles (dark theme, repo-table, image-hover, etc.)
│
├── ServiceStation.php      # Map page — item shop with sortable medkit, upgrade & weapon tables
├── mcjannek_station.php    # Map page — McJannek Station guide
├── headman_manor.php       # Map page — Headman's Manor guide
├── disposal_arena.php      # Map page — Disposal Arena guide
│
├── enemieslvl1.php         # Enemy guide — Level 1 enemies
├── enemieslvl2.php         # Enemy guide — Level 2 enemies
├── enemieslvl3.php         # Enemy guide — Level 3 enemies
│
├── contact.php             # Contact form page
├── submit_contact.php      # Contact form submission handler
│
└── slike/                  # All site images
    ├── Maps/
    │   └── service_station/    # Service Station screenshots
    └── Enemies/
        ├── lvl1/               # Level 1 enemy images
        ├── lvl2/               # Level 2 enemy images
        └── lvl3/               # Level 3 enemy images
```

---

## Page Descriptions

### `index.php` — Home
Landing page introducing the game. Includes an embedded gameplay video (`repo.webm`), a 6-image screenshot grid with lightbox modal, and a "Get the Game Now" button linking to the Steam store page.

### `ServiceStation.php` — Service Station Map
Covers the Service Station map with an overview image, a secret room guide, and three sortable data tables (medkits, upgrades, weapons). Table columns are sortable by name and price with tri-state toggle (original → ascending → descending).

### `enemieslvl1.php` / `enemieslvl2.php` / `enemieslvl3.php` — Enemy Guides
Each page lists the enemies found at that difficulty tier. Every enemy has a photo, HP value, behaviour description, and tactical tips for dealing with them. Images open in a lightbox modal on click.

### `contact.php` + `submit_contact.php` — Contact
A contact form for user feedback or questions. Submission is handled server-side by `submit_contact.php`.

---

## Running Locally

### Prerequisites

- PHP 7.4+ (or any modern version)
- A local web server — [XAMPP](https://www.apachefriends.org/), [MAMP](https://www.mamp.info/), or PHP's built-in server

### Steps

```bash
# Clone the repository
git clone https://github.com/PatrikMocibob/Praksa.git
cd Praksa

# Option A — PHP built-in server
php -S localhost:8000

# Option B — place the folder in your XAMPP/MAMP htdocs directory
# then visit http://localhost/Praksa/
```

Open `http://localhost:8000` (or your configured address) in a browser and navigate to `index.php`.

---

## Notes

- All images are stored locally under `/slike` and are not tracked via a CDN — ensure the folder is present after cloning.
- The contact form (`submit_contact.php`) may require additional server-side configuration (e.g. `mail()` setup or SMTP) to send emails in a production environment.
- The site uses Bootstrap 4 via CDN — an internet connection is required to load styles and scripts unless you serve them locally.
- Game content (enemy names, item stats, prices) reflects R.E.P.O.'s Early Access state and may become outdated as the game updates.
