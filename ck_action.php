<?php

date_default_timezone_set('Asia/Ho_Chi_Minh');
    include('function.php');
    session_start();

		if(isset($_POST['submit'])){

			$session =  $_SESSION['row']['acc_number'];
			if($_POST['newacc_number'] == $session){
				setcookie('msg', 'Bạn không thể tự chuyển cho mình!',time()+3);
				header('location:ck.php');
			}
			else{
				$run=selectKhachHang($session);
				$row = $run->fetch_assoc();
				$num = mysqli_num_rows($run);
				

				$run1 =selectKhachHang($_POST['newacc_number']);
				$row1 = $run1->fetch_assoc();
				$num1 = mysqli_num_rows($run1);

				if($num1>0 && $num>0){
					if($_POST['money']<50000){
						setcookie('msg', 'Bạn phải nhập số tiền lớn hơn 50.000 VND !',time()+3);
						header('location:ck.php');
					}
					else{
						$money = $row['money']-$_POST['money'];
						$money1 = $row1['money']+$_POST['money'];

						$result = updateKhachHang($money, $_POST['description'], $session);
						$result1 = updateKhachHang($money1, $_POST['description'], $_POST['newacc_number']);


						if($result==true && $result1==true){
							setcookie('msg', 'Chuyển khoản thành công',time()+3);
					 		header('location:ck.php');
						}
					
					}
				}

	 			else{
	 			setcookie('msg', 'Chuyển khoản thất bại!',time()+3);
			 	header('location:ck.php');
	 			}
	 		}
 
		}
?>