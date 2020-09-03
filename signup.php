<?php
$verifi = file_get_contents("controller/verification.txt");
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<title>Welcome to Extreme Packaging BANGLADESH</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!--===============================================================================================-->
</head>
<body>
  <div id="verifycode" style="display:none"><?php echo $verifi; ?></div>

	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">

				<span class="login100-form-title p-b-49">
					Bangaldesh Packaging LTD
				</span>


        <div id="putcode">
        <div class="wrap-input100 validate-input m-b-23" data-validate = "code is required">
          <span class="label-input100">ENTER VERIFICATION CODE</span>
          <input class="input100" type="text" name="code" id = "code" placeholder="Type code">
          <span class="focus-input100" data-symbol="&#xf206;"></span>
        </div>
        <div class="container-login100-form-btn m-b-23">
					<div class="wrap-login100-form-btn">
						<div class="login100-form-bgbtn"></div>
						<button class="login100-form-btn" onclick="verify()">
							ENTER CODE
						</button>
					</div>
				</div>
      </div>

        <div id="err" style="display:none">
        </div>


        <div id="show" style="display:none">
				<form class="login100-form validate-form" action="./controller/SignIn.php" method="post" enctype="multipart/form-data">



					<div class="wrap-input100 validate-input m-b-23" data-validate = "mail is required">
						<span class="label-input100">MAIL ID</span>
						<input class="input100" type="email" name="uname" placeholder="Type your mail">
						<span class="focus-input100" data-symbol="&#xf206;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<span class="label-input100">Password</span>
						<input class="input100 pwd" type="password" name="psw" placeholder="Type your password">
						<span class="focus-input100" data-symbol="&#xf190;"></span>
						<button class="btn btn-default reveal" type="button" style="float:right;margin-top: -35px;
  position: relative;
  z-index: 2;"><i class="glyphicon glyphicon-eye-open"></i></button>
					</div>



					<div class="text-right p-t-8 p-b-31">
						<a href="#">

						</a>
					</div>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn" type="submit" name="submit">
								SIGN UP
							</button>
						</div>
					</div>


				</form>
      </div>

			</div>
		</div>
	</div>

  <script>
  function verify(){
    var code = document.getElementById('verifycode').textContent;
    var ucode = document.getElementById("code").value;
    console.log(code, "+++", ucode);
    if(code.localeCompare(ucode)==0){
      document.getElementById('err').style.display="none";
      document.getElementById('show').style.display="block";
      document.getElementById('putcode').style.display="none";
      document.getElementById('err').style.display="block";
      document.getElementById('err').innerHTML=

      `<div class="card bg-success text-white text-center p-3">
          <blockquote class="blockquote mb-0">
          <p style="text-align:center; color:white">ENTER SIGNUP INFO</p>


          </blockquote>
        </div>`;
    }
    else{
      document.getElementById('err').style.display="block";
      document.getElementById('err').innerHTML=

      `<div class="card bg-danger text-white text-center p-3">
          <blockquote class="blockquote mb-0">
          <p style="text-align:center; color:white">CODE DOESN'T MATCH</p>


          </blockquote>
        </div>`;
    }
  }
  </script>

  <script>
	$(".reveal").on('click',function() {
    var $pwd = $(".pwd");
    if ($pwd.attr('type') === 'password') {
        $pwd.attr('type', 'text');
    } else {
        $pwd.attr('type', 'password');
    }
});
</script>




<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>
