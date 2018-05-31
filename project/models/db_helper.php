<?php
	require_once 'db_connect.php';
	abstract class db_helper extends db_connect implements db_general_function{
		function insert($table,$columns,$values){
			$sql="insert into $table ($columns) values($values)";
			// echo $sql;
			return $this->conn->query($sql) or die($this->conn->error);
		}
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
		function delete($table,$condition){
			$sql="delete from $table where $condition";
			return $this->conn->query($sql) or die($this->conn->error);
		}
		function update($tables,$records,$condition){
			$sql= "update $tables set $records where $condition";
			return $this->conn->query($sql) or die($this->conn->error);
		}
	}
?>