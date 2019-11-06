<?php

namespace App\Http\Requests\Customer;

use Illuminate\Foundation\Http\FormRequest;

class CustomerGroupRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
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
                    'name'  => 'required|string|max:255',
                    'alpha2'   => 'required|string|size:2',
                    'phone' => 'required|string|max:20',
                ];
            }
            default:
                return [];
        }
    }

    public function messages()
    {
        return[

               'iso_code_2.required'   => __('Country Iso Code 2  Required '),
			   'iso_code_3.required'   => __('Country Iso Code 3  Required '),
			   'name.required'         => __('Country Name Required ')

               ];
    }


}
