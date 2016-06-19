   <nav class="navbar navbar-inverse" id="navbar">
       <div class="container">
          <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false" id="but">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="index.php"><img id="logo" src="./images/artifax_logo.png" alt=""></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <form class="navbar-form navbar-right" role="search" method="post">
                <div class="form-group">
                   
                 <?php login();?>
                 
                  <input type="text" class="form-control" placeholder="Email" id="username-login" name="email">
                  <input type="password" class="form-control" placeholder="Password" id="password-login" name="password">
                </div>
                <button type="submit" class="btn btn-info" name="login" id="button-login" value="Login">Login</button>
              </form>
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
       </div>
    </nav>