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
        <p><b>Fantastic Beast Blog Webboard </b></p>
        <hr class="w3-border-grey " style="margin:auto;width:95% ">
    </div></div> 
    <div class="container w3-large"> <br>
    <a href="NewQuestion.php" class="btn btn-info w3-xlarge"> Make New Topic </a> 
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <?php 
        $qrole = "SELECT role FROM project_user WHERE username = '$username'";
        $erole = mysqli_query($con, $qrole); 
        $rolerows = mysqli_fetch_assoc($erole);
        if ($rolerows["role"] == "admin") { ?>
            <a href="newquiz.php" class="btn btn-dark w3-xlarge"> Add new quiz </a>
        <?php } ?> <br><br>
    <?php
        $query = "SELECT * FROM webboard ";
        $result = mysqli_query($con, $query) or die (mysqli_error());
        $Num_Rows = mysqli_num_rows($result);

        //กำหนดจำนวนข้อมูลที่แสดงในแต่ละ page
        $Per_Page = 10;
        $Page = 1;
        if(isset($_GET["Page"])) {
            $Page = $_GET["Page"];
        } 
        $Prev_Page = $Page-1;
        $Next_Page = $Page+1;
        $Page_Start = (($Per_Page*$Page)-$Per_Page);
        if($Num_Rows<=$Per_Page) {
            $Num_Pages =1;
        } else if(($Num_Rows % $Per_Page)==0){
            $Num_Pages =($Num_Rows/$Per_Page) ;
        } else {
            $Num_Pages =($Num_Rows/$Per_Page)+1;
            $Num_Pages = (int)$Num_Pages;
        }
        $strSQL = " order  by questionID DESC LIMIT $Page_Start , $Per_Page";
        $objQuery  = mysqli_query($con, $strSQL);
    ?>
    <!-- แสดง Webboard ที่มี -->
    <table width="100%" border="1">
        <tr>
            <th width="99"> <div align="center"> TopicID </div></th>
            <th width="458"> <div align="center"> Topic </div></th>
            <th width="90"> <div align="center"> Name </div></th>
            <th width="130"> <div align="center"> CreateDate </div></th>
            <th width="47"> <div align="center"> Reply </div></th>
        </tr>
        <?php while($objResult = mysqli_fetch_array($result)){ ?>
        <tr>
            <td><div align="center"><?php echo $objResult["questionID"];?></div></td>
            <td><a href="viewwebboard.php?questionID=<?php echo $objResult["questionID"];?>"><?php echo $objResult["question"];?></a></td>
            <td align="center"><?php echo $objResult["name"];?></td>
            <td><div align="center"><?php echo $objResult["createDate"];?></div></td>
            <td align="center"><?php echo $objResult["reply"];?></td>
        </tr>
        <?php } ?>
    </table>
    <br>
    Total <?php echo $Num_Rows;?> Record : <?php echo $Num_Pages;?> Page :
    <?php
    if($Prev_Page) {
        echo " <a href='$_SERVER[SCRIPT_NAME]?Page=$Prev_Page'><< Back</a> ";
    }
    for($i=1; $i<=$Num_Pages; $i++) {
        if($i != $Page) {
            echo "[ <a href='$_SERVER[SCRIPT_NAME]?Page=$i'>$i</a> ]";
        } else {
            echo "<b> $i </b>";
        }
    }
    if($Page!=$Num_Pages) {
        echo " <a href ='$_SERVER[SCRIPT_NAME]?Page=$Next_Page'>Next>></a> ";
    } ?>
    </div> <br><br>
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