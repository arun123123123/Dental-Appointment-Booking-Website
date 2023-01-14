<?php

include 'connection.php';
$id=$_GET['id'];

$sql="DELETE FROM contact1 WHERE id=$id";
$result=mysqli_query($conn,$sql);

if($result){
    header("location:admin_panel.php");
}

?>