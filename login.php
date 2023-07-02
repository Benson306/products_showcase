<?php 
session_start();
require("connection.php");

if(isset($_POST['submit'])){
$email = mysqli_real_escape_string($conn,strip_tags($_POST['email']));
$password = mysqli_real_escape_string($conn,strip_tags($_POST['password']));

$sql = "SELECT * FROM users WHERE email = '$email'";
$run = mysqli_query($conn, $sql);
$rows= mysqli_fetch_assoc($run);

$count = mysqli_num_rows($run);

    if($count > 0){
        if($password == $rows['password']){
        
             ?>
            <script>
            window.location='dashboard.php';
            </script>

            <?php

                $_SESSION['email']=$email;
        }else{
            ?>
            <script>
                window.alert("Incorrect Password");
                window.location='admin.php';
            </script>
            <?php
        }
    }else{
        ?>
        <script>   
        window.alert("User does not exist");
        window.location="admin.php";
        </script>
        <?php
    }
}
?>