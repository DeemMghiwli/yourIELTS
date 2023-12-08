<?php
try{
  //connecting to the database
  $db= new mysqli("localhost","root", "", "content");

}catch(Exception $exc){
    echo $exc->getTraceAaString();

}

if(isset($_POST['email']) && isset($_POST['msg'])){

    $email= $_POST['email'];
    $msg= $_POST['msg'];
    //insert user input into database
  $is_insert  = $db->query("INSERT INTO `contact us`(`email`, `msg`) VALUES ('$email' , '$msg')");

  if($is_insert  == TRUE){
    //redirect the user to homepage after submitting the message
    header("location:index.html");
    exit();
  }
}

?>
