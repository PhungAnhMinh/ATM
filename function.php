<?php  
	include('connection.php');
	
	
	

/* Hàm select  */
   

function selectKhachHang($acc_number){
		
		
		global $conn;
		$sql ="SELECT * FROM `khachhang` WHERE acc_number=".$acc_number;
		
		$run = $conn->query($sql);

		return $run;
	}

/* Hàm rút tiền */
	function rutTien($acc_number,  $postMoney){
			global $conn;
			$query = "UPDATE khachhang SET money=money - ".$postMoney."  WHERE acc_number=".$acc_number;
			$rutTien = $conn->query($query);
		return $rutTien;
	}
	

/* Hàm nạp tiền */
		function napTien($acc_number,  $postMoney){
			global $conn;
			$query = "UPDATE khachhang SET money=money + ".$postMoney."  WHERE acc_number=".$acc_number;
			$napTien = $conn->query($query);
		
		return $napTien;
	}
	
/* Cập nhật bảng khachhang*/
	function updateKhachHang($money, $description, $acc_number){
		global $conn;

		$query = "UPDATE khachhang SET money=".$money.",description= '".$description."' WHERE acc_number=".$acc_number;
		$result = $conn->query($query);
		return $result;
	}

?>