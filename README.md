<p align="center">
  <a href="https://laravel.com" target="_blank">
    <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/laravel-logolockup-cmyk-red.svg" alt="Laravel Logo" width="200">
  </a>
</p>

<h1 align="center">AIOVerse - Course Creation Platform</h1>
<p align="center">
  <em>A dynamic and modern course creation platform, built for the future of online learning.</em>
</p>

## ✨ Features

-   🎨 **Dynamic Course Creation:** An intuitive form for creating courses with titles, descriptions, categories, and feature video uploads.
-   📚 **Nested Modules & Content:** Dynamically add an unlimited number of modules to each course, and within each module, add multiple types of content (text, links).
-   ⚡ **AJAX-Powered Interface:** A smooth, single-page application experience without page reloads during form submission, providing instant feedback to the user.
-   🔍 **Detailed Course Views:** Click on any course in the list to see a dedicated page with all its modules and content laid out clearly.
-   🎯 **Robust Data Integrity:** Utilizes database transactions to ensure that data is saved correctly and completely, preventing orphaned records on submission failure.
-   🛡️ **Comprehensive Validation:** Dual-layer validation on both the frontend and backend to ensure data quality and security.
-   📱 **Fully Responsive Design:** A futuristic "glassmorphism" design with smooth animations and hover effects that adapts beautifully to any screen size.
-   🗂️ **File Upload Handling:** Securely handles feature video uploads, storing them efficiently and linking them to the correct course.

## 🛠️ Tech Stack

*Note: The logos below are from [Devicons](https://devicons.dev/), a great resource for high-quality project logos.*

<p align="center">
    <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/php/php/php-original.svg" alt="PHP" width="60" title="PHP">
    <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/mysql/mysql/mysql-original-wordmark.svg" alt="MySQL" width="60" title="MySQL">
    <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/javascript/javascript-original.svg" alt="JavaScript" width="60" title="JavaScript">
    <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/jquery/jquery/jquery-original-wordmark.svg" alt="jQuery" width="60" title="jQuery">
    <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/html5/html5-original-wordmark.svg" alt="HTML5" width="60" title="HTML5">
    <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/css3/css3-original-wordmark.svg" alt="CSS3" width="60" title="CSS3">
    <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/tailwindcss/tailwindcss-original-wordmark.svg" alt="Tailwind CSS" width="60" title="Tailwind CSS">
</p>

*   **Backend:** `Laravel 12.x`
*   **Frontend:** `Blade`, `HTML5`, `CSS3`, `JavaScript`, `jQuery`
*   **Database:** `MySQL`
*   **Styling:** `Tailwind CSS`
*   **Icons:** `Font Awesome`

## 🚀 Getting Started

Follow these instructions to get a copy of the project up and running on your local machine.

### Prerequisites

-   PHP >= 8.2
-   Composer
-   MySQL
-   Node.js & NPM (for asset compilation if needed)

### Installation

1.  **Clone the repository**
    ```bash
    git clone <your-repo-url>
    cd course-builder
    ```

2.  **Install PHP Dependencies**
    ```bash
    composer install
    ```

3.  **Environment Configuration**
    ```bash
    cp .env.example .env
    php artisan key:generate
    ```
    Configure your database credentials in the `.env` file.

4.  **Run Database Migrations**
    ```bash
    php artisan migrate
    ```

5.  **Link Storage Directory**
    ```bash
    php artisan storage: link
    ```

6.  **Run the Application**
    ```bash
    php artisan serve
    ```
    Navigate to `http://127.0.0.1:8000` in your browser.

## 📸 Application Screenshots

### Create Course Page
<p align="center">
  <img src="docs/images/1-create-course.png" alt="Create Course Page Screenshot" width="800">
</p>

### All Courses Page
<p align="center">
  <img src="docs/images/2-all-courses.png" alt="All Courses Page Screenshot" width="800">
</p>

### Course Details Page
<p align="center">
  <img src="docs/images/3-course-details.png" alt="Course Details Page Screenshot" width="800">
</p>

## 🧭 Project Structure & Design Patterns

This project is structured following Laravel best practices to ensure maintainability and scalability.

-   **Model-   View-Controller (MVC):** The application logic is cleanly separated into Models (`Course`, `Module`, `Content`), Controllers (`CourseController`), and Views (`.blade.php` files).
-   **Form Request Validation:** A dedicated `StoreCourseRequest` class handles all validation logic, keeping the controller clean and focused.
-   **Database Transactions:** The `store` method is wrapped in a database transaction to guarantee atomicity when creating a course with its related modules and contents.
-   **Eager Loading:** The `index` and `show` methods use `with()` to prevent N+1 query problems when fetching related data.

## 📄 License

This project is open-sourced software licensed under the [MIT license](https://choosealicense.com/licenses/MIT/).

---