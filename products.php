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
                    <li class="text-xl text-slate-50 hover:text-red-600 align-text-top font-sans ">
                        <a href="index.php">Home</a>
                    </li>
                    <li class="text-xl text-slate-50 hover:text-red-600 text-center font-sans ">
                        <a href="#">Products</a>
                    </li>
                    <li class="text-xl text-slate-50 hover:text-red-600 text-center font-sans ">
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



    <div class='pl-6 pr-6 mt-10'>
        <br />
        <p class="text-3xl text-center text-red-700 font-semibold">Products</p>
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