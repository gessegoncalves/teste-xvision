<?php

namespace App\Http\Controllers\views;
use App\Http\Requests\NumeroRequest;
use App\Http\Controllers\Controller;
use App\Numero  as Numero;

class NumerosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $numeros =  Numero::orderBy('id', 'desc')->Paginate(10);

        return view('numero.listar')->with(compact('numeros')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('numero.cadastrar');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(NumeroRequest  $request)
     {      
  //      dd($request->all());
        Numero::create($request->all());      
        return redirect()->back(); 
     }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      
          if(!($numero = Numero::find($id))){
                return redirect()->route('numeros.index');
           }
         
          return view('numero.atualizar')->with(compact('numero'));
          
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(NumeroRequest  $request, $id)
    {
       if(!($numero = Numero::find($id))){
            return redirect()->route('numeros.index');
       }

        $numero->update($request->all());
        return view('numero.atualizar')->with(compact('numero'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    public function show($id)
    {
        if(!($numero = Numero::find($id))){
            return redirect()->route('numeros.index');
         }
     
      return view('numero.seleciona')->with(compact('numero'));
    }


    public function destroy($id)
    {
        $numero = Numero::destroy($id);
        return redirect()->route('numeros.index');
    }
}
