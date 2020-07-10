<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CompanyRequest extends FormRequest
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

            'name' => $this->isMethod('post') ?'required|unique:companies|max:255':'required|max:255|unique:companies,name,'.$this->company->id,
            'email' => $this->isMethod('post') ? 'required|email|unique:companies' : 'required|email|unique:companies,email,'.$this->company->id,
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'website_url' => 'nullable',
        ];
    }
}
