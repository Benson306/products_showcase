<?php
require("connection.php");

if(isset($_POST['edit'])){
    $title = mysqli_real_escape_string($conn,strip_tags($_POST['title']));
    $details = mysqli_real_escape_string($conn,strip_tags($_POST['details']));
    $price = mysqli_real_escape_string($conn,strip_tags($_POST['price']));

    $edit_id = mysqli_real_escape_string($conn,strip_tags($_POST['edit_id']));

    $img = $_FILES['file']['name'];

    $sql;

    if(empty($img)){
        $sql = "UPDATE products SET title = '$title', details='$details', price = '$price' WHERE id = '$edit_id' ";

        if(mysqli_query($conn,$sql)){
            ?>
            <script>
            window.alert("Product Updated");
            window.location="dashboard.php";
            </script>
        <?php } else { ?>
            <script>
                window.alert("Server Error at empty true. Contact Admin");
                window.location="dashboard.php";
            </script>
        <?php }

    }else{

        $sql = "UPDATE products SET title = '$title', details='$details', price = '$price', image = '$img' WHERE id = '$edit_id' ";

        if(mysqli_query($conn,$sql)){

            move_uploaded_file($_FILES['file']['tmp_name'], "images/$img");

            ?>
            <script>
            window.alert("Product Updated");
            window.location="dashboard.php";
            </script>
        <?php } else { ?>
            <script>
                window.alert("Server Error. Contact Admin");
                window.location="dashboard.php";
            </script>
        <?php }

    }


}


?>
