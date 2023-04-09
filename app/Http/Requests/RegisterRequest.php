<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Repat\LaravelRules\DoesntContainEmojis;

class RegisterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'first-name' => ['required','string',new DoesntContainEmojis()],
            'last-name' => ['string',new DoesntContainEmojis()],
            'email' => ['required','string','unique:users,email',new DoesntContainEmojis()],
            'password' => ['required','confirmed','string',new DoesntContainEmojis()]
        ];
    }
}
