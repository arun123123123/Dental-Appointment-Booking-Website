<?php

include ("connection.php");

if(isset($_POST['submit'])){

    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM admin WHERE email = '$email' and password = '$password'";
    $result = mysqli_query($conn,$sql);
    $num = mysqli_num_rows($result);

    if($num > 0){
        header("location:admin_panel.php");

        
    }

    else{
        echo'<script>alert("Email and password not matching")</script>';
    }

}

?>



<html>
    <head>
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
<div class="main">
        <form class="login" action="" method="post">
            <h1><i class="fa-solid fa-user-tie"></i><br>Admin</h1>
            <input type="email" name="email" placeholder="Enter your mail ID" required><br>
            <input type="password" name="password" placeholder="Enter Password" required><br>
            <button type="submit" name="submit" class="button">Login</button><br><br>
        
            <style>
                .button{
    margin: 10px;
    padding: 5px;
    background-color:dodgerblue;
    text-decoration: none;
    width: 20%;
    color: white;
    font-weight: bold;
    border:none;
    border-radius: 3px;
}
            </style>
        </form>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</body>


</html>