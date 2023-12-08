<!-- Coded with the help of Sylvester Mfum on youtube -->

<?php include 'DB.php'; ?> <!--concet to DB.php -->
<?php

//Get total number of qustions
$query = "SELECT * FROM `questions`";
$results = $mysqli->query($query) or die ($mysqli->error.__LINE__);
$total = $results->num_rows;

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <head>
      <meta charset="utf-8">
      <link rel="stylesheet" href="style.css">
      <link rel="stylesheet" href="fontawesome/css/all.min.css"> <!-- fontawesome.com -->
      <title>English Quiz</title>
  </head>

  <body>
  <!-- Header -->
      <header class="header">
        <div class="inner-header quiz-header">
          <div class="logo">
            <a href="index.html"><h1>Your<span>IELTS</span></h1></a>
          </div>
        </div>
      </header>
  <!-- /Header -->

    <div class="page-main">
      <div class="inner-main quiz">
        <h2>Test Your English Skills</h2><hr>
        <ul>
            <li><span>Number of Questions: </span><?php echo $total; ?></li>
            <li><span>Type: </span>Multiple Choice</li>
        </ul>
        <form>
          <a href="questions.php?n=1"><input type="button" class="go-btn" value="Start Quiz!"></a>
          <!--n=1 so will start from question no.1 -->
        </form>
      </div>
    </div>

  <!-- Footer -->
    <div class="footer">
      <div class="quiz-footer">
        <p>Copyright &copy; 2021 YourIELTS</p>
      </div>
    </div>
  <!-- /Footer -->

  </body>
</html>
