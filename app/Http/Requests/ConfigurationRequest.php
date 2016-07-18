<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class ConfigurationRequest extends Request
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
            'applicationsFrom' => 'date',
            'applicationsTo'   => 'date',
            // 'deliverablesFrom' => 'date', // skippting this rule as it is not used
            'deliverablesTo' => 'date',
            'electionsFrom' => 'date',
            'electionsTo' => 'date',
        ];
    }
}
