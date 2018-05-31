$(document).ready(function(){

	$(".btn-login").click(function(){
		record = $('#login_form').serialize();
		$.post("../controllers/login-action.php",record).success(
			function(response){
				console.log(response)
				if(response == "ok"){
					window.location.href="index.php";
				}
				else{
				$(".msg_login").html(response);
				}
			})
	})

	$(".btn-register").click(function(){
		record = $('#register_form').serialize();
		$.post("../controllers/register-action.php",record).success(
			function(response){
				$(".msg_register").html(response);
			})
	})
	$(".add-to-cart").click(function(anch_obj){
		// alert(111)
		// console.log(anch_obj);
		anch_obj.preventDefault();
		// console.log($(this));
		// console.log($(this).attr("for"));
		proid = $(this).attr("for");
		// alert(proid)
		$.post("../controllers/cart-action.php","x="+proid).success(
			function(response){
				// console.log(response);
				// alert(response)
				$(".cart_count").html(response);
				alert("product updated in cart ")
				$("htm,body").animate({
					"scrollTop":0
				},1000);
				$(".cart_toast_msg").fadeIn(1000);
				setTimeout(function(){
					$(".cart_toast_msg").fadeOut(1000);
				},3000)
		})
	})
	$(".delete-to-cart").click(function(anch_obj){
		curtag=$(this)
		// alert(111)
		// console.log(anch_obj);
		anch_obj.preventDefault();
		proid=$(this).attr("for");
		// alert(proid)
		$.post("../controllers/delete-cart-action.php","x="+proid).success(function(response){
			// console.log(response);
				// alert(response)
				$(".cart_count").html(response);
				// alert("product updated in cart ")
				$("htm,body").animate({
					"scrollTop":0
				},1000);
				$(".cart_toast_msg").fadeIn(1000);
				setTimeout(function(){
					$(".cart_toast_msg").fadeOut(1000);
				},3000)
				curtag.parent().parent().parent().parent().parent().fadeOut(500)
		 })
	})
	$(".add-to-wishlist").click(function(anch_obj){
		anch_obj.preventDefault();
		// alert(1)
		proid =$(this).attr("for");
		alert(proid);

		$.ajax({
			type:"post",
			data:"x="+proid,
			// contentType:false,
			// processData:false,
			url:"../controllers/wishlist-action.php",
			success:function(res){
				console.log(res);
			},
			error :function(errmsg){
				console.log(errmsg);
			}
		})
	})
	$(".delete-to-wishlist").click(function(anch_obj){
		curtag=$(this)
		anch_obj.preventDefault();
		// alert(111)
		proid =$(this).attr("for");
		// alert(proid);
		$.post("../controllers/delete-wishlist-action.php","x="+proid).success(function(response){
			console.log(response);
			// alert(response)
			curtag.parent().parent().parent().parent().parent().fadeOut(500)
		});

	})
})