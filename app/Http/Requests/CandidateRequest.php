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
            'personal_email' => 'required|email|max:255|unique:users,email',
            'position'   => 'required|in:President,Vice President,Treassurer,Secretary',
            'guc_id' => 'required|unique:candidates',
            'ieee_membership_id' => 'required|unique:candidates',
            'guc_email' => 'required|email|max:255|unique:candidates',
            'first_name' => 'required',
            'last_name'  => 'required',
            'mobile_number'  => 'required',
            'major'  => 'required',
            'image_url'  => 'url',
            'plan_url'  => 'url',
            'video_url'  => 'url'
        ];
    }
}
