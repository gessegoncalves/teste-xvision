  @extends('layouts.layout')
     @section('sistema')
  
 

     <!------------>
 @include('comuns.cabecalho')
 
 <!---------------->



    <header class="masthead">

      <div class="container h-100">
        <div class="row h-100">
          <div class="col-lg-12 my-auto">
            <div class=" mx-auto">
          

             <h3 class="myTitulo"> Lista de números cadastrados </h3>
          
                <table class="table">
                  <thead>
                    <tr>
                    
                      <th scope="col">Nome:</th>
                      <th scope="col">Número:</th>
                      <th scope="col">Custo:</th>
                      <th scope="col"></th>
                      <th scope="col"></th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($numeros as $numero)                    
                      <tr>                     
                        <td><small>{{$numero->usuario}}</small></td>
                        <td><small>{{$numero->telefone}}</small></td>
                        <td><small>{{$numero->custo}}</small></td>
                        <td><a href="{{route('numeros.edit',$numero->id)}}"><i class="fa fa-search-plus"></i></a></td>
                        <td><a href="{{route('numeros.show',$numero->id)}}"><i class="fa fa-remove"></i></a></td>
                      </tr>
                     @endforeach               
                  </tbody>
                </table>

                <div class="text-center"> 

                      {{ $numeros->render()   }}
                      <a href="{{route('numeros.create')}}" class="btn btn-outline btn-xl js-scroll-trigger">CADASTRAR NOVO CONTATO</a>
            
              </div>
            
            
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