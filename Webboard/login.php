<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> login </title>
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
            </div>
        </div>
    </div>
    <div class="w3-display-container w3-content w3-wide " style="max-width:1600px;min-width:500px " id="home ">
    <img class="w3-image " src="../images/880394.jpg " alt="home " width="1600 " height="800 ">
    <div class="w3-display-middle w3-text-black w3-xlarge w3-sand w3-padding-large rounded-lg">
    <h1> <p><b>Fantastic Beast Blog Webboard </b><br>Please Login </p> </h1>
        <hr class="w3-border-grey  w3-padding" style="margin:auto;width:50% ">
    <?php
        require('db.php');
        if(isset($_POST['username'])) {
            session_start(); 
            $username = stripslashes($_REQUEST['username']); // ลบ spacebar หน้า-หลัง
            $password = stripslashes($_REQUEST['password']);
            $username = mysqli_real_escape_string($con,$username); //ลบตัวอักษรพิเศษ
            $password = mysqli_real_escape_string($con,$password);
            $password = md5($password);
            setcookie("user", $username, time()+3600);
            //เช็คว่ามี user อยู่ใน database มั้ย
            $query = "SELECT * FROM project_user WHERE username = '$username' AND password = '$password'";
            $result = mysqli_query($con, $query) or die(mysqli_error());
            $rows = mysqli_num_rows($result);
            if($rows == 1){
                $_SESSION['username'] = $username;
                //ถ้ามีไปที่ไหน
                 header("Location: webboard.php");
            } else {
                //ถ้าไม่มีแสดงอะไร
    ?>
                <div class="container w3-large">
                    <div class="alert alert-danger">
                        <strong> Invalid login! </strong><br> Incorrect Username OR Password Found. <br> Please Try again.
                    </div>
                </div>
    <?php } } ?>
    <form action="" method="POST">
    <table width="100%" border="0">
        <tr>
            <td class="w3-center"> Username </td>
            <td><input type="text" name="username" class="form-control w3-xlarge" value="<?php if (isset($_COOKIE["user"])) echo $_COOKIE["user"] ?>"></td>
        </tr>
        <tr>
            <td class="w3-center"> Password </td>
            <td><input type="password" name="password" value="" class="form-control w3-xlarge"></td>
        </tr>
    </table><br>
    <div style='text-align:right;'>
        <a href="register.php" class='btn btn-danger w3-xlarge'> Register </a> | <input type="submit" name="submit" value="Login" class="btn btn-info w3-xlarge">
    </div>
    
    </form>
    </div> </div>
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