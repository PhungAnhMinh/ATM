<?php 

session_start();
include('connection.php');
 // if(!isset($_SESSION['isLogin']) && $_SESSION['isLogin'] != true){
 //        header("location:login.php");
 //    }

$session=$_SESSION['phone'] ;
$sql="select * from khachhang where phone =".$session;
$run=$conn->query($sql);
$row=$run->fetch_assoc();

	
 ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Chuyển Khoản</title>
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

			<h4 style="text-align: center;">CHUYỂN KHOẢN</h4>
	        <?php if(isset($_COOKIE['msg'])) {?>
			    <div class="alert alert-warning">
					<strong>Thông báo:</strong> <?=$_COOKIE['msg'] ?>
				</div>
			<?php } ?>
	        <div style="margin: auto; width: 40%"> 	   
				<form method="post" action="ck_action.php">
					
			    	Tài Khoản Nguồn<br>
			    	<?= $_SESSION['row']['acc_number'] ?>
			    	<br>
			    	Số thẻ/ Số TK hưởng<br>
			    	<input type="number" name="newacc_number">
			    	<br>
			    	Số tiền<br>
			    	<input type="number" name="money">
			    	<br>
			    	Nội dung chuyển khoản<br>
			    	<input type="text" name="description" value="<?= $_SESSION['row']['name'] ?> chuyen khoan">
			    	<br><br>
			    	
			    	<input type="submit" name="submit" value="CHUYỂN KHOẢN">

 	</form>
 </div>
	    <div class="bt_atm">
			
	    </div>

	</div>

</body>
</html>
