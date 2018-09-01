<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NumeroRequest extends FormRequest
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
            'telefone' => 'required|min:13|max:14',
            'usuario'  => 'required|min:3|max:50',
            'custo'    => 'required|numeric'
         ];
    }


    public function messages(){
          return [
               'telefone.required' => 'Digite o numero do telefone !',
              //'telefone.unique'   => 'Este número já esta cadastrado !',
                'telefone.max'      => 'O telefone está incorreto !',
                'telefone.min'      => 'O telefone está incorreto !',
                'usuario.required'  => 'Digite o nome do usuario !',
                'usuario.min'       => 'O campo usuario deve ter no minimo três caracteres !',
                'usuario.max'       => 'O nome do usuario deve ter no maximo cinqueta digitos !',
                'custo.required'    => 'Digite o custo minimo por ligacao !',
                'custo.numeric'     => 'O campo custo deve ser númerico !'

          ];
    }
}
