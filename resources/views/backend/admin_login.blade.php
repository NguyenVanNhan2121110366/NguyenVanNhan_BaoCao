<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>

<head>
<title>Trang đăng nhập</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Gaming Login Form Widget Tab Form,Login Forms,Sign up Forms,Registration Forms,News letter Forms,Elements"/>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="{{asset('../public/backend/css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
</head>

<body>
	<div class="padding-all">
		<div class="header">
			<h1><img src="{{{'../public/backend/images/5.png'}}}" alt=" "> Đăng nhập trang quản trị</h1>
			
		</div>

		<div class="design-w3l">

			<div class="mail-form-agile">
				<form action="{{URL::to('/login-dashboard')}}" method="post">
					{{csrf_field()}}
					
					<input type="text" name="email" placeholder="Email" required=""/>
					<input type="password"  name="password" class="padding" placeholder="Password" required=""/>
			<?php
				$message = Session::get('message');
				if($message)
				{
					echo '<span class="text-alert">',$message,'</span>';
					Session::put('message', null);
				}
			?><br>
			
					<input type="submit" value="Đăng nhập">
				</form>
			</div>
		  <div class="clear"> </div>
		</div>
		<div class="footer">
		<p>© 2017 Gaming Login form. All Rights Reserved | Design by  <a href="https://w3layouts.com/" >  TheShy </a></p>
		</div>
	</div>
</body>
</html>