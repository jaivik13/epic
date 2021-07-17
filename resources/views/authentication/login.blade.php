@extends('layout.master')

<body id="login_bg">
	
	<nav id="menu" class="fake_menu"></nav>
	
	<div id="login">
		<aside>
			<figure>
            <a href="{{route('dashboard.analytical')}}"><img src="img/logo_sticky.svg" width="165" height="35" alt="" class="logo_sticky"></a>
			</figure>
			  <form>
				<div class="access_social">
					<a href="#0" class="social_bt facebook">Login with Facebook</a>
					<a href="#0" class="social_bt google">Login with Google</a>
					<a href="#0" class="social_bt linkedin">Login with Linkedin</a>
				</div>
				<div class="divider"><span>Or</span></div>
				<div class="form-group">
					<label>Email</label>
					<input type="email" class="form-control" name="email" id="email">
					<i class="icon_mail_alt"></i>
				</div>
				<div class="form-group">
					<label>Password</label>
					<input type="password" class="form-control" name="password" id="password" value="">
					<i class="icon_lock_alt"></i>
				</div>
				<div class="clearfix add_bottom_30">
					<div class="checkboxes float-left">
						<label class="container_check">Remember me
						  <input type="checkbox">
						  <span class="checkmark"></span>
						</label>
					</div>
					<div class="float-right mt-1"><a id="forgot" href="javascript:void(0);">Forgot Password?</a></div>
				</div>
				<a href="#0" class="btn_1 rounded full-width">Login Now</a>
				<div class="text-center add_top_10">New to Sparker? <strong><a href="{{route('authentication.register')}}">Sign up!</a></strong></div>
            </form>

            <div id="forgot_pw">
                <div class="form-group">
                    <figure>
                        <a href="{{route('dashboard.analytical')}}"><img src="img/logo_sticky.svg" width="165" height="35" alt="" class="logo_sticky"></a>
                        </figure>
                          <form>
                              <br>
                              <br>
                              <br>
                              <br>
                              <br>
                              <br>
                              <br>
                            <label>Please confirm login email below</label>
                            <input type="email" class="form-control" name="email_forgot" id="email_forgot">
                            <i class="icon_mail_alt"></i>                       
                             <p>You will receive an email containing a link allowing you to reset your password to a new preferred one.</p>
                          <div class="text-center"><input type="submit" value="Reset Password" class="btn_1">  <a href="{{route('authentication.login')}}"><input type="submit" value="Cancel" class="btn_1"></a> </div>
                             <br>
                             <br>
                             <br>
                                                  
                              <br>
                              
                              <br>
                        </form>
                    </div>
               </div>
            <div class="copy">© 2018 Sparker</div>
            
        </aside>
        
	</div>
	<!-- /login -->
		
	<!-- COMMON SCRIPTS -->
	@extends('script.common')
  
</body>
</html>