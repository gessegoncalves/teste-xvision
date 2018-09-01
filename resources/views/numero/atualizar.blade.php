  @extends('layouts.layout')
     @section('sistema')
  


      <!------------>
 @include('comuns.cabecalho')
 
 <!---------------->
 

 
    <header class="masthead">
      <div class="container h-100">
        <div class="row h-100">
          <div class="col-lg-12 my-auto">
            <div class="header-content mx-auto">


     @include('comuns.errors')


 <h3 class="myTitulo"> Atualize os dados deste número !</h3>

 <form action="{{route('numeros.update',['numero'=>$numero->id])}}"  method="POST">
       
            {!! csrf_field() !!}
                 <label for="usuario">Nome:</label>
                      <div class="input-group mb-3">                        
                           <input type="text" class="form-control" placeholder="Nome" required name="usuario" required  type="text" value="{{old('usuario',$numero->usuario)}}">
                      </div>
                      <label for="telefone">Telefone:</label>
                      <div class="input-group mb-3">
                           <input type="text" class="form-control phone" placeholder="Telefone" name="telefone" id="phone" type="tel" required value="{{old('telefone',$numero->telefone)}}">
                      </div>
                      <label for="custo">Custo Minimo</label>
                      <div class="input-group mb-3">                            
                           <input type="text" class="form-control number" placeholder="Custo" name="custo" id="custo" required value="{{old('custo',$numero->custo)}}">
                      </div>                                        

                      <div class="text-center">   
                              <button class="btn btn-outline btn-xl js-scroll-trigger">ATUALIZAR </button>
                              <a href="{{route('numeros.listar')}}" class="btn btn-outline btn-xl js-scroll-trigger">RETORNAR </a>
                      </div>            
              </form>    
            </div>
          </div>
        </div>
      </div>
    </header>
  


     <!------------>
 @include('comuns.rodape')
 
 <!---------------->

     @parent
@stop