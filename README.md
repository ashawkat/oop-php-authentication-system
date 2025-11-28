# OOP PHP Authentication System

A robust, object-oriented PHP authentication system featuring user registration, login, and session management. Recently modernized with a sleek UI and improved security practices.

## Features

-   **Object-Oriented Design**: Built using PHP classes for modularity and maintainability.
-   **Secure Authentication**:
    -   User Registration and Login.
    -   Session Management.
    -   Password Hashing (MD5 - *Note: Consider upgrading to `password_hash` for production*).
-   **Modern UI**:
    -   **Bootstrap 5**: Utilizes the latest Bootstrap 5 via CDN for responsive design.
    -   **Custom Typography**: Uses 'Plus Jakarta Sans' for a modern, clean look.
    -   **Enhanced UX**: Floating labels, card-based layouts, and smooth transitions.
-   **Client-Side Validation**:
    -   Real-time form validation using vanilla JavaScript.
    -   User-friendly error messages (no annoying alerts).
    -   Email format and password strength checks.

## Requirements

-   PHP 8.0 or higher.
-   MySQL Database.
-   Web Server (Apache/Nginx) or PHP built-in server.

## Installation & Setup

1.  **Clone the Repository**
    ```bash
    git clone <repository-url>
    cd oop-php-authentication-system
    ```

2.  **Database Setup**
    -   Create a new MySQL database named `oop_log_mod`.
    -   Import the provided SQL file:
        ```bash
        mysql -u root -p oop_log_mod < users.sql
        ```

3.  **Configuration**
    -   Open `include/db_config.php`.
    -   Update the database credentials to match your environment.
    -   **For MAMP Users**:
        ```php
        define('DB_PASSWORD', 'root'); // Default MAMP password
        // ...
        $this->connection = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE, 8889, '/Applications/MAMP/tmp/mysql/mysql.sock');
        ```

4.  **Run the Application**
    -   **Using PHP Built-in Server**:
        ```bash
        php -S localhost:8000
        ```
        Access at: `http://localhost:8888/login.php`
    -   **Using MAMP/XAMPP**:
        Place the folder in `htdocs` and access via your local server URL (e.g., `http://localhost:8888/oop-php-authentication-system/login.php`).

## Folder Structure

-   `assets/`: CSS and JavaScript files.
    -   `css/style.css`: Custom styles and overrides.
    -   `js/script.js`: Form validation logic.
-   `include/`: PHP classes and partials.
    -   `class.user.php`: Core user logic.
    -   `db_config.php`: Database connection settings.
    -   `header.php` & `footer.php`: Shared layout files.
-   `login.php`: User login page.
-   `registration.php`: User registration page.
-   `home.php`: Protected dashboard page.

## Credits

Original tutorial by [Adnan for W3Programmers](https://www.w3programmers.com/login-and-registration-using-oop/).
Refactored and modernized by [Adnan](https://adnanshawkat.me).
