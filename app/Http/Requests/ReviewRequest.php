<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReviewRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'reviews.neta_id'=>'required',
            'reviews.title'=>'required|string|max:20',
            'reviews.body'=>'required|string|max:200',
            'reviews.votes'=>'required'
        ];
    }
}
