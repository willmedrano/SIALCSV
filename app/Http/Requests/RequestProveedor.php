<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class RequestProveedor extends Request
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
        'nom'=>'required:proveedores',
        'tel'=>'required|unique:proveedores',
        'NIT'=>'required|unique:proveedores',
        'dir'=>'required:proveedores',        
        ];
    }
    public function messages(){
        return [
        'nom.required'=> 'El nombre del proveedor es requerido',
        'tel.required'=> 'El telefono es unico y requerido',
        'NIT.unique'=> 'El NIT es unico y requerido',
        'dir.required'=> 'La dirección es requerida',
        ];
    }
}
