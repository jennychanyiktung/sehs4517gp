<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
            nav ul li a{
                line-height:60px;
                padding-left:5px;
                padding-right:10px;
            }
            nav ul li a:hover{
               font-weight:700;
            }
            nav ul ul li{
               
            }
            nav ul li:hover >ul{
                display:block;
            }
            .youth{
                width:325px;
            }
            .elderly{
                width:228px;
            }
            
            
        </style>
    </head>
    <body class="p-0 m-0">
        <div class="bg-white" > <!--container-->
            <div class="flex items-center justify-center px-0 text-5xl text-white logo bg-sky-600 pt-14 pb-9">
             The Community    
            </div>
      
            <div class="flex items-center justify-center">
            <nav class="">
                <ul class="flex p-0 m-0">
                    <li class="relative inline-block uppercase bg-white mr-14 ">
                        <a href="#" class="block text-sky-500">about us</a>
                    </li>
                    <li class="relative inline-block uppercase bg-white mr-14">
                        <a href="#" class="block text-black">New services & activities</a>
                        <ul class="absolute hidden">
                            <li class=" bg-sky-500"><a href="" class="leading-10 hover:text-white">new services</a></li>
                            <li class="bg-sky-500"><a href="" class="hover:text-white">new activities / courses</a></li>
                        </ul>
                    </li>
                    <li class="relative inline-block uppercase bg-white mr-14">
                        <a href="" class="block text-black">youth support</a>
                        <ul class="absolute hidden youth">
                            <li class=" bg-sky-500"><a href="" class="hover:text-white">teens psychological counselling</a></li>
                            <li  class="bg-sky-500"><a href="" class="hover:text-white">student development services</a></li>
                            <li  class="bg-sky-500"><a href="" class="hover:text-white">welling for youths</a></li>
                        </ul>
                    </li>
                    <li class="relative inline-block uppercase bg-white mr-14">
                        <a href="" class="block text-black">elderly support</a>
                        <ul class="absolute hidden elderly">
                            <li  class="bg-sky-500"><a href="" class="hover:text-white">activities for elderlys</a></li>
                            <li  class="bg-sky-500"><a href="" class="hover:text-white">welling for elderlys</a></li>
                            <li  class="bg-sky-500"><a href="" class="hover:text-white">welling for elderlys</a></li>
                        </ul>
                    </li>
                    <li class="relative inline-block uppercase bg-white mr-14">
                        <a href="#" class="block text-black">contact us</a>
                    </li>
                    <li class="relative inline-block uppercase bg-white mr-14">
                        <a href="#" class="block text-black"><img src="{{ asset('img/language.png') }}" alt=""></a>
                        <ul>
                            <li><a href="">English</a></li>
                            <li><a href="">繁體</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
            </div>
        </div>
    </body>
</html>
