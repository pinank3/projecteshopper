$(document).ready(function(){
	$(".btn-update").click(function(){
		records =$("#update_form").serialize();
		$.post("../controllers/password-action.php",records).success(function(res){
			$(".msg_update").html(res);
		})
	})
})