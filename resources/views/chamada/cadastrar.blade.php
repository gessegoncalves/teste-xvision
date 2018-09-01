  @extends('layouts.layout')
     @section('sistema')
  
   <!------------>
 @include('comuns.cabecalho')
 
 <!---------------->


    <header class="masthead">  
      <div class="container h-100">
        <div class="row h-100">
      
          <div class="col-lg-12  my-auto">
            


 
  
  <h3 class="myTitulo">PESQUISAR NÚMERO:</h3>
 
  <div class="input-group mb-3">
      <input type="text" class="form-control" id="pesquisa" placeholder="Filtrar" >
  </div>

  <input type="hidden" id="lista_de_numeros"  value="{{\App\Numero::getNumeros()}}">
    
  
<div id="table_container"></div>
  


  
           
     
       


 @include('comuns.errors')
 
  
  
 
 
  

  
    
  

  


  

 <form action="{{route('chamadas.store')}}"  method="POST">




  
  


       
            {!! csrf_field() !!}

           

                        
                        <label for="origem">Telefone de origem:</label>
                        <div class="input-group mb-3">                        
                           <input      type="tel"  class="form-control phone" placeholder="Telefone Origem" name="origem"  id="origem"   required value="{{old('origem')}}">
                        </div>

                         <label for="destino">Telefone Destino:</label>
                         <div class="input-group mb-3">                        
                           <input  type="tel"  class="form-control phone" placeholder="Telefone Destino" name="destino" id="destino"  required value="{{old('destino')}}">
                        </div>


                        <label for="">Custo Minimo</label>
                        <div class="input-group mb-3">
                            
                           <input type="text" class="form-control number" placeholder="Custo Cunimo"  name="custo_minimo" id="custo_minimo" required value="{{old('custo_minimo')}}" >
                        </div>  

                        <label for="tempo">Duração</label>
                        <div class="input-group mb-3">                            
                           <input type="text" class="form-control" placeholder="Tempo" name="tempo" id="tempo" value=1 required value="{{old('tempo')}}">
                        </div>            


                        <label for="custo">Custo</label>
                        <div class="input-group mb-3">                            
                           <input type="text" class="form-control number" placeholder="Custo Total" name="custo" id="custo" required value="{{old('custo')}}">
                        </div> 


                         <label for="data">Data</label>
                        <div class="input-group mb-3">                            
                           <input type="date" class="form-control" placeholder="Custo Total" name="data" id="data" required value="{{old('data')}}">
                        </div>


                          <label for="hora">Hora</label>
                        <div class="input-group mb-3">                            
                           <input type="time" class="form-control custo" placeholder="Custo Total" name="hora" id="hora" required value="{{old('hora')}}">
                        </div>


                         <label for="detalhes">Detalhes</label>
                        <div class="input-group mb-3">                            
                           <input type="text" class="form-control" placeholder="Detalhes" name="detalhes" id="detalhes" required value="{{old('detalhes')}}">
                        </div>                                       


                        <div class="text-center">   
                              <button class="btn btn-outline btn-xl js-scroll-trigger">REGISTRAR </button>
                              <a href="{{route('chamadas.listar')}}" class="btn btn-outline btn-xl js-scroll-trigger">RETORNAR </a>
                        </div>
            
        </form>    
         
         <br>




        
        </div>
      </div>
    </header>
  


   
 <!------------>
 @include('comuns.rodape')
 
 <!---------------->

     @parent
@stop