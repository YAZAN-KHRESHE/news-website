<?php 

include 'header.php' ;

if(isset($_GET['well'])){
    if(($_SESSION['ID'])){
        echo  include 'crud.php' ; 

    } 
    else {

    } 

}
else {
    header("location: logindesign.php"); 
    exit();
}



include 'footer.php' ; 

?>