<?php

namespace App\Http\Requests\Admin\User;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:4',
            'roles_id' => 'nullable|string|exists:roles,id',
            'avatar' => 'nullable|mimetypes:image/png,image/jpeg,image/gif,image/jpg|max:2048'
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Поле "Имя пользователя" обязательно для заполнения',
            'name.string' => 'Поле "Имя пользователя" должно быть строкой',
            'name.max' => 'Поле "Имя пользователя" должно быть не более :max символов',
            'email.required' => 'Поле "E-mail" обязательно для заполнения',
            'email.string' => 'Поле "E-mail" должно быть строкой',
            'email.max' => 'Поле "E-mail" должно быть не более :max символов',
            'roles_id.exists:roles,id' => 'Поле "Роль" должно быть строкой',
            ];
    }
}
