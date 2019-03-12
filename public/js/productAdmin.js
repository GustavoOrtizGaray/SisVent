class Products extends Ventanas {

	

	productDetail(result){
        $('#ad-pr-name').val(result.name);
        $('#ad-pr-description').val(result.description);
        $('#ad-pr-minstock').val(result.minimunStock);
        $('#ad-pr-maxstock').val(result.maximunStock);
        $('#ad-pr-realstock').val(result.realStock);
        $('#ad-pr-price').val(result.price);
        $("#ad-pr-unity").val(result.typeUnity);
        $("#ad-pr-category").val(result.typeCategory);
        $("#ad-pr-group").val(result.group);
        $("#ad-pr-state").val(result.state);
        $('#ad-pr-img').attr('src','ttp://127.0.0.1:8000/img_sist/'+result.image);
    }

    categoriDetail(result){
    	$('#resultadoB').html("");
    	var htmlBusqueda = "";
    	htmlBusqueda =`
    		<div>
				<div class="ad-pr-item bg-secondary rounded mb-2 row" id="1">	  
				   <div class="col-10 text-white mt-2">product 01</div>
				        <div class="col-2">    
				            <span class="badge bg-success badge-pill rounded-circle lista-circulo" style="top: 5px !important;"> </span>
				        </div>
				</div>

				<div class="ad-pr-item bg-secondary rounded mb-2 row" id="1">	  
				   <div class="col-10 text-white mt-2">product 02</div>
				        <div class="col-2">    
				            <span class="badge bg-success badge-pill rounded-circle lista-circulo" style="top: 5px !important;"> </span>
				        </div>
				</div>
		    </div>

    	`;
    	$('#resultadoB').append(htmlBusqueda);
    	listadoCategorias(this);

    }

    bs_input_file() {
	    $(".input-file").before(
	        function() {
	            if ( ! $(this).prev().hasClass('input-ghost') ) {
	                var dirImg=$("#ad-pr-img").attr("src");
	                var element = $("<input type='file' class='input-ghost' id='img1' name='img1' style='visibility:hidden; height:0; float:right'>");
	                element.attr("name",$(this).attr("name"));
	                element.change(function(){
	                    element.next(element).find('input').val((element.val()).split('\\').pop());
	                    var newImg= URL.createObjectURL(element[0].files[0]);
	                    document.querySelector("#ad-pr-img").src=newImg;
	                });
	                $(this).find("button.btn-choose").click(function(){
	                    element.click();
	                });
	                $(this).find("button.btn-reset").click(function(){
	                    element.val(null);
	                    $("#ad-pr-img").attr("src",dirImg);
	                    $(this).parents(".input-file").find('input').val('');
	                });
	                $(this).find('input').css("cursor","pointer");
	                $(this).find('input').mousedown(function() {
	                    $(this).parents('.input-file').prev().click();
	                    return false;
	                });
	                return element;
	            }
	        }
	    );
	}





}

function listadoCategorias(product){
//Recupera Datos
 $(".ad-pr-item").click(function(){
 	
    $(".ad-pr-item").removeClass("ad-pr-item-active");
    $(this).addClass("ad-pr-item-active");
    var productId=this.id;
    
    var url = "admin/product/productdetail";
    product.recuperarDatos( productId, url, function(result){
    	product.productDetail(result);
    })

})
}


$(document).ready(function(){
	var product = new Products;

	// filtro por categoria
	 $("#categoria option").click(function(){
        var idCat=$(this).val(); 
        /*
        var url = "";
        product.recuperarDatos( idCat, url, function(result){
        	product.categoriDetail(result);
        });
        */
        result = 20
        product.categoriDetail(result);

    });
	 // filtro por palabras
	 var buscador = "buscador";
     product.searchKey(buscador);
     listadoCategorias(product);

     // inputs 

     product.bs_input_file()
     	


});