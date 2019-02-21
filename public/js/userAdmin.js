class ModeloHome {
    
    constructor(idgrafico,idbuscar){
        this.productosVendidos()
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
                var rex = new RegExp($(this).val(), 'i');
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
    //codigo admin/user
    userDetail(result){
        $('#ad-us-name').val(result['0'].name);
        $('#ad-us-surname').val(result['0'].surname);
        $('#ad-us-dni').val(result['0'].dni);
        $('#ad-us-fnac').val(result['0'].fnac);
        $('#ad-us-email').val(result['0'].email);
        $('#ad-us-pass').val(result['0'].password);
        $('#ad-us-address').val(result['0'].address);
        $('#ad-us-cel').val(result['0'].cel);
        $('#ad-us-stablishment').val(result['0'].stablishment);
        $('#ad-us-state').val(result['0'].state);
        $("input[name=ad-us-typeAccount]").each(function(index){
            $(this).attr('checked',false);
            for (var j = 0; j<result['0'].typeAccount.length; j++) {
                if($(this).prop('id')==result['0'].typeAccount[j].title){
                    $(this).attr('checked',true);
                }
            }
        });
    }
    //fin codigo admin/user
    //código admin/product
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
        $('#ad-pr-img').attr('src','http://sisvent.pe/img_sist/'+result.image);
    }
    //fin admin/producto
}

class adminStablishment extends ModeloHome{
    
}






function bs_input_file() {
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



$(document).ready(function(){
    bs_input_file();
    var e = new ModeloHome();
    var buscador = "buscador";
    e.buscador(buscador)

    for (var i = 0; i < document.querySelectorAll("[id^='myChart-']").length; i++) {
        var idgrafico = $("#myChart-"+i).attr("id");
        e.graficos(idgrafico)
    }
    //llamando metodo user list
    var userList;       
    $(".ad-us-item").click(function(){
        var userId=this.id;
        $.ajax({
            url: "http://sisvent.pe/admin/user/userlist/"+userId,
            success: function(result){
                e.userDetail(result);
            }
        });
        
    })
    $(".ad-pr-item").click(function(){
        $(".ad-pr-item").removeClass("ad-pr-item-active");
        $(this).addClass("ad-pr-item-active");
        var productId=this.id;
        $.ajax({
            url: "http://sisvent.pe/admin/product/productdetail/"+productId,
            success: function(result){
                e.productDetail(result);
            }
        });
    })
    $("#categoria option").click(function(){
        var opcion=$(this).val();
        $(".ad-pr-item").show();
        if(opcion=='all'){
            $(".ad-pr-item").show();
        }else{
            $(".ad-pr-item").each(function(item){
                if(opcion!==$(this).attr('date-cat')){
                    $(this).hide();
                }
            });
        }
    });
    //codigo de establecimientos
    $(".ad-st-item").click(function(){
        $(".ad-st-item").removeClass("ad-st-item-active");
        $(this).addClass("ad-st-item-active");
        var stablishmentId=this.id;
        alert(stablishmentId);
    });

    //fin codigo de establecimientos
    
    
   
});