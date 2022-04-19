<?php
    include('auth.php');
    include('db.php');
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> Webboard </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <style>
    .w3-sidebar a {
        font-family: "Raleway", sans-serif
    }
    
    body,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6,
    .w3-wide {
        font-family: "Raleway", sans-serif
    }
    
    .w3-bar-block .w3-bar-item {
        padding: 20px
    }
    </style>
    <!-- Sidebar (reveals when clicked on menu icon)-->
    <nav class="w3-sidebar w3-black w3-animate-left w3-xxlarge" style="display:none;padding-top:150px;left:0;z-index:2" id="mySidebar">
        <a href="javascript:void(0)" onclick="closeNav()" class="w3-button w3-black w3-xxxlarge w3-display-topleft" style="padding:0 12px;">
            <i class="fa fa-remove"></i>
            <div class="w3-bar-block w3-center">
                <a href="../home.html" class="w3-bar-item w3-button w3-text-grey w3-hover-black " onclick="closeNav() ">หน้าหลัก</a>
                <a href="../story.html " class="w3-bar-item w3-button w3-text-grey w3-hover-black " onclick="closeNav() ">เรื่องย่อ</a>
                <a href="../char1.html " class="w3-bar-item w3-button w3-text-grey w3-hover-black " onclick="closeNav() ">ตัวละคร</a>
                <a href="../movie.html " class="w3-bar-item w3-button w3-text-grey w3-hover-black " onclick="closeNav() ">ภาพยนต์</a>
                <a href="../game/indexh.php" class="w3-bar-item w3-button w3-text-grey w3-hover-black " onclick="closeNav() ">เกมส์</a>
                <a href="webboard.php " class="w3-bar-item w3-button w3-text-grey w3-hover-black " onclick="closeNav() ">บอร์ด</a>
            </div>
    </nav>
</head>
<body style="background-color:lightgrey;">
<!-- Top menu -->
<div class="w3-top ">
        <div class=" w3-xlarge " style="max-width:1200px;margin:auto ">
            <div class="w3-button w3-text-white w3-padding-16 " onclick="openNav() ">☰</div>
            <div class="w3-button w3-text-white w3-padding-16 w3-right ">
                <?php $username = $_SESSION['username']; ?>
                Welcome <?php echo $_SESSION['username'];?> | <a href="logout.php" class='btn btn-danger'> logout </a> &nbsp;
            </div>
            </div>
        </div>
    </div>
    <div class="w3-display-container w3-content w3-wide " style="max-width:1600px;min-width:500px " id="home ">
    <img class="w3-image " src="../images/880394.jpg " alt="home " width="1600 " height="800 ">
    <div class="w3-display-middle w3-text-white w3-jumbo">
        <p><b> New Topic </b></p>
        <hr class="w3-border-grey " style="margin:auto;width:95% ">
    </div></div> 
    <div class="container w3-large"> <br>
    <?php 
        if(isset($_REQUEST['txtquestion'])) {
            //*** Insert Question ***//
            $queryID = "SELECT * FROM webboard";
            $resultID = mysqli_query($con, $queryID);
            $rowsid = mysqli_num_rows($resultID);
            $newid = $rowsid+1;
            $date = date("Y-m-d");
            $txtquestion = $_POST["txtquestion"];
            $txtdetails = $_POST["txtdetails"];
            $txtname = $username;
            $query = "INSERT INTO webboard (questionID, createDate, question, details, name) VALUES ('$newid', '$date', '$txtquestion', '$txtdetails', '$txtname')";
            $result = mysqli_query($con, $query);
            header("location:Webboard.php");
        }
    ?>
    <div class="container">
    <form action="" method="post" name="frmMain" id="frmMain">
        <table width="100%" cellpadding="1" cellspacing="1">
            <tr>
                <td><p style="font-size:25px;"> Topic </p></td>
            </tr>
            <tr>
                <td><input name="txtquestion" type="text" id="txtquestion" value="" class="form-control w3-xlarge"></td>
            </tr>
            <tr>
                <td width="78"><p style="font-size:25px;"> Details </p></td>
            </tr>
            <tr>
                <td><textarea name="txtdetails" class="form-control w3-xlarge" rows="5" id="txtdetails"></textarea></td>
            </tr>
        </table> <br>
        <div style='text-align:right;'>
            <a href="Webboard.php" class="btn btn-secondary w3-xlarge"> Back to Webboard </a> &nbsp;&nbsp;&nbsp; | &nbsp;&nbsp;&nbsp;
            <input name="btnSave" type="submit" id="btnSave" value="Submit" class='btn btn-success w3-xlarge'> 
        </div>
    </form>
    </div></div> <br><br>
    <!-- Open and close sidebar -->
    <script>
    function openNav() {
        document.getElementById("mySidebar").style.width = "60%";
        document.getElementById("mySidebar").style.display = "block";
    }

    function closeNav() {
        document.getElementById("mySidebar").style.display = "none";
    }
    </script>
</body>
</html>