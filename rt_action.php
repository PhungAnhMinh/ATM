<?php
session_start();
date_default_timezone_set('Asia/Ho_Chi_Minh');
    include('function.php');

		if(isset($_POST['submit'])){
			$session = $_SESSION['row']['acc_number'];
			if($_POST['money']<50000){
				setcookie('msg', 'Bạn phải nhập số tiền lớn hơn 50.000 VND !',time()+3);
			}
			else{
				$rutTien = rutTien($session, $_POST['money']);


				if($rutTien==true){
						setcookie('msg', 'Rút tiền thành công',time()+3);
				 		
					}

				else{
	 			setcookie('msg', 'Rút tiền thất bại!',time()+3);
			 	
	 			}
	 		}
 			header('location:rt.php');
		}
?>