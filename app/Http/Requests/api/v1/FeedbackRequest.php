<?php

namespace App\Http\Requests\api\v1;

use Illuminate\Foundation\Http\FormRequest;

class FeedbackRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'title' => 'required|string|min:2|max:191',
            'user_id' => 'required|integer',
            'category_id' => 'required|integer',
            'description' => 'required|string|min:20|max:1000'
        ];
    }
}
