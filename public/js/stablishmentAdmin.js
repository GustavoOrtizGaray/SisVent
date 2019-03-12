class Stablishment extends Ventanas {

 searchKeySta(buscador){
        //  Buscador por letras
        (function ($) {
            $('#'+buscador).keyup(function () {
                var rex = new RegExp($(this).val(),'i');
                $('#resultadoB div').hide();
                $('#resultadoB div').filter(function () {
           
   
                    if (rex.test($(this).text())) {
                    	return $(this).text()+ $(this).siblings('div').text();
                    }

                }).show();
            })
        }($));
        // Fin buscador






    }


}

$(document).ready(function(){

	var stablishment = new Stablishment;

	// filtro por palabras
	 var buscador = "buscador";
     stablishment.searchKeySta(buscador);

    //codigo de establecimientos
     $(".ad-st-item").click(function(){
        $(".ad-st-item").removeClass("ad-st-item-active");
        $(this).addClass("ad-st-item-active");
        var stablishmentId=this.id;
        alert(stablishmentId);
    });


});