<!DOCTYPE html>
<style>
    .w3-bar-block .w3-bar-item {
        padding: 20px
    }
</style>

<head>

    <title>Fantastic Beast Blog Games</title>
    <?php 
        include('db.php');
        session_start();
        $_SESSION['count'] = 1;
        $_SESSION['correct'] = 0;
    ?>

</head>

<body background="quizweb/bg3.gif" style="text-align: center;">
    <a href="quizweb/quiz.php"> <img src="quizweb/Q4.jpg" /></a> <br><br><br>
    <a href="imab.html"> <img src="quizweb/Q1.jpg" /></a>
</body>


</html>