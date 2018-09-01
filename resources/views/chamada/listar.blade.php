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
     

        

             <h3 class="myTitulo"> Lista de chamadas realizadas </h3>
          
                <table class="table">
                  <thead>
                    <tr>
                    
                      <th scope="col">Origem:</th>
                      <th scope="col">Destino:</th>
                      <th scope="col">Tempo:</th>
                      <th scope="col">Custo:</th>
                      <th scope="col"></th>
                      <th scope="col"></th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($chamadas as $chamada)                    
                      <tr>                     
                        <td><small>{{$chamada->origem}}</small></td>
                        <td><small>{{$chamada->destino}}</small></td>
                        <td><small>{{$chamada->tempo}}</small></td>
                        <td><small>{{$chamada->custo}}</small></td>
                        <td><a href="{{route('chamadas.edit',$chamada->id)}}"><i class="fa fa-search-plus"></i></a></td>
                        <td><a href="{{route('chamadas.show',$chamada->id)}}"><i class="fa fa-remove"></i></a></td>
                      </tr>
                     @endforeach               
                  </tbody>
                </table>

                <div class="text-center"> 

                      {{ $chamadas->render()   }}
                         <a href="{{route('chamadas.create')}}" class="btn btn-outline btn-xl js-scroll-trigger">CADASTRAR NOVA CHAMADA</a>
                      <br>
<br>
            
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