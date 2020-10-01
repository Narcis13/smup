<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel!</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="/css/main.css" rel="stylesheet">

<style>
.group:hover .group-hover\:block {
  display: block !important;
}
</style>

    </head>
    <body>
    <nav class="bg-gray-200">
    
        <div class="flex">
           <img class="h-16 m-2"src="/img/sigla.jpg" alt="sigla">
           <img class="h-16 m-2"src="/img/logoanmcs_mica.png" alt="sigla">
           <ul class="flex items-center justify-around uppercase w-full">
               <li class="relative group ">
               <a class="block dropdown" href="#">Despre noi</a> 
                        <ul class="absolute pt-8 hidden group-hover:block">
                           <li>
                                <a class="linie-submeniu" href="/istoric">Istoric</a>
                           </li>
                           <li>
                                <a class="linie-submeniu" href="#">Misiune si valori</a>
                           </li>
                           <li>
                                <a class="linie-submeniu" href="#">Conducere</a>
                           </li>
                           <li>
                                <a href="#">Pacienti(sterg)</a>
                           </li>
                        </ul>
               </li>
               <li class="relative group ">
               <a class="block" href="#">Management</a>
                        <ul class=" absolute pt-8 hidden group-hover:block">
                           <li >
                                <a class="linie-submeniu" href="#">Evenimente</a>
                           </li>
                           <li >
                                <a class="linie-submeniu" href="#">Plan de management</a>
                           </li>
                           <li >
                                <a class="linie-submeniu" href="#">Strategia de dezvoltare</a>
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
    <script src="/js/app.js"></script>
    </body>
    </html>