<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReciboRequest extends FormRequest
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
            'mes'=> 'required',
            'year'=> 'required',
            'consumo'=> 'required|string',
            'saldo'=> 'required|string',
        ];
    }

    public function messages()
    {
        return [
            'consumo.required' => 'El campo Consumo es obligatorio',
            'saldo.required' => 'Debe ingresar un Saldo',
            'mes.exists' => 'Seleccione una opcion en el campo Mes',
            'year.exists' => 'Seleccione una opcion en el campo Año',
        ];
    }
}
