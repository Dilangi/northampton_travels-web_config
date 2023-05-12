<?php

 require_once 'functions.php';
 $response = array();

 if(isset($_GET['op'])){
  //insert review
    if(isset($_GET['addReview'])){
        if(isset($_POST['packagesName'])){
             $data = [
               "packagesName" => $_POST['packagesName'],
               "overall" =>  $_POST['overall'],
               "author" =>  $_POST['author'],
               "visitedDate" =>  $_POST['visitedDate'],
               "postedDate" =>  $_POST['postedDate'],
               "overallRating" =>  $_POST['overallRating'],
               "food" =>  $_POST['food'],
               "foodRating" =>  $_POST['foodRating'],
               "transport" =>  $_POST['transport'],
               "transportRating" =>  $_POST['transportRating'],
               "accommodation" =>  $_POST['accommodation'],
               "accommodationRating" =>  $_POST['accommodationRating']];
             $result = insert("review", $data);
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
    
    //select review for selected package
    else if(isset($_GET['packageReviews'])){
        if(isset($_POST['packagesName'])){
          $result = fetchAllRecordWithOneWhereClause("review","packagesName",$_POST['packagesName']);
          if($result){
              $response['error'] = false;
              $response['review'] = $result;
              $response['message'] = 'Successfully Loaded!!';
          }else{
              $response['error'] = true;
              $response['message'] = 'No reviews';
          }
        }else{
          $response['error'] = true;
          $response['message'] = 'Required Parameters are missing';
        }
    }
    
    //select review of the logged person
    else if(isset($_GET['authorReviews'])){
      if(isset($_POST['author'])){
          $result = fetchAllRecordWithOneWhereClause("review","author",$_POST['author']);
          if($result){
            $response['error'] = false;
            $response['review'] = $result;
            $response['message'] = 'Successfully Loaded!!';
          }else{
            $response['error'] = true;
            $response['message'] = 'No reviews';
          }
      }else{
        $response['error'] = true;
        $response['message'] = 'Required Parameters are missing';
      }
    }
   
    //reply a review
    else if(isset($_GET['reviewReply'])){
      if(isset($_POST['reviewId'])){
        $data = [
          "reply" => $_POST['reply']];
        $result = update("review",$data,$_POST['reviewId'], "reviewId");
        if($result){
          $response['error'] = false;
          $response['message'] = 'Reply Sent';
        }else{
          $response['error'] = true;
          $response['message'] = 'Ooops, not sent';
        }
      }else{
        $response['error'] = true;
        $response['message'] = 'Required Parameters are missing';
      }
    }
   
    //update a review
    else if(isset($_GET['updateReview'])){
      if(isset($_POST['reviewId'])){
        $data = [
          "packagesName" => $_POST['packagesName'],
          "overall" =>  $_POST['overall'],
          "visitedDate" =>  $_POST['visitedDate'],
          "overallRating" =>  $_POST['overallRating'],
          "food" =>  $_POST['food'],
          "foodRating" =>  $_POST['foodRating'],
          "transport" =>  $_POST['transport'],
          "transportRating" =>  $_POST['transportRating'],
          "accommodation" =>  $_POST['accommodation'],
          "accommodationRating" =>  $_POST['accommodationRating']
        ];
        $result = update("review",$data,$_POST['reviewId'], "reviewId");
        if($result){
          $response['error'] = false;
          $response['message'] = 'Successfully updated';
        }else{
          $response['error'] = true;
          $response['message'] = 'Ooops, cannot update';
        }
      }else{
        $response['error'] = true;
        $response['message'] = 'Required Parameters are missing';
      }
    }
   
    //add a review like
    else if(isset($_GET['addLikes'])){
      if(isset($_POST['reviewId'])){
        $data = [
          "likes" => $_POST['likes'],
          "likedSet"=>$_POST['likedSet']];
        $result = update("review",$data,$_POST['reviewId'], "reviewId");
        if($result){
          $response['error'] = false;
          $response['message'] = 'Success';
        }else{
          $response['error'] = true;
          $response['message'] = 'Ooops, something went wrong';
        }
      }else{
        $response['error'] = true;
        $response['message'] = 'Required Parameters are missing';
      }
    }
   
    //add a review dislike
    else if(isset($_GET['addDislike'])){
      if(isset($_POST['reviewId'])){
        $data = [
          "dislike" => $_POST['dislike'],
          "dislikedSet"=>$_POST['dislikedSet']];
        $result = update("review",$data,$_POST['reviewId'], "reviewId");
        if($result){
          $response['error'] = false;
          $response['message'] = 'Success';
        }else{
          $response['error'] = true;
          $response['message'] = 'Ooops, something went wrong';
        }
      }else{
        $response['error'] = true;
        $response['message'] = 'Required Parameters are missing';
      }
    }
   
    //delete a review
    else if(isset($_GET['deleteReview'])){
      if(isset($_POST['reviewId'])){
        $result = deleteRecord("review", "reviewId",$_POST['reviewId']);
        if($result){
          $response['error'] = false;
          $response['message'] = 'Successfully deleted!';
        }else{
          $response['error'] = true;
          $response['message'] = 'Ooops, cannot delete';
        }
      }else{
        $response['error'] = true;
        $response['message'] = 'Required Parameters are missing';
      }
    }
}
 //displaying the data in json
echo json_encode($response);

?>