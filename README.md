# Student Registration Portal

A simple front-end student registration form built with **HTML, CSS, and PHP**, featuring a live clock, gradient UI styling, and success/failure feedback messages.

## 🖼️ Features

- Clean registration form for student **name** and **pin number**
- Live-updating clock displayed at the top of the page
- Success/failure feedback messages based on server response (via URL query params)
- Responsive footer with social links (GitHub, Instagram, Discord)
- Two backend options for handling form submissions:
  - `server.php` — connects to a MySQL database (`student_db`) and inserts student records
  - `test_server2.php` — a mock/test backend that doesn't require a database

## 📂 Project Structure

```
├── index.html          # Registration form UI
├── style.css            # Styling for the form, layout, and footer
├── server.php           # Production backend — inserts data into MySQL
└── test_server2.php     # Test backend — no database required
```

## 🚀 Getting Started

### Prerequisites

- [XAMPP](https://www.apachefriends.org/) / [WAMP](https://www.wampserver.com/) / [MAMP](https://www.mamp.info/) or any local server with PHP support
- MySQL (only required if using `server.php`)

### Setup

1. Clone this repository into your local server's web root (e.g. `htdocs` for XAMPP):
   ```bash
   git clone https://github.com/savioseelam310-prog/<repo-name>.git
   ```
2. Start Apache (and MySQL, if using `server.php`) from your local server control panel.
3. Open the project in your browser, e.g.:
   ```
   http://localhost/<repo-name>/index.html
   ```

### Using the Test Backend (no database needed)

By default, `index.html` submits to `test_server2.php`, which is meant for quick testing without setting up a database.

> **Note:** Enter `pass` as the **name** field to simulate a successful registration. Any other value will simulate a failure.

### Using the Production Backend (MySQL)

To use `server.php` instead:

1. Update the form's `action` attribute in `index.html`:
   ```html
   <form action="server.php" method="post">
   ```
2. Create the database and table in MySQL:
   ```sql
   CREATE DATABASE student_db;

   USE student_db;

   CREATE TABLE student_details (
       name VARCHAR(100),
       pin INT
   );
   ```
3. Update the MySQL connection credentials in `server.php` if needed (default: `host=127.0.0.1`, `user=root`, no password).

## ⚠️ Known Issues / TODO

- [ ] `server.php` uses raw string concatenation in the SQL query — should be updated to use **prepared statements** to prevent SQL injection.
- [ ] Form validation (e.g. required fields, pin format) is not yet implemented on the client side.
- [ ] `action.js` is referenced in `index.html` but not included in the project.
- [ ] Minor typos in labels (`STUSENT` → `STUDENT`) and feedback text (`Sucessfully` → `Successfully`).

## 🛠️ Built With

- HTML5
- CSS3
- PHP
- MySQL (optional)
- [Font Awesome](https://fontawesome.com/) for social icons

## 👤 Author

**Savio**
- GitHub: [@savioseelam310-prog](https://github.com/savioseelam310-prog)
- Instagram: [@s_a_v_i_o_7121](https://www.instagram.com/s_a_v_i_o_7121/)

## 📄 License

This project is open source and available for personal or educational use.
