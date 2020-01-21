
<?php include("../../path.php");?>
<?php include(ROOT_PATH ."/app/controllers/posts.php");
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
  <title>Admin Section-Manage Posts</title>
</head>

<body>
  <!-- Admin header -->
  <?php  include( ROOT_PATH . '/app/includes/admin-header.php');?>
  <?php  include( ROOT_PATH . '/app/includes/messages.php');?>


  <!-- Admin Page-wrapper -->
<div class="admin-wrapper">
 <!-- left sidebar -->
 <?php include(ROOT_PATH .'/app/includes/admin-sidebar.php');?>

 <!-- Admin content -->
 <div class="admin-content">
    <div class="button-group">
        <a href="create.php" class="btn btn-big">Add Post</a>
        <a href="index.php " class="btn btn-big">manage Posts</a>
    </div>

    <div class="content">
        <h2 class="page-title">Manage Posts</h2>
        <table>
            <thead>
             <th>SN</th>
             <th>Title</th>
             <th>Author</th>
             <th colspan="3">Action</th>
            </thead>
            <tbody>
            <?php foreach ($posts as $key => $post):?> 
              <tr>
                <td><?php echo $key + 1;?></td>
                <td><?php echo $post['title'];?></td>
                <td>Emmy</td>
                <td><a href="edit.php?id=<?php echo $post['id'];?>"class="edit">edit</a></td>
                <td><a href="edit.php?delete_id=<?php echo $post['id'];?>"class="delete">delete</a></td>
                <?php if($post['published']):?>
                <td><a href="edit.php?published=0&p_id=<?php echo $post['id']?>" class="unpublish">unpublish</a></td>
                <?php else:?>
                <td><a href="edit.php?published=1&p_id=<?php echo $post['id']?>" class="publish">publish</a></td>
                <?php endif;?>
              </tr>
              <?php endforeach;?>
              
            </tbody>
        </table>
    </div>
 </div>
    <script src="../../assets/js/jquery.js"></script>
  <script src="../../assets/js/custom.js"></script>
</body>
</html>