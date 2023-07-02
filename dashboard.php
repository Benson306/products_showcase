<!DOCTYPE html>
<html lang="en">
<head>
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
        

                    <div class="max-w-xs rounded overflow-hidden shadow-lg bg-white">
                        <img class="object-contain h-48 w-full" src='./images/samsung.jpg' />
                        <div class="px-6 py-4 text-center">
                            <div class="font-bold text-xl mb-2">Tar</div>
                            <p class="text-gray-700 text-base">
                            Ksh. 500
                            </p>
                            <div class="flex gap-4 justify-center mt-5">
                                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-2 rounded">
                                    Edit
                                </button>
                                <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-2 rounded">
                                    Delete
                                </button>
                            </div>
                            
                        </div>
                    </div>


                   
        </div>

        <br />
        
        
    </div>
</body>
</html>