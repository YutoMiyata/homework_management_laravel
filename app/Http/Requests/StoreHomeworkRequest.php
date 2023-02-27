<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreHomeworkRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required','string','max:20'],
            'japanese'=>['required','numeric','min:0','max:100'],
            'math'=>['required','numeric','min:0','max:100'],
            'english'=>['required','numeric','min:0','max:100'],
            'science'=>['required','numeric','min:0','max:100'],
            'society'=>['required','numeric','min:0','max:100'],
        ];
    }
}
