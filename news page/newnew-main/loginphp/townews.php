<?php
require_once "include/connect.php";
$id = $_POST['id'];
if (!$id) {
    header('location: index.php');
    exit(); 
} 
    $sql = "SELECT * FROM data WHERE id = $id";
    $sql = mysqli_query($con,$sql);
    $row =  $sql->fetch_assoc();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pro</title>

    <!-- css link  -->
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/yazan.css">

    <!-- google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600&family=Caveat&family=Festive&family=Rampart+One&family=Work+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
</head>
<body>

<!-- start header -->
<div class="header">
        <div class="container">
            <img class="logo" src="img/news.jpg" alt="">
            <div class="link">
                <span class="icon">
                    <i id="icon" class="fas fa-align-right"></i>
                </span>
                <ul>
                    <li><a href="#landing">الصفحة الرئيسية</a></li>
                    <li><a href="#services">اخر الاخبار</a></li>
                    <li><a href="#portfolio">الاخبار</a></li>
                    <li><a href="#contact">اتصل بنا</a></li>
                    <li class="nav-item">
                        <a href="logindesing.php" class="nav-link"> <button type="button" class="btn btn-outline-danger fw-bold">Login</button></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- end header -->

<!-- start about  -->
<div class="about">
        <div class="container">
            <a href="index.php"  > <i class="fas fa-backspace"></i> Back to home </a>
            <h2 class="special-heading"> about</h2>
            <p> </p>
            <div class="about-content">
                <div class="image">
                    <img src="<?= $row['img'] ?>" alt="">

                </div>



                <div class="text">
                    <h3> <?= $row['Lname'] ?> </h3>
                    <hr>
                    <p> <?= $row['location'] ?>   </p>
                </div>


            </div>
        </div>
    </div>

    <!-- end about -->


    <?php include 'footer2.php' ;  ?>








</body>
</html>