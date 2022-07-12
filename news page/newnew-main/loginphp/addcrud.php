<?php include 'proccess.php' ;  ?>
<?php include_once 'connect.php' ; ?> 



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
<section class="vh-100" style="background-color: #f6f6f6;">
<div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
    <div class="col col-xl-10">
        
        <div class="card" style="border-radius: 1rem;">
        <div class="row g-0 justify-content-center align-items-center" >

            <div class="col-md-6 col-lg-7 d-flex align-items-center">
            <div class="card-body p-4 p-lg-5 text-black">
                
                <!-- start form -->
                <form action="proccess.php" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?php echo $id ;  ?>">

                <div class="d-flex align-items-center mb-1 pb-1">
                    <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                    <span class="h1 fw-bold mb-0  text-primary">news</span>
                </div>

                <h5 class="fw-normal mb-2 pb-3 text-primary" style="letter-spacing: 1px;">Add news</h5>
                
                <div class="form-outline mb-2">
                    <input type="text"  name="Fname" value="<?php echo $fname;  ?>"   class="form-control form-control-lg" placeholder="Title" />
                </div >
                
                <div class="form-outline mb-2">
                    <input type="text"  name="Lname"  value="<?php echo $lname;  ?>"  class="form-control form-control-lg" placeholder="Sub-title" />
                </div>
                <div class="form-outline mb-2">
                    <input type="text"  name="Address" value="<?php echo $address;  ?>"  class="form-control form-control-lg"  placeholder="article"/>
                </div>
                <!-- sdfsdffdffdfdfsdf -->

                <label for="browser" class="my-2">Choose your catgory from the list</label>
                <input list="browsers" name="browser" id="browser">
                <datalist id="browsers" name="browser">
                    <option value="sport">
                    <option value="since">
                </datalist>
                <!-- end dfsdfsldkfsldkfd -->
                <!-- img -->
                <div class="form-outline mb-2">
                    <input type="file"  name="img"  class="form-control form-control-lg "  />
                </div>
                <!-- end img -->    

                <div class="pt-1 mb-1 text-center">
                    <?php 
                    if ($update == true) :?>
                        <button class="btn btn-danger btn-lg btn-block" name="update"  type="submit">update</button>
                        <?php else: ?>
                    <button class="btn btn-primary btn-lg btn-block" name="save"  type="submit">Save</button>
                    <?php endif; ?> 
                </div>
                </form>
                <a href="crud.php"  > <i class="fas fa-backspace"></i> Back</a>
                <!-- endform -->
            </div>
            </div>
        </div>
        </div>
    </div>
    </div>
    </div>
    </section>
    
</body>
</html>