<?php


function escape_string($string) {
    
    global $connection;
    
    return mysqli_real_escape_string($connection, $string);
    
}


function signUp() {
    
    global $connection;
    
    if(isset($_POST['sign_up'])) {
    
          $username = escape_string($_POST['username']);
          $email = escape_string($_POST['email']);
          $password = escape_string($_POST['password']);
          $confirm_password = escape_string($_POST['confirm_password']);

        if(!empty($username) && !empty($email) && !empty($password) && !empty($confirm_password)) {
            
            if(strlen($password) >= 8) {
                
                $username = escape_string($username);
                $email = escape_string($email);
                $password = escape_string($password);

                $query = "INSERT INTO users(username,email,password)"; 
                $query .= "VALUE('{$username}','{$email}','{$password}')"; 
                $enter = mysqli_query($connection,$query);

                if(!$enter){

                    die("QUERY FAILED. " . mysqli_error($connection));

                }

            $message = "<div class='alert alert-success text-center'>Congratulations! Registration Successful<p></p></div>";

                
            } else {
                
            $message = "<div class='alert alert-danger text-center'>Password MUST be 8 chracters or more<p></p></div>";
                
            }
                
       } else {

            $message = "<div class='alert alert-danger text-center'>You Missed Something</div>";

        }

    } else {

        $message = "";

    }

        echo $message;
    
}



function login() {
    
    global $connection;
    
        if(isset($_POST['login'])) {

        $email = $_POST['email'];
        $password = $_POST['password'];

        $email = escape_string($email);
        $password = escape_string($password);

        $query = "SELECT * FROM users WHERE email = '{$email}' ";
        $select_user_query = mysqli_query($connection, $query);

        if(!$select_user_query) {

            die("QUERY FAILED " . mysqli_error($connection));

        }

        while($row = mysqli_fetch_array($select_user_query)) {

              $existing_password = $row['password'];
              $existing_email = $row['email'];
              $username = $row['username'];
              $user_id = $row['id'];

        }


        if($password === $existing_password && $email === $existing_email ) {

          $_SESSION['username'] = $username;
          $_SESSION['id'] = $user_id;

          header("Location: profile.php");

      } else {

          header("Location: index.php");

      }

    }
    
}




function edit_and_update_profile() {
    
    global $connection;

            if(isset($_POST['update'])) {

                $firstname = escape_string($_POST['firstname']);
                $lastname = escape_string($_POST['lastname']);
                $username = escape_string($_POST['username']);
                $image = $_FILES['image']['name'];
                $image_tmp = $_FILES['image']['tmp_name'];
                $email = escape_string($_POST['email']);
                $password = escape_string($_POST['password']);

                move_uploaded_file($image_tmp,"images/$image");

                $query = "UPDATE users SET ";
                $query .= "firstname = '{$firstname}', ";
                $query .= "lastname = '{$lastname}', ";
                $query .= "username = '{$username}', ";
                $query .= "image = '{$image}', ";
                $query .= "email = '{$email}', ";
                $query .= "password = '{$password}' ";
                $query .= " WHERE id = {$_SESSION['id']}";
                
                    $update_profile_query = mysqli_query($connection, $query);

                //    $the_post_id = mysqli_insert_id($connection);
                
                if(!$update_profile_query) {
                    
                    die('<div class="alert alert-danger">Oops! Something went wrong</div>' . mysqli_error($connection));
                    
                } else {
                    
                    echo '<div class="alert alert-success">Congratulations! You just updated your profile. <a href="profile.php"><button class="btn btn-info">Click Here</button></a> to see it</div>';
                    
                }
                
            }
    
}



