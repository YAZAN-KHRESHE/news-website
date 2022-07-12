<?php

$con = mysqli_connect('localhost','root','','newspage') ;

if(!$con){
    die('connect error' . mysqli_error()) ; 
}
$result = $con->query("SELECT * FROM data WHERE browser='sport' ORDER BY id DESC") ;
$index = [];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>news page</title>

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

<style> 
.header .container{
    z-index: 10;
}

</style>

</head>

<body>
    <!-- start header -->
    <div class="header">
        <div class="container">
            <img class="logo" src="img/news.jpg" alt="">
            <span class="active">
                    <a  href="index.php">الرئيسية</a>
                    <a  href="threenews.php">رياضة</a>
                    <a  href="policy.php">سياسة</a>
            </span>
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

    <!-- start landing section -->
    <div class="landing" id="landing" style="background-image: url(img/رياضة.jpg) ;
                                            background-size: cover ;
                                            height: calc(103vh - 56px);" >
        <div class="intro-text">
            <h1 style="color:cyan"> News </h1>
            <p> Sport</p>
        </div>
    </div>

    <!-- end landing section -->
<?php 
$con = mysqli_connect('localhost','root','','newspage') ;
$req = "SELECT Lname FROM data WHERE browser='sport' ORDER BY id DESC " ; 
$query = mysqli_query($con,$req); 

?>
<!-- شريط الاخبار  -->
<marquee direction="right"  >
<?php


while($fetch = mysqli_fetch_assoc($query)) 
{   
    echo `<p>` . $fetch['Lname'] . `</p>` .   "<img src='img/news.jpg' style='width: 40px; margin-left: 40px; margin-right: 40px;' >  "  ;
}

?>

</marquee> 

<!--  -->
        <!-- <img src="img/news.jpg" alt=""> -->
    <div class="services" id="services">
        <div class="container">
            <h2 class="special-heading"> أخر الاخبار</h2>
            <div class="services-content">
                    <!-- start service-->
                    <?php


                    $a =0;
                        while ($row =  $result->fetch_assoc()) 
                            { array_push($index,$row['id']);
                                ?>
                        <div class="col">
                            <div class="srv">
                                <div class="text">
                                <img src="<?= $row['img'] ?>" alt="">
                                    <h3><?= $row['Fname'] ?></h3>     
                                    <p> <?= $row['Lname'] ?> </p>
                                    <p> <?= $row['location']?></p>
                                </div>
                            </div>
                        </div>
                        <?php $a++; if($a > 2){ break; }  ?>
                    <?php }?>
        </div>

    </div>
    <?php //die;?>

    <!-- end services -->
        <?php
        /*echo "<pre>";
        var_dump($index);
        echo "</pre>";die; 
        */?>
    <!-- start portfolio -->

    <div class="portfolio" id="portfolio">
        <div class="container">
            <h2 class="special-heading">  الاخبار </h2>
            <p>  </p>
            <div class="portfolio-content">
            <?php while ($row =  $result->fetch_assoc()) { 
                    if (!(in_array($row['id'], $index))) { ?>
                    <div class="card">
                        <img src="<?= $row['img'] ?>" alt="">
                        <div class="info">
                            <h3><?php echo $row['Fname'] ?></h3>
                            <p> <?= $row['Lname'] ?></p>
                            <form action="townews.php" method="post">
                                <input type="hidden" name="id" value ="<?= $row['id'] ?>">
                                <button type="submit"  style="background-color: #008CBA; font-size: 10px; color: #fff; "> Read More.. </button>
                            </form>
                        </div>
                    </div>
            <?php } }?>
            </div>
        </div>
    </div>

    <!-- end portfolio -->


    <!-- start contact -->
    <div class="contact" id="contact">
        <div class="container">
            <h2 class="special-heading"> contact</h2>
            <div class="info">
                <p class="label"> feel free to drop us a line at : </p>
                <a class="link" href="mailto:khresheyazan@gmail.com"> khresheyazan@gmail.com</a>
                <div class="social">
                    <i class="fab fa-facebook fa-2x"></i>
                    <i class="fab fa-twitter fa-2x"></i>
                    <i class="fab fa-instagram fa-2x"></i>
                </div>
            </div>
        </div>
    </div>


    <!-- end contact -->

    <!-- start footer  -->

        <?php  include 'footer2.php' ?>


    <!-- end footer  -->
</body>
</html>