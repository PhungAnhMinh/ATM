<?php
	session_start();
	
	
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login</title>



<style>
*{
		margin: 0px;
		padding: 0px;
		}
	.form_register{
		margin: auto; 
		margin-top: 50px;
		
		width:450px;
		height:  400px;
		padding-top:150px;
		font-size:20px;
		}
	p{
		text-align:center;
		font-weight:bold;
		color: #deef1a;
		}
	
	
	.input{
		
		width: 300px;
		margin: auto;

		}
	.input input{
		
		width: 300px;
		color: white;
		background-color: #cf0608;
		}

	.abc{
		margin-top:20px;
		
		
		
		}
	.sm{
		text-align:center;
		margin-top:20px;
		
		margin-bottom: 80px;
		}
	.sm input {
		background-color: white; 
		width: 300px; 
		height: 30px; 
		color:red; 
		font-size: 16px; 
		font-weight: bold;
		margin: 0 auto;
		border-radius: 10px;
	}
	.text2{
		
		font-size:15px;
		margin-top:20px;
		width: 51.25px;
		margin:auto;
		

		}
	.text3{
		
		font-size:15px;
		margin-top:50px;
		width: 107.07px;
		margin:auto;
		

		}

	.text1{
		font-size:15px;
		
		margin-left:150px;
		
		}
	.logo {
		width: 326px;
		height: 46px;
		margin: 0 auto;
		margin-top: 100px;
	}
	.logo img{
		width: 326px;
		height: 46px;
		
		margin-top: 50px;
	}
	.tong{

		background-image: url('./img/techc.jpg');
		width: 450px;
		height: 600px;
		margin: auto;
		border-radius: 8px;
	}
	.bt1 span{
		width: 101.79px;
		margin-left: 10px;
		margin-top: 170px; 
		color: #c5b4b4; 
		font-size: 12px; 
		font-style: italic; 
		float: left;
		
	}
	.bt2 span{
		width: 110.33px;
		float: right;
		margin-right: 20px;
		margin-top: 160px; 
		color: #c5b4b4; 
		font-size: 12px; 
		font-style: italic; 
		
	}
	.dongke{
		width="300px";
		background-color: white;
	}
	body{
		background-color: #e6e6ff;
	}

	::placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
  color: white;
  opacity: 1; /* Firefox */
}

:-ms-input-placeholder { /* Internet Explorer 10-11 */
  color: blue;
}

::-ms-input-placeholder { /* Microsoft Edge */
  color: blue;
}
</style>
</head>
<body >
	<div class="tong">
	
	<form method="post" action="login_action.php">
		<?php if(isset($_COOKIE['msg'])) {?>
                        	 <div class="alert alert-warning">
					          <strong>Thông báo:</strong> <?=$_COOKIE['msg'] ?>
					        </div>
					    	<?php } ?>
    	<div class="form_register">

        	
            <div class="abc">    
                <div class="input">
                	<input style=" border:0 " type="number" placeholder="Số Điện Thoại" name="phone">
                	<hr class="dongke">
                </div>
            </div>
           
            <div class="abc">	
	        	<div class="input">
	        		<input style=" border:0px; " type="password" placeholder="Mật Khẩu(và số Token nếu có)" name="password">
	        		<hr class="dongke">
	        	</div>
	        </div>

			<div class="sm">
            	<input  type="submit" name="submit" value="ĐĂNG NHẬP">
            </div>
			
			<div class="abc">
	            <div class="text2">
	            	<a  style="color: white;" href="signup.php"> Đăng Kí</a>

	            </div>
        	</div>
        	
        	<div class="abc">
				<div class="text3">
	            	
	            	<a href="#" style="color: white; "> Quên Mật Khẩu ?</a> 
	            </div>
        	</div>
               
            <div class="bt1" >
            	<span>PHÙNG ANH MINH</span>
            </div>
            <div class="bt2" >
            	<span>
            		Contect: 0363 232 618
				</span>
            </div>
        </div>
    </form>
</div>

</body>
</html>