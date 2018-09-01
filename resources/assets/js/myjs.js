$(document).ready(function () {



    $('#lista_de_numeros').ready(function(){ 
        if($('#lista_de_numeros')[0]){
                   criatabela(JSON.parse($("#lista_de_numeros").val()))
        }     
    })


    $('#table_container').on('click', "button", function () {

        if(($(this).attr('class')) == 'origem'){

            $('#origem').val($(this).val())
        }

        if(($(this).attr('class')) == 'destino'){

            let posicao  = ($(this).val()).indexOf('a');

            let numero = ($(this).val()).substring(0,posicao)
            
            let custo = ($(this).val()).substring(posicao,10)

            $('#destino').val(numero)
            $('#custo_minimo').val(custo)
            $('#custo').val(  $('#custo_minimo').val() * $('#tempo').val()  ) 


        }
    });


    $("#pesquisa" ).keyup(function() {
       
        let agenda = JSON.parse($("#lista_de_numeros").val())
        let valor  =   $("#pesquisa").val()
        
        let pesquisa  = agenda.filter(function(elem,i, agenda){
            return (elem.telefone.indexOf(valor) != -1) || (elem.usuario.indexOf(valor) != -1)
            })   
     
        criatabela(pesquisa)        
     
    });
  

    function criatabela(pesquisa){

        let table = `<table class="table" id="dataTable">
        <thead>
            <tr>
                <th>USUARIO</th>
                <th>TELEFONE</th>
                <th>CUSTO</th>
                <th>ORIGEM</th>
                <th>DESTINO</th>
            </tr>
         </thead>
      <tbody>`;

    for(let x =0;x<pesquisa.length;++x){
            table += `<tr>
                        <td>${pesquisa[x].usuario}</td>    
                        <td>${pesquisa[x].telefone}</td>
                        <td>${pesquisa[x].custo}</td>
                        <td><button   value="${pesquisa[x].telefone}" class="origem">ADD</button></td>
                        <td><button   value="${pesquisa[x].telefone}a${pesquisa[x].custo}" class="destino">ADD</button></td>
                    </tr>`;    
                    
             if(x==3)
                 break         
    }

        table += `<tbody></table>`;

        $("#table_container").html(table);

 } 


    $(".phone")
        .mask("(99)9999-9999?9")
        .focusout(function (event) {  
            var target, phone, element;  
            target = (event.currentTarget) ? event.currentTarget : event.srcElement;  
            phone = target.value.replace(/\D/g, '');
            element = $(target);  
            element.unmask();  
            if(phone.length > 10) {  
                element.mask("(99)99999-999?9");  
            } else {  
                element.mask("(99)9999-9999?9");  
            }  
    });
 
  

    $('.number').maskNumber();      
    $('[name=tempo]').maskNumber({integer: true,});
        



    $("#tempo").keyup(function(){
        let custo =   ( $("#custo_minimo").val() * $("#tempo").val() )
        $("#custo").val(custo)
    })
 

});