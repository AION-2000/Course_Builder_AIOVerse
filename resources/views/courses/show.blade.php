<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AIOVerse - {{ $course->title }}</title>
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
                <i class="fas fa-arrow-left mr-2"></i>Back to All Courses
            </a>
        </div>
    </header>

    <main class="pt-24 px-6 pb-12">
        <div class="max-w-4xl mx-auto">
            <!-- Course Details -->
            <div class="glass rounded-2xl p-8">
                <div class="flex justify-between items-start mb-6">
                    <div>
                        <h1 class="text-3xl font-bold text-white mb-2">{{ $course->title }}</h1>
                        @if($course->category)
                            <span class="inline-block bg-purple-500/30 text-purple-200 text-sm px-3 py-1 rounded-full">
                                {{ $course->category }}
                            </span>
                        @endif
                    </div>
                    <a href="{{ route('courses.create') }}" class="glass px-4 py-2 rounded-lg text-white hover:bg-white/20 transition-all">
                        <i class="fas fa-plus mr-2"></i>Create New
                    </a>
                </div>
                
                <p class="text-white/80 text-lg mb-8">{{ $course->description }}</p>

                @if($course->modules->isNotEmpty())
                    <hr class="border-white/20 mb-8">
                    <h2 class="text-2xl font-semibold text-white mb-6">Course Modules & Content</h2>
                    
                    <div class="space-y-6">
                        @foreach($course->modules as $module)
                            <div class="glass-card rounded-lg p-6 slide-in">
                                <h3 class="text-xl font-bold text-white mb-3">
                                    <i class="fas fa-book-open mr-2 text-purple-400"></i>{{ $module->title }}
                                </h3>
                                @if($module->description)
                                    <p class="text-white/70 mb-4">{{ $module->description }}</p>
                                @endif

                                @if($module->contents->isNotEmpty())
                                    <div class="space-y-4">
                                        @foreach($module->contents as $content)
                                            <div class="glass-dark rounded-lg p-4">
                                                @if($content->text_content)
                                                    <p class="text-white">{{ $content->text_content }}</p>
                                                @endif
                                                @if($content->link_url)
                                                    <a href="{{ $content->link_url }}" target="_blank" class="text-purple-400 hover:text-purple-300 transition-all inline-block mt-2">
                                                        <i class="fas fa-link mr-1"></i>View Link
                                                    </a>
                                                @endif
                                            </div>
                                        @endforeach
                                    </div>
                                @else
                                    <p class="text-white/50 italic">No content items for this module yet.</p>
                                @endif
                            </div>
                        @endforeach
                    </div>
                @else
                    <div class="glass-dark rounded-lg p-8 text-center">
                        <i class="fas fa-folder-open text-4xl text-white/50 mb-4"></i>
                        <p class="text-white/60">This course has no modules yet.</p>
                    </div>
                @endif
            </div>
        </div>
    </main>
</body>
</html>