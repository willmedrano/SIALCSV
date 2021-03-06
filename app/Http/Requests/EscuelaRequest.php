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
        'nomesc'=>'required:escuelas',
        'nomdirec'=>'required:escuelas',
        'telesc'=>'required|unique:escuelas',
        'diresc'=>'required:escuelas',
        
        ];
    }
    public function messages(){
        return [
        'nomesc.required'=> 'El nombre de la escuela es requerido',
        'nomdirec.required'=> 'El nombre del director es requerido',
        'telesc.unique'=> 'El telefono es unico y requerido',
        'diresc.required'=> 'La dirección es requerida',
        
        ];
    }
    
}
