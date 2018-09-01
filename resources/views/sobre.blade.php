
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

               <h3 class="myTitulo"> Sobre este sistema  !</h3>

                <p> Este sistema foi desenvolvido a pedido da empresa  <strong> XVISION </strong>  como um teste para o cargo de programador </p>
                <p> As seguintes tecnologias foram utilizadas</p>
                <ul>
                   <li>Laravel</li>
                   <li>Laravel Blade - Gerenciador de template</li>
                   <li>MySql</li>
                   <li>Twitter Bootstrap</li>
                   <li>JQuery</li>
                <ul>
            
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