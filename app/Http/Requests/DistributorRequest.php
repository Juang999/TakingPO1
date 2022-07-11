<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DistributorRequest extends FormRequest
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
            'db_name' => 'required',
            'level' => 'required',
            'role' => 'required',
            'agent' => 'required',
            'name' => 'required',
            'ms_name' => 'required',
            'ms_code' => 'required',
            'training_level' => 'required',
            'address' => 'required',
            'provice' => 'required',
            'regency' => 'required',
            'district' => 'required',
            'pos_code' => 'required',
            'phone' => 'required',
            'partner_group_id' => 'required',
        ];
    }
}
