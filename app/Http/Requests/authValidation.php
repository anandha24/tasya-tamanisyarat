<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class authValidation extends FormRequest
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
            //
            "email_user" => "required | email",
            "pass_user" => "required | min:8 | max:16",
            "nama_user" => "required | min:8 | max:16",
            "konfirmasi_pass" => "required | confirmed"
        ];

        // return redirect()->route('/index');
    }
}
