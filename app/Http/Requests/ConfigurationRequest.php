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
            'applicationsFrom' => 'date|after:yesterday',
            'applicationsTo'   => 'date|after:applicationsFrom',
            // 'deliverablesFrom' => 'date|after:yesterday', // skippting this rule as it is not used
            'deliverablesTo' => 'date|after:deliverablesFrom',
            'electionsFrom' => 'date|after:yesterday',
            'electionsTo' => 'date|after:electionsFrom',
        ];
    }
}
