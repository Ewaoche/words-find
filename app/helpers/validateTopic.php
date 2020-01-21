<?php


function validateTopic($topic){


    $errors = array();
if(empty($topic['name'])){
    array_push($errors, 'Name is required');
   
  }

  $existingTopic = selectOne('topics', ['name'=> $post['name']]);
  if($existingTopic){

    if(isset($post['topic-update-btn']) && $existingTopic['id'] !=$post['id']){
      array_push($errors, 'name already exist!');

    }
    if(isset($post['topic-btn'])){
      array_push($errors, 'name already exist!');

    }
  }
  return $errors;
}