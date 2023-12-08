<?php include 'DB.php'; ?> <!--concet to db.php -->
<?php session_start(); ?>
<?php //sql queris
    //Get the question number
    $number = (int)$_GET['n'];

    //Get questions from quiz DB
    $query = "SELECT * FROM `questions` WHERE question_number = $number";

    //Pass the query
    $results = $mysqli->query($query) or die($mysqli->error.__LINE__);
    //Fetch a result row as an associative array
    $qustions = $results->fetch_assoc();
    //-----------------------------------------------------

    //Get choices from quiz DB
    $query = "SELECT * FROM `choices` WHERE question_number = $number  ";
    //Pass the query
    $choices = $mysqli->query($query) or die ($mysqli->error.__LINE__);
    //------------------------------------------------------

    //Get total number of qustions
    $query="SELECT * FROM `questions`";
    $results=$mysqli->query($query) or die($mysqli->error.__LINE__);
    $total=$results->num_rows;

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <head>
      <meta charset="utf-8">
      <link rel="stylesheet" href="style.css">
      <link rel="stylesheet" href="fontawesome/css/all.min.css"> <!-- fontawesome.com -->
      <title>QUESTIONS</title>
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
        <h2>Qustion <?php echo $qustions['question_number'];?> of <?php echo $total;?></h2><hr>
        <form  method="post" action="process.php">
          <p class="qustions"> <!-- Dynamic generating of questions-->
            <?php echo $qustions['text'];?>
          </p>
            <ul class="choices"> <!-- Dynamic generating of choices-->
                <?php while ($row = $choices->fetch_assoc()):?>
                 <li>
                   <input type="radio" name="choice" value="<?php echo $row['id'];?>">
                   <?php echo $row['text']?>
                 </li><!-- value=id of qustions-->
                 <?php endwhile;?>
            </ul>
            <input type="submit" class="go-btn" value="S U B M I T">
            <input type="hidden" name="number" value="<?php echo $number; ?>">
            <!-- submit the question number to process.php -->
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
