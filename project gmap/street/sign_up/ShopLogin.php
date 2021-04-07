<!DOCTYPE html>
<html>
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

      <div class="tab-group">
        <div id="signup">
          <h1>Sign Up</h1>

          <form action="slogin.php" method="post">

          <div class="top-row">
            <div class="field-wrap">

              <input type="text" name="shopname" placeholder="Shop Name*" required />
            </div>

            <div class="field-wrap">

              <input type="text" name="susername" placeholder="Set a Username*" required />
            </div>
          </div>

          <div class="field-wrap">


            <input type="password" name="spass" placeholder="Set a Password*" required />
          </div>
            <div class="field-wrap">

              <input type="text" name="spno" maxlength="10" placeholder="Phone Number*" />
            </div>

            <div class="field-wrap">

              <input type="email" name="smail" placeholder="Email Address*" required />
            </div>
            <div class="field-wrap">

              <input type="text" name="saddr" placeholder="Address*" required />
            </div>

            <div class="field-wrap">

              <input type="text" name="sot" placeholder="Opening Time*" required />
            </div>

          <div class="field-wrap">

            <input type="text" name="sct" placeholder="Closing Time*" required />
          </div>

          <button type="submit" class="button button-block">Get Started</button>


          </form>
           </div><!-- tab-content -->

</div> <!-- /form -->
    <script rel='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

        <script src="js/index.js"></script>


</div>

  </body>
</html>
