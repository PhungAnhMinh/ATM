<?php
    	include('connection.php');
		if(isset($_POST['submit'])){
			$name	= $_POST['name'];
			$phone 		= $_POST['phone'];
			$password 	= $_POST['pass'];
			$acc_number = $_POST['acc_number'];
			$address	= $_POST['address'];
			
			$repassword 	= $_POST['repass'];

			if($repassword != $password){
				echo "<script>alert('Mật khẩu nhập lại chưa đúng!')</script>";
				header('location:signup.php');
			}
			else{
			$sqlcheck = "SELECT * FROM khachhang WHERE acc_number='$acc_number' ";
				$runcheck = mysqli_query($conn, $sqlcheck);
				$numcheck = mysqli_num_rows($runcheck);
				if($numcheck==1) {echo "<script> alert('Số tài khoản đã tồn tại!'); </script>";
					header('location:signup.php');
					}
				else
				{	
							
								
			$query_creat_user = "INSERT INTO `khachhang`(`name`, `address`, `acc_number`, `phone`, `password`) VALUES ('$name','$address',$acc_number,$phone,'$password')";



			$test = mysqli_query($conn,$query_creat_user);
			

			if($test) {
				echo "<script> alert('Đăng kí thành công!'); </script>";
				header('location:login.php');
			}
			else{ 
				echo "<script> alert('Đăng kí thấ bại!'); </script>";
				header('location:signup.php');
			}
				
				}
			}
		}
	?>