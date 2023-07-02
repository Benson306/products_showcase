<?php 

require("connection.php");

if(isset($_GET['del_id'])){
    $delete_id = $_GET['del_id'];
    $del_sql = "DELETE FROM products WHERE id = '$delete_id'";
    if(mysqli_query($conn, $del_sql)){
        ?>
        <script>alert("Deleted"); window.location="dashboard.php";</script>
        <?php
    }else{
        ?>
        <script>alert("Server Error"); window.location="dashboard.php";</script>
        <?php 
    }
}

?>