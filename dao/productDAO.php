<?php 
class ProductDAO{
	public function reserve($service, $date, $note, $id){
		global $db;
			$sql = "INSERT INTO `partyneeds`.`reserve` (`id`, `service`, `date`, `note`, `id_fk`) 
					VALUES (null, '$service', '$date', '$note', '$id')";
			$result = $db->query($sql);	
		try{
			if($result){
				echo "success";
				return $result;
			}else{
				echo "failed ";
			}
		} catch(Exception $e){
			error_log($e->getMessage());
			return false;
		}	
	}

	public static function getCart($id){
		global $db;

			$sql = "SELECT * FROM product WHERE id = '{$id}'";
			$result = $db->query($sql);
		try{
			if($result){
				return $row = $result->fetch_assoc();		
			}else {
				return false;
			}
		} catch(Exception $e){
			error_log($e->getMessage());
			return false;
		}	
	}
	public static function getProduct($id, $service){
		global $db;

			$sql = "SELECT * FROM product WHERE id = '{$id}' AND service = '{$service}'";
			$result = $db->query($sql);
		try{
			if($result){
				return $row = $result->fetch_assoc();		
			}else {
				return false;
			}
		} catch(Exception $e){
			error_log($e->getMessage());
			return false;
		}	
	}

public static function productNumbers() {
		global $db;
		$sql = "SELECT MAX(id) AS id
				FROM product";
		$result = $db->query($sql);
		try{
			if ($result) {
				$row = $result->fetch_assoc();
				return $row['id'];
			} else {
				return false;
			}
		} catch(Exception $e){
			error_log($e->getMessage());
			return false;
		}
	}

}
 ?>