<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        @vite('resources/css/app.css')
    </head>
    <body class="bg-black overflow-hidden">
            <div class="bg-[#FFFFFF] py-5 pl-7 md:pl-20 lg:pl-28 font-bold text-xl w-full">WELCOME TO SAMBAG2 ! </div>

            <div class="flex justify-center items-center h-screen ">
                <div class="bg-green-500 mb-10 h-[32rem] w-full max-w-sm md:max-w-[30rem] lg:max-w-custom  rounded-[1.5rem]">
                    <div class="flex flex-col gap-14 justify-center items-center"> 
                        <div class="bg-white h-[10rem] w-[10rem] rounded-full mt-10">
                            <img src="" alt="">
                        </div> 
                        <form class="flex flex-col gap-10" action="">
                            <input id="username" type="text" class="w-[15rem] h-[2.5rem] rounded-lg bg-orange-100" placeholder=" Enter username">
                            <input id="password" type="text" class="w-[15rem] h-[2.5rem] rounded-lg bg-orange-100" placeholder=" Enter password">

                            <div class="flex justify-center">
                                <button type="submit" class="bg-orange-100 rounded-md py-2 px-6">Log in</button>
                            </div>

            
                        </form>  
                       
                    </div>
                </div>
            </div>
    </body>

</html>
