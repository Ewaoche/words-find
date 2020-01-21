
<?php include("../../path.php");?>

<!-- for session start -->
<?php include(ROOT_PATH ."/app/controllers/users.php");
adminOnly();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
 
  <link rel="stylesheet" type="text/css" href="../../assets/css/styles.css">
  <link rel="stylesheet" href="../../assets/css/font-awesome.min.css">
 <!-- Admin css -->
  <link rel="stylesheet" type="text/css" href="../../assets/css/admin.css">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Admin Section-Add posts</title>
</head>

<body>
  <!-- Admin header -->
  <?php  include( ROOT_PATH . '/app/includes/admin-header.php');?>


  <!-- Admin Page-wrapper -->
<div class="admin-wrapper">
 <!-- left sidebar -->
 <?php include(ROOT_PATH .'/app/includes/admin-sidebar.php');?>

 <!-- Admin content -->
 <div class="admin-content">
            <div class="button-group">
                <a href="create.php" class="btn btn-big">Add Users</a>
                <a href="index.php " class="btn btn-big">manage Users</a>
            </div>

            <div class="content">
                <h2 class="page-title">Add Users</h2>
        <?php  include(ROOT_PATH . '/app/helpers/formErrors.php');?>

                <form action="create.php" method="post" >
                    <div>
                        <label for="username">UserName</label>
                        <input type="text" name="username" value = "<?php echo $username;?>"class="text-input">
                    </div>
                    <div>
                        <label for="email">Email</label>
                        <input type="email" name="email" value = "<?php echo $email;?>" class="text-input">
                    </div>
                    <div>
                        <label for="password">Password</label>
                        <input type="password" name="password"  value = "<?php echo $password;?>"class="text-input">
                    </div>
                    <div>
                        <label for="cpassword">Confirm Password</label>
                        <input type="password" name="cpassword"  value = "<?php echo $cpassword;?>"class="text-input">
                    </div>
                    <div>
                <?php if(isset($admin) && $admin == 1):?>
                     <label>
                       <input type="checkbox" name="admin" checked>
                       Admin
                     </label>
                 <?php else:?>
                     <label>
                       <input type="checkbox" name="admin">
                       Admin
                       </label>
                    </div>
                   <?php endif;?>
                    
                    <div>
                        <button type="submit" class="btn btn-big" name="create-admin">Add User</button>
                    </div>
                </form>
            </div>
        </div>

</div>
    <script src="../../assets/js/jquery.js"></script>
  <script src="../../assets/js/custom.js"></script>

</body>
</html>