   <nav class="navbar navbar-inverse" id="navbar-profile">
       <div class="container color">
            <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false" id="but">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="profile.php"><img id="logo" src="images/artifax_logo.png" alt=""></a>
            </div>
            

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>  <?php echo $_SESSION['username']; ?><span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="profile.php"><span class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></span> My Profile</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="update-profile.php"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Update/Edit Profile</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="logout.php"><span class="glyphicon glyphicon-off" aria-hidden="true"></span> Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
     </div>
  </nav>