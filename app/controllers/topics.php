<?php
include(ROOT_PATH . "/app/database/db.php");
include(ROOT_PATH . "/app/helpers/validateTopic.php");
include(ROOT_PATH . "/app/helpers/middleware.php");

$errors = array();
$table ='topics';
$id ='';
$name ='';
$description ='';

$topics = selectAll($table);

if(isset($_POST['topic-btn'])){
  adminOnly();
  $errors = validateTopic($_POST);

  if(count($errors)===0){
    unset($_POST['topic-btn']);
    $topic_id = create($table, $_POST);
    $_SESSION['message'] = "Topic successfully created";
    $_SESSION['type'] = 'success';
    header('Location:'. BASE_URL . '/admin/topics/index.php');
    exit();
  }else{
   
    $name =$_POST['name'];
    $description =$_POST['description'];
  }
   
}

if(isset($_GET['id'])){
  $id = $_GET['id'];
  $topic = selectOne($table, ['id'=> $id]);
  $id = $topic['id'];
  $name =$topic['name'];
  $description =$topic['description'];

}

if(isset($_GET['delete_id'])){
  adminOnly();
$id = ($_GET['delete_id']);
$delete = delete($table, $id);
$_SESSION['message'] = "Topic successfully Deleted";
$_SESSION['type'] = 'success';
header('Location:'. BASE_URL . '/admin/topics/index.php');
exit();
}


if(isset($_POST['topic-update-btn'])){
  adminOnly();
  $errors = validateTopic($_POST);
  if(count($errors)===0){
    $id = $_POST['id'];
    unset($_POST['topic-update-btn'], $_POST['id']);
    //remains name and description in $_POST
    $topic_id = update($table, $id, $_POST);
    $_SESSION['message'] = "Topic successfully Updated";
    $_SESSION['type'] = 'success';
    header('Location:'. BASE_URL . '/admin/topics/index.php');
    exit();
  }else{
    $id =$_POST['id'];
    $name =$_POST['name'];
    $description =$_POST['description'];
  }

}