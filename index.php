<?php include "includes/header.php"; ?>
<?php include "includes/navbar.php"; ?>
  

   
    <div id="index-wrapper">
        <div class="container">
           <div class="row">
              <div class="col-md-6 col-md-offset-3 center">
                  <img src="images/artifax_logo.png" alt="" class="img-responsive" id="logo-big">
              </div>
              <div class="col-md-6 col-md-offset-3 center">
                  <h3 class="white">SIGN UP TODAY!</h3>
              </div>
            </div>
            
            
            <div class="row">
            <div class="col-md-6 col-md-offset-3"  id="alert">
            
            <?php signUp(); ?>
                
            </div>
             <form action="" method="post">
              <div class="col-md-6 col-md-offset-3 sign-up-form">
                  <input type="text" class="form-control margin-top-bottom" placeholder="Username" id="user-signup" name="username">
              </div>
              <div class="col-md-6 col-md-offset-3 sign-up-form">
                  <input type="email" class="form-control margin-top-bottom" placeholder="Email" id="password-signup" name="email">
              </div>
              <div class="col-md-6 col-md-offset-3 sign-up-form">
                  <input type="password" class="form-control margin-top-bottom" placeholder="Password: 8 charaters or more" id="password-signup" name="password">
              </div>
              <div class="col-md-6 col-md-offset-3 sign-up-form">
                  <input type="password" class="form-control margin-top-bottom" placeholder="Confirm Password" id="password-signup" name="confirm_password">
              </div>
              <div class="col-md-6 col-md-offset-3 sign-up-form center">
                  <button type="submit" class="btn btn-success margin-top-bottom" name="sign_up">Sign Up</button>
              </div>
              </form>
            </div>
        </div>
    </div>
    
   <?php include "includes/footer.php"; ?>