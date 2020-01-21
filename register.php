
<?php include("path.php");?>
<?php include(ROOT_PATH ."/app/controllers/users.php");?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
 
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" >     
  <link rel="stylesheet" type="text/css" href="assets/css/styles.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>WordsFi</title>
</head>

<body>

<?php  include(ROOT_PATH . '/app/includes/header.php');?>


   <div class="auth-content">
       <form action="register.php" method="POST">
           <h2 class="form-title">Register</h2>
       
           <?php  include(ROOT_PATH . '/app/helpers/formErrors.php');?>
           <div>
               <label for="username">UserName</label>
               <input type="text" name="username" value = "<?php echo $username;?>" class="text-input">
           </div>
           <div>
               <label for="email">Email</label>
               <input type="email" name="email" value = "<?php echo $email;?>" class="text-input">
           </div>
           <div>
               <label for="password">Password</label>
               <input type="password" name="password" value = "<?php echo $password;?>" class="text-input">
           </div>
           <div>
               <label for="cpassword">Confirm Password</label>
               <input type="password" name="cpassword" value = "<?php echo $cpassword;?>" class="text-input">
           </div>
           <div>
               <button type="submit" name="register-btn" class="btn btn-big">Register</button>
           </div>
           <p>Already have an Account ? <a href="<?php echo BASE_URL . '/login.php'?>">Sign In</a></p>
           
       </form>
   </div>
  
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="assets/js/custom.js"></script>
<?php include( ROOT_PATH .'/app/includes/flashMessage.php'); ?>
</body>

</html>