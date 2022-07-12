<?php  
session_start(); 
include 'connect.php' ; 

if(isset($_POST['login'])){

    if(empty($_POST['Email']) || empty($_POST['password'])){
        header("location: ../logindesing.php?empty") ; 
        exit(); 

    } else { 
        

        $Email = mysqli_real_escape_string($con,$_POST['Email']);
        $password = mysqli_real_escape_string($con,$_POST['password']);

        $query= " select * from login where Email='".$Email."' " ; 
        $result = mysqli_query($con,$query);

        if($row=mysqli_fetch_assoc($result)){
            $hashpass=password_verify($password,$row['password']) ;

            if($hashpass == false){
                header("location: ../logindesing.php?error") ; 
                exit(); 
            } 
            elseif($hashpass==true) { 
                $_SESSION['ID']=$row['ID'] ;
                $_SESSION['Fname']=$row['Fname'] ;
                $_SESSION['Lname']=$row['Lname'] ;
                $_SESSION['Email']=$row['Email'] ;
                $_SESSION['password']=$row['password'] ;

                header("location: ../account.php?well"); 
                exit();

                
            }
        } else {
            header("location: ../logindesing.php?invalid") ; 
            exit(); 
        }


        
    }




} else {
    header("location: ../logindesing.php") ; 
    exit(); 
}


?>