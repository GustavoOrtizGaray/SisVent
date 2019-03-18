
var partUrl = "http://sisvent.pe/";
class Ventanas {

	 searchKey(buscador){
        //  Buscador por letras
        (function ($) {
            $('#'+buscador).keyup(function () {
                var rex = new RegExp($(this).val(),'i');
                $('#resultadoB div').hide();
                $('#resultadoB div').filter(function () {
                    return rex.test($(this).text()+ $(this).siblings('div').text());
                }).show();
            })
        }($));
        // Fin buscador
    }

    searchFilter(opcion, listaOpciones, classContenedor){
      // opcion: opcion del selct
      // listaOpciones : attributo para bsuqueda
      // classContenedor :nombre contenedor general
    	// Filtro por opcion
    	$("."+classContenedor).show();
        if(opcion=='all'){
            $(".ad-pr-item").show();
        }else{
            $(".ad-pr-item").each(function(item){
                if(opcion!==$(this).attr(listaOpciones)){
                    $(this).hide();
                }
            });
        }
        // fin Filtro
    }
    searchAttr(buscador, ficha,atrib){
        //  Buscador por letras
        (function ($) {
            $('#'+buscador).keyup(function () {
                var rex = new RegExp($(this).val(),'i');
                $('.'+ficha).hide();
                $('.'+ficha).filter(function () {   
                    if (rex.test($(this).attr(atrib))) {
                      return $(this);
                    }

                }).show();
            })
        }($));
        // Fin buscador
    }

    graficos(idgrafico){
       //Inicio Graficos
          var idChart = idgrafico
          var ctx = document.getElementById(idChart).getContext('2d');
           var myChart = new Chart(ctx, {
               type: 'bar',
               data: {
                   labels: ["Red", "Blue", "Yellow", "Green", "Purple", "Orange"],
                   datasets: [{
                       label: '# of Votes',
                       data: [12, 19, 3, 5, 2, 3],
                       backgroundColor: [
                           'rgba(255, 99, 132, 0.2)',
                           'rgba(54, 162, 235, 0.2)',
                           'rgba(255, 206, 86, 0.2)',
                           'rgba(75, 192, 192, 0.2)',
                           'rgba(153, 102, 255, 0.2)',
                           'rgba(255, 159, 64, 0.2)'
                       ],
                       borderColor: [
                           'rgba(255,99,132,1)',
                           'rgba(54, 162, 235, 1)',
                           'rgba(255, 206, 86, 1)',
                           'rgba(75, 192, 192, 1)',
                           'rgba(153, 102, 255, 1)',
                           'rgba(255, 159, 64, 1)'
                       ],
                       borderWidth: 1
                   }]
               },
               options: {
                   scales: {
                       yAxes: [{
                           ticks: {
                               beginAtZero:true
                           }
                       }]
                    }
                }
           });
       // FIn Grafico 
    }

    datosFormuario(data, url, callback){
    	//Formularios
        var id = 20;
        callback (id);
        /*
         $.ajax({
            url: url,
            dataType: "json",
            cache: false,
            processData: false,
            contentType: false,
            type: 'GET',
            success: function(php_response){
                alert("Ingreso Correcto");
            },
            error: function(){
                alert("error en la comunicación con el servidor categoria");
            }
        })
        */
        // Fin formulario
	}


  recuperarDatos(id,url,callback){

    url = partUrl+url;

    $.ajax({
        url: url+"/"+id,
        success: function(result){
        callback (result);
        }
    });
      
 }

}

