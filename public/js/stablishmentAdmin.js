class Stablishment extends Ventanas {

    stablishmentDetail(result){
        
        $('#ad-st-name').val(result['0'].name);
        $('#ad-st-address').val(result['0'].address);
        $('#ad-st-state').val(result['0'].state);
        $('#ad-st-type').val(result['0'].typeStablishment);
        if(result['0'].typeStablishment=='1'){
            $('#ad-st-bussiness-name').val(result['0'].businessName);
            $('#ad-st-ruc').val(result['0'].RUC); 
            $('.principal').show();
        }else{
            
            $('.principal').hide();
        }
        
    }
}

$(document).ready(function(){

	var stablishment = new Stablishment;

	// filtro por nombre
     stablishment.searchAttr('buscador','ad-st-item','searchName');


    //codigo de establecimientos
     $(".ad-st-item").click(function(){
        $(".ad-st-item").removeClass("ad-st-item-active");
        $(this).addClass("ad-st-item-active");
        var stablishmentId=this.id;
        stablishment.recuperarDatos(stablishmentId,'admin/stablisment',function(result){
            stablishment.stablishmentDetail(result);
        });
        
    });


});