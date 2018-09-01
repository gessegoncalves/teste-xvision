<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ChamadasRequest extends FormRequest
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
            'origem'   => 'required|min:13|max:14',
            'destino'  => 'required|min:13|max:14',
            'tempo'    => 'required|numeric',
            'custo'    => 'required|numeric',            
            'data'     => 'required|max:20',
            'detalhes' => 'required|max:99',
            
         ];
    }


    public function messages(){
          return [
                'origem.required' => 'Digite o numero de origem !',
                'origem.max'      => 'O número de origem esta incoreto !',
                'origem.min'      => 'O número de origem esta incoreto !',

                'destino.required' => 'Digite o numero de destino !',
                'destino.max'      => 'O número de destino esta incoreto !',
                'destino.min'      => 'O número de destino esta incoreto !',    

                'tempo.required'    => 'Digite o tempo de ligação !',
                'tempo.numeric'     => 'Valor incorreto no tempo !',

                'custo.required'    => 'Digite o custo de ligação !',
                'custo.numeric'     => 'Valor incorreto no custo !',

                'data.required'     => 'Digite a data da ligação !',
                'data.max'          => 'Data Esta incoreta !',

                'detalhes.required' => 'Digite os detalhes !',
                'detalhes.detalhes' => 'No maximo 100 caracteres nos detalhes !',

          ];
    }
}
