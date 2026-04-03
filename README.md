# registration
# Student Registration Portal

A modern, responsive web application for student registration built with HTML, CSS, PHP, and MySQL. This project features a sleek design, dynamic interactions, and a functional backend for data management.

## 🚀 Features

- **User Registration**: A clean form for capturing student names and identification numbers.
- **Dynamic UI**: Uses modern CSS techniques including linear gradients, flexbox layouts, and custom fonts for a premium look.
- **Real-time Clock**: A JavaScript-powered live time display in the header.
- **Feedback System**: Instant visual feedback (Success/Failure alerts) based on form submission results.
- **Social Integration**: Footer links to developer's GitHub, Instagram, and Discord profiles.
- **Backend Logic**: PHP scripts for processing data and interfacing with a MySQL database.

## 🛠️ Technologies Used

- **Frontend**: 
  - HTML5 & CSS3
  - JavaScript (ES6+)
  - Font Awesome (Icons)
- **Backend**: 
  - PHP
- **Database**: 
  - MySQL

## 📋 Prerequisites

To run this project locally, you will need:
- A local web server (like Apache) via **XAMPP**, **WAMP**, or **MAMP**.
- PHP 7.4 or higher.
- MySQL/MariaDB database.

## 🔧 Installation & Setup

1. **Clone the Repository**:
   ```bash
   git clone https://github.com/[your-username]/[your-repo-name].git
   ```

2. **Database Configuration**:
   - Open your MySQL management tool (e.g., phpMyAdmin).
   - Create a database named `student_db`.
   - Create a table named `student_details` with the following columns:
     ```sql
     CREATE TABLE student_details (
         name VARCHAR(255),
         pin INT
     );
     ```

3. **Configure Connection**:
   - Ensure the connection details in `server.php` match your local database settings (Host: `127.0.0.1`, User: `root`, Password: ``, DB: `student_db`).

4. **Deploy**:
   - Move the project folder to your server's root directory (e.g., `htdocs` for XAMPP).
   - Access the application via `http://localhost/[your-folder-name]/registration.html`.

## 📂 Project Structure

- `registration.html`: The main user interface for the registration form.
- `style.css`: Modern styling for the portal.
- `server.php`: Handles database insertion and redirection.
- `test_server2.php`: A testing script for form validation without a database.

## 👤 Author

Developed by **Savio**.

---
*Connect with me:*
- [GitHub](https://github.com/savioseelam310-prog)
- [Instagram](https://www.instagram.com/s_a_v_i_o_7121/)
- [Discord](https://discord.com/channels/@me)
