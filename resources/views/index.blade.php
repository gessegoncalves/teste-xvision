
 @extends('layouts.layout')
 @section('sistema')



  <!------------>
@include('comuns.cabecalho')

<!---------------->

    <header class="masthead">
      <div class="container h-100">
        <div class="row h-100">
          <div class="col-lg-7 my-auto">
            <div class="header-content mx-auto">

  <h3 class="myTitulo"> Controle de custos de chamadas !</h3>

              <h1 class="mb-5">Controle de chamadas, registre as chamadas de sua empresa e saiba o quanto você esta gastando com ligações. </h1>
              <a href="{{route('chamadas.create')}}" class="btn btn-outline btn-xl js-scroll-trigger">REGISTRAR UMA CHAMADA !</a>
            </div>
          </div>




          <div class="col-lg-5 my-auto">
            <div class="device-container">
              <div class="device-mockup iphone6_plus portrait white">
             
                <div class="device">
               
                  <div class="screen">
                    <!-- Demo image for screen mockup, you can put an image here, some HTML, an animation, video, or anything else! -->
                    <img src="/site/img/demo-screen-1.jpg"  alt="" >
                  </div>
                  <div class="button">
                    <!-- You can hook the "home button" to some JavaScript events or just remove it -->
                  </div>
                </div>
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