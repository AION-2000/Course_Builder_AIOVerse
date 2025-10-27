<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCourseRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        // For this project, we'll set it to true.
        // In a real app, you'd check if the user has permission to create a course.
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            // Course Fields
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'category' => 'nullable|string|max:100',
            'feature_video' => 'nullable|file|mimes:mp4,avi,mov,wmv|max:102400', // 100MB max

            // Module Fields
            'modules' => 'required|array|min:1',
            'modules.*.title' => 'required|string|max:255',
            'modules.*.description' => 'nullable|string',

            // Content Fields
            'modules.*.contents' => 'nullable|array',
            'modules.*.contents.*.text_content' => 'nullable|string',
            'modules.*.contents.*.link_url' => 'nullable|url',
        ];
    }
}