@extends('layout.master')
<body id="login_bg">
	
	<nav id="menu" class="fake_menu"></nav>
	
	<div id="login">
		<aside>
			<figure>
            <a href="{{route('dashboard.analytical')}}"><img src="img/logo_sticky.svg" width="165" height="35" alt="" class="logo_sticky"></a>
			</figure>		
		<form>
			
				<div id="forgot_pw">
					<div class="form-group">
						<label>Please confirm login email below</label>
						<input type="email" class="form-control" name="email_forgot" id="email_forgot">
						<i class="icon_mail_alt"></i>
					</div>
					<p>You will receive an email containing a link allowing you to reset your password to a new preferred one.</p>
					<div class="text-center"><input type="submit" value="Reset Password" class="btn_1"></div>
				</div>
			
		</form>
		<!--form -->
        <div class="copy">© 2018 Sparker</div>
    </aside>
</div>
<!-- /login -->

		<!-- COMMON SCRIPTS -->
	@extends('script.common')
 
</body>
</html>