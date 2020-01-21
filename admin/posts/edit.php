
<?php include("../../path.php");?>
<?php include(ROOT_PATH ."/app/controllers/posts.php");?>

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
  <title>Admin Section-Edit post</title>
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
        <a href="create.php" class="btn btn-big">Add Post</a>
        <a href="index.php " class="btn btn-big">manage Posts</a>
    </div>

    <div class="content">
        <h2 class="page-title">Edit Post</h2>
        <?php  include(ROOT_PATH . '/app/helpers/formErrors.php');?>

       <form action="edit.php" method="post"enctype="multipart/form-data">
       <input type="hidden" name="id"  value="<?php echo $id;?>">
       <div>
          <label for="">Title</label>
          <input type="text" name="title" value = "<?php echo $title;?>" class="text-input">
           </div>
           <div>
               <label for="">Body</label>
             <textarea name="body" id="body"><?php echo $body;?></textarea>
           </div>
           <div>
               <label for="">Image</label>
               <input type="file" name="image"  class="text-input">
           </div>
           <div>
              <label for="topic">Topics</label>
              <select name="topic_id" class="text-input">
              <option value=""></option>
              <?php foreach($topics as $key=>$topic):?>
              <?php if(!empty($topic_id) && $topic_id==$topic['id']):?>
              <option selected value="<?php echo $topic['id'];?>"><?php echo $topic['name'];?></option>
              <?php else:?>
              <option  value="<?php echo $topic['id'];?>"><?php echo $topic['name'];?></option>

              <?php endif;?>
              
              <?php endforeach;?>               
              </select>
           </div>
           <div>
           <?php if(empty($published) && $published==0):?>
                <label>
                 <input type="checkbox" name ="published">
                 publish
              </label>
           <?php else:?>
              <label>
                 <input type="checkbox" name ="published" checked>
                 publish
              </label>
            <?php endif;?>
           </div>

           <div>
              <button type="submit" name="update-btn" class="btn btn-big" name="post-btn">Update Post</button>
           </div>
       </form>
    </div>
 </div>

</div>
    <script src="../../assets/js/jquery.js"></script>
  <script src="../../assets/js/custom.js"></script>
</body>
</html>