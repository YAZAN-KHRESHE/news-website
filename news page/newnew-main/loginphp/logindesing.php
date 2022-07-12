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

                <form action="include/login.php" method="POST">

                <div class="d-flex align-items-center mb-3 pb-1">
                    <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                    <span class="h1 fw-bold mb-0  text-danger">Login</span>
                </div>

                <h5 class="fw-normal mb-2 pb-3 text-danger" style="letter-spacing: 1px;">Sign into your account</h5>

                <!-- php -->
                <!-- empty -->
                <?php     
                if(isset($_GET['empty'])) {
                    $mess=$_GET['empty'] ; 
                    $mess= "Please insert email and password " ; 
                ?>
                <!--  -->

                <div class="alert alert-danger" role="alert"> <?php echo $mess; ?> </div>
                <?php 
                }
                ?>
                <!-- error pass -->
                <?php     
                if(isset($_GET['error'])) {
                    $mess=$_GET['error'] ; 
                    $mess= "Error password " ; 
                ?>
                <!--  -->

                <div class="alert alert-danger" role="alert"> <?php echo $mess; ?> </div>
                <?php 
                }
                ?>
                <!-- erorr name email -->
                <?php     
                if(isset($_GET['invalid'])) {
                    $mess=$_GET['invalid'] ; 
                    $mess= "Error Email " ; 
                ?>
                <!--  -->

                <div class="alert alert-danger" role="alert"> <?php echo $mess; ?> </div>
                <?php 
                }
                ?>
            

            


                <div class="form-outline mb-3">
                    <input type="email" id="form2Example17" name="Email" class="form-control form-control-lg"  placeholder="Enter your email"/>
                    <label class="form-label text-danger" for="form2Example17" >Email address</label>
                </div>

                <div class="form-outline mb-3">
                    <input type="password" id="form2Example27" name="password" class="form-control form-control-lg"  placeholder="password"/>
                    <label class="form-label text-danger" for="form2Example27" >Password</label>
                </div>

                <div class="pt-1 mb-3 text-center">
                    <button class="btn btn-danger btn-lg btn-block " name="login"  type="submit">Login</button>
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