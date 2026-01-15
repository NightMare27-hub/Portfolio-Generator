# 🚀 Dynamic Full-Stack Portfolio & CMS Dashboard

A professional, database-driven portfolio system that empowers developers to manage their online presence through a private administrative dashboard.


## ✨ Advanced Features
* **Secure CMS Dashboard:** A private area to manage "Personal Details," "Skills," and "Career History".
* **Dynamic Content Injection:** Public pages (`index.php`, `light.php`) automatically fetch and display the latest data from MySQL.
* **Session-Based Authentication:** Protected routes ensure that only logged-in users can access the dashboard.
* **Interactive UI/UX:** Features a glassmorphism-inspired sidebar that expands on hover and sticky navigation.
* **Multi-Theme Architecture:** Seamlessly toggle between Light and Dark modes with dedicated CSS frameworks.
* **Database Synchronization:** Implemented `UPDATE` queries that refresh content across all pages instantly.

## 🛠️ Technical Stack
* **Frontend:** HTML5, CSS3 (Flexbox & Grid), JavaScript, FontAwesome, BoxIcons.
* **Backend:** PHP (Session management & POST processing).
* **Database:** MySQL (Relational storage for user profiles and credentials).
* **Assets:** Custom-curated backgrounds for distinct visual sections.

## 📂 Project Navigation
* `dashboard.php`: The control panel for updating profile info, skills, and career data.
* `index.php` / `light.php`: The public portfolio pages rendered with PHP.
* `database.php`: Centralized MySQLi connection module.
* `style.css` / `ggg.css`: Core layout and interactive sidebar styling.

## 🚀 Installation
1. **Database Setup:** * Import the SQL schema into your MySQL environment.
   * Ensure your database is named `portfolio` as configured in `database.php`.
2. **Local Server:** * Host the files on a local server like XAMPP or WAMP.
3. **Authentication:** * Use `Register.php` to create your admin account and `login.php` to access the CMS.

