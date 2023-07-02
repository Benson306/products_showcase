<?php
require("connection.php");

if(isset($_POST['add'])){
    $title = mysqli_real_escape_string($conn,strip_tags($_POST['title']));
    $details = mysqli_real_escape_string($conn,strip_tags($_POST['details']));
    $price = mysqli_real_escape_string($conn,strip_tags($_POST['price']));

    $img = $_FILES['file']['name'];


	$ins_sql =  "INSERT INTO products (title, details, price, image) VALUES ('$title','$details','$price', '$img')"; 
	if(mysqli_query($conn,$ins_sql)){
        
        move_uploaded_file($_FILES['file']['tmp_name'], "images/$img");
        
        ?>

		<script>
		window.alert("Product Added");
		window.location="add.php";
		</script>
	<?php } else { ?>
		<script>
			window.alert("Server Error. Contact Admin");
			window.location="add.php";
		</script>
	<?php }
	}


?>