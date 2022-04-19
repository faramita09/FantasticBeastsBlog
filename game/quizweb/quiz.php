<?php
    include("db.php");
    session_start();
?>
<!DOCTYPE html>
<html>
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
        <?php 
        //*** Select Quiz ***//
        $queryID = "SELECT * FROM quiz";
        $resultID = mysqli_query($con, $queryID);
        $rowsid = mysqli_num_rows($resultID);
        $randomq = rand(1,$rowsid);
        $strSQLS = "SELECT * FROM quiz WHERE quizID = '$randomq' ";
        $objQueryS = mysqli_query($con, $strSQLS) or die (mysqli_error());
        $objResultS = mysqli_fetch_array($objQueryS);
        $_SESSION['quizID'] = $objResultS["quizID"];
        $_SESSION['correctAns'] = $objResultS["correct"];
        ?>
        <br><br><br><br><br>
        <div class="grid">
        <div id="quiz">
            <h1>Quiz</h1>
            <hr style="margin-bottom: 20px">

            <p id="question"> <?php echo $objResultS["quiz"];?></p>

            <div class="buttons">
                <table width="100%" border="0" cellpadding="0" cellspacing="0">
                    <tr>
                        <td><a href="checkquiz.php?check=<?php echo $objResultS["choiceA"]; ?>" class="btn w3-xlarge" id="btn0"> <?php echo ($objResultS["choiceA"]);?> </a></td>
                        <td><a href="checkquiz.php?check=<?php echo $objResultS["choiceB"]; ?>" class="btn w3-xlarge" id="btn1"> <?php echo ($objResultS["choiceB"]);?> </a></td>
                    </tr><tr>
                        <td><a href="checkquiz.php?check=<?php echo $objResultS["choiceC"]; ?>" class="btn w3-xlarge" id="btn2"> <?php echo ($objResultS["choiceC"]);?> </a></td>
                        <td><a href="checkquiz.php?check=<?php echo $objResultS["choiceD"]; ?>" class="btn w3-xlarge" id="btn3"> <?php echo ($objResultS["choiceD"]);?> </a></td>
                    </tr>
                    </table>
                </div>
            <hr style="margin-top: 40px">
            <footer>
                <p id="progress"> Question <?php echo $_SESSION['count'];?> of 10.</p>
            </footer>
        </div>
    </div>
    </body>
</html>