<p align="center">
  <a href="https://laravel.com" target="_blank">
    <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/laravel-logolockup-cmyk-red.svg" alt="Laravel Logo" width="200">
  </a>
</p>

<h1 align="center">AIOVerse - Course Creation Platform</h1>

<p align="center">
  <em>A dynamic and modern web application for creating and managing online courses. This project was built as a submission for a Laravel interview task. It demonstrates a full-stack understanding of web development, featuring a clean "glassmorphism" UI and a seamless user experience.
</p>

## ✨ Features

-   🎨 **Dynamic Course Creation:** An intuitive form for creating courses with titles, descriptions, categories, and feature video uploads.
-   📚 **Nested Modules & Content:** Dynamically add an unlimited number of modules and content items to each course.
-   ⚡� **AJAX-Powered Interface:** A smooth, single-page application experience without page reloads during form submission.
-   🔍 **Detailed Course Views:** Click on any course in the list to see a dedicated page with all its modules and content laid out clearly.
-   🎯 **Robust Data Integrity:** Uses database transactions to ensure data is saved correctly and completely.
-   🛡️ **Comprehensive Validation:** Dual-layer validation on both the frontend and backend.
-   📱 **Fully Responsive Design:** A futuristic "glassmorphism" design with smooth animations and hover effects.
-   🗂️ **File Uploads:** Securely handles feature video uploads, storing them efficiently and linking them to the correct course.

## 🛠️ Tech Stack

*Note: The logos below are from [Devicons](https://devicons.dev/).

<p align="center">
    <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/php/php/php-original.svg" alt="PHP" width="60" title="PHP">
    <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/mysql/mysql/mysql-original-wordmark.svg" alt="MySQL" width="60" title="MySQL">
    <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/javascript/javascript-original.svg" alt="JavaScript" width="60" title="JavaScript">
    <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/jquery/jquery-original-wordmark.svg" alt="jQuery" width="60" title="jQuery">
    <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/html5/html5-original-wordmark.svg" alt="HTML5" width="60" title="HTML5">
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
    git clone https://github.com/AION-2000/Course_Builder_AIOVerse.git
    cd course-builder
    composer install
    ```

2.  **Environment Configuration**
    ```bash
    cp .env.example .env
    php artisan key: generate
    ```
    Configure your database credentials in the `.env` file.

3.  **Run Database Migrations**
    ```bash
    php artisan migrate
    ```

4.  **Link Storage Directory**
    ```bash
    php artisan storage:link
    ```

5.  **Run the Application**
    ```bash
    php artisan serve
    ```
    Navigate to `http://127.0.0.1:8000` in your browser.

## 📸 Application Screenshots

### Create Course Page
<p align="center">
  <img src="https://correct-path/to/your/docs/images/1-create-course.png" alt="Create Course Page Screenshot" width="800">
</p>

### All Courses Page
<p align="center">
  <img src="https://correct-path/to/your/docs/images/2-all-courses.png" alt="All Courses Page Screenshot" width="800">
</p>

### Course Details Page
<p align="center">
  <img src="https://correct-path/to/your/docs/images/3-course-details.png"  alt="Course Details Page Screenshot" width="800">
</p>

## 🧭 Project Structure & Design Patterns

This project is structured following Laravel best practices to ensure maintainability and scalability.

-   **Model-View-Controller (MVC):** The application logic is cleanly separated into Models (`Course`, `https://raw.githubusercontent.com/laravel/docs/master/logo-lockup/5%20SVG/laravel-logolockup-cmyk-red.svg" alt="Laravel Logo" width="200">
</p>

## 📄 License

This project is open-sourced software licensed under the <strong>MIT License</strong>.

---

### What's Next?

1.  **Save the `README.md` file.**
2.  **Commit and Push:** Commit your final changes to GitHub.
3.  **Write the submission email.**

You are on the final step! Let me know when you have saved the `README.md` file. You are almost done! 🚀

---
</main>
</body>
</html>