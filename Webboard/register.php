<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Registration </title>
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
<body>
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
        <h1><p><b>Fantastic Beast Blog Webboard </b><br>Registration</p></h1>
        <hr class="w3-border-grey w3-padding" style="margin:auto;width:50% ">
    <?php
        require('db.php');
        //if form submitted, insert values into the database.
        if(isset($_POST['username'])){
            //removes backslashes
            $username = stripslashes($_POST['username']);
            $password = stripslashes($_POST['password']);
            $email = stripslashes($_POST['email']);
            //escape special charecters in a string
            $username = mysqli_real_escape_string($con, $username);
            $password = mysqli_real_escape_string($con, $password);
            $password = md5($password);
            $email = mysqli_real_escape_string($con, $email);
            if($username != "" && $password != md5("") && $email != "") {
            $query = "INSERT INTO project_user (username, password, email, role) VALUES ('$username', '$password', '$email', 'user')";
            $result = mysqli_query($con, $query);
            if($result){
    ?>
            <div class="container">
                <div class="alert alert-success">
                    <strong> Success! </strong> <br><br> You have registered successful. <br><br>
                    <a href='login.php' class='btn btn-success '> Click here to login </a>
                </div>
            </div>
    <?php } } else { ?>
                <div class="container w3-large">
                <div class="alert alert-danger">
                    <strong> Invalid Registered! </strong><br><br> Username, Password or Email not Found. <br><br> 
                    <a href='register.php' class='btn btn-danger w3-center'> Please Try again </a> 
                </div>
            </div>
           <?php }
        } else {
    ?>
    <div class="form">
        <form name="registration" action="" method="post"> 
        <table width="100%" border="0">
            <tr><td><input type="text" name="username" class="form-control w3-xlarge" placeholder="Username" require></td></tr>
            <tr><td><input type="password" name="password" class="form-control w3-xlarge" placeholder="Password" require></td></tr>
            <tr><td><input type="email" name="email" class="form-control w3-xlarge" placeholder="Email" require> </td></tr>
            <tr><td><div style='text-align:right;'><br> <input type="submit" name="submit" value="Register" class='btn btn-primary w3-xlarge'></div></td></tr>
        </table>
        </form>
    </div> </div>
    <?php } ?>
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
