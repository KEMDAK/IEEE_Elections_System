<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

use Illuminate\Support\Facades\Auth;

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
        switch($this->method())
        {
            case 'GET':
            case 'DELETE':
            {
                return [];
            }
            case 'POST':
            {
                return [
                    'personal_email' => 'required|email|max:255|unique:users,email',
                    'position'   => 'required|in:President,Vice President,Treassurer,Secretary',
                    'guc_id' => 'required|unique:candidates',
                    'ieee_membership_id' => 'required|unique:candidates',
                    'guc_email' => 'required|email|max:255|unique:candidates',
                    'first_name' => 'required',
                    'last_name'  => 'required',
                    'gender' => 'required|in:Male,Female',
                    'mobile_number'  => 'required',
                    'major'  => 'required',
                    'image_url'  => 'url',
                    'plan_url'  => 'url',
                    'video_url'  => 'url'
                ];
            }
            case 'PUT':
            case 'PATCH':
            {
                $user = Auth::user();
                $candidate = $user->candidates[0];

                return [
                    'position'   => 'required|in:President,Vice President,Treassurer,Secretary',
                    'guc_id' => 'required|unique:candidates,guc_id,'.$candidate->id,
                    'ieee_membership_id' => 'required|unique:candidates,ieee_membership_id,'.$candidate->id,
                    'guc_email' => 'required|email|max:255|unique:candidates,guc_email,'.$candidate->id,
                    'first_name' => 'required',
                    'last_name'  => 'required',
                    'gender' => 'required|in:Male,Female',
                    'mobile_number'  => 'required',
                    'major'  => 'required',
                    'image_url'  => 'url',
                    'plan_url'  => 'url',
                    'video_url'  => 'url'
                ];
            }
            default:break;
        }
    }
}
