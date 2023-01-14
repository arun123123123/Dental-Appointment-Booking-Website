<!-- Header Section starts -->
<div class="header">
            <div class="container header-wrapper">
            <div class="logo"><img src="./images/Dental-logo-on-transparent-PNG-1.png" alt="" class="image"><br>Dental<span> Care</span></div>
            <div class="links primary">
                <a href="index.php#">Home</a>
                <a href="index.php#about">About</a>
                <a href="index.php#services">Services</a>
                <a href="index.php#reviews">Reviews</a>
                <a href="index.php#contact">Contact</a>
                <a href="admin.php"><i class="fa-solid fa-user-tie"></i> Admin</a>
            </div>


            <div class="mainbutton">
                <a href="#contact" type="button" class="my-btn btn-primary">Make Appointment</a>
                
            </div>

         


            <div class="menu">
                <i class="fa fa-bars fa-2x" aria-hidden="true" id="navBtn" style="color: white;"></i>
                <i class="fa fa-times fa-2x" aria-hidden="true" id="closeBtn" style="color: white ;"></i>
            </div>

        </div>
       
        </div>

    <!-- Header Section ends -->

    <!-- mobile nav -->
    <div class="mobile-nav-wrapper">
        <div class="mobile-nav">
            <a href="index.php#">Home</a>
            <a href="index.php#about">About</a>
            <a href="index.php#services">Services</a>
            <a href="index.php#reviews">Reviews</a>
            <a href="index.php#contact">Contact</a>
            <a href="admin.php"><i class="fa-solid fa-user-tie"></i> Admin</a>
        </div>
   </div>


   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>


<script>

    var menu = document.querySelector('#navBtn');
    var close = document.querySelector('#closeBtn');
    var menuWrapper = document.querySelector('.mobile-nav-wrapper');

    menu.addEventListener('click',function(e){
        menuWrapper.style.display = 'block';
        close.style.display = 'block';
        menu.style.display = 'none';
        
    })

    close.addEventListener('click',function(e){
        menuWrapper.style.display = 'none';
        close.style.display = 'none';
        menu.style.display = 'block';
        
    })

</script>