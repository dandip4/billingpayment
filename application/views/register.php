
<section>         
	<div class="container-fluid p-0"> 
		<div class="row m-0">
			<div class="col-xl-7 p-0"><img class="bg-img-cover bg-center" src="../assets/images/login/1.jpg" alt="looginpage"></div>
			<div class="col-xl-5 p-0"> 
				<div class="login-card">
					<form class="theme-form login-form">
						<h4>Create your account</h4>
						<h6>Enter your personal details to create account</h6>
						<div class="form-group">
							<label>Your Name</label>
							<div class="small-group">
								<div class="input-group">
									<span class="input-group-text">
										<i class="bookmark-icon" data-feather="user"></i>
									</span>
									<input class="form-control" type="text" required="" placeholder="First Name">
								</div>
								<div class="input-group">
									<span class="input-group-text">
										<i class="bookmark-icon" data-feather="user"></i>
									</span>
									<input class="form-control" type="text" required="" placeholder="Last Name">
								</div>
							</div>
						</div>
						<div class="form-group">
							<label>Email Address</label>
							<div class="input-group">
								<span class="input-group-text">
									<i class="bookmark-icon" data-feather="mail"></i>
								</span>
								<input class="form-control" type="email" required="" placeholder="Test@gmail.com">
							</div>
						</div>
						<div class="form-group">
							<label>Password</label>
							<div class="input-group">
								<span class="input-group-text">
									<i class="bookmark-icon" data-feather="lock"></i>
								</span>
								<input class="form-control" type="password" name="login[password]" required="" placeholder="*********">
							</div>
						</div>
						<div class="form-group">
							<button class="btn btn-primary btn-block" type="submit">Create Account</button>
						</div>
						<div class="login-social-title">                
							<h5>Login</h5>
						</div>
						<p>Already have an account?<a class="ms-2" href="<?=base_url('welcome/login');?>">Sign in</a></p>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>