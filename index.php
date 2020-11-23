<?php 

session_start();
include('connection.php');
 if(!isset($_SESSION['isLogin']) && $_SESSION['isLogin'] != true){
        header("location:login.php");
    }

$session=$_SESSION['phone'] ;
$sql="select * from khachhang where phone =".$session;
$run=$conn->query($sql);
$row=$run->fetch_assoc();
	
	
	
 ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Techcombank</title>
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

			<h3> <?= $_SESSION['row']['name'] ?>

			 	
			 </h3>
			<hr>

			<div class="header_atm-bt">
				<span class="text1">TÀI KHOẢN MOBILE <?= $_SESSION['row']['acc_number'] ?></span>
				<span class="text2"><?= $row['money'] ?> VND</span>
			</div>
		</div>
		
		<div class="center_atm">
	        <div class="center1">
	         	    <div class="float-left text-center">
	         	    	<a href="ck.php">
	         				<img class="img-fluid" src="./img/chuyentien.jpg">
	         			</a>
	         			<a href="ck.php"><h6>Chuyển Khoản</h6></a>
	         		</div>
	         		<div class="text-center ">

	         			<a href="rt.php"><img class="img-fluid" src="./img/ruttien.jpg"></a>
	         			<a href="rt.php"><h6>Rút Tiền</h6></a>
	         		</div>
	         	    <div class="float-left text-center">
	         			<a href="tvsd.php"><img class="img-fluid" src="./img/truyvansodu.jpg"></a>
	         			<a href="tvsd.php"><h6>Truy Vấn Số Dư</h6></a>
	         		</div>
	         		<div class="text-center">
	         			<a href="dmk.php"><img class="img-fluid" src="./img/doimatkhau.jpg"></a>
	         			<a href="dmk.php"><h6>Đổi Mật Khẩu</h6></a>
	         		</div>
	         		<div class="text-center ">

	         			<a href="nt.php"><img class="img-fluid" src="./img/ruttien.jpg"></a>
	         			<a href="nt.php"><h6>Nạp Tiền</h6></a>
	         		</div>
	         </div>        	
	    </div>

	    

	</div>

</body>
</html>
