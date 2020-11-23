<?php 

session_start();
include('function.php');

 if(!isset($_SESSION['isLogin']) && $_SESSION['isLogin'] != true){
        header("location:login.php");
    }
$phone = $_SESSION['phone'];
$sql="select * from khachhang where phone =".$phone;
$run=$conn->query($sql);
$row=$run->fetch_assoc();


if(isset($_POST['ok'])){
	$session = $_SESSION['row']['acc_number'];
	$row = selectKhachHang($session) -> fetch_assoc();
		
	if($_POST['newpass']==$_POST['repass'] ){

		if($row['password'] == $_POST['pass'] ){
			$sql = "update khachhang set password = ".$_POST['newpass']." where acc_number =".$session ;
			$run = $conn-> query($sql);

			if($run==true){setcookie('msg', 'Thay đổi mật khẩu thành công!',time()+3);}
			else{setcookie('msg', 'Đổi mật khẩu không thành công!',time()+3);}
		}
		else{setcookie('msg', 'Mật khẩu cũ không đúng!',time()+3);}
	}
	else{setcookie('msg', 'Mật khẩu mới và nhập lại mật khẩu phải trùng nhau!',time()+3);}
	header('location:dmk.php');
}
	
 ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Đổi mật khẩu</title>
<!-- Bootstrap -->
		<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>

		<!-- Font Awesome Icon -->
		<link rel="stylesheet" href="css/font-awesome.min.css">

		<!-- Custom stlylesheet -->
		<link type="text/css" rel="stylesheet" href="script/css/style.css">
		<link type="text/css" rel="stylesheet" href="script/css/bootstrap.min.css">

</head>
<body style="background-color: #e6e6ff;">
	<div class="tong">
		<div class="menu">
			<div class="menu-logo">
				<img src="./img/logo_techcombank.png">
			</div>

			<div class="menu-right">
				<a href="logout.php">Đăng Xuất</a>
			</div>

		</div>

		<div class="header_atm" style="background-image: url('./img/nen_index.jpg');" >
			<img src="./img/<?= $_SESSION['row']['thumnail'] ?>">

			<h3>
					
					<?= $_SESSION['row']['name'] ?>
					

			 	
			 </h3>
			<hr>

			<div class="header_atm-bt">
				<span class="text1">TÀI KHOẢN MOBILE <?= $_SESSION['row']['acc_number'] ?></span>
				<span class="text2"><?= $row['money'] ?> VND</span>
			</div>
		</div>
		
		<div class="center_atm">
			 
			 <button type="button"><a href="index.php"><--</a></button>

			<h4 style="text-align: center;">ĐỔI MẬT KHẨU</h4>
	       <?php if(isset($_COOKIE['msg'])) {?>
			                        	 <div class="alert alert-warning">
								          <strong>Thông báo:</strong> <?=$_COOKIE['msg'] ?>
								        </div>
								    	<?php } ?>
	        <div style="margin: auto; width: 40%"> 	   
				<form method="post" action="#">
					
			    	
			    	<input type="password" placeholder="Nhập mật khẩu cũ" name="pass">
			    	<br>
			    	<br>
			    	
			    	<input type="password" placeholder="Nhập mật khẩu mới" name="newpass">
			    	<br><br>
			    	<input type="password" placeholder="Nhập lại mật khẩu mới" name="repass">
			    	<br><br>
			    	<input type="submit" value="ĐỒNG Ý" name="ok">
			    	
 	</form>
 </div>
	    <div class="bt_atm">
			
	    </div>

	</div>

</body>
</html>
