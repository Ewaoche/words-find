<?php


function validatePost($post){


    $errors = array();
if(empty($post['title'])){
    array_push($errors, 'Title is required');
   
  }
  if(empty($post['body'])){
    array_push($errors, 'Body is required');
  
  }
  if(empty($post['topic_id'])){
    array_push($errors, 'Please select a topic');
  
  }
 
  $existingPost = selectOne('posts', ['title'=> $post['title']]);
  if($existingPost){

    if(isset($post['update-btn']) && $existingPost['id'] !=$post['id']){
      array_push($errors, 'post with this title already exist!');

    }
    if(isset($post['post-btn'])){
      array_push($errors, 'post with this title already exist!');

    }
  }
    
  
  return $errors;
}