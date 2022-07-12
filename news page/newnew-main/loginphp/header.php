<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>login2</title>
</head>
<body>

<!-- navbar -->
<nav class="navbar navbar-expand-md navbar-light bg-light ">
        <div class="container">
            <a href="index.php" class="navbar-brand">
                <span class="fw-bold text-secondary text-danger "> login system</span>
            </a>
            <!-- mobile -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" 
            data-bs-target="#main-nav" aria-controls="main-nav" aria-expanded="false" 
            aria-label="toggle navigation">
            <span class="navbar-toggler-icon"></a></span>
            </button>

            <!-- navbar links -->
            <div class="collapse navbar-collapse justify-content-end align-center" id="main-nav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="logindesing.php" class="nav-link d-flex justify-content-end"> <button type="button" class="btn btn-outline-danger fw-bold ">Login</button></a>
                        </li>
                
                
                </ul>
            </div>
        </div>
    </nav>
    <!-- end navbar -->

   