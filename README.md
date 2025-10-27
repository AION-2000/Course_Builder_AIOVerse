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

---

## ✨ Features

- 🎨 **Dynamic Course Creation**: Intuitive form to create courses with titles, descriptions, categories, and feature video uploads.
- 📚 **Nested Modules & Content**: Add unlimited modules and content items to each course dynamically.
- ⚡ **AJAX-Powered Interface**: Smooth, single-page application experience with no page reloads during form submissions.
- 🔍 **Detailed Course Views**: Dedicated course pages displaying all modules and content in a clear layout.
- 🛡️ **Robust Data Integrity**: Database transactions ensure reliable and complete data saving.
- ✅ **Comprehensive Validation**: Dual-layer validation on both frontend and backend for data accuracy.
- 📱 **Fully Responsive Design**: Futuristic "glassmorphism" design with smooth animations and hover effects.
- 🗂️ **Secure File Uploads**: Efficiently handles feature video uploads, securely stored and linked to courses.

---

## 🛠️ Tech Stack


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

---

## 🚀 Getting Started

Follow these steps to set up and run the project on your local machine.

### ✅ Prerequisites

- PHP >= 8.2
- Composer
- MySQL
- Node.js & NPM (for asset compilation)

### 📌 Installation

1️⃣ **Clone the Repository**
```bash
git clone https://github.com/AION-2000/Course_Builder_AIOVerse.git
cd Course_Builder_AIOVerse
composer install

## ✅ Installation Guide 

2️⃣ **Configure Environment**
```bash
cp .env.example .env
php artisan key:generate
```
Update the `.env` file with your database credentials.

3️⃣ **Run Database Migrations**
```bash
php artisan migrate
```

4️⃣ **Link Storage Directory**
```bash
php artisan storage:link
```

5️⃣ **Start the Application**
```bash
php artisan serve
```

Now visit 👉 http://127.0.0.1:8000 🎉

---

## 📸 Screenshots

### Create Course Page
<img width="1920" height="913" alt="1-create-course" src="https://github.com/user-attachments/assets/86967d06-1065-427e-ab98-76f61c65f8d6" />


### All Courses Page
<img width="1920" height="912" alt="2-all-courses" src="https://github.com/user-attachments/assets/42f74822-eb8c-475f-9b65-00cd6b8da213" />


### Course Details Page
<img width="1914" height="912" alt="3-course-details" src="https://github.com/user-attachments/assets/438f2357-03f8-4adb-9680-9bcfde507406" />



---

## 🧭 Project Architecture (Clean List)

- MVC Structure: Clear separation of concerns  
- Form Request Validation: Secure & reliable backend validation  
- AJAX-based UX: Smooth and modern interaction  
- Database Transactions: Ensures integrity for multi-step operations  
- (Optional) Repository Pattern: Enhanced abstraction  

---

## 📄 License

This project is licensed under the **MIT License**.

---

## 📬 Contribute

---

<p align="center">
  <strong>👨‍💻 Developer — Shihab Shahriar Aion</strong><br>
  Full-Stack Web Developer (Laravel + Integrated Frontend) & Machine Learning Enthusiast<br>
  Based in Bangladesh
</p>

<p align="center">
  <a href="https://github.com/AION-2000" target="_blank">
    <img src="https://img.shields.io/badge/GitHub-181717?style=for-the-badge&logo=github&logoColor=white" alt="GitHub">
  </a>
  <a href="https://www.linkedin.com/in/aion-a1i2o3n4/" target="_blank">
    <img src="https://img.shields.io/badge/LinkedIn-0A66C2?style=for-the-badge&logo=linkedin&logoColor=white" alt="LinkedIn">
  </a>
  <a href="mailto:aionshihabshahriar@gmail.com" target="_blank">
    <img src="https://img.shields.io/badge/Email-D14836?style=for-the-badge&logo=gmail&logoColor=white" alt="Email">
  </a>
</p>

<p align="center">
  <img src="https://img.shields.io/badge/Built%20with%20❤️-using%20Laravel-blueviolet?style=for-the-badge" alt="Built with Laravel">
</p>

<p align="center">
⭐ If you like this project, please consider starring the repository!
</p>

