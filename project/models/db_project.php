<?php
require_once "db_helper.php";

	final class db_project extends db_helper{
		function show_brands(){
			// echo "hello";
			return $this->select(
				"br_id,br_name","brands","1"
			);
		}
		function show_categories(){
			// echo "hello";
			return $this->select(
				"ca_id,ca_name","categories","1"
			);
		}
		function show_products(){
			// echo "hello";
			return $this->select(
				"*","products","1 order by pro_id desc"
			);
		}
		function show_categorywise_products($id){
			// echo "hello";
			return $this->select(
				"*","products","pro_caid='$id' order by pro_id desc"
			);
		}
		function check_email_count($email){
			return self::select(
				"count(*) as cnt","users","us_email='$email'"
			);
		}
		function user_insert($name,$mobile,$email,$password){
			return self::insert(
					"users",
					"us_name,us_mobile,us_email,us_password",
					"'$name','$mobile','$email','$password'"
					);			
				}
		function get_user_data($email){
					return $this->select(
					"*","users","us_email='$email'"
			);

		}
			function get_password_userwise($email){
					return $this->select(
					"us_password","users","us_email='$email'"
			);

		}
		function update_password($pass,$email){
			return $this->update("users","us_password='$pass'","us_email='$email'");
		}
		function check_brand_count($brname){
			return self::select(
				"count(*) as cnt","brands","br_name='$brname'"
			);
		}
		function brand_insert($name){
			return self::insert(
					"brands",
					"br_name",
					"'$name'"
					);			
				}
		function check_category_count($caname){
			return self::select(
				"count(*) as cnt","categories","ca_name='$caname'"
			);
		}
		function category_insert($name){
			return self::insert(
					"categories",
					"ca_name",
					"'$name'"
					);			
				}
	}
	$obj = new  db_project();
?>