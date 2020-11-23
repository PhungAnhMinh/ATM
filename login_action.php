<?php
session_start();
    	include('connection.php');
		if(isset($_POST['submit'])){
			$phone = $_POST['phone'];
			$password = $_POST['password'];
			if(empty($phone)||empty($password)){ 
				echo "<script> alert('Bạn chưa nhập dữ liệu!'); </script>";
				header('location:login.php');
		}
			else{
				$sql = "SELECT * FROM khachhang WHERE phone='$phone' ";
				$run = mysqli_query($conn, $sql);
				$row = mysqli_fetch_array($run);
				$num = mysqli_num_rows($run);
				if($num==1)
				{
					$_SESSION['isLogin']=true;
					$_SESSION['row']= $row;
					
					
					$pw = $row['password'];
					if($password == $pw){ 
						$_SESSION['phone']= $phone;
						$_SESSION['row']= $row;
					 		setcookie('msg', 'Đăng nhập thành công',time()+5);
					 		
							header('location:index.php');
							}
					
					 else{ 
					 
					 		 setcookie('msg', 'Mật khẩu không đúng',time()+5);
							header('location:login.php');
							}
					

				}
				else {
					setcookie('msg', 'Sai tên số điện thoại',time()+5);
					header('location:login.php');
					}
			}
		}
?>