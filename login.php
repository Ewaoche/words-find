
<?php include("path.php");?>
<?php include(ROOT_PATH ."/app/controllers/users.php");

guestOnly();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" >     
  <link rel="stylesheet" type="text/css" href="assets/css/styles.css">
 
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>WordsFi</title>
</head>

<body>
<?php  include( ROOT_PATH .'/app/includes/header.php');?>


   <div class="auth-content">
       <form action="login.php" method="post">
           <h2 class="form-title">Login</h2>
           <?php  include(ROOT_PATH . '/app/helpers/formErrors.php');?>
           <div>
               <label for="username">UserName</label>
               <input type="text" name="username"  class="text-input">
           </div>

           <div>
               <label for="password">Password</label>
               <input type="password" name="password"  class="text-input">
           </div>
           <div>
               <button type="submit" name="login-btn" class="btn btn-big">Login</button>
           </div>
           <p>Need have an Account ? <a href="<?php echo BASE_URL . '/register.php'?>">Sign Up</a></p>
       </form>
   </div>
  
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="assets/js/custom.js"></script>
<?php include( ROOT_PATH .'/app/includes/flashMessage.php'); ?>
</body>

</html>