<?php include "includes/header.php"; ?>
<?php include "includes/navbar-profile.php"; ?>
<?php if(!isset($_SESSION['id'])) {
    header("Location: index.php");
} 
?>
  
<?php 
               
$query = "SELECT * FROM users WHERE id = {$_SESSION['id']}";

$update = mysqli_query($connection,$query);

while($row = mysqli_fetch_array($update)) {

    $firstname = $row['firstname'];
    $lastname = $row['lastname'];
    $username = $row['username'];
    $image = $row['image'];
    $email = $row['email'];
    $password = $row['password'];

?>
   
    <div id="profile-color-top">
        <div class="container">
            <div class="row" id="profile-color-top-inner">
                <div class="col-sm-3 col-sm-offset-2">
                    <div class="thumbnail" id="profile-pic">
                        <?php
                      
                          if(empty($image)) {
                              $image = "no_content.png";
                          } else {
                              $image = $row['image'];
                          }
                        
                        ?>
                        
                        <img class="img-responsive" width="150" height="200" src="images/<?php echo $image; ?>" alt="">
                    </div>
                </div>
                
                <div class="col-sm-5">
                    <div class="">
                        <div class="list-group center">
                            <a class="list-group-item">
                               <?php
                                
                                if(empty($firstname) && empty($lastname) ) {
                                    $result = "Go to the dropdown menu and complete your profile";
                                } else {
                                    $result = $firstname . " " . $lastname;
                                }
                                
                                ?>
                                <h4 class="list-group-item-heading">Name: <?php echo $result; ?> </h4>
                                <br/>
                                <p class="list-group-item-text">Username: <?php echo $username; ?></p>
                                <br/>
                                <p class="list-group-item-text">Email: <?php echo $email; ?></p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
       </div> <!-- /container -->
    </div>
    <?php } ?>
    <div class="container">
        <div class="row">
             <div class="col-sm-10 col-sm-offset-1 center">
                 <h2>About Me Dummy Text!</h2>
                 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi illo magni corrupti laudantium facilis nesciunt blanditiis dolorum velit deserunt explicabo similique quibusdam nobis aliquam voluptas, cupiditate veniam neque beatae ipsa.</p>
                 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi illo magni corrupti laudantium facilis nesciunt blanditiis dolorum velit deserunt explicabo similique quibusdam nobis aliquam voluptas, cupiditate veniam neque beatae ipsa.</p>
                 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi illo magni corrupti laudantium facilis nesciunt blanditiis dolorum velit deserunt explicabo similique quibusdam nobis aliquam voluptas, cupiditate veniam neque beatae ipsa.</p>
                 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi illo magni corrupti laudantium facilis nesciunt blanditiis dolorum velit deserunt explicabo similique quibusdam nobis aliquam voluptas, cupiditate veniam neque beatae ipsa.</p>
                 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi illo magni corrupti laudantium facilis nesciunt blanditiis dolorum velit deserunt explicabo similique quibusdam nobis aliquam voluptas, cupiditate veniam neque beatae ipsa.</p>
             </div>
        </div>
    </div>

    
<?php include "includes/footer.php"; ?>