<?php
session_start();
date_default_timezone_set('Asia/Ho_Chi_Minh');
    include('function.php');

		if(isset($_POST['submit'])){
			if($_POST['money']<50000){
				setcookie('msg', 'Bạn phải nhập số tiền lớn hơn 50.000 VND !',time()+3);
			}
			else{
				$session = $_SESSION['row']['acc_number'];
				$napTien = napTien($session, $_POST['money']); 


				if($napTien==true){
						setcookie('msg', 'Nạp tiền thành công',time()+3);
				 		
					}

				else{
	 			setcookie('msg', 'Nạp tiền thất bại!',time()+3);
			 	
	 			}
	 		}
 			header('location:nt.php');
		}
?>