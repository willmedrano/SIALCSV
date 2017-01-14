<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class RequestProducto extends Request
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
        'cod'=>'required|unique:productos',
        'nomProd'=>'required:productos',
        'uniCaja'=>'required:productos',
        'idProve'=>'required:productos',
        'gUni'=>'required:productos',
        'gCaja'=>'required:productos',
        'desc'=>'required:productos',
        'cPromedio'=>'required:productos',
        ];
    }
    public function messages(){
        return [
        'cod.required'=>'El código es unico y requerido',
        'nomProd.required'=>'El nombre del producto es requerido',
        'uniCaja.required'=>'La unidad de la caja del producto es requerida',
        'idProve.required'=>'El provedor es requerido',
        'gUni.required'=>'La ganancia de la unitario del producto es requerida',
        'gCaja.required'=>'La ganancia de la caja del producto es requerida',
        'desc.required'=>'La Descripción del producto es requerida',
        'cPromedio.required'=>'El precio del producto es requerido',
        ];
    }
}
