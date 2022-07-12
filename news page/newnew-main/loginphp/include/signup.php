<?php  

include 'connect.php' ; 

    if(isset($_POST['signup'])){

        if(empty($_POST['Fname']) || empty($_POST['Lname']) || empty($_POST['Email']) || empty($_POST['password']) ){

            header("location: ../signupdesign.php?empty") ; 
            exit(); 



        } else{

            $Fname = mysqli_real_escape_string($con,$_POST['Fname']) ;   
            $Lname =mysqli_real_escape_string($con,$_POST['Lname']);        
            $Email =mysqli_real_escape_string($con, $_POST['Email']);        
            $password =mysqli_real_escape_string($con,$_POST['password']) ;  
            
            
            // ("/^[a-zA-Z] $*/", $Fname) || ("/^[a-zA-Z] $*/", $LANE)
            
            if(!preg_match("/^[a-zA-Z]*$/", $Fname) || !preg_match("/^[a-zA-Z]*$/", $Lname)){

                header("location: ../signupdesign.php?ch_error") ; 
                exit(); 


            }else {
                if(!filter_var($Email,FILTER_VALIDATE_EMAIL)){
                    header("location: ../signupdesign.php?email_error") ; 
                    exit(); 
                } 
                else {



                    $query= " select * from login where Email= '".$Email."' " ; 
                    $result=mysqli_query($con,$query);

                    if(mysqli_fetch_assoc($result)){
                        header("location: ../signupdesign.php?Email") ; 
                        exit(); 

                    } else {
                        $hash = password_hash($password,PASSWORD_DEFAULT);
                        $query="insert into login (Fname,Lname,Email,password) values('$Fname','$Lname','$Email','$hash' ) " ; 
                        $result=mysqli_query($con,$query); 

                        header("location: ../signupdesign.php?success") ; 
                        exit(); 
                    }

                    
                }
            }
        }






    } else{
        header("location: ../index.php") ; 
        exit(); 
    }

?> 