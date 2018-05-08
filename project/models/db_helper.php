<?php 
	require_once 'db_connect.php';
	abstract class db_helper extends db_connect implements db_general_function{
		function insert(){}
		function select($cols,$tables,$conditions){
			$sql= "select $cols from $tables where $conditions";
			// echo $sql;
			// print_r($this->conn);
			$result =$this->conn->query($sql) or die($this->conn->error);
			// echo "<pre>";
			// print_r($result);
			// echo "</pre>";

			if($result->num_rows>0){
				while ($ans=$result->fetch_array(MYSQLI_ASSOC)) {
					// echo "<pre>";
					// print_r($result);
					// echo "</pre>";
						$data[]=$ans;
				}
				return $data;
				

				}
				else{
					return 0;
				}
		}
		function delete(){}
		function update(){}
	}
?>