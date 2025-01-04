# ✨ Inventory Management System

A robust Inventory Management System built with **Laravel 10** and **MySQL**, designed to streamline your inventory tracking, sales, and purchasing processes.

![Dashboard](https://github.com/user-attachments/assets/1df45f1d-aaed-4299-9b90-35e7f47dc7ea)

## 🗂️ Database Design
The system is structured using a clear and efficient database schema:


## 🚀 Quick Start


1. **Install PHP dependencies:**

    ```bash
    composer install
    ```

2. **Copy `.env` configuration:**

    ```bash
    cp .env.example .env
    ```

3. **Generate application key:**

    ```bash
    php artisan key:generate
    ```

4. **Configure the database in the `.env` file** with your local credentials.

5. **Run database migrations and seed sample data:**

    ```bash
    php artisan migrate:fresh --seed
    ```

6. **Install JavaScript and CSS dependencies:**

    ```bash
    npm install && npm run dev
    ```

7.  **Start the Laravel development server:**

    ```bash
    php artisan serve
    ```

8.  **Login using the default admin credentials:**

    - **Email:** `admin@admin.com`
    - **Password:** `password`


## 📄 License

Licensed under the [MIT License](LICENSE).
