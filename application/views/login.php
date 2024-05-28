
<section>
  <div class="container-fluid">
    <div class="row">
      <div class="col-xl-7"><img class="bg-img-cover bg-center" src="<?php echo base_url();?>assets/images/login/2.jpg" alt="looginpage"></div>
      <div class="col-xl-5 p-0">
        <div class="login-card">
          <form class="theme-form login-form">
            <h4>Login</h4>
            <h6>Welcome back! Log in to your account.</h6>
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
              <div class="checkbox">
              </div>
              <a class="link" href="forget-password.html">Forgot password?</a>
            </div>
            <div class="form-group">
              <button class="btn btn-primary btn-block" type="submit">Sign in</button>
            </div>
            <div class="login-social-title">                
              <h5>Register</h5>
            </div>
            <p>Don't have account?<a class="ms-2" href="<?php echo base_url('welcome/register'); ?>">Create Account</a></p>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>