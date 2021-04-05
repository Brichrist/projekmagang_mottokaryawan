<?php

namespace App\Http\Requests;
use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;
use Auth;

class form_request_validation_profile extends FormRequest
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
        $id=Auth::id();
        return [
            'name' => 'required',
            'email' => ['required ',Rule::unique('users')->ignore($id)],
            'tanggal_lahir' => 'required',
            'alamat' => 'required',
            'level' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'A name is required',
            'email.required' => 'A email is required',
            'tanggal_lahir.required' => 'A date is required',
            'alamat.required' => 'A address is required',
            'level.required' => 'A level is required',
        ];
    }
}
