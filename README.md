<p align="center">
  <a href="https://laravel.com" target="_blank">
    <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/laravel-logolockup-cmyk-red.svg" alt="Laravel Logo" width="200">
  </a>
</p>

<h1 align="center">AIOVerse - Course Creation Platform</h1>

<p align="center">
  <em>A modern web application for creating and managing online courses — featuring a clean "glassmorphism" UI, dynamic content structure, and seamless user experience.</em>
</p>

---

## ✨ Features

- 🎨 **Dynamic Course Creation:** Create courses with titles, descriptions, categories, and feature video uploads.
- 📚 **Nested Modules & Content:** Add unlimited modules and multiple types of content (text, links) per course.
- ⚡ **Course Views:** Browse all courses and view details with modules and contents displayed clearly.
- 🛡️ **Robust Validation:** Backend validation via Laravel Form Requests.
- 🎯 **Data Integrity:** Database transactions ensure consistent data saving.
- 📱 **Responsive Design:** Futuristic glassmorphism UI built with Tailwind CSS.
- 🗂️ **File Uploads:** Secure handling of video uploads.

---

## 🛠️ Tech Stack

<p align="center">
  <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/php/php-original.svg" alt="PHP" width="50" title="PHP">
  <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/mysql/mysql-original-wordmark.svg" alt="MySQL" width="60" title="MySQL">
  <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/html5/html5-original-wordmark.svg" alt="HTML5" width="60" title="HTML5">
  <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/css3/css3-original-wordmark.svg" alt="CSS3" width="60" title="CSS3">
  <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/tailwindcss/tailwindcss-original-wordmark.svg" alt="Tailwind CSS" width="60" title="Tailwind CSS">
  <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/javascript/javascript-original.svg" alt="JavaScript" width="50" title="JavaScript">
  <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/jquery/jquery-original-wordmark.svg" alt="jQuery" width="60" title="jQuery">
</p>

- **Backend:** Laravel 12.x  
- **Frontend:** Blade, HTML5, CSS3, JavaScript, jQuery  
- **Database:** MySQL  
- **Styling:** Tailwind CSS  
- **Icons:** Font Awesome  

---

## 🚀 Getting Started

Follow these steps to set up the project locally.

### Prerequisites
- PHP >= 8.2  
- Composer  
- MySQL  
- Node.js & NPM  

### Installation

1. **Clone the repository**
   ```bash
   git clone https://github.com/AION-2000/Course_Builder_AIOVerse.git
   cd course-builder
Install dependencies

bash
Copy code
composer install
Set up environment

bash
Copy code
cp .env.example .env
php artisan key:generate
Update .env with your database credentials.

Run migrations

bash
Copy code
php artisan migrate
Link storage

bash
Copy code
php artisan storage:link
Run the app

bash
Copy code
php artisan serve
Visit: http://127.0.0.1:8000

📸 Screenshots
Create Course Page
<p align="center"> <img src="docs/1-create-course.png" alt="Create Course Page" width="800"> </p>
All Courses Page
<p align="center"> <img src="docs/2-all-courses.png" alt="All Courses Page" width="800"> </p>
Course Details Page
<p align="center"> <img src="docs/3-course-details.png" alt="Course Details Page" width="800"> </p>
🧭 Project Structure
Follows Laravel’s MVC (Model–View–Controller) architecture:

Models: Course, Module, Content

Controllers: Manage CRUD logic and relationships

Views: Blade templates for UI

📜 License
This project is open-sourced under the MIT License.

<p align="center">Built with ❤️ using Laravel & Tailwind CSS</p> ```
