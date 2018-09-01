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

   <h3 class="myTitulo"> Cadastrar novo número de telefone!</h3>


 <form action="{{route('numeros.store')}}"  method="POST">


  



       
            {!! csrf_field() !!}

                 <label for="">Nome:</label>
                        <div class="input-group mb-3">
                        
                           <input type="text" class="form-control" placeholder="Nome" required name="usuario" required  type="text" value="{{old('usuario')}}">
                        </div>
                        <label for="">Telefone:</label>
                        <div class="input-group mb-3">
                        
                           <input type="tel" class="phone form-control" placeholder="Telefone" name="telefone"     required value="{{old('telefone')}}">
                     

                        </div>
                        <label for="">Custo Minimo</label>
                        <div class="input-group mb-3">
                            
                           <input type="text" class="form-control number" placeholder="Custo" name="custo" id="custo" required value="{{old('custo')}}">
                        </div>                                        

                        <div class="text-center">   
                              <button class="btn btn-outline btn-xl js-scroll-trigger">CADASTRAR </button>
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

