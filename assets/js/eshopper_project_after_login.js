$(document).ready(function(){
	$(".btn-update").click(function(){
		records =$("#update_form").serialize();
		$.post("../controllers/password-action.php",records).success(function(res){
			$(".msg_update").html(res);
		})
	})
	$(".btn-brand").click(function(){
		// alert(1)
		records =$("#brand_form").serialize();
		$.post("../controllers/brand-action.php",records).success(function(res){
			$(".msg_brand").html(res);
		})
	})
	$(".btn-category").click(function(){
		// alert(1)
		records =$("#category_form").serialize();
		$.post("../controllers/category-action.php",records).success(function(res){
			$(".msg_category").html(res);
		})
	})

})