<?php

namespace App\Http\Requests\System;

use Illuminate\Foundation\Http\FormRequest;

class LengthRequest extends FormRequest
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
        switch ($this->method()) {
            case 'GET':
            case 'DELETE': {
                return [];
            }
            case 'POST':
            case 'PUT':
            case 'PATCH': {
                return [
                    'title'  => 'required',
                    'unit'   => 'required',
                    'value' => 'required|numeric',
                ];
            }
            default:
                return [];
        }
    }

    public function messages()
    {
        return[

               'title'                 => __('Length Title Required '),
			   'unit'                  => __('Length Unit  Required '),
			   'value'                 => __('Length value Required ')

               ];
    }
}
