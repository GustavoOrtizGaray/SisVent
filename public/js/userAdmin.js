

class ModeloHome {
    
    constructor(idgrafico,idbuscar){
        this.productosVendidos();
        this.clickBuscarCategoria();
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

    buscador(buscador){
        // Inicio Buscador Productos
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


    productosVendidos(){
        //Productos vendidos
        var now = new Date();
        var day = ("0" + now.getDate()).slice(-2);
        var month = ("0" + (now.getMonth() + 1)).slice(-2);
        var today = now.getFullYear()+"-"+(month)+"-"+(day) ;

        $('#productoDesde').val(today);
        $('#productoHasta').val(today);

        $('#productoDesde').change(function(){
            let productoDesde = $('#productoDesde').val();
            let productoHasta = $('#productoHasta').val();
            alert(productoDesde +"-"+ productoHasta);
        })

         $('#productoHasta').change(function(){
            let productoDesde = $('#productoDesde').val();
            let productoHasta = $('#productoHasta').val();
            alert(productoDesde +"-"+ productoHasta);
        })
        //Fin Productos Vendidos
    }

    recuperarFormulario(id,url){
         var self = this;
         $.ajax({
            url: url+"/"+id,
            dataType: "json",
            cache: false,
            processData: false,
            contentType: false,
            type: 'GET',
            success: function(php_response){
                self.llenaFormCategoria(php_response);
            },
            error: function(){
                alert("error en la comunicación con el servidor categoria");
            }
        })
    }

    llenaFormCategoria(respuesta){
        $("#nombreCategoria").val(respuesta[0].nombreCategoria);
        $("#estadoCategoria").val(respuesta[0].estadoCategoria);
        $("#descripcionCategoria").val(respuesta[0].descripcionCategoria);
        $("#btn_Guardar").text("Editar");
        $("#btn_Guardar").attr("idmodo", "2");
    }

     restauraFormCategoria(){
        $("#nombreCategoria").val("");
        $("#estadoCategoria").val("1");
        $("#descripcionCategoria").val("");
        $("#btn_Guardar").text("Guardar");
        $("#btn_Guardar").attr("idmodo", "1");
    }

    clickBuscarCategoria(){
        // click categoria
        var self = this;
        $('.categoria').click(function(){
            $(".categoria").removeClass("active");
            $(this).addClass("active");
            var id = $(this).attr("id");
            var url = "http://127.0.0.1:8000/admin/cate";
            self.recuperarFormulario(id, url);
           
        })
    }

    datosCategoria(datos){
        $("#cjtxt1").val("");
        alert(datos.cjtxt1);
    }




}

// Funcion de envio registro Datos

function datosFormuario(data, url, callback){
        id = 20;
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
}


function recorreChecInput(nombre){
    var datos = [];
    var i = 0;
    $('input[name='+nombre+'] ').each(function(index){
        if ($(this).is(':checked')) {
         datos[i] = $(this).val();    
         i++;   
        }
    });
    return datos;
}



$(document).ready(function(){
    var e = new ModeloHome();
    var buscador = "buscador";
    e.buscador(buscador);

    for (var i = 0; i < document.querySelectorAll("[id^='myChart-']").length; i++) {
        var idgrafico = $("#myChart-"+i).attr("id");
        e.graficos(idgrafico);
    }
   
    // envio formulario Ctegoria
    $("#formCategorias").submit(function(event){
        event.preventDefault();
        var url ="Url de envio"
        var categorias_data = new FormData();
        var  nombreCategoria = $('#nombreCategoria').val();
        var estadoCategoria = $('#estadoCategoria').val();
        var descripcionCategoria = $("#descripcionCategoria").val();
        var tipo = $("#btn_Guardar").attr("idmodo");

        categorias_data.append('nombreCategoria', nombreCategoria);
        categorias_data.append('estadoCategoria', estadoCategoria);
        categorias_data.append('descripcionCategoria', descripcionCategoria)
        console.log(categorias_data);

     
        var idnuevo = datosFormuario( categorias_data ,url ,function(id){
          
            if (tipo == "1") {
            var claseCat = (estadoCategoria == "1") ? "fas fa-check-circle check-sussec" : "fas fa-times-circle check-error" ;
            var divCategoria = `
                <div class="bg-secondary rounded mb-2 row itm-hover categoria"  id ="${id}">                        
                    <div class="col-10 text-white"> ${ nombreCategoria } </div>
                    <div class="col-2"> <i class=" ${ claseCat  } "></i></div>
                </div>
            `;
            $( "#resultadoB" ).prepend(divCategoria);
            e.clickBuscarCategoria();
        }


        });

        
    })

    // Nueva Categoria
    $("#nuevaCategoria").click(function(){
        e.restauraFormCategoria();
    })
   
    // Envio de formulario Facturacion

    $("#formFacturacion").submit(function(event){
        event.preventDefault();
        var modoEmision = recorreChecInput("modoEmision");
        var tipoEmision = recorreChecInput("tipoEmision");
        var numeroDias = $("#numeroDias").val();    
        alert(modoEmision +" -- "+tipoEmision);

        if (tipoEmision == "Automatico") {
            if (numeroDias.trim().length == 0) {
                alert("Ingrese numero de dias");
            }else{
                alert("Correcto + numero");    
            }
        }else{
            alert("Correcto");
        }



    });





});




