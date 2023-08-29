<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CourseRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        $rule='required';
        if($this->method()=='PUT'){
            $rule='nullable';
        }
        return [
            'name_en' => 'required',
            'name_ar' => 'required',
            'image' => $rule,
            'price' => 'required',
            'duration' => 'required',
            'content_en' => 'required',
            'content_ar' => 'required',
            'teacher_id' => 'required',
        ];
    }
}
