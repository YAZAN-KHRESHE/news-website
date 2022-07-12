<?php include 'header.php' ;   ?>



<!-- start section  -->

<section class="vh-100" style="background-color: #f6f6f6;">
<div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
    <div class="col col-xl-10">
        <div class="card" style="border-radius: 1rem;">
        <div class="row g-0">
            <div class="col-md-6 col-lg-5 d-none d-md-block">
            <img
                src="img/logo2.jpg"
                alt="login form"
                class="img-fluid" style="border-radius: 1rem 0 0 1rem;"
            />
            </div>
            <div class="col-md-6 col-lg-7 d-flex align-items-center">
            <div class="card-body p-4 p-lg-5 text-black">

                <form action="include/signup.php" method="POST">

                <div class="d-flex align-items-center mb-1 pb-1">
                    <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                    <span class="h1 fw-bold mb-0  text-danger">SignUp</span>
                </div>

                <h5 class="fw-normal mb-2 pb-3 text-danger" style="letter-spacing: 1px;">Create your account</h5>

<!-- php -->
<!-- empty -->
                <?php     
                if(isset($_GET['empty'])) {
                    $mess=$_GET['empty'] ; 
                    $mess= "Please fill in the blanks" ; 
                ?>

                <div class="alert alert-danger" role="alert"> <?php echo $mess; ?> </div>
                <?php 
                }
                ?>
                <!-- ch erorr -->
                <?php     
                if(isset($_GET['ch_error'])) {
                    $mess=$_GET['ch_error'] ; 
                    $mess= "error name" ; 
                ?>

                <div class="alert alert-danger" role="alert"> <?php echo $mess; ?> </div>
                <?php 
                }
                ?>
                <!-- email error -->
                <?php     
                if(isset($_GET['email_error'])) {
                    $mess=$_GET['email_error'] ; 
                    $mess= "email error" ; 
                ?>

                <div class="alert alert-danger" role="alert"> <?php echo $mess; ?> </div>
                <?php 
                }
                ?>

                <!-- email is alredy in database -->
                <?php     
                if(isset($_GET['Email'])) {
                    $mess=$_GET['Email'] ; 
                    $mess= "email alredy taken " ; 
                ?>

                <div class="alert alert-danger" role="alert"> <?php echo $mess; ?> </div>
                <?php 
                }
                ?>
                <!-- successfly signup -->
                <?php     
                if(isset($_GET['success'])) {
                    $mess=$_GET['success'] ; 
                    $mess= "success email " ; 
                ?>

                <div class="alert alert-success" role="alert"> <?php echo $mess; ?> </div>
                <?php 
                }
                ?>





<!-- end php -->



                <div class="form-outline mb-2">
                    <input type="text" id="form2Example17" name="Fname" class="form-control form-control-lg" placeholder="First Name" />
                </div>
                
                <div class="form-outline mb-2">
                    <input type="text" id="form2Example17" name="Lname" class="form-control form-control-lg" placeholder="Last Name" />
                </div>

                <div class="form-outline mb-2">
                    <input type="email" id="form2Example17" name="Email" class="form-control form-control-lg"  placeholder="Email"/>
                </div>

                <div class="form-outline mb-2">
                    <input type="password" id="form2Example27" name="password"  class="form-control form-control-lg" placeholder="password" />
                </div>

                <div class="pt-1 mb-1 text-center">
                    <button class="btn btn-danger btn-lg btn-block" name="signup"  type="submit">SignUp</button>
                </div>

                
                </form>

            </div>
            </div>
        </div>
        </div>
    </div>
    </div>
</div>
</section>


<?php
    include 'footer.php' ; 
?>