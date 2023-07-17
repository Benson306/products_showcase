<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact US</title>
    <script src="https://cdn.tailwindcss.com"></script>
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
                        <a href="products.php">Products</a>
                    </li>
                    <li class="text-xl text-slate-50 hover:text-[#ff0000] text-center font-sans ">
                        <a href="contacts.php">Contact Us</a>
                    </li>

                </div>
            </ul>

            <div class='dropDown invisible md:invisible transition duration-700 ease-in-out bg-slate-300 '>
                <ul class='flex justify-center items-center p-2'>
                    <li class='mediumSizeItems items-center border-black border-r-2 px-5'><a href='index.php'>Home</a></li>
                    <li class='mediumSizeItems items-center px-5'><a href='products.php'>Products</a></li>
                </ul>
            </div>

        </div>
        <main style="flex:1;">



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