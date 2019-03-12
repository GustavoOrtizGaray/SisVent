
class Admin extends Ventanas {

    constructor(){
        super();
        this.productosVendidos();
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

}


$(document).ready(function(){
	var admin = new Admin;
	//buscador
	var buscador = "buscador";
    admin.searchKey(buscador);
    // Graficos
    for (var i = 0; i < document.querySelectorAll("[id^='myChart-']").length; i++) {
        var idgrafico = $("#myChart-"+i).attr("id");
        admin.graficos(idgrafico);
    }
   
})