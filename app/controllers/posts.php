<?php
include(ROOT_PATH . "/app/database/db.php");
include(ROOT_PATH . "/app/helpers/validatePost.php");
include(ROOT_PATH . "/app/helpers/middleware.php");



$table = 'posts';
$topics = selectAll('topics');
$posts = selectAll($table);

$errors = array();
$title ="";
$body = "";
$id = "";
$topic_id = "";
$published = "";


if(isset($_GET['delete_id'])){
  adminOnly();
    $del_id =$_GET['delete_id'];
    $count = delete($table, $del_id);
    $_SESSION['message'] = "Post Deleted  successful";
    $_SESSION['type'] = "success";
     header('Location:' . BASE_URL . '/admin/posts/index.php');
     exit();
}

if(isset($_GET['published']) && isset($_GET['p_id'])){
  adminOnly();
    $published = $_GET['published'];
    $p_id = $_GET['p_id'];
    //update published
    $count = update($table, $p_id, ['published'=>$published]);
    $_SESSION['message'] = "Post publishing was successful";
    $_SESSION['type'] = "success";
     header('Location:' . BASE_URL . '/admin/posts/index.php');
     exit();

}


if(isset($_GET['id'])){
$post = selectOne($table, ['id'=>$_GET['id']]);
$title =$post['title'];
$body = $post['body'];
$id = $post['id'];
$topic_id = $post['topic_id'];
$published = $post['published'];
}

if(isset($_POST['post-btn'])){
  adminOnly();
 
     $errors = validatePost($_POST);


    if(!empty($_FILES['image']['name'])){
    $name_of_image = time() . '_' . $_FILES['image']['name'];
    $destination_folder = ROOT_PATH . "/assets/images/" . $name_of_image;
    $result = move_uploaded_file($_FILES['image']['tmp_name'], $destination_folder);
      if($result){
       $_POST['image'] =  $name_of_image;
      }else{
        array_push($errors, "Image is unable to upload");
      }

    }else{
    array_push($errors, "Image is required");
    }
 if(count($errors)===0){
    $topic_id = $_POST['topic_id'];
    unset($_POST['post-btn']);
    $_POST['user_id'] = $_SESSION['id'];
    $_POST['published'] = isset($_POST['published']) ? 1: 0;

    $post_id = create($table, $_POST);
    $_SESSION['message'] = "Post creation was successful";
    $_SESSION['type'] = "success";
     header('Location:' . BASE_URL . '/admin/posts/index.php');
     exit();
 }else{
  $title = $_POST['title'];
  $body = $_POST['body'];
  $topic_id = $_POST['topic_id'];
  $published = isset($_POST['published']) ? 1: 0;
 
 }
    
}

if(isset($_POST['update-btn'])){
  adminOnly();
    $errors = validatePost($_POST);

    if(!empty($_FILES['image']['name'])){
    $name_of_image = time() . '_' . $_FILES['image']['name'];
    $destination_folder = ROOT_PATH . "/assets/images/" . $name_of_image;
    $result = move_uploaded_file($_FILES['image']['tmp_name'], $destination_folder);
        if($result){
        $_POST['image'] =  $name_of_image;
        }else{
        array_push($errors, "Image is unable to upload");
        }

    }else{
    array_push($errors, "Image is required");
    }

    if(count($errors)===0){
       $id = $_POST['id'];
        unset($_POST['update-btn'], $_POST['id']);
        $_POST['user_id'] = $_SESSION['id'];
        $_POST['published'] = isset($_POST['published']) ? 1: 0;
    
        $post_id = update($table, $id, $_POST);
        $_SESSION['message'] = "Post updateded  successful";
        $_SESSION['type'] = "success";
         header('Location:' . BASE_URL . '/admin/posts/index.php');
         exit();
     }else{
      $title = $_POST['title'];
      $body = $_POST['body'];
      $topic_id = $_POST['topic_id'];
      $published = isset($_POST['published']) ? 1: 0;
     
     }
        
    }
    

