<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'email' => 'required|unique:users',
            'password' => 'required',
           'level' => 'required|string', // Pastikan 'level' tidak kosong
            'status' => 'required|string' // Pastikan 'status' tidak kosong
        ];
    }

    public function messages(): array
    {
        return [
            'email.unique' => 'Email telah terdaftar.',
        ];
    }
}
