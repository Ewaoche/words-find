<?php


function validateUser($user){


    $errors = array();
if(empty($user['username'])){
    array_push($errors, 'username is required');
   
  }
  if(empty($user['email'])){
    array_push($errors, 'email is required');
  
  }
  if(empty($user['password'])){
    array_push($errors, 'password is required');
  
  }
  if(empty($user['cpassword'])){
    array_push($errors, 'password comfirmation is required');
  
  }
  if(($user['password']) !== ($_POST['cpassword'])){
    array_push($errors, 'The two password does not matched');
  
  }
  $existingUser = selectOne('users', ['email'=> $user['email']]);
  if($existingUser){

    if(isset($user['update-user-btn']) && $existingUser['id'] != $user['id']){
      array_push($errors, 'user with this email already exist!');

    }
    if(isset($user['create-admin'])){
      array_push($errors, ' this email already exist!');

    }
  }
  return $errors;
}


function validateLogin($user){


  $errors = array();
if(empty($user['username'])){
  array_push($errors, 'username is required');
 
}

if(empty($user['password'])){
  array_push($errors, 'password is required');

}

return $errors;
}