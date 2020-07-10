<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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

            'name' => ['required', 'string', 'max:255'],
            'email' => $this->isMethod('post') ? 'required|email|email:rfc,dns|unique:employees' : 'required|email|email:rfc,dns|unique:employees,email,'.$this->user->id,
            'password' =>  [$this->isMethod('post') ? 'required' : 'nullable', 'string', 'min:8', 'confirmed'],
        ];
    }
}
