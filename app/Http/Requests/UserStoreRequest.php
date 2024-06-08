<?php

namespace App\Http\Requests;

use Exception;
use App\Models\User;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password;


class UserStoreRequest extends FormRequest
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
            'name'  => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', Password::defaults()],
        ];
    }

    protected function failedValidation(Validator $validator): Exception
    {
        $response = response()->json([
            'success' => false,
            'message' => 'User validation failed.',
            'errors' => $validator->errors(),
            'code' => 403
        ]);

        throw new \Illuminate\Validation\ValidationException($validator, $response);
    }
}
