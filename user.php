<?php

 require_once 'functions.php';
 $response = array();

 if(isset($_GET['op'])){
  //insert user
  if(isset($_GET['addUser'])){
    if(isset($_POST['firstName']) && isset($_POST['email']) && isset($_POST['username']) && isset($_POST['password'])){
      $data = [
        "firstName" => $_POST['firstName'],
        "lastName" =>  $_POST['lastName'],
        "email" =>  $_POST['email'],
        "username" =>  $_POST['username'],
        "password" =>  $_POST['password']
      ];
      $result = insert("user", $data);
      if($result){
        $response['error'] = false;
        $response['message'] = 'Added successfully';
      }else{
        $response['error'] = true;
        $response['message'] = 'Ooops, not added';
      }
    }else{
      $response['error'] = true;
      $response['message'] = 'Required Parameters are missing';
    }
  }
  
  //get username details
  else if($_GET['getCredentials']){
    if(isset($_POST['username'])){
      $result = fetchARecordWithOneWhereClause("user","username",$_POST['username']);
      $user = $result->fetch(PDO::FETCH_ASSOC);  //fetch data from the statement
      if($result){
        $response['error'] = false;
        $response['user'] = $user;
        $response['message'] = 'Added successfully';
      }else{
        $response['error'] = true;
        $response['message'] = 'Ooops, not added';
      }
    }else{
      $response['error'] = true;
      $response['message'] = 'Required Parameters are missing';
    }
  }
  
  //update user details
  // else if($_GET['updateUser']){
  //   if(isset($_POST['firstName']) && isset($_POST['email']) && isset($_POST['username'])){
  //     $data = [
  //       "firstName" => $_POST['firstName'],
  //       "lastName" =>  $_POST['lastName'],
  //       "email" =>  $_POST['email'],
  //       "username" =>  $_POST['username']];
  //       $result = update("user", $data,$_POST['userId'], "userId");
  //       if($result){
  //         $response['error'] = false;
  //         $response['message'] = 'Update successfully';
  //       }else{
  //         $response['error'] = true;
  //         $response['message'] = 'Ooops, not added';
  //       }
  //   }else{
  //     $response['error'] = true;
  //     $response['message'] = 'Required Parameters are missing';
  //   }
  // }
}
 //displaying the data in json
echo json_encode($response);

?>
