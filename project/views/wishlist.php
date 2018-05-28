<?php
	session_start();
	// print_r($_SESSION);
	if(!isset($_SESSION['project_name'])){
		header("location:index.php");
	}
	require_once 'header.php';
?>
<div class="container">
	<h2 class="tex-center">Wishlist</h2>
	<?php
	// print_r($_SESSION);
	$uid=$_SESSION['project_uid'];
	// echo $uid;
	$result=$obj->show_wishlist_record($uid);
	pre($result);
	?>
	
</div>
<?php
	require_once 'footer.php';
?>