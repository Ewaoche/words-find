
<?php include("../path.php");?>
<?php include(ROOT_PATH ."/app/controllers/posts.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
 
  <link rel="stylesheet" type="text/css" href="../assets/css/styles.css">
  <link rel="stylesheet" href="../assets/css/font-awesome.min.css">
 <!-- Admin css -->
  <link rel="stylesheet" type="text/css" href="../assets/css/admin.css">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Admin Section-Dashboard</title>
</head>

<body>
  <!-- Admin header -->
  <?php  include( ROOT_PATH . '/app/includes/admin-header.php');?>
 

  <!-- Admin Page-wrapper -->
<div class="admin-wrapper">
 <!-- left sidebar -->
 <?php include(ROOT_PATH .'/app/includes/admin-sidebar.php');
 adminOnly();
 ?>

 <!-- Admin content -->
 <div class="admin-content">
   

    <div class="content">
        <h2 class="page-title">Dashboard</h2>
        <?php  include(ROOT_PATH . '/app/includes/messages.php');?>
      


<div class="container">

  <div class="card mt-5">
    <div class="card-header">
      <h2>Users List</h2>
    </div>
    <div class="card-body">
      <table class="table table-bordered">
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Email  Address</th>
          <th>Manage</th>
        </tr>
       
          <tr>
            <td></td>
            <td></td>
            <td></td>
            <td>
              <a href="edit.php" class="btn btn-info">Edit</a>
              <a  class='btn btn-danger'>Delete</a>
            </td>
          </tr>
       
      </table>
    </div>
  </div>
</div>



    </div>
 </div>

</div>
    <script src="../assets/js/jquery.js"></script>
  <script src="../assets/js/custom.js"></script>
</body>
</html>