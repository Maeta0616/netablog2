<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NetaRequest extends FormRequest
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
            'netas.name'=>'required',
            'netas.combination_id'=>'required',
            'netas.genre_id'=>'required',
            'netas.overview'=>'required|string|max:200',
        ];
    }
}
