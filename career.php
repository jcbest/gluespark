<?php 
if(isset($_POST['submit'])){

    extract($_POST);

    $name = htmlentities($name);
    $email = htmlentities($email);
    $number = htmlentities($number);
    $name = mysql_real_escape_string($name);
    $email = mysql_real_escape_string($email);
    $number = mysql_real_escape_string($number);
    $time=date('Y-m-d H:i:s');

    if(!empty($name) && ($email) && ($number)){
        include("config.php");
        mysql_select_db($database_con1, $con1);
        $sql="INSERT INTO content(name,email,number,program,registereddate) 
        VALUE('$name','$email','$number','$program','$time')";
 	$result=mysql_query($sql); 
    if($result){ 
    echo "<script type='text/javascript'>  window.location='submitform.html';</script>" ;
     
    }else{
        $error=" Unable to submit your form, please try again";
    }

    }else{
        $error= "you must complete all the information, fill them and try again";
    }
}
?>
 


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome To GlueSpark Engineering & IT Consultants </title>
    <link rel="stylesheet" href="style2.css">
    <script src="https://kit.fontawesome.com/7504f7fc76.js" crossorigin="anonymous"></script>
</head>
<body>
<main class="main">
    <nav class="navbar">
        <div class="icon">
            <h2 class="logo">
                GlueSpark Engineering
            </h2>
        </div>
        <menu class="menu">
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="">About Us</a></li>
                <li><a href="">Contact Us</a></li>
                <li><a href="career.php">Career</a></li>
                <li><a href="">Our Product</a></li>
                <li><a href="policy.html">Our Policy</a></li>
            </ul>
        </menu>
        <div class="search">
            <input type="search" name="" class="srch" placeholder="Type to text">
            <a href=""><button class="btn">Search</button></a>
        </div>
    </nav>

    <form action="" method="POST" id="form">
   <div class="content">
    <div class="form">
        <h2>REGISTER HERE</h2> 
        
        <?php
        if(isset($error)){
            echo $error;
        }
        ?>
       
        <input type="text" name="name" placeholder="Enter name Here" ><br>
        <input type="email" name="email" placeholder="Enter email Here"><br>
        <input type="number" name="number" placeholder="Enter Phone Number Here" ><br><br>
        <select name="program">
            <option value="Select">Select a program</option>
            <option value="Fullstack Developer">Fullstack Developer</option>
            <option value="Project Management">Project Management and Planning</option>
        </select></br>
        <button class="btn" name="submit"><a href="">Submit</a></button>
        </form>
  
        <div class="icon">
<a href=""> </a>
<i class="fa fa-facebook" ></i></a>
<a href=""> <i class="fa fa-twitter" ></i></a>
    <a href=""></a><i class="fa fa-instagram" ></i></a>
    <a href=""></a><i class="fa fa-linkedin" ></i></a>
        </div>


    
   

</div>

</main>
</body>
</html>
