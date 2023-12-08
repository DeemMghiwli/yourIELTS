<?php include 'DB.php'; ?> <!--concet to DB.php -->
<?php session_start(); ?>
<?php
//Check to see if score is set
if(!isset($_SESSION['score'])){ //$_SESSION like get/post
   $_SESSION['score'] = 0;
}
//Check the answers
if($_POST){

    $number = $_POST['number']; //number of question
    $selected_choice = $_POST['choice'];
    $next = $number + 1; //next question

    //Get total number of qustions
    $query = "SELECT * FROM `questions`";
    $results = $mysqli->query($query) or die ($mysqli->error.__LINE__);
    $total = $results->num_rows;

    //Get correct choice
    $query = "SELECT * FROM `choices` WHERE question_number = $number AND is_correct = 1";
    //Pass the query
    $results = $mysqli->query($query) or die($mysqli->error.__LINE__);

    //get row as an associative array
    $row = $results->fetch_assoc();

    //set the correct choice
    $correct_choice = $row['id'];

    //Test if Answer is correct
    if($correct_choice == $selected_choice){
    // Answer is correct
    $_SESSION['score']++;
    }

    //if the user reaches the last question
    if ($number == $total){
      header("Location:final.php"); //Redirect the user to final.php
      exit();
    }else{ //if not
      header("Location:questions.php?n=".$next); //Direct the user to the next question
    }
}

?>
