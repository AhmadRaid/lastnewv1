<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class newsrequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'title_news' => 'required',
            'content_' => 'required',
            'country' => 'required',
            'department_id' => 'required'
        ];
    }
}
