<!DOCTYPE html>
<html lang="en">
<head>

<?php
require("connection.php"); 

?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="grand computer store icon" href="./images/grand.ico" type="image/x-icon"/>
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Products</title>
</head>
<body class="bg-zinc-900 min-h-screen" style="display: flex; flex-direction: column; min-height: 100vh;">


        <div>
            <ul class="flex py-2 pr-8 border-b-1 md:border-b-0">
                <div class="flex w-full md:basis-1/4 items-center">
                    <li class="flex basis-1/2 md:justify-end px-5">
                        <a href="index.php">
                            <img class="align-middle md:ml-10" src="./images/logo.png" />
                        </a>
                        
                    </li>
                    <div class="menuButton flex basis-1/2 place-content-end justify-end md:collapse">
                        <img src="./images/menu.png" />
                    </div>
                    
                </div>
                <div class="hidden md:flex basis-3/4 pr-24 items-center place-content-end gap-8">
                    <li class="text-xl text-slate-50 hover:text-[#ff0000] align-text-top font-sans ">
                        <a href="index.php">Home</a>
                    </li>
                    <li class="text-xl text-slate-50 hover:text-[#ff0000] text-center font-sans ">
                        <a href="#">Products</a>
                    </li>
                    <li class="text-xl text-slate-50 hover:text-[#ff0000] text-center font-sans ">
                        <a href="contacts.php">Contact Us</a>
                    </li>

                </div>
            </ul>

            <div class='dropDown invisible md:invisible transition duration-700 ease-in-out bg-slate-300 '>
                <ul class='flex justify-center items-center p-2'>
                    <li class='mediumSizeItems items-center border-black border-r-2 px-5'><a href='index.php'>Home</a></li>
                    <li class='mediumSizeItems items-center px-5'><a href='contacts.php'>Contact Us</a></li>
                </ul>
            </div>

        </div>

    <main style="flex:1;">

    <div class='pl-6 pr-6 mt-10'>
        <br />
        <p class="text-3xl text-center text-[#ff0000] font-semibold">Products</p>
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

                    ";

            // Check if the file is an image (you need to adjust the condition based on your file naming conventions)
            if (preg_match('/\.(jpg|jpeg|png)$/', $rows['image'])) {
                echo "<img class='object-contain h-48 w-full' src='./images/$rows[image]' />";
            }
            
            // Check if the file is a video (you need to adjust the condition based on your file naming conventions)
            elseif (preg_match('/\.(mp4|avi|mov)$/', $rows['image'])) {
                echo "<video class='object-contain h-48 w-full' controls><source src='./images/$rows[image]' type='video/mp4'></video>";
            }

            //<img class='object-contain h-48 w-full' src='./images/$rows[image]' />
            
            echo "
                           
                <div class='px-6 py-4 text-center'>
                    <div class='font-bold text-xl mb-2'>$rows[title]</div>
                    <div class='text-gray-700 text-base' >
                    $rows[details]
                    </div>
                    <i class='text-gray-700 text-base font-bold'>
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

    </main>


    <footer class="bg-white rounded-lg shadow dark:bg-slate-900 mt-4">
    <div class="w-full max-w-screen-xl mx-auto p-4 md:py-8">
        <div class="sm:flex sm:items-center sm:justify-between">
            <a href="#" class="flex items-center mb-4 sm:mb-0">
                <img src="./images/logo.png" class="h-8 mr-3" alt="Grand Computer Store Logo" />
                <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">Grand Computer Store</span>
            </a>
            <ul class="flex flex-wrap items-center mb-6 text-sm font-medium text-gray-500 sm:mb-0 dark:text-gray-400">
                <li>
                    <a href="index.php" class="mr-4 hover:underline md:mr-6 ">Home</a>
                </li>
                <li>
                    <a href="products.php" class="mr-4 hover:underline md:mr-6">Products</a>
                </li>
                <li>
                    <a href="contacts.php" class="hover:underline">Contact Us</a>
                </li>
            </ul>
        </div>
        <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
        <span class="block text-sm text-gray-500 text-center dark:text-gray-400">© 2023 <a href="#" class="hover:underline">Grand Computer Store™</a>. All Rights Reserved.</span>
    </div>
</footer>
</body>

<script>

    let menuButton = document.querySelector(".menuButton");

    menuButton.onclick = () =>{
        handleDropDown();
    }

    let mediumSizeItems =  document.querySelector(".mediumSizeItems");

    mediumSizeItems.onclick = () =>{
        document.querySelector('.dropDown').setAttribute("class","dropDown invisible md:invisible transition duration-700 ease-in-out bg-slate-300 ");
    }


    let clicked = false;


    const handleDropDown = () =>{
        if(clicked){

            document.querySelector('.dropDown').setAttribute("class","dropDown invisible md:invisible transition duration-700 ease-in-out bg-slate-300 ");
            clicked=false;

        }else if(!clicked){
        
            document.querySelector('.dropDown').setAttribute("class","dropDown visible md:invisible transition duration-700 ease-in-out bg-slate-300 ");

            clicked = true;
        }
    }
    
    
    
        
</script>

</html>