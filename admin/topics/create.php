
<?php include("../../path.php");?>
<?php include(ROOT_PATH ."/app/controllers/topics.php");?>
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
 <?php include(ROOT_PATH .'/app/includes/admin-sidebar.php');
 adminOnly();
 ?>

 <!-- Admin content -->
 <div class="admin-content">
    <div class="button-group">
        <a href="create.php" class="btn btn-big">Add Topics</a>
        <a href="index.php " class="btn btn-big">manage Topics</a>
    </div>

    <div class="content">
        <h2 class="page-title">Add Topics</h2>
        <?php  include(ROOT_PATH . '/app/helpers/formErrors.php');?>
       <form action="create.php" method="post">
           <div>
               <label for="">Name</label>
               <input type="text" name="name" value="<?php echo $name; ?>" class="text-input">
           </div>
           <div>
               <label for="">Description</label>
             <textarea name="description"id="body"><?php echo $description ;?></textarea>
           </div>
          
           <div>
              <button type="submit" class="btn btn-big" name="topic-btn">Add Topic</button>
           </div>
       </form>
    </div>
 </div>

</div>
    <script src="../../assets/js/jquery.js"></script>
  <script src="../../assets/js/custom.js"></script>
  <?php include( ROOT_PATH .'/app/includes/flashMessage.php'); ?>
</body>
</html>