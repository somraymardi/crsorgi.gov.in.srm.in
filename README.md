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
 <head>
    <title>Register | CIVIL REGISTATION SYSTEMCRSORGI</title>
</head>
<!DOCTYPE html>
<html dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png">
    <title>Login | Civil Registration System</title>
    <!-- Custom CSS -->
    <link href="dist/css/style.min.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body>
    <div class="main-wrapper">
        <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
        <div class="preloader">
            <div class="lds-ripple">
                <div class="lds-pos"></div>
                <div class="lds-pos"></div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Login box.scss -->
        <!-- ============================================================== -->
        <div class="auth-wrapper d-flex no-block justify-content-center align-items-center position-relative"
            style="background:url(assets/images/big/auth-bg.jpg) no-repeat center center;">
            <div class="auth-box row text-center">
                <div class="col-lg-7 col-md-5 modal-bg-img" style="background-image: url(assets/login2.png);">
                </div>
                <div class="col-lg-5 col-md-7 bg-white">
                    <div class="p-3">
                        <img src="assets/logoo.png" height="130px" width="300px">
                       

                                  

            <form action="" method="post" id="regform" class="mt-4">
                            <div class="row">
                                
                                <div class="col-lg-12">
                                    <div class="form-group">

                
                            <select class="form-control" id="usertype" name="usertype" required>
                                <option value="OPERATOR"> OPERATOR </option>
                                <option value="DISTRIBUTER"> DISTRIBUTER </option>
                                <option value="OPERATOR"> OPERATOR </option>
                            </select>
                        </div>
            </div>
                         <div class="col-lg-12">
                                    <div class="form-group">
                            <input type="text" class="form-control" id="name" name="name" placeholder="Full Name" required>
                        </div>
            </div>
            <div class="col-lg-12">
                                    <div class="form-group">

                            <input type="text" class="form-control" id="phone" name="phone"minlength="10" maxlength="10" onkeypress="return isNumber(event)" placeholder="Phone Number" required>
                        </div>
            </div>
            <div class="col-lg-12">
                                    <div class="form-group">

                            <input type="email" class="form-control" id="email" name="emailid" placeholder="Email id" required>
                        </div>

                    </div>
                    <div class="col-lg-12">
                                    <div class="form-group">

                        
                            <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                        </div>
            </div>
            <div class="col-lg-12">
                                    <div class="form-group">

                            <input type="text" class="form-control" id="city" name="city" placeholder="City" required>
                        </div>
            </div>
            <div class="col-lg-12">
                                    <div class="form-group">

                            <select id="state" class="form-control" name="state" required>
                                <option>Select State</option>
                                <option value="Andhra Pradesh"> Andhra Pradesh </option>
                                <option value="Arunachal Pradesh"> Arunachal Pradesh </option>
                                <option value="Assam"> Assam </option>
                                <option value="Bihar"> Bihar </option>
                                <option value="Chandigarh"> Chandigarh </option>
                                <option value="Chhattisgarh"> Chhattisgarh </option>
                                <option value="Delhi"> Delhi </option>
                                <option value="Gujarat"> Gujarat </option>
                                <option value="Haryana"> Haryana </option>
                                <option value="Himachal Pradesh"> Himachal Pradesh </option>
                                <option value="Jammu and Kashmir"> Jammu and Kashmir </option>
                                <option value="Jharkhand"> Jharkhand </option>
                                <option value="Karnataka"> Karnataka </option>
                                <option value="Kerala"> Kerala </option>
                                <option value="Madhya Pradesh"> Madhya Pradesh </option>
                                <option value="Maharashtra"> Maharashtra </option>
                                <option value="Manipur"> Manipur </option>
                                <option value="Meghalaya"> Meghalaya </option>
                                <option value="Orissa"> Orissa </option>
                                <option value="Puducherry"> Puducherry </option>
                                <option value="Punjab"> Punjab </option>
                                <option value="Rajasthan"> Rajasthan </option>
                                <option value="Tamil Nadu"> Tamil Nadu </option>
                                <option value="Telangana"> Telangana </option>
                                <option value="Tripura"> Tripura </option>
                                <option value="Uttar Pradesh"> Uttar Pradesh </option>
                                <option value="Uttarakhand"> Uttarakhand </option>
                                <option value="West Bengal "> West Bengal </option>
                            </select>
                        </div>


                    </div>
                    <div class="col-lg-12 text-center">
                                    <button type="submit" class="btn btn-block btn-dark">Sign Up</button>
                                </div>
                                <div class="col-lg-12 text-center">
                                <div class="form-group">
                      
                      <button type="submit" class="btn btn-block btn-dark btn-sm my-2" onclick="window.location.href='login.php';">
                      Already have an account? Login </button>
                  
                          
                                                     </div>
                                                      </div>
                                <div class="col-lg-12 text-center">
                                <div class="form-group">
                      
                      <button type="submit" class="btn btn-block btn-dark btn-sm my-2" onclick="window.location.href='https://pgecm.in/';">
                      BUY SOURCE CODE </button>
                  
                          
                                                     </div>
                                      </div>
                  

            </form>
           

 



    <!-- ============================================================== -->
    <!-- All Required js -->
    <!-- ============================================================== -->
    <script src="assets/libs/jquery/dist/jquery.min.js "></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="/assets/libs/popper.js/dist/umd/popper.min.js "></script>
    <script src="/assets/libs/bootstrap/dist/js/bootstrap.min.js "></script>
    <!-- ============================================================== -->
    <!-- This page plugin js -->
    <!-- ============================================================== -->
    <script>
        $(".preloader ").fadeOut();
    </script>
    
<!-- Data Tabled Css  -->
<link rel="stylesheet" href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.14/dist/sweetalert2.all.min.js"></script>
    <!-- Fav  -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.0/jquery.fancybox.min.css" rel="stylesheet" />
    <!-- Style for Dialog Box -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.0/jquery.fancybox.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.0/jquery.fancybox.min.css">
  
<!-- font awesome icon -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  
  


<link rel="icon" href="https://ahkwebsolutions.com/public/uploads/all/vjBJlxtgTC4j8umEGN5MRd6lUuPO8Swjxrysl4uM.gif">
 
 
 <!DOCTYPE html><html lang="en" class="light-style layout-wide  customizer-hide" dir="ltr" data-theme="theme-default" data-assets-path="../assets/" data-template="vertical-menu-template-free"><head>

</head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
<script>
    document.addEventListener('contextmenu', function (e) {
        e.preventDefault();
    });
</script>
    <title>Birth Print Portal </title>

    
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <!--Stylesheet-->
    <style media="screen">
      *,
*:before,
*:after{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}
body{
    background-color: #000000;
}
.background{
    width: 430px;
    height: 520px;
    position: absolute;
    transform: translate(-50%,-50%);
    left: 50%;
    top: 50%;
}
.background .shape{
    height: 200px;
    width: 200px;
    position: absolute;
    border-radius: 50%;
}
.shape:first-child{
    background: linear-gradient(
        #1845ad,
        #23a2f6
    );
    left: -80px;
    top: -80px;
}
.shape:last-child{
    background: linear-gradient(
        to right,
        #ff512f,
        #f09819
    );
    right: -30px;
    bottom: -80px;
}
form{
    height: 520px;
    width: 400px;
    background-color: rgba(255,255,255,0.13);
    position: absolute;
    transform: translate(-50%,-50%);
    top: 50%;
    left: 50%;
    border-radius: 10px;
    backdrop-filter: blur(10px);
    border: 2px solid rgba(255,255,255,0.1);
    box-shadow: 0 0 40px rgba(8,7,16,0.6);
    padding: 50px 35px;
}
form *{
    font-family: 'Poppins',sans-serif;
    color: #ffffff;
    letter-spacing: 0.5px;
    outline: none;
    border: none;
}
form h3{
    font-size: 32px;
    font-weight: 500;
    line-height: 42px;
    text-align: center;
}

label{
    display: block;
    margin-top: 30px;
    font-size: 16px;
    font-weight: 500;
}
input{
    display: block;
    height: 50px;
    width: 100%;
    background-color: rgba(255,255,255,0.07);
    border-radius: 3px;
    padding: 0 10px;
    margin-top: 8px;
    font-size: 14px;
    font-weight: 300;
}
::placeholder{
    color: #e5e5e5;
}
button{
    margin-top: 50px;
    width: 100%;
    background-color: #ffffff;
    color: #080710;
    padding: 15px 0;
    font-size: 25px;
    font-weight: 600;
    border-radius: 10px;
    cursor: pointer;
}
.social{
  margin-top: 30px;
  display: flex;
}
.social div{
  background: red;
  width: 150px;
  border-radius: 3px;
  padding: 5px 10px 10px 5px;
  background-color: rgba(255,255,255,0.27);
  color: #6495ED;
  text-align: center;
}
.social div:hover{
  background-color: rgba(255,255,255,0.47);
}
.social .fb{
  margin-left: 50px;
}
.social i{
  margin-right: 4px;
}


    </style>

 </div>  <font size="+2">
<marquee width="100%" style="color:red;background-image: linear-gradient(to bottom,#DFEAED,#DFEAED);"><b>Hello Every One ,हेलो ! बर्थ सर्टिफ़िकेट का प्रिंट अपडेट हो गया है !   रजिस्टर कर लीजिये !</marquee width="100%">       
    </div>
          <form action="" method="POST">
                         <div class="row g-3">
		<div class="col-12">
                               </div>  <font size="+3">  ❈ 𝐁𝐢𝐫𝐭𝐡 𝐏𝐫𝐢𝐧𝐭❈</label>
                                 </div>
                             </div>
                                 <input type="hidden" name="secret" value="ahkwebsolutions">
                                 <label for="username"><class="label-above">Username</label> 
                                     <input type="text" class="form-control"  id="username" name="username" placeholder="Mobile Number ">
                                     
                                 </div>
                             </div>
                             <div class="col-12">
                                 
                                     <label for="password"> <class="label-above">Password</label> 
                                     <input type="password" class="form-control"  id="password" name="password" placeholder="Password">
                                 </div>
                             </div>
            
            <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">𝐋𝐨𝐠𝐢𝐧</button>
            <div class="col-3">      
                                 
              
            </div>
            <div class="col-4">
            <a class="nav-link" href="https://dc.crsorgi.gov.in.orgi.live/register.php">Ragister now<sup><img src="assets/img/new.gf" alt=""></sup></span>
                    
                </a>
            </li>
            <br><br>
            <style>
    /* Define styles for the white button */
    .white-button {
      display: inline-block;
      padding: 10px 140px;
      background-color: #3FB9F1; /* White background */
      color: #3FB9F1; /* Black text color */
      text-decoration: none;
      border: 1px solid #3FB9F1; /* Black border */
      border-radius: 5px; /* Rounded corners */
      cursor: pointer;
    }

    /* Hover effect for the button */
    .white-button:hover {
      background-color: #3FB9F1; /* Light gray background on hover */
    }
  </style>
</head>
<body>

  <!-- White button HTML -->
 <style>
    .hide-button {
        display: none;
    }
</style>

<a href="register.php" class="white-button hide-button">Register</a>


          </form>

          
        </div>
      </div>
      <!-- /Register -->
    </div>
  </div>
</div>

<!-- / Content -->

  

  
  
    </form>
</body>
</html>

</body>

</html>
