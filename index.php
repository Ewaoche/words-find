<?php 

 include("path.php");
 include(ROOT_PATH ."/app/controllers/topics.php");
 $posts = array();
 $postsTitle = "Recent Posts";

 if(isset($_GET['topic_id'])){
   
  $posts = getPostByTopic( $_GET['topic_id']);
  $postsTitle = "You searched for  Post under'". $_GET['name'] ."'";

 }

 else if(isset($_POST['search-term'])){
  $postsTitle = "You searched for '". $_POST['search-term'] ."'";
  $posts = searchPosts($_POST['search-term']);
 }
 else{
  $posts = getPublishedPosts();
 }
 
 

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">

  <link rel="stylesheet" href="assets/css/bootstrap.min.css">  
  <link rel="stylesheet" href="assets/css/font-awesome.min.css"> 
  <link rel="stylesheet" href="css/font-awesome.min.css">
 
  <link rel="stylesheet" type="text/css" href="assets/css/styles.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>WordsFi</title>
</head>


<body>
<?php  include( ROOT_PATH . '/app/includes/header.php');?>
<?php  include( ROOT_PATH . '/app/includes/messages.php');?>

  <!-- Page-wrapper -->
<div class="page-wrapper">


  <!-- Post-slider -->
  <div class="post-slider">
    <h1 class="slider-title">Trending Posts</h1>

    <i class="fa fa-chevron-left prev"></i>

    <i class="fa fa-chevron-right next"></i>

    <div class="post-wrapper">
     <?php foreach ($posts as $post):?>
     <div class="post">
        <img src="<?php echo BASE_URL .'/assets/images/' . $post['image'];?>" alt="" class="slider-image">
        <div class="post-info">
          <h4><a href="single.php?id=<?php echo $post['id'];?>"><?php echo $post['title'];?></a></h4>
          <i class="fa fa-user"><?php echo $post['username'];?></i>
          &nbsp;
          <i class="fa fa-calendar"><?php echo date('F, j, Y', strtotime($post['created_at']));?></i>
        </div>
      </div>
       <?php endforeach;?>
    
    </div>
  </div>
  <!-- End Post-slider -->

  <!-- End Page-wrapper -->
  <!-- main content -->
  <div class="content clearfix">

  <div class="main-content">
      <h1 class="recent-post-title"><?php echo $postsTitle?></h1>

   <?php foreach ($posts as $post):?>
    <div class="post clearfix">
      <img src="<?php echo BASE_URL .'/assets/images/' . $post['image'];?>" alt="" class="post-image">
      <div class="post-preview">
        <h2><a href="single.php?=<?php echo $post['id']?>"></a><?php echo $post['title'];?></h2>
        <i class="fa fa-user"><?php echo $post['username'];?></i>
        &nbsp;
        <i class="fa fa-calendar"><?php echo date('F, j, Y', strtotime($post['created_at']));?></i>
        <p class="preview-text">
        <?php echo substr($post['body'], 0, 20) . '...';?>
        </p>
        <a href="single.php?id=<?php echo $post['id'];?>" class="btn read-more">Read More</a>
      </div>
    </div>
  <?php endforeach;?>
  
    <div class="sidebar">
     <div class="section search">
       <h1 class="section-title">Search</h1>
       <form action="index.php" method="post">
         <input type="text" name="search-term" class="text-input" placeholder="Search..">
       </form>
     </div>

     <div class="section topics">
       <h2 class="section-title">Topics</h2>
       <ul>
       <?php foreach ($topics as $key => $topic):?>
       <li><a href="<?php echo BASE_URL . '/index.php?topic_id=' . $topic['id'] . '&name=' . $topic['name']?>"><?php echo $topic['name'];?></a></li>
       <?php endforeach;?>
       </ul>
     </div>
    </div>
  </div>
  <!-- End main content -->
</div>

<!-- Footer -->

<?php include( ROOT_PATH .'/app/includes/footer.php'); ?>
  
<!-- Footer end -->
<script src="js/boostrap.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="assets/js/jquery.js"></script>
<script src="assets/js/custom.js"></script>
<?php include( ROOT_PATH .'/app/includes/flashMessage.php'); ?>

</body>
</html>
