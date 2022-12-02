<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GameRequest extends FormRequest
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
        if ($this->method() == 'PUT') {
            return [
                'name'        => 'required|unique:games,name,'.$this->id,
                'description' => 'required',
                'category_id' => 'required',
                'slider'      => 'required',
                'price'       => 'required|numeric',
            ];
        } else {
            return [
                'name'        => 'required|unique:games',
                'image'       => 'required|image|max:2000',
                'description' => 'required',
                'category_id' => 'required',
                'slider'      => 'required',
                'price'       => 'required|numeric',
            ];
        }
    }
}
