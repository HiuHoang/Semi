<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V1</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="{{url('../public/sign')}}/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{url('../public/sign')}}/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{url('../public/sign')}}/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{url('../public/sign')}}/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{url('../public/sign')}}/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{url('../public/sign')}}/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{url('../public/sign')}}/css/util.css">
	<link rel="stylesheet" type="text/css" href="{{url('../public/sign')}}/css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
                
                <form class="login100-form validate-form" method="POST">
					@csrf
					<span class="login100-form-title">
						Register New Member
					</span>
					<div class="wrap-input100">
						<input class="input100" type="text" name="fullname" placeholder="Full Name">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-address-card" aria-hidden="true"></i>
						</span>
					</div>

                    <div class="wrap-input100 validate-input">
						<input class="input100" type="text" name="username" placeholder="User Name">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="email" placeholder="Email">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					<div class="container-login100-form-btn">
						<button class="login100-form-btn" type="submit">
							Sign Up
						</button>
					</div>

					<div class="text-center p-t-12">
						<span class="txt1">
							Forgot
						</span>
						<a class="txt2" href="#">
							Username / Password?
						</a>
					</div>

					<div class="text-center p-t-136">
						<a class="txt2" href="{{route('login')}}">
							Have already Account? Login
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>
				</form>
				<div class="login100-pic js-tilt" data-tilt>
					<img src="{{url('../public/sign')}}/images/img-01.png" alt="IMG">
				</div>
			</div>
		</div>
	</div>
	
	

	
<!--===============================================================================================-->	
	<script src="{{url('../public/sign')}}/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="{{url('../public/sign')}}/vendor/bootstrap/js/popper.js"></script>
	<script src="{{url('../public/sign')}}/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="{{url('../public/sign')}}/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="{{url('../public/sign')}}/vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="{{url('../public/sign')}}/js/main.js"></script>

</body>
</html>