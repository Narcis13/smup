<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel!</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="/css/main.css" rel="stylesheet">



    </head>
    <body>
    <nav class="bg-gray-200">
    
        <div class="flex">
           <img class="h-16 m-2"src="/img/sigla.jpg" alt="sigla">
           <img class="h-16 m-2"src="/img/logoanmcs_mica.png" alt="sigla">
           <ul class="flex items-center justify-around uppercase w-full">
               <li>
               <a class="block " href="#">Despre noi</a> 
                        <ul class="absolute">
                           <li>
                                <a href="#">Istoric</a>
                           </li>
                           <li>
                                <a href="#">Misiune si valori</a>
                           </li>
                           <li>
                                <a href="#">Conducere</a>
                           </li>
                        </ul>
               </li>
               <li>
               <a class="block" href="#">Management</a>
                        <ul class="absolute pt-8 text-base">
                           <li >
                                <a class="p-1 block border-b-1 border-gray-600" href="#">Evenimente</a>
                           </li>
                           <li >
                                <a class="p-1 block border-b-1 border-gray-600" href="#">Plan de management</a>
                           </li>
                           <li >
                                <a class="p-1 block border-b-1 border-gray-600" href="#">Strategia de dezvoltare</a>
                           </li>
                        </ul>
               </li>
               <li>
               <a class="block" href="">Resurse umane</a>
               </li>
               <li>
               <a class="block" href="">Servicii</a>
               </li>
               <li>
               <a class="block" href="">Galerie foto</a>
               </li>
               <li>
               <a class="block" href="">Info pacienti</a>
               </li>
               <li>
               <a class="block" href="">Contact</a>
               </li>
           </ul>
        </div>
    </nav>
    @yield('content')

    <footer>
        <div class="text-green-500">
             Copyright @2020
        </div>
    </footer>
    </body>
    </html>