# AIOVerse - Course Creation Platform

<p align="center">
  <a href="https://laravel.com" target="_blank">
    <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" alt="Laravel Logo" width="200">
  </a>
</p>

<p align="center">
  <em>A dynamic, modern web application for creating and managing online courses. Built as a submission for a Laravel interview task, this project showcases full-stack web development skills with a sleek "glassmorphism" UI and seamless user experience.</em>
</p>

<p align="center">
  <a href="https://github.com/AION-2000/Course_Builder_AIOVerse"><strong>Explore the Repository »</strong></a>
  <br>
  <a href="https://github.com/AION-2000/Course_Builder_AIOVerse/issues">Report Bug</a> · 
  <a href="https://github.com/AION-2000/Course_Builder_AIOVerse/pulls">Request Feature</a>
</p>

## ✨ Features

- 🎨 **Dynamic Course Creation**: Intuitive form to create courses with titles, descriptions, categories, and feature video uploads.
- 📚 **Nested Modules & Content**: Add unlimited modules and content items to each course dynamically.
- ⚡ **AJAX-Powered Interface**: Smooth, single-page application experience with no page reloads during form submissions.
- 🔍 **Detailed Course Views**: Dedicated course pages displaying all modules and content in a clear layout.
- 🛡️ **Robust Data Integrity**: Database transactions ensure reliable and complete data saving.
- ✅ **Comprehensive Validation**: Dual-layer validation on both frontend and backend for data accuracy.
- 📱 **Fully Responsive Design**: Futuristic "glassmorphism" design with smooth animations and hover effects.
- 🗂️ **Secure File Uploads**: Efficiently handles feature video uploads, securely stored and linked to courses.

## 🛠️ Tech Stack

*Note: Logos sourced from [Devicons](https://devicons.dev/).*

<p align="center">
  <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/php/php-original.svg" alt="PHP" width="60" title="PHP">
  <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/mysql/mysql-original-wordmark.svg" alt="MySQL" width="60" title="MySQL">
  <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/javascript/javascript-original.svg" alt="JavaScript" width="60" title="JavaScript">
  <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/jquery/jquery-original-wordmark.svg" alt="jQuery" width="60" title="jQuery">
  <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/html5/html5-original-wordmark.svg" alt="HTML5" width="60" title="HTML5">
  <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/tailwindcss/tailwindcss-original-wordmark.svg" alt="Tailwind CSS" width="60" title="Tailwind CSS">
</p>

- **Backend**: Laravel 12.x
- **Frontend**: Blade, HTML5, CSS3, JavaScript, jQuery
- **Database**: MySQL
- **Styling**: Tailwind CSS
- **Icons**: Font Awesome

## 🚀 Getting Started

Follow these steps to set up and run the project on your local machine.

### Prerequisites

- PHP >= 8.2
- Composer
- MySQL
- Node.js & NPM (for asset compilation)

### Installation

1. **Clone the Repository**

   ```bash
   git clone https://github.com/AION-2000/Course_Builder_AIOVerse.git
   cd Course_Builder_AIOVerse
   composer install

   Configure Environment
bashcp .env.example .env
php artisan key:generate
Update the .env file with your database credentials.


Run Database Migrations
bashphp artisan migrate


Link Storage Directory
bashphp artisan storage:link


Start the Application
bashphp artisan serve
Visit http://127.0.0.1:8000 in your browser.


📸 Screenshots
Create Course Page

  <img src="docs/images/1-create-course.png" alt="Create Course Page Screenshot" width="800">

All Courses Page

  <img src="docs/images/2-all-courses.png" alt="All Courses Page Screenshot" width="800">

Course Details Page

  <img src="docs/images/3-course-details.png" alt="Course Details Page Screenshot" width="800">

Note: Replace docs/images/ with the actual path to your screenshots in the repository.
🧭 Project Structure & Design Patterns
The project follows Laravel best practices for maintainability and scalability:

Model-View-Controller (MVC): Clean separation of application logic into Models (Course, Module, Content), Views (Blade templates), and Controllers.
Repository Pattern (optional, if implemented): Enhances data access abstraction.
Form Request Validation: Ensures robust input validation on the backend.
AJAX for Dynamic Interactions: Provides a seamless user experience.
Database Transactions: Guarantees data integrity during complex operations.

📄 License
This project is licensed under the MIT License.
