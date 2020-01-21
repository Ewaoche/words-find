
<?php include("../../path.php");?>
<?php include(ROOT_PATH ."/app/controllers/topics.php");
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
  <title>Admin Section-Manage Topics</title>
</head>

<body>
  <!-- Admin header -->
  <?php  include( ROOT_PATH . '/app/includes/admin-header.php');?>
  <?php include(ROOT_PATH . '/app/includes/messages.php');?>
 


  <!-- Admin Page-wrapper -->
<div class="admin-wrapper">
 <!-- left sidebar -->
 <?php include(ROOT_PATH .'/app/includes/admin-sidebar.php');?>

 <!-- Admin content -->
 <div class="admin-content">
    <div class="button-group">
        <a href="create.php" class="btn btn-big">Add Topics</a>
        <a href="index.php " class="btn btn-big">manage Topics</a>
    </div>

    <div class="content">
        <h2 class="page-title">Manage Topics</h2>
       
        <table>
            <thead>
             <th>SN</th>
             <th>Name</th>
             <th colspan="2">Action</th>
            </thead>
            <tbody>
               <?php foreach ($topics as $key => $topic):?>
               <tr>
                    <td><?php echo $key +1;?></td>
                    <td><?php echo $topic['name'];?></td>
                    <td><a href="edit.php?id=<?php echo $topic['id'];?>"class="edit">edit</a></td>
                    <td><a href="index.php?delete_id=<?php echo $topic['id'];?>"class="delete">delete</a></td>
                </tr>
                 <?php endforeach?>
            </tbody>
        </table>
    </div>
 </div>
    <script src="../../assets/js/jquery.js"></script>
  <script src="../../assets/js/custom.js"></script>
  <?php include( ROOT_PATH .'/app/includes/flashMessage.php'); ?>
</body>
</html>