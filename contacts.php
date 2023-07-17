<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact US</title>
    <script src="https://cdn.tailwindcss.com"></script>
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
                        <a href="products.php">Products</a>
                    </li>
                    <li class="text-xl text-slate-50 hover:text-red-600 text-center font-sans ">
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