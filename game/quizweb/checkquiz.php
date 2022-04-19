<?php
    include("db.php");
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> quiz </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<br><br><br><br><br>
<div class="grid">
        <div id="quiz">
            <h1>Quiz</h1>
            <hr style="margin-bottom: 20px">
<?php
if(isset($_GET["check"])){
    if(isset($_SESSION['username'])){
        $name = $_SESSION['username'];
        $quizID = $_SESSION['quizID'];
        $sql = "INSERT INTO history_quiz (quizID, name) VALUE ('$quizID', '$name')";
        $query = mysqli_query($con, $sql);
    }
    if($_SESSION['count'] < 10 ){
        //*** checkChoice ***//
        $count = $_SESSION['count'];
        $count = $count + 1;
        $_SESSION['count'] = $count;
        $choose = $_GET["check"];
        $ccorrect = $_SESSION['correctAns'];
        if($choose == $ccorrect){
            $_SESSION['correct'] = $_SESSION['correct'] + 1 ;
            ?>
            <div class="container w3-xlarge">
            <div class="alert alert-success">
                <strong> Correct! </strong> <br><br> You choose correct answer. <br><br>
                <a href='quiz.php' class='btn btn-success w3-large'> Go to Next Question </a>
            </div>
            </div>
        <?php } else { ?>
            <div class="container w3-xlarge">
            <div class="alert alert-danger">
                <strong> Wrong! </strong> <br><br> Correct answer is <?php echo $ccorrect?>. <br><br>
                <a href='quiz.php' class='btn btn-danger w3-large'> Go to Next Question </a>
            </div>
            </div>
        <?php } 
    } else {
        $choose = $_GET["check"];
        $ccorrect = $_SESSION['correctAns'];
        if($choose == $ccorrect){
            $_SESSION['correct'] = $_SESSION['correct'] + 1 ;
            ?>
            <div class="container w3-xlarge">
            <div class="alert alert-success">
                <strong> Correct! </strong> <br><br> You choose correct answer. <br>
            </div>
            <div class="alert alert-info">
                <strong> Finish! </strong> <br><br> Your score : <?php echo $_SESSION['correct']?> <br><br>
                <a href='../../home.html' class='btn btn-info w3-large'> Back to home </a>
            </div>
             </div>
        <?php 
        } else {
        ?>
        <div class="container w3-xlarge">
        <div class="alert alert-danger">
                <strong> Wrong! </strong> <br><br> Correct answer is <?php echo $ccorrect?>. <br>
            </div>
        <div class="alert alert-info">
            <strong> Finish! </strong> <br><br> Your score : <?php echo $_SESSION['correct']?> <br><br>
            <a href='../../home.html' class='btn btn-info w3-large'> Back to home </a>
        </div>
        </div>
    <?php } } } ?>   
    </div>
    </div>
</body>
</html>