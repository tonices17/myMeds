<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => [
                'required'
            ],
            'lastname' => [
                'required'
            ],
            'user_name' => [
                'required',
                Rule::unique('users')->ignore($this->user->id),
            ],
            'email' => [
                'required',
                'email',
                // 'unique:users,email,' . $this->user->id,
                Rule::unique('users')->ignore($this->user->id),
            ],
            'password' => [
                'nullable',
                'confirmed',
                'min:8'
            ],
        ];
    }

    protected function prepareForValidation()
    {
        if ($this->password === null) {
            $this->request->remove('password');
        }
    }
}
