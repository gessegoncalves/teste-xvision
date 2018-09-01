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




 <h3 class="myTitulo">Remover número </h3>
 <p> Você deseja realmente remover este númro do cadastro ? <br> se sim, click no botão remover!</p>
 <form action="{{route('numeros.destroy',['numero'=>$numero->id])}}"  method="POST">


  
  


       
            {!! csrf_field() !!}

                 <label for="">Nome:</label>
                        <div class="input-group mb-3">
                        
                           <input type="text" disabled class="form-control" placeholder="Nome" required name="usuario" required  type="text" value="{{old('usuario',$numero->usuario)}}">
                        </div>
                        <label for="">Telefone:</label>
                        <div class="input-group mb-3">
                        
                           <input type="tel" disabled class="form-control phone" placeholder="Telefone" name="telefone"  type="tel" required value="{{old('telefone',$numero->telefone)}}">
                        </div>
                        <label for="">Custo Minimo</label>
                        <div class="input-group mb-3">
                            
                           <input type="text" disabled class="form-control" placeholder="Custo" name="custo" id="custo" required value="{{old('custo',$numero->custo)}}">
                        </div>                                        

                        <div class="text-center">   
                              <button class="btn btn-outline btn-xl js-scroll-trigger">REMOVER</button>
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