<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AIOVerse - All Courses</title>
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
    </style>
</head>
<body>
    <!-- Consistent Header -->
    <header class="glass fixed top-0 w-full z-50">
        <div class="max-w-5xl mx-auto px-6 py-4 flex justify-between items-center h-16">
            <div class="flex items-center space-x-3">
                <div class="w-10 h-10 bg-gradient-to-br from-purple-500 to-pink-500 rounded-lg flex items-center justify-center">
                    <i class="fas fa-graduation-cap text-white"></i>
                </div>
                <h1 class="text-2xl font-bold text-white">AIOVerse</h1>
            </div>
            <a href="{{ route('courses.create') }}" class="glass px-4 py-2 rounded-lg text-white hover:bg-white/20 transition-all btn-glow">
                <i class="fas fa-plus mr-2"></i>Create New Course
            </a>
        </div>
    </header>

    <main class="pt-24 px-6 pb-12">
        <div class="max-w-5xl mx-auto">
            <!-- Page Title -->
            <div class="text-center mb-12">
                <h1 class="text-4xl font-bold text-white mb-4">All Courses</h1>
                <p class="text-white/70 text-lg">Explore the courses you have created.</p>
            </div>

            <!-- Courses Grid -->
            @if($courses->isEmpty())
                <div class="glass rounded-2xl p-12 text-center">
                    <i class="fas fa-inbox text-6xl text-white/50 mb-4"></i>
                    <h2 class="text-2xl font-semibold text-white mb-2">No Courses Yet</h2>
                    <p class="text-white/60 mb-6">You haven't created any courses. Get started by creating your first one!</p>
                    <a href="{{ route('courses.create') }}" class="inline-block bg-gradient-to-r from-purple-500 to-pink-500 px-6 py-3 rounded-lg text-white font-semibold hover:opacity-90 transition-all">
                        <i class="fas fa-rocket mr-2"></i>Create Your First Course
                    </a>
                </div>
            @else
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    @foreach($courses as $course)
                        <a href="{{ route('courses.show', $course->id) }}" class="glass-card rounded-2xl overflow-hidden slide-in block">
                            <div class="p-6">
                                <h3 class="text-xl font-bold text-white mb-2">{{ $course->title }}</h3>
                                @if($course->category)
                                    <span class="inline-block bg-purple-500/30 text-purple-200 text-xs px-2 py-1 rounded-full mb-3">
                                        {{ $course->category }}
                                    </span>
                                @endif
                                <p class="text-white/70 text-sm mb-4">{{ Str::limit($course->description, 100) }}</p>
                                
                                @if($course->modules->isNotEmpty())
                                    <div class="border-t border-white/10 pt-4">
                                        <h4 class="text-white font-semibold mb-2">Modules ({{ $course->modules->count() }})</h4>
                                        <ul class="space-y-1">
                                            @foreach($course->modules as $module)
                                                <li class="text-white/60 text-sm flex items-center">
                                                    <i class="fas fa-book-open mr-2 text-xs"></i>
                                                    {{ $module->title }}
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                            </div>
                        </a>
                    @endforeach
                </div>
            @endif
        </div>
    </main>
</body>
</html>