<?php
include('connection.php');

$username = $email = $role = $password ='';
$errorMsg= array('username'=>'',
                 'email'=>'',
                 'role'=>'',
                 'password'=>'');

if(isset($_POST['signup'])){

   // $username =$_POST['username'];
   // $email =$_POST['email'];
   // $password =$_POST['password'];
   // $role =$_POST['role'];

   if(empty($_POST['username'])){
       $errorMsg['username'] ='username is required <br/>';
   }else{
       $username=$_POST['username'];
       
       }
   

   //email

   if(empty($_POST['email'])){
    $errorMsg['email'] = 'An email is required <br/>';
}else{
     $email = $_POST['email'];
     if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
         $errorMsg['email'] = 'email must be a valid email address';
     }
}
    
//role

if(empty($_POST['role'])){
    $errorMsg['role'] ='role is required <br/>';
}else{
    $role=$_POST['role'];
    
    }


//password

if(empty($_POST['password'])){
    $errorMsg['password'] ='password is required <br/>';
}else{
    $password=$_POST['password'];
    if(!preg_match('[0-9]', $password)){
        $errorMsg['password'] = 'password must be numbers only';
    }
}

if(array_filter($errorMsg)){
 //echo 'error in the form';
}else{
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $role = mysqli_real_escape_string($conn, $_POST['role']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    $query ="INSERT INTO signup(username,email,password,role) VALUES('$username', '$email', '$password', '$role')";
    if(mysqli_query($conn, $query)){
      //success
        header('location:login.php');
    } else{
        //error
        echo 'query error:' .mysqli_error($conn);
    }
    
    
}

}

?>


<?php include ('templates/header.php'); ?>

<body>
    <div class="container">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-3"></div>
                    <div class="col-md-6">
                        <h3 class="text-center">Sign Up</h3>
                        <form method="post">
                            <div class="form-group">
                                <label>Username</label>
                                <input type="text" name="username" class="form-control" value="<?php echo htmlspecialchars($username)?>" placeholder="Enter Username" autocomplete="off">
                                <div class="text-danger">
                                <?php echo $errorMsg['username']; ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Email</label>
                                <input type="text" name="email" class="form-control"  value="<?php echo htmlspecialchars($email)?>" placeholder="Enter Email" autocomplete="off">
                                <div class="text-danger">
                                <?php echo $errorMsg['email']; ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" name="password" class="form-control" value="<?php echo htmlspecialchars($password)?>" placeholder="Enter Password" autocomplete="off">
                                <div class="text-danger">
                                <?php echo $errorMsg['password']; ?>
                                </div>
                            </div>

                            
                            <div class="form-group">
                                <label>Select Your Role</label>
                                <select name="role" class="form-control"  value="<?php echo htmlspecialchars($role)?>"> 
                                
                                    <option value="">Select Your Role</option>
                                    <option value="Admin">Admin</option>
                                    <option value="User">User</option>

                                </select>
                                <div class="text-danger">
                                <?php echo $errorMsg['role']; ?>
                                </div>
                            </div>

                            <br>
                                <input type="submit" name="signup" class="btn btn-outline-warning">
  
                            <p>Already Have an Account <a href="login.php">Login</a></p>

                        </form>

                    </div>

                </div>

            
        </div>

    </div>
</body>