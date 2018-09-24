<?php
$conn = mysqli_connect('localhost', 'root', '', 'ajax') or die(mysqli_error());
    if($_REQUEST['name']) {
        $firstname = $_REQUEST['name'];
        $lastname  = $_REQUEST['lastname'];
        $username  = $_REQUEST['user'];
        $password  = $_REQUEST['pass'];
       $p="INSERT INTO `data`(`Firstname`,`Lastname`,`Username`,`Password`)VALUES('$firstname','$lastname','$username','$password')";
       $ins=mysqli_query($conn,$p);
        if($ins)
            {
              echo "<script> alert('Form submitted successfully, Hoorraah!!'); </script>";
            }
}
