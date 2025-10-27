<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCourseRequest;
use App\Models\Course;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class CourseController extends Controller
{
    /**
     * Show the form for creating a new course.
     */
    public function create()
    {
        return view('courses.create');
    }

    /**
     * Store a newly created course in storage.
     */
    public function store(StoreCourseRequest $request)
    {
        // All validation is done automatically by StoreCourseRequest
        $validated = $request->validated();

        // Use a database transaction to ensure data integrity
        DB::beginTransaction();
        try {
            // 1. Handle Feature Video Upload
            $featureVideoPath = null;
            if ($request->hasFile('feature_video')) {
                // Store the file in the 'public/feature_videos' directory
                $featureVideoPath = $request->file('feature_video')->store('feature_videos', 'public');
            }

            // 2. Create the Course
            $course = Course::create([
                'title' => $validated['title'],
                'description' => $validated['description'] ?? null,
                'category' => $validated['category'] ?? null,
                'feature_video_path' => $featureVideoPath,
            ]);

            // 3. Create Modules and their Contents
            foreach ($validated['modules'] as $moduleData) {
                // Create Module and associate it with the course
                $module = $course->modules()->create([
                    'title' => $moduleData['title'],
                    'description' => $moduleData['description'] ?? null,
                ]);

                // Check if contents exist for this module
                if (isset($moduleData['contents']) && is_array($moduleData['contents'])) {
                    foreach ($moduleData['contents'] as $contentData) {
                        // Filter out empty content items to save space
                        if (empty($contentData['text_content']) && empty($contentData['link_url'])) {
                            continue;
                        }
                        // Create Content and associate it with the module
                        $module->contents()->create([
                            'text_content' => $contentData['text_content'] ?? null,
                            'link_url' => $contentData['link_url'] ?? null,
                        ]);
                    }
                }
            }

            // If everything is successful, commit the transaction
            DB::commit();

            // Return a JSON response for our AJAX call
            return response()->json([
                'message' => 'Course created successfully!',
                'course_id' => $course->id
            ]);

        } catch (\Exception $e) {
            // If any error occurs, roll back the transaction
            DB::rollBack();
            // Log the error for debugging
            \Log::error('Course creation failed: ' . $e->getMessage());

            // Return a JSON error response
            return response()->json([
                'message' => 'An error occurred while creating the course. Please try again.',
                'error' => $e->getMessage() // Optional: only for development
            ], 500); // 500 is the HTTP status code for a server error
        }
    }

    /**
     * Display a listing of all courses.
     */
    public function index()
    {
        // Eager load modules and contents to avoid extra database queries
        $courses = Course::with('modules.contents')->get();

        return view('courses.index', compact('courses'));
    }

    /**
     * Display the specified course.
     */
    public function show(Course $course)
    {
        // Eager load modules and contents for the specific course
        $course->load('modules.contents');

        return view('courses.show', compact('course'));
    }
}