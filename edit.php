<?php
session_start();
require("connection.php");
if(isset($_SESSION['email'])){
    $email = $_SESSION['email'];
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="grand computer store icon" href="./images/grand.ico" type="image/x-icon"/>
    <title>Edit Product</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 dark:bg-gray-900 min-h-screen">
        <div class="flex justify-start ml-20 mt-10">
            <a class="bg-red-600 hover:bg-blue-700 text-white font-bold py-1 px-2 rounded" href="dashboard.php">
                    Back
            </a>
        </div>
<?php

if(isset($_GET['edit_id'])){
    $id = $_GET['edit_id'];

    $sql = "SELECT * FROM products WHERE id = '$id'";

	$run = mysqli_query($conn, $sql);

    $count = mysqli_num_rows($run);

	if($count > 0 ){ 
            while($rows = mysqli_fetch_assoc($run)) {                                        

            echo "
            
    <div class='flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0'>
      <div class='w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700'>
          <div class='p-6 space-y-4 md:space-y-6 sm:p-8'>
              <h1 class='text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white text-center'>
                  Edit Product
              </h1>
              <form class='space-y-4 md:space-y-6' action='edit_action.php' method='POST' enctype='multipart/form-data'>
                  <div>
                      <label for='title' class='block mb-2 text-sm font-medium text-gray-900 dark:text-white'>Product Title</label>
                      <input type='text' name='title' id='title' class='bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500' placeholder='HP Folio 9470m' value='$rows[title]' required=''>
                  </div>
                  <div>
                      <label for='details' class='block mb-2 text-sm font-medium text-gray-900 dark:text-white'>Product Details</label>
                      <textarea type='text' name='details' id='details' placeholder='Specs' class='bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500' required=''>$rows[details]</textarea>
                  </div>
                  <div>
                      <label for='price' class='block mb-2 text-sm font-medium text-gray-900 dark:text-white'>Price</label>
                      <input type='number' name='price' id='price' class='bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500' placeholder='45000' value='$rows[price]' required=''>
                  </div>
                  <div>
                        <label class='block mb-2 text-sm font-medium text-gray-900 dark:text-white' for='file'>Select Image If You Need To Replace:</label>";
                        //<img class='object-contain h-48 w-full' src='./images/$rows[image]' />

                        // Check if the file is an image (you need to adjust the condition based on your file naming conventions)
                        if (preg_match('/\.(jpg|jpeg|png)$/', $rows['image'])) {
                            echo "<img class='object-contain h-48 w-full' src='./images/$rows[image]' />";
                        }
                        
                        // Check if the file is a video (you need to adjust the condition based on your file naming conventions)
                        elseif (preg_match('/\.(mp4|avi|mov)$/', $rows['image'])) {
                            echo "<video class='object-contain h-48 w-full' controls><source src='./images/$rows[image]' type='video/mp4'></video>";
                        }


                        echo "
                        <br>
                        <input class='block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400' id='file' type='file' name='file' >
                  </div>
                  <input type='hidden' value='$rows[id]' name='edit_id'>
                  <div class='flex gap-4'>
                    <a href='dashboard.php' class='w-1/2 text-white bg-slate-600 hover:bg-slate-700 focus:ring-4 focus:outline-none focus:ring-slate-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-red-600 dark:hover:bg-slate-700 dark:focus:ring-slate-800'>Cancel</a>
                    <button type='submit' id='edit' name='edit' class='w-1/2 text-white bg-lime-600 hover:bg-lime-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-sky-600 dark:hover:bg-lime-700 dark:focus:ring-lime-800'>Submit</button>
                  </div>
              </form>
          </div>
      </div>
  </div>
            
            ";
        } 
    }else{
        echo "<p>Go Back Select Edit Item</p>";
    }
}
?>
     <br>
    <br> <br>
    <br> <br>
    <br>
</body>
</html>

<?php }else{
?>
<script>window.alert("You have not Logged in");window.location="admin.php";</script>
<?php
}
?>