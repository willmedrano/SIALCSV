<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class RequestProductoInv extends Request
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
        'marca'=>'required:productos',
        'idProve'=>'required:productos',
        'gUni'=>'required:productos',
        'uniCaja'=>'required:productos',
        'gCaja'=>'required:productos',
        'desc'=>'required:productos',
        'minimo'=>'required:productos',
        
        ];
    }
    public function messages(){
        return [
        'cod.required'=>'El código es unico y es requerido',
        'nomProd.required'=>'El nombre del producto es requerido',
        'marca.required'=>'La marca del producto es requerida',
        'idProve.required'=>'El provedor es requerido',
        'gUni.required'=>'La ganancia de la unitario del producto es requerida',
        'uniCaja.required'=>'La unidad de la caja del producto es requerida',
        'gCaja.required'=>'La ganancia de la caja del producto es requerida',
        'desc.required'=>'La Descripción del producto es requerida',
        'minimo.required'=>'El minimo del producto es requerido',
       
        ];
    }
}
