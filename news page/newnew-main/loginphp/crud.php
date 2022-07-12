<?php 
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>crud</title>
    <style>
        .image{
            height: 100px;
            width:100px;
        }
    </style>


</head>
<body>
    <?php include 'proccess.php' ;  ?>
    <?php include_once 'connect.php' ; ?> 



    <div class="container mt-5 ">
    <div class="mb-5 ">
        <a href="addcrud.php"><button class="btn btn-primary" type="button">Add news</button></a>
        <a href="index.php"><button class="btn btn-primary" type="button">view home page</button></a>
        </div>
    <?php     
                if(isset( $_SESSION['message'] )) {
                ?>

                <div class="alert alert-<?php echo  $_SESSION['msgtype'] ;?>"> 
                <?php   echo $_SESSION['message'] ; 
                        unset($_SESSION['message']) ;  ?> 
                </div>
                <?php 
                }
                ?>

    <?php 
    $query= " select * from data "; 
    $result=mysqli_query($con,$query) ; 
    ?>
    <div class="row g-0 justify-content-center align-items-center mb-5">
        <table class="table">
    <thead>
        <tr>
            <th scope="col"> ID</th>
            <th scope="col">Image</th>
            <th scope="col">Title</th>
            <th scope="col">Sub-title</th>
            <th scope="col">article</th> 
            <th scope="col">type</th>
            <th scope="col=2">Action</th>
        </tr>
    </thead>

    <?php  while($row =  $result->fetch_assoc()):    ?>
            <tr>
                <td><?php echo $row['id'] ?></td>
                <td> <img class="image" src="<?php echo $row['img'] ?>" alt="not found"> </td>
                <td><?php echo $row['Fname'] ?></td>
                <td><?php echo $row['Lname'] ?></td>
                <td><?php echo $row['location'] ?></td> 
                <td><?php echo $row['browser'] ?></td>

                <td>
                    <a  class="btn btn-info text-white" href="addcrud.php?edit= <?php echo $row['id']; ?>"  > Edit</a>
                    <a  class="btn btn-danger" href="proccess.php?delete=<?php echo $row['id']; ?>">del</a>
                </td>
            </tr>
        <?php endwhile ;  ?>
        </table> 
        
        </div>
        </div>

    <?php


    // function pre_r($array){
    //     echo '<pre>' ; 
    //     print_r($array) ; 
    //     echo '</pre>' ;    
    // }
    
    
?> 


</body>
</html>