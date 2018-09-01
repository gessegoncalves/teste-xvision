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


 

   <h3 class="myTitulo"> Exibe detalhes da ligação !</h3>

 <form>


  
      
      


       
            {!! csrf_field() !!}

               
                        
                        <label for="origem">NUMERO DE ORIGEM:</label>
                        <div class="input-group mb-3">                        
                           <input type="text" class="form-control" placeholder="Telefone" name="origem"  id="origem" disabled  type="tel" required value="{{$chamada->origem}}">
                        </div>

                         <label for="destino">Telefone Destino:</label>
                         <div class="input-group mb-3">                        
                           <input type="text" class="form-control" placeholder="Telefone" name="destino" id="destino" disabled type="tel" required value="{{$chamada->destino}}">
                        </div>


                       

                        <label for="tempo">Duração</label>
                        <div class="input-group mb-3">                            
                           <input type="text" class="form-control" placeholder="Tempo" name="tempo" id="tempo" disabled value="{{$chamada->tempo}}"   >
                        </div>            


                        <label for="custo">Custo</label>
                        <div class="input-group mb-3">                            
                           <input type="text" class="form-control" placeholder="Custo Total" name="custo" id="custo" required disabled value="{{$chamada->custo}}">
                        </div> 


                         <label for="data">Data</label>
                        <div class="input-group mb-3">                           
                           <input type="text" class="form-control" disabeld placeholder="Custo Total" name="data" id="data" disabled required value="{{ date('d/m/Y h:m', strtotime($chamada->data)) }}">
                        </div>


                       

                         <label for="detalhes">Detalhes</label>
                        <div class="input-group mb-3">                            
                           <input type="text" class="form-control" placeholder="Custo Total" name="detalhes" id="detalhes" disabled required value="{{$chamada->detalhes}}">
                        </div>                                       


                        <div class="text-center">   
                         
                              <a href="{{route('chamadas.listar')}}" class="btn btn-outline btn-xl js-scroll-trigger">RETORNAR </a>
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