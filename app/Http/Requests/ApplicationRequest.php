<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ApplicationRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
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
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'unique:applications,email'],
            'linkedin' => ['required', 'url'],
            'github' => ['required', 'url'],
            'portfolio' => ['required', 'url'],
            'CV' => ['required', 'file', 'mimes:pdf,doc,docx', 'max:2048'], 
        ];
    }

    /**
     * Custom error messages for validation rules.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'name.required' => 'Please enter your full name.',
            'email.required' => 'We need your email address.',
            'email.email' => 'Your email must be valid (e.g., name@example.com).',
            'email.unique' => 'This email has already been used to apply.',
            'linkedin.required' => 'Your LinkedIn profile is required.',
            'linkedin.url' => 'Your LinkedIn profile must be a valid URL.',
            'github.required' => 'Please provide your GitHub profile.',
            'github.url' => 'Your GitHub profile must be a valid URL.',
            'portfolio.required' => 'Your portfolio is required.',
            'portfolio.url' => 'The portfolio must be a valid URL.',
            'CV.required' => 'Please upload your CV.',
            'CV.file' => 'Your CV must be a file.',
            'CV.mimes' => 'Only PDF, DOC, or DOCX formats are allowed.',
            'CV.max' => 'Your CV must not be larger than 2MB.',
        ];
    }
}
