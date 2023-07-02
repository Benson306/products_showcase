<!DOCTYPE html>
<html lang="en">
<head>

<?php
require("connection.php"); 

?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Products</title>
</head>
<body class="bg-zinc-900 min-h-screen">
    <div class='pl-6 pr-6 mt-10'>
        <br />
        <p class="text-3xl text-center text-orange-500 font-semibold">Products</p>
        <br />


        <div class='flex flex-wrap gap-10 justify-center'>

        
        <?php

$sql = "SELECT * FROM products";
$run = mysqli_query($conn, $sql);

$count = mysqli_num_rows($run);

if($count > 0 ){ 

        while($rows = mysqli_fetch_assoc($run)) {                                        

        echo "

                <div class='max-w-xs rounded overflow-hidden shadow-lg bg-white'>
                    <img class='object-contain h-48 w-full' src='./images/$rows[image]' />
                    <div class='px-6 py-4 text-center'>
                        <div class='font-bold text-xl mb-2'>$rows[title]</div>
                        <div class='text-gray-700 text-base'>
                        $rows[details]
                        </div>
                        <i class='text-gray-700 text-base'>
                        Ksh. $rows[price]
                        </i>
                        
                    </div>
                </div>
                    
        ";
          
            }


        } else {
            echo "
            <div class='text-white text-center'>No Products To Display</div>
                            
            ";
        }

        ?>

                   
        </div>

        <br />
        
        
    </div>
</body>
</html>