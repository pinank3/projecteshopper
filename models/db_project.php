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

		function show_cart_record($pro){
			// echo $pro;
			return $this->select("*","products","pro_id in($pro) order by pro_id desc");
		}
		function product_insert($data){
			return self::insert(
					"products",
					"pro_name,pro_price,pro_discount,pro_caid,pro_brid,pro_description,pro_path",
					"'$data[0]','$data[1]','$data[2]','$data[3]','$data[4]','$data[5]','$data[6]'"
					);
		}
		function wishlist_insert($pid,$uid){
			echo $pid;
			return parent::insert(
				"wishlist",
				"wi_uid,wi_pid",
				"'$uid','$pid'"
			);
		}
		function check_count_wishlist($pid,$uid){
			return self::select(
				"count(*) as cnt","wishlist","wi_pid='$pid' and wi_uid='$uid'"
			);
		}
		function show_wishlist_record($uid){
			// echo $uid;
			return $this->select(
				"pro_id,pro_name,pro_price,pro_discount,pro_description,pro_path","products,wishlist","wi_uid='$uid' and wi_pid=pro_id"
		);
		}
		function delete_from_wishlist($uid,$id){
			// echo $uid;
			return $this->delete("wishlist","wi_uid='$uid' and wi_pid='$id'");
		}

	}
	$obj = new  db_project();
?>