class Category extends Ventanas{

	 constructor(){
        super();
        this.clickBuscarCategoria();
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
            var categoryId = $(this).attr("id");
            var url = "admin/cate";
        	self.recuperarDatos( categoryId, url, function(result){
    		self.llenaFormCategoria(result);
    		})   
           
        })
    }


}

$(document).ready(function(){

	var category = new Category;
	// buscador
	category.searchKey("buscador");

	// Nueva Categoria
    $("#nuevaCategoria").click(function(){
        category.restauraFormCategoria();
    })
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
        category.datosFormuario( categorias_data ,url ,function(id){
          
            if (tipo == "1") {
            var claseCat = (estadoCategoria == "1") ? "fas fa-check-circle check-sussec" : "fas fa-times-circle check-error" ;
            var divCategoria = `
                <div class="bg-secondary rounded mb-2 row itm-hover categoria"  id ="${id}">                        
                    <div class="col-10 text-white"> ${ nombreCategoria } </div>
                    <div class="col-2"> <i class=" ${ claseCat  } "></i></div>
                </div>
            `;
            $( "#resultadoB" ).prepend(divCategoria);
            category.clickBuscarCategoria();
        }
        });

        
    })

   




})