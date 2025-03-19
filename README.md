# crsorgi.gov.in.srm.in
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <title>Login</title>
</head>
<body>
      <div class="container">
        <div class="box form-box">
                        <header>Login</header>
            <form action="" method="post">
                <div class="field input">
                    <label for="email">Email or Mobile Number</label>
                    <input type="text" name="email" id="email" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="password">Password</label>
                    <input type="123" name="9334734456" id="9334734456" autocomplete="off" required>
                </div>

                <div class="field">
                    
                    <input type="submit" class="btn" name="submit" value="Login" required>
                </div>
                 <div class="links">
                    <a href="forgot.php">Forgot Password</a>
                </div>
             <!--   <div class="links">
                    Don't have account? <a href="register.php">Sign Up Now</a>
                </div>  -->
            </form>
        </div>
       
      </div>
</body>
<div class="card">
  <div class="card-body register-card-body">
    <p class="login-box-msg">Register as a New Member</p>
    <p style="color:red;">New Members register only 10 Digit Mobile nob.</p>

    <form action="" method="POST">
      <div class="input-group mb-3">
        <input type="text" name="name" class="form-control" placeholder="Full name">
        <div class="input-group-append">
          <div class="input-group-text">
            <span class="fas fa-user"></span>
          </div>
        </div>
      </div>
      <div class="input-group mb-3">
        <input type="text" class="form-control" name="mobile" placeholder="Mobile Number">
        <div class="input-group-append">
          <div class="input-group-text">
            <span class="fas fa-phone"></span>
          </div>
        </div>
      </div>
      <div class="input-group mb-3">
        <input type="email" class="form-control" name="email" placeholder="Email">
        <div class="input-group-append">
          <div class="input-group-text">
            <span class="fas fa-envelope"></span>
          </div>
        </div>
      </div>
      <div class="input-group mb-3">
        <input type="password" class="form-control" name="password" placeholder="Password">
        <div class="input-group-append">
          <div class="input-group-text">
            <span class="fas fa-lock"></span>
          </div>
        </div>
      </div>
      <div class="input-group mb-3">
        <input type="password" class="form-control" name="cpassword" placeholder="Retype password">
        <div class="input-group-append">
          <div class="input-group-text">
            <span class="fas fa-lock"></span>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-8">
          <div class="icheck-primary">
            <input type="hidden" name="reg" value="ahkweb">
           
            <input type="checkbox" id="agreeTerms" name="terms" value="agree">
            <label for="agreeTerms">
              I agree to the <a href="#">terms</a>
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-4">
          <button type="submit" class="btn btn-primary btn-block">Register</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

    <!-- <div class="social-auth-links text-center">
    <p>- OR -</p>
    <a href="#" class="btn btn-block btn-primary">
      <i class="fab fa-facebook mr-2"></i>
      Sign up using Facebook
    </a>
    <a href="#" class="btn btn-block btn-danger">
      <i class="fab fa-google-plus mr-2"></i>
      Sign up using Google+
    </a>
  </div> -->

    <a href="dr_login.php" class="text-center">I already have a membership</a>
  </div>
  <!-- /.form-box -->
</div><!-- /.card -->
