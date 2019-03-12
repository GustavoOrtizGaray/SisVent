class Billing extends Ventanas {

    recorreChecInput(nombre){
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

}



$(document).ready(function(){

    var billing = new Billing;

    $("#formFacturacion").submit(function(event){
        event.preventDefault();
        var modoEmision = billing.recorreChecInput("modoEmision");
        var tipoEmision = billing.recorreChecInput("tipoEmision");
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

})