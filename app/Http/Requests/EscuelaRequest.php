<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class EscuelaRequest extends Request
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
        'nomesc'=>'required|max:255',
        'nomdirec'=>'required|max:255',
        'telesc'=>'required|unique:posts|max:9',
        'diresc'=>'required|unique:posts|max:255',
        
        ];
    }
}
