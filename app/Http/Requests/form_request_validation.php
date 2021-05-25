<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class form_request_validation extends FormRequest
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
            'nama_depan' => 'required',
            'nama_belakang' => 'required',
            'tag_line' => 'required',
            'description' => 'required',
            'foto' => 'image',
        ];
    }
    public function messages()
    {
        return [
            'nama_depan.required' => 'harus terisi',
            'nama_belakang.email.required' => 'harus terisi',
            'tag_line.required' => 'harus terisi',
            'description.required' => 'harus terisi',
            'foto.mimes:image' => 'format file yang diizinkan: jpg, jpeg',
        ];
    }
}
