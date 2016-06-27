<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class CandidateRequest extends Request
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
            'position'   => 'required|in:President,Vice President,Treassurer,Secratory',
            'first_name' => 'required',
            'last_name'  => 'required',
            'major'  => 'required',
            'graduation_year'  => 'required|in:2017,2018,2019,2020',
            'description'  => 'required',
            'image_url'  => 'required|url',
        ];
    }
}
