<?php include("path.php");
 include(ROOT_PATH .'/app/controllers/posts.php');
 if(isset($_GET['id'])){
  $singlepost = selectOne('posts', ['id'=>$_GET['id']]);

 }
 $posts = selectAll('posts', ['published'=>1]);

 $topics = selectAll('topics');
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" >     
  <link rel="stylesheet" type="text/css" href="assets/css/styles.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title><?php echo $singlepost['title'];?> | words-find</title>
</head>

<body>
<?php  include(ROOT_PATH .'/app/includes/header.php');?>



  <!-- Page-wrapper -->
<div class="page-wrapper">

  <!-- main content -->
  <div class="content clearfix">

     <!-- main content wrapper  -->
 <div class="main-content-wrapper">
  <div class="main-content single">
    <h1 class="post-title"><?php echo $singlepost['title'];?></h1>
    <div class="post-content">
    <?php echo $singlepost['body'];?>
        
    </div>
  </div>  
</div> 
  <!-- End main content wrapper  -->

  <!-- Sidebar -->
    <div class="sidebar single">
       <div class="section popular-post">
           <h2 class="section-title">Popular Posts</h2>
           <?php foreach($posts as $post):?>
           <div class="post clearfix">
               <img src="<?php echo BASE_URL .'/assets/images/' . $post['image'];?>" alt = "">
               <a href="#" class="title">
               <h4><?php echo $post['title'];?></h4>
               </a>
           </div>
            <?php endforeach;?>
                    
       </div>
     <div class="section topics">
       <h2 class="section-title">Topics</h2>
       <ul>
       <?php foreach($topics as $topic):?>
       <li><a href="<?php echo BASE_URL . '/index.php?topic_id=' . $topic['id'] . '&name=' . $topic['name']?>"><?php echo $topic['name'];?></a></li>
       <?php endforeach;?>       
       </ul>
     </div>
    </div>
    <!-- End Sidebar -->
  </div>
  <!-- End main content -->
</div>

<!-- Footer -->

<?php include(ROOT_PATH .'/app/includes/footer.php'); ?>
  
<!-- Footer end -->
    <!-- Page-wrapper -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="assets/js/custom.js"></script>
  

</body>

</html>