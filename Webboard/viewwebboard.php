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
        <p><b> View Topic </b></p>
        <hr class="w3-border-grey " style="margin:auto;width:95% ">
    </div></div> 
    <div class="container w3-large"> <br>
    <?php
        $questionID = $_GET["questionID"];
        if(isset($_REQUEST['txtdetails'])) {
            //*** Insert Reply ***//
            $queryID = "SELECT * FROM reply";
            $resultID = mysqli_query($con, $queryID);
            $rowsid = mysqli_num_rows($resultID);
            $newid = $rowsid+1;
            $date = date("Y-m-d");
            $txtdetails = $_POST["txtdetails"];
            $txtname = $username;
            $strSQLI = "INSERT INTO reply (replyID, questionID, createDate, details, name) VALUES ('$newid', '$questionID', '$date', '$txtdetails', '$username')";
            $objQueryI = mysqli_query($con, $strSQLI);
            //*** Update Reply ***//
            $strSQLU = "UPDATE webboard SET reply = reply + 1 WHERE questionID = '$questionID'";
            $objQueryU = mysqli_query($con, $strSQLU);   
        }
        //*** Select Question ***//
        $strSQLS = "SELECT * FROM webboard  WHERE questionID = '$questionID' ";
        $objQueryS = mysqli_query($con, $strSQLS) or die (mysqli_error());
        $objResultS = mysqli_fetch_array($objQueryS);
        //*** Delete question ***///
        if (isset($_GET['deleteq'])) {
            $questiond = $_GET['deleteq'];
            $queryd = "DELETE FROM webboard WHERE questionID = '$questiond' ";
            $resultd = mysqli_query($con, $queryd);
            $querydr = "DELETE FROM reply WHERE questionID = '$questiond' ";
            $resultdr = mysqli_query($con, $querydr);
            header("location:webboard.php");
        }
        //*** Delete reply ***///
        if (isset($_GET['deleter'])) {
            $questionID = $_SESSION['questionID'];
            $replyd = $_GET['deleter'];
            $querydr = "DELETE FROM reply WHERE replyID = '$replyd' ";
            $resultdr = mysqli_query($con, $querydr);
            $strSQLU = "UPDATE webboard SET reply = reply - 1 WHERE questionID = '$questionID'";
            $objQueryU = mysqli_query($con, $strSQLU);
            header("location:viewwebboard.php?questionID=".$questionID);
        }
    ?>
    <!-- show question -->
    <table width="100%" border="1" cellpadding="1" cellspacing="1">
        <tr>
            <td colspan="3"><center><h2> <?php echo $objResultS["question"];?> </h2></center></td>
        </tr>
        <tr>
            <td height="53" colspan="3"><?php echo ($objResultS["details"]);?> </td>
        </tr>
        <tr>
            <td width="217"> Name : <?php echo $objResultS["name"];?> </td> 
            <td width="216"> Create Date : <?php echo $objResultS["createDate"];?> </td>
            <td width="217"> Reply : <?php echo $objResultS["reply"];?> </td>
        </tr>
    </table> <br> 
        <a href="Webboard.php" class="btn btn-secondary  w3-xlarge"> Back to Webboard </a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <?php 
        $qrole = "SELECT role FROM project_user WHERE username = '$username'";
        $erole = mysqli_query($con, $qrole); 
        $rolerows = mysqli_fetch_assoc($erole);
        if ($rolerows["role"] == "admin") { ?>
            <a href="viewwebboard.php?deleteq=<?php echo $questionID; ?>" class="btn btn-danger  w3-xlarge"> Delete this Topic </a>
        <?php } ?>
    <br><br>
    <!-- show reply -->
    <?php
        $intRows = 0;
        $strSQLS2 = "SELECT * FROM reply  WHERE questionID = '$questionID' ";
        $objQueryS2 = mysqli_query($con, $strSQLS2) or die (mysqli_error());
        while($objResultS2 = mysqli_fetch_array($objQueryS2)) {
            $intRows++;
    ?> 
        Reply No : <?php echo $intRows;?>
        <table width="100%" border="1" cellpadding="1" cellspacing="1">
        <tr>
            <td height="53" colspan="3"> <?php echo($objResultS2["details"]);?> </td>
        </tr>
        <tr>
            <td width="270"> Name : <?php echo $objResultS2["name"];?> </td>
            <td width="215"> Create Date : <?php echo $objResultS2["createDate"];?> </td>
        <?php if ($rolerows["role"] == "admin") { 
            $_SESSION['questionID'] = $questionID;?>
            <td width="60"><a href="viewwebboard.php?deleter=<?php echo $objResultS2["replyID"]; ?>" class="btn btn-warning "> Delete this Reply </a> </td>
        <?php } ?>
        </tr>
        </table> <br>
    <?php } ?>
    <br>
    <form action="" method="post" name="frmMain" id="frmMain">
        <table width="100%" cellpadding="1" cellspacing="1">
        <tr>
            <th><h3> Reply </h3></th>
        </tr>
        <tr>
            <td><textarea name="txtdetails" cols="130" rows="5" id="txtdetails"></textarea></td>
        </tr>
        </table> <br>
        <div style='text-align:right;'>
            <input name="btnSave" type="submit" id="btnSave" value="Submit" class='btn btn-success w3-xlarge'>
        </div>
    </form>
    </div> </div> <br><br>
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