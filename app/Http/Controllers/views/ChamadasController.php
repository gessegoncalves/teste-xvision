<?php

namespace App\Http\Controllers\views;
use App\Chamada  as Chamada;
use App\Http\Requests\ChamadasRequest;
use App\Http\Controllers\Controller;


class ChamadasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $chamadas =  Chamada::orderBy('id', 'desc')->Paginate(50);

        return view('chamada.listar')->with(compact('chamadas')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('chamada.cadastrar');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ChamadasRequest $request)
    {
          $request['data'] =  date('Y-m-d H:m:s', strtotime($request['data'] .' '.   $request['hora']         )   ) ;
          Chamada::create($request->all());      
          return redirect()->back();
    }

   

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if(!($chamada = Chamada::find($id))){
            return redirect()->route('chamadas.index');
       }
     
      return view('chamada.detalhes')->with(compact('chamada'));
      
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ChamadasRequest $request, $id)
    {}


 /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         
       
       
        if(!($chamada = Chamada::find($id))){
            return redirect()->route('chamada.index');
       }
     
      return view('chamada.seleciona')->with(compact('chamada'));
      
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

      
        $numero = Chamada::destroy($id);
        return redirect()->route('chamadas.index');
    }
}
