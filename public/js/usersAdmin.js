
class Users extends Ventanas {

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

}

 


$(document).ready(function(){
	var users = new Users;
	// Buscador
	var buscador = "buscador";
    users.searchKey(buscador);
    // Recuperar Datos
    $(".ad-us-item").click(function(){
        var userId=this.id;
        var url ="admin/user/userlist";  
        users.recuperarDatos( userId ,url ,function(result){
            users.userDetail(result);
        });
    })
})