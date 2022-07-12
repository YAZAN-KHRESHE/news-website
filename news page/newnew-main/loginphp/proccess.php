<?php 

include_once 'connect.php' ; 

$id = 0 ; 
$update= false ; 
$fname=''  ; 
$lname ='' ; 
$address ='' ; 
$browser='';

if(isset($_POST['save'])){
    $fname = $_POST['Fname'] ; 
    $lname = $_POST['Lname'] ; 
    $address = $_POST['Address'] ;
    $img = $_FILES['img']; 
    $browser = $_POST['browser'] ; 
    $path = '';
    


    if($img && $img['tmp_name']) {
        //$name_file=$img['name'];
        //$tmp_name=$img['tmp_name'];
        $path="image/".$img['name'] ; 
        move_uploaded_file($img['tmp_name'],$path) ; 
    }







    $query="INSERT INTO data (img,Fname,Lname,browser,location) values('$path','$fname','$lname','$browser','$address') " ; 
    $result=mysqli_query($con,$query); 

    $_SESSION['message'] = "Record has been saved!" ; 
    $_SESSION['msgtype'] ="success" ; 

    header("location: crud.php") ; 

}


// start delete ..
if(isset($_GET['delete'])){
    $id = $_GET['delete'] ; 
    $con->query("DELETE FROM data WHERE id=$id");

    $_SESSION['message'] = "record has been deleted!" ; 
    $_SESSION['msgtype'] ="danger" ; 

    header("location: crud.php") ; 

}
// end delete ..

// Start edit .. 

if(isset($_GET['edit'])){
    $id= $_GET['edit'] ; 
    $update= true ; 
    $result = $con->query("SELECT * FROM data WHERE id=$id") ; 

    if($result == true ){
        $row = $result-> fetch_array();
        $fname = $row['Fname']  ;
        $lname = $row['Lname']; 
        $browser=$row['browser'] ; 
        $address = $row['location'] ;
        $img = $row['img'];
        
    }
}




if(isset($_POST['update'])) {
    $id = $_POST['id'] ; 
    $fname= $_POST['Fname'] ; 
    $lname= $_POST['Lname'] ; 
    $browser=$_POST['browser'] ; 
    $address= $_POST['Address'] ; 

    $result = $con->query("SELECT * FROM data WHERE id=$id") ;
    $row = $result-> fetch_array();
    $path = $row['img'];
    $img =$_FILES['img'];


    //echo "hi".$path;die;
    if ($img && $img['tmp_name']) {
        $path="image/".$img['name'] ; 
        move_uploaded_file($img['tmp_name'],$path) ;
    }

    $con->query("UPDATE data SET Fname='$fname', Lname='$lname' , browser='$browser' ,location='$address' , img='$path' WHERE id=$id ");

    $_SESSION['message']  = "Record has been updated !" ; 
    $_SESSION['msgtype'] = "warning" ; 

    header("location: crud.php") ; 

}

?> 