<?php session_start(); ?>

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
        <h1>Congratulation. You Completed The Quiz!</h1><hr>
        <h2>Total Correct Answers: <?php echo $_SESSION['score'];?></h2>
        <form>
          <a href="questions.php?n=1"><input type="button" class="go-btn" value="Start Over!"></a>
        </form>
      </div>
    </div>
    <?php $_SESSION['score'] = 0;?>
    
    <!-- Footer -->
      <div class="footer">
        <div class="quiz-footer">
          <p>Copyright &copy; 2021 YourIELTS</p>
        </div>
      </div>
    <!-- /Footer -->

  </body>
</html>
