<?php

include ("connection.php");

if(isset($_POST['submit'])){

   $name = $_POST['name'];
   $email = $_POST['email'];
   $number = $_POST['number'];
   $date = $_POST['date'];
   $insert = mysqli_query($conn, "INSERT INTO `contact1`(name, email, number, date) VALUES('$name','$email','$number','$date')") or die('query failed');
   echo'<script>alert("successfully submitted")</script>';

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>DENTAL</title>
    <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- bootstrap cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="style.css">
</head>
<body>
    
<?php
    require_once ("header.php");
?>
<hr>
   

    <!-- Home Section starts -->

        <div class="home">
            <div class="container">
                <div class="row hero-section">
                    <div class="col-sm-12 col-md-6">
                        <div class="left">
                            <h1>LET US BRIGHTEN<br> YOUR SMILE</h1>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.<br> Reprehenderit, possimus. Facere dolores aspernatur<br> soluta explicabo, ad ipsum esse earum. At saepe delectus<br>quibusdam officiis accusantium ducimus quo <br> exercitationem asperiores ullam.</p>
                            <a href="#contact" type="button" class="my-btn btn-primary">Make Appointment</a>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <img src="./images/Tooth-Icon,-dental-care-icon-premium-vector-PNG.png" alt="" class="home-img image-fluid">
                    </div>
                </div>
            </div>
        </div>



    <!-- Home Section ends -->

    <!-- About Section starts -->
        <div class="about" id="about">
            <div class="container header-wrapper1">
                <h1 class="text-center">ABOUT US</h1>       
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-6  left1">    
                        <img src="./images/favpng_dentistry-dental-hygienist-tooth-clinic.png" alt="" class="home-img image-fluid">
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div class="left1">
                            <h1>True Healthcare For <br> Your Family</h1>
                            <p><span>1</span> Lorem ipsum dolor sit amet consectetur adipisicing elit.<br><span>2</span> Reprehenderit, possimus. Facere dolores aspernatur<br><span>3</span> soluta explicabo, ad ipsum esse earum. At saepe delectus<br><span>4</span> quibusdam officiis accusantium ducimus quo <br><span>5</span> exercitationem asperiores ullam.</p>
                            <a href="#contact" type="button" class="my-btn btn-primary">Make Appointment</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- About Section ends -->

    <!-- Services Section starts -->
    <div class="services" id="services">
        <div class="container header-wrapper1">
            <h1>OUR SERVICES</h1>       
        </div>
        <div class="container text-center hi">
            <div class="row">
                <div class="col-sm-12 col-md-3 header-wrapper2">
                    <img src="images/icon-1.svg" alt="" class="img2">
                    <h3>Alignment specialist</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat, non?</p>
                </div>
                <div class="col-sm-12 col-md-3  header-wrapper2">
                    <img src="images/icon-2.svg" alt="" class="img2">
                    <h3>Cosmetic dentistry</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat, non?</p>
                </div>
                <div class="col-sm-12 col-md-3  header-wrapper2">
                    <img src="images/icon-3.svg" alt="" class="img2">
                    <h3>Oral hygiene experts</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse, minima?</p>
                </div>
                <div class="col-sm-12 col-md-3 header-wrapper2">
                    <img src="images/icon-4.svg" alt="" class="img2">
                    <h3>Root canal specialist</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse, minima?</p>
                </div>
                <div class="col-sm-12 col-md-3  header-wrapper2">
                    <img src="images/icon-5.svg" alt="" class="img2">
                    <h3>Live dental advisory</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse, minima?</p>
                </div>
                <div class="col-sm-12 col-md-3  header-wrapper2">
                    <img src="images/icon-6.svg" alt="" class="img2">
                    <h3>Cavity inspection</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse, minima?</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Services Section ends -->
    
    <!-- Reviews Section starts -->

    <div class="reviews" id="reviews">
        <div class="container header-wrapper1 text-center">
            <h1>SATISFIED CLIENTS</h1>       
        </div>
        <div class="container text-center hi">
            <div class="row">
                <div class="col-sm-12 col-md-3 header-wrapper3">
                    <img src="images/pic-1.png" alt="" class="img3 image-fluid ">
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eos, iure? Nemo est aspernatur voluptatum id, laboriosam asperiores iure omnis alias?</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
         <h3>john deo</h3>
         <span>satisfied client</span>
                </div>
                <div class="col-sm-12 col-md-3  header-wrapper3">
                    <img src="images/pic-2.png" alt=""class="img3 image-fluid">
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eos, iure? Nemo est aspernatur voluptatum id, laboriosam asperiores iure omnis alias?</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <h3>john deo</h3>
                    <span>satisfied client</span>
                </div>
                <div class="col-sm-12 col-md-3  header-wrapper3">
                    <img src="images/pic-3.png" alt=""  class="img3 image-fluid">
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eos, iure? Nemo est aspernatur voluptatum id, laboriosam asperiores iure omnis alias?</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <h3>john deo</h3>
                    <span>satisfied client</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Reviews Section ends -->

    <!-- Contact Section starts -->
    <div class="contact" id="contact">
        <div class="container header-wrapper1">
            <h1>CONTACT</h1>       
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-6">    
                    <img src="./images/klipartz.com.png" alt="" class="home-img  image-fluid">
                </div>
                <div class="col-sm-12 col-md-6">
                    <div class="contact" id="contact">
                    
                        <form action="" method="post">
                            <h4 class="headings">MAKE APPOINTMENT</h4>
                            <span>your name :</span>
                            <input type="text" name="name" placeholder="enter your name" class="box" required>
                            <span>your email :</span>
                            <input type="email" name="email" placeholder="enter your email" class="box" required>
                            <span>your number :</span>
                            <input type="number" name="number" placeholder="enter your number" class="box" required>
                            <span>appointment date :</span>
                            <input type="datetime-local" name="date" class="box" required>
                            <input type="submit" value="SUBMIT" name="submit" class="link-btn">
                        </form>  
                     
                    </div>



                </div>
            </div>
        </div>
    </div>
                    
                   
    <!-- Contact Section ends -->

    <!-- Footer Section starts -->
    
    <div class="footer" id="contacts">
        <div class="container1 text-center hii">
            <div class="row">
                <div class="col-sm-12 col-md-3 header-wrapper4">
                    <i class="fas fa-phone"></i>
                    <h3>phone number</h3>
                    <p>+123-456-7890</p>
                    <p>+111-222-3333</p>
                </div>
                <div class="col-sm-12 col-md-3 header-wrapper4">
                    <i class="fas fa-map-marker-alt"></i>
                    <h3>our address</h3>
                    <p>Kerala, india - 695512</p>
                </div>
                <div class="col-sm-12 col-md-3 header-wrapper4">
                    <i class="fas fa-clock"></i>
                    <h3>opening hours</h3>
                    <p>00:07am to 10:00pm</p>
                </div>
                <div class="col-sm-12 col-md-3 header-wrapper4">
                    <i class="fas fa-envelope"></i>
                    <h3>email address</h3>
                    <p>arunjithu23@gmail.com</p>
                    <p>aruncsesist1822@gmail.com</p>
                </div>
            </div>
        </div>
        
    </div>
                


    <!-- Footer Section ends -->



</body>
</html>