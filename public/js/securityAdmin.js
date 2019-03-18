class Security extends Ventanas {


}


$(document).ready(function(){
    var security = new Security;

    $("#formSecurity").submit(function(event){
        event.preventDefault();

        var anteriorContrasenia = $("#antContrasenia").val();
        var nuevaContrasenia  = $("#nuevaContrasenia").val();
        var repContrasenia = $("#repContrasenia").val();
        

        alert(anteriorContrasenia +"--"+ nuevaContrasenia +"--"+ repContrasenia);


    });


})





