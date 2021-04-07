<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
      <link rel="shortcut icon" href="MediSeen.ico">
    <title>Sign-Up/Login Form</title>
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/normalize.css">
      <link rel="stylesheet" href="css/style.css">

  </head>

  <body>

    <div class="form">

      <ul class="tab-group">
        <li class="tab active"><a href="#signup">Sign Up</a></li>
        <li class="tab"><a href="#login">Log In</a></li>
      </ul>
      <div class="tab-content">
        <div id="signup">
          <h1>Sign Up</h1>

          <form action="connect.php" method="post">

            <div class="top-row">
              <div class="field-wrap">
                <input name="username" type="text" placeholder="Name*" required />
              </div>

              <div class="field-wrap">
                <input name="userid" type="text" placeholder="UserName*" required />
              </div>
            </div>

            <div class="field-wrap">
              <input name="useremail" type="email" placeholder="Email ID*" required />
            </div>
            <div class="field-wrap">
              <input name="usercontact" type="text" maxlength="10" placeholder="Contact*" required />
            </div>
            <div class="field-wrap">
              <input name="userpass" type="password" placeholder="Password*" required />
            </div>

            <div class="field-wrap">
              <input type="password" placeholder="Confirm Password*" required />
            </div>

          <button name="submit" type="submit" class="button button-block">Get Started!</button>

          </form>

        </div>



        <div id="login">
          <h1>Welcome Back!</h1>

          <form action="login_exec.php" method="post">

            <div class="field-wrap">
            <label>
              Email Address<span class="req">*</span>
            </label>
            <input name="mail" type="email" required autocomplete="off"/>
          </div>

          <div class="field-wrap">
            <label>
              Password<span class="req">*</span>
            </label>
            <input name="pass" type="password" required autocomplete="off"/>
          </div>

          <p class="forgot"><a href="#">Forgot Password?</a></p>

          <button class="button button-block">Log In</button>

          </form>

        </div>

      </div><!-- tab-content -->

</div> <!-- /form -->

    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src="js/index.js"></script>




  </body>
</html>
