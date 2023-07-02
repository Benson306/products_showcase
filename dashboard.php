<!DOCTYPE html>
<html lang="en">
<head>
    <?php 
    require("connection.php");

    ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 dark:bg-gray-900 min-h-screen">
    <div class='pl-6 pr-6 mt-10'>
        <br />
        <p class="text-3xl text-center text-orange-500 font-semibold">Manage Products</p>
        <br />
        <div class="flex justify-center">
            <a class="bg-lime-600 hover:bg-blue-700 text-white font-bold py-1 px-2 rounded" href="add.php">
            Add New Product
            </a>
        </div>
        <br>
        <div class='flex flex-wrap gap-10 justify-center'>
            <br />


    <?php

	$sql = "SELECT * FROM products";
	$run = mysqli_query($conn, $sql);

    $count = mysqli_num_rows($run);

	if($count > 0 ){ 
            echo "
            <br>
            ";

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
                            <div class='flex gap-4 justify-center mt-5'>
                                <button class='bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-2 rounded'>
                                    Edit
                                </button>
                                <a href='delete.php?del_id=$rows[id]' class='bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-2 rounded'>
                                    Delete
                                </a>
                            </div>
                            
                        </div>
                    </div>
                        
            ";
              
                }


            } else {
                echo "
                <center>
                <p class='bg-danger'> Oops!!!Sorry we do not have a course that fits your description at the moment. Try others back in the <a href='index.php'><u><b>homepage</a></p> </center>
                                
                ";
            }

            ?>
    
                   
        </div>

        <br />
        
        
    </div>
</body>

</html>