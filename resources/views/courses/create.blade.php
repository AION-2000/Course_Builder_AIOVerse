<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AIOVerse - Create New Course</title>
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap');
        
        * {
            font-family: 'Inter', sans-serif;
        }
        
        body {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 25%, #f093fb 50%, #f5576c 75%, #4facfe 100%);
            background-size: 400% 400%;
            animation: gradientShift 15s ease infinite;
            min-height: 100vh;
        }
        
        @keyframes gradientShift {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }
        
        .glass {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37);
        }
        
        .glass-dark {
            background: rgba(0, 0, 0, 0.2);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }
        
        .glass-card {
            background: rgba(255, 255, 255, 0.08);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.18);
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }
        
        .glass-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.3);
            background: rgba(255, 255, 255, 0.12);
        }
        
        .slide-in {
            animation: slideIn 0.5s ease-out;
        }
        
        @keyframes slideIn {
            from {
                opacity: 0;
                transform: translateX(-30px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }
        
        .removing {
            animation: slideOut 0.4s ease-out forwards;
        }

        @keyframes slideOut {
            from {
                opacity: 1;
                transform: translateX(0);
            }
            to {
                opacity: 0;
                transform: translateX(-50px);
            }
        }
        
        .btn-glow {
            position: relative;
            overflow: hidden;
            transition: all 0.3s ease;
        }
        
        .btn-glow::after {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            width: 0;
            height: 0;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.3);
            transform: translate(-50%, -50%);
            transition: width 0.6s, height 0.6s;
        }
        
        .btn-glow:hover::after {
            width: 300px;
            height: 300px;
        }

        .alert {
            animation: slideIn 0.5s ease-out;
        }
    </style>
</head>
<body>
    <!-- Consistent Header -->
    <header class="glass fixed top-0 w-full z-50">
        <div class="max-w-4xl mx-auto px-6 py-4 flex justify-between items-center h-16">
            <div class="flex items-center space-x-3">
                <div class="w-10 h-10 bg-gradient-to-br from-purple-500 to-pink-500 rounded-lg flex items-center justify-center">
                    <i class="fas fa-graduation-cap text-white"></i>
                </div>
                <h1 class="text-2xl font-bold text-white">AIOVerse</h1>
            </div>
            <a href="{{ route('courses.index') }}" class="glass px-4 py-2 rounded-lg text-white hover:bg-white/20 transition-all">
                <i class="fas fa-arrow-left mr-2"></i>View All Courses
            </a>
        </div>
    </header>

    <main class="pt-24 px-6 pb-12">
        <div class="max-w-4xl mx-auto">
            <!-- Main Form Container -->
            <div class="glass rounded-2xl p-8">
                <h1 class="text-3xl font-bold text-white mb-2">Create New Course</h1>
                <p class="text-white/70 mb-8">Fill in the details below to create your new course.</p>

                <form action="{{ route('courses.store') }}" method="POST" enctype="multipart/form-data" id="course-form">
                    @csrf

                    <!-- Course Information -->
                    <div class="mb-8">
                        <h2 class="text-xl font-semibold text-white mb-4">Course Information</h2>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div class="md:col-span-2">
                                <label class="text-white/80 text-sm mb-2 block">Course Title</label>
                                <input type="text" name="title" placeholder="Enter course title" class="w-full glass-dark px-4 py-3 rounded-lg text-white placeholder-white/40 focus:outline-none focus:ring-2 focus:ring-purple-500 transition-all" required>
                            </div>
                            <div class="md:col-span-2">
                                <label class="text-white/80 text-sm mb-2 block">Description</label>
                                <textarea name="description" placeholder="Enter course description" rows="4" class="w-full glass-dark px-4 py-3 rounded-lg text-white placeholder-white/40 focus:outline-none focus:ring-2 focus:ring-purple-500 transition-all"></textarea>
                            </div>
                            <div>
                                <label class="text-white/80 text-sm mb-2 block">Category</label>
                                <input type="text" name="category" placeholder="e.g., Programming" class="w-full glass-dark px-4 py-3 rounded-lg text-white placeholder-white/40 focus:outline-none focus:ring-2 focus:ring-purple-500 transition-all">
                            </div>
                            <div>
                                <label class="text-white/80 text-sm mb-2 block">Feature Video</label>
                                <input type="file" name="feature_video" accept="video/*" class="w-full glass-dark px-4 py-3 rounded-lg text-white file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-purple-50 file:text-purple-700 hover:file:bg-purple-100">
                            </div>
                        </div>
                    </div>

                    <hr class="border-white/20">

                    <!-- Course Modules -->
                    <div class="mt-8">
                        <div class="flex justify-between items-center mb-4">
                            <h2 class="text-xl font-semibold text-white">Course Modules</h2>
                            <button type="button" id="add-module" class="glass px-4 py-2 rounded-lg text-white hover:bg-white/20 transition-all btn-glow">
                                <i class="fas fa-plus mr-2"></i>Add Module
                            </button>
                        </div>
                        <div id="modules-container" class="space-y-4">
                            <!-- Modules will be added here dynamically by jQuery -->
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <button type="submit" class="w-full mt-8 bg-gradient-to-r from-purple-500 to-pink-500 px-4 py-3 rounded-lg text-white font-semibold hover:opacity-90 transition-all">
                        <i class="fas fa-rocket mr-2"></i>Create Course
                    </button>
                </form>
            </div>
        </div>
    </main>

    <!-- Message Container for AJAX -->
    <div id="message-container" class="fixed top-24 right-6 z-50"></div>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

    <!-- Our custom JavaScript -->
    <script>
    $(document).ready(function() {
        let moduleIndex = 0;

        // --- Module Handling ---
        $('#add-module').on('click', function() {
            const moduleTemplate = `
                <div class="glass-card rounded-lg p-4 module-item slide-in" data-index="${moduleIndex}">
                    <div class="flex justify-between items-center mb-3">
                        <input type="text" name="modules[${moduleIndex}][title]" placeholder="Module Title" class="glass-dark px-4 py-3 rounded-lg text-white placeholder-white/40 focus:outline-none focus:ring-2 focus:ring-purple-500 transition-all flex-1 font-semibold text-lg" required>
                        <button type="button" class="remove-module text-red-400 hover:text-red-300 transition-all ml-3">
                            <i class="fas fa-trash"></i>
                        </button>
                    </div>
                    <div class="space-y-2">
                        <textarea name="modules[${moduleIndex}][description]" placeholder="Module Description (Optional)" rows="2" class="w-full bg-white/10 px-3 py-2 rounded text-white placeholder-white/40 focus:outline-none focus:bg-white/20 transition-all"></textarea>
                        
                        <div class="contents-container" data-module-index="${moduleIndex}">
                            <!-- Content items will be added here -->
                        </div>
                        <button type="button" class="add-content text-white hover:text-gray-200 transition-all text-sm">
                            <i class="fas fa-plus mr-1"></i>Add Content
                        </button>
                    </div>
                </div>`;
            
            $('#modules-container').append(moduleTemplate);
            moduleIndex++;
        });

        // Use event delegation for removing modules
        $('#modules-container').on('click', '.remove-module', function() {
            const $moduleToRemove = $(this).closest('.module-item');
            $moduleToRemove.addClass('removing');
            setTimeout(() => {
                $moduleToRemove.remove();
            }, 400);
        });

        // --- Content Handling ---
        $('#modules-container').on('click', '.add-content', function() {
            const moduleIndex = $(this).closest('.module-item').data('index');
            const contentIndex = $(`.contents-container[data-module-index="${moduleIndex}"] .content-item`).length;

            const contentTemplate = `
                <div class="content-item glass-dark rounded-lg p-3 mt-2 slide-in">
                    <div class="flex justify-between items-center mb-2">
                        <span class="text-white/60 text-sm">Content Item ${contentIndex + 1}</span>
                        <button type="button" class="remove-content text-red-400 hover:text-red-300 transition-all text-sm">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                    <textarea name="modules[${moduleIndex}][contents][${contentIndex}][text_content]" placeholder="Text Content" rows="3" class="w-full bg-white/10 px-3 py-2 rounded text-white placeholder-white/40 focus:outline-none focus:bg-white/20 transition-all text-sm"></textarea>
                    <input type="url" name="modules[${moduleIndex}][contents][${contentIndex}][link_url]" placeholder="Link URL (e.g., https://example.com)" class="w-full bg-white/10 px-3 py-2 rounded text-white placeholder-white/40 focus:outline-none focus:bg-white/20 transition-all text-sm mt-2">
                </div>`;
            
            $(`.contents-container[data-module-index="${moduleIndex}"]`).append(contentTemplate);
        });

        // Use event delegation for removing content
        $('#modules-container').on('click', '.remove-content', function() {
            const $contentToRemove = $(this).closest('.content-item');
            $contentToRemove.addClass('removing');
            setTimeout(() => {
                $contentToRemove.remove();
            }, 400);
        });

        // --- AJAX Form Submission ---
        $('#course-form').on('submit', function(e) {
            e.preventDefault();
            $.ajax({
                url: $(this).attr('action'), method: 'POST', data: new FormData(this), processData: false, contentType: false,
                success: function(response) {
                    const alertHtml = `<div class="alert glass p-4 rounded-lg text-white mb-4"><i class="fas fa-check-circle mr-2"></i>${response.message}</div>`;
                    $('#message-container').html(alertHtml);
                    $('#course-form')[0].reset();
                    $('#modules-container').empty();
                    moduleIndex = 0;
                    $('#add-module').click();
                    setTimeout(() => { $('#message-container').html(''); }, 5000);
                },
                error: function(xhr) {
                    if (xhr.status === 422) {
                        let errors = xhr.responseJSON.errors;
                        let errorMessages = [];
                        for (let key in errors) { errorMessages.push(errors[key].join('<br>')); }
                        const alertHtml = `<div class="alert glass p-4 rounded-lg text-red-300 mb-4"><i class="fas fa-exclamation-circle mr-2"></i>Validation Errors:<br>${errorMessages.join('<br>')}</div>`;
                        $('#message-container').html(alertHtml);
                    } else {
                        const alertHtml = `<div class="alert glass p-4 rounded-lg text-red-300 mb-4"><i class="fas fa-exclamation-circle mr-2"></i>${xhr.responseJSON.message}</div>`;
                        $('#message-container').html(alertHtml);
                    }
                }
            });
        });

        // Add one module by default
        $('#add-module').click();
    });
    </script>
</body>
</html>