<?php include "includes/header.php"; ?>
<?php include "includes/navbar-profile.php"; ?>
<?php if(!isset($_SESSION['id'])) {
    header("Location: index.php");
} 
?>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <div class="container">
        <div class="row">
           <div class="col-md-8 col-md-offset-2">
               <h2>Update/Edit Profile</h2> 
             
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
                    
                    

                } 
               
               ?>
               <?php edit_and_update_profile(); ?>
             
               <form action="" method="post" enctype="multipart/form-data">

                 <div class="form-group">
                      <label for="username">Firstname</label>
                          <input type="text" class="form-control" name="firstname" value="<?php echo $firstname; ?>">
                  </div>
                  <div class="form-group">
                      <label for="title">Lastname</label>
                          <input type="text" class="form-control" name="lastname" value="<?php echo $lastname; ?>">
                  </div>  
                  <div class="form-group">
                      <label for="title">Username</label>
                          <input type="text" class="form-control" name="username" value="<?php echo $username; ?>">
                  </div>
                  <br/>
                  <div class="form-group">
                   <label for="">Profile Pic</label>
                    <?php
                
                        if(empty($image)){

                            $query = "SELECT * FROM users WHERE id = {$_SESSION['id']} ";
                            $select_image = mysqli_query($connection, $query);

                            while($row = mysqli_fetch_array($select_image)){

                                $image = $row['image'];

                            }
                            
                            if(!$image) {
                                $image = "no_content.png";
                            } else {
                                $image = $row['image'];
                            }

                        }
                
                    ?>
                    <img class="thumbnail" src="images/<?php echo $image; ?>" alt="..." height="180">
                    <br/>
                      <label class="btn btn-warning" for="my-file-selector">
                        <input id="my-file-selector" name="image" type="file" style="display:none;" onchange="$('#upload-file-info').html($(this).val());">
                        Profile Pic
                    </label>
                    <span class='label label-info' id="upload-file-info"></span>
                  </div>
                  <br/> 
                  <div class="form-group">
                      <label for="title">Email</label>
                          <input type="email" class="form-control" name="email" value="<?php echo $email; ?>">
                  </div>    
                  <div class="form-group">
                      <label for="title">Password</label>
                          <input type="password" class="form-control" name="password" value="<?php echo $password; ?>">
                  </div>
                  <div class="form-group">
                      <button class="btn btn-info" type="submit" name="update">Update My Profile</button>
                  </div>
              </form>
           </div>
        </div>
         
<?php include "includes/footer.php"; ?>