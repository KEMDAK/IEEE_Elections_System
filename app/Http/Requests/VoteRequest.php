<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class VoteRequest extends Request
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
            'president' => 'required|exists:candidates,id,position,President,status,1',
            'vice_president' => 'required|exists:candidates,id,position,Vice President,status,1',
            'treasurer' => 'required|exists:candidates,id,position,Treassurer,status,1',
            'secretary' => 'required|exists:candidates,id,position,Secretary,status,1',
        ];
    }
}
