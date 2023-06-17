<?php
session_start();
if(isset($_SESSION['name'])){
    header("location:dashboard.php");
}
include 'User.php';
$user = new User;

?>


<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AUTH</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
</head>
<body>
<div class="container">
    <div class="row mt-5 ">
   

      <div class="col-md-4"></div>
        <div class="col-md-4 mt-5 p-3 m-3 border border-info rounded"> <form action="" method="POST">
            <?php
            if(isset($_POST['login'])){

                $userName = $_POST['userName'];
                $password = $_POST['password'];
                $user ->login($userName,$password);

            }  
            
            ?>
        <div class="form-group mt-3">
            <input name="userName" type="text" class="form-control" placeholder="Enter your name/email">

        </div>
        <div class="form-group mt-3">
            <input name="password" type="password" class="form-control" placeholder="Enter your password">
            
        </div>
        <div class="form-group mt-3">
            <button class="btn btn-info" name="login">Login</button>
            <p>Are you not a member?<a href="register.php">Register Here</a></p>
        </div>
        </div>
       
         </form>
       </div>
  
    </div>



<script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
     <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
     <script src="ajax.js"></script>
    
</body>
</html>