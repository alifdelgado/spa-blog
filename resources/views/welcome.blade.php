<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/main.css') }}">
        <style>
            li>.active{
                color: red;
            }
        </style>
    </head>
    <body class="bg-gray-200">
        <div id="app">
            <section class="container mx-auto px-4">
                <div class="flex py-10">
                    <div class="mr-4 md:mr-8">
                        <a href="#" rel="home" class="flex">
                            <svg class="w-10 h-10 text-teal-600" width="54" height="54" viewBox="0 0 54 54" xmlns="http://www.w3.org/2000/svg">
                                <title>TailwindCSS</title>
                                <path fill="currentColor" d="M13.5 22.1c1.8-7.2 6.3-10.8 13.5-10.8 10.8 0 12.15 8.1 17.55 9.45 3.6.9 6.75-.45 9.45-4.05-1.8 7.2-6.3 10.8-13.5 10.8-10.8 0-12.15-8.1-17.55-9.45-3.6-.9-6.75.45-9.45 4.05zM0 38.3c1.8-7.2 6.3-10.8 13.5-10.8 10.8 0 12.15 8.1 17.55 9.45 3.6.9 6.75-.45 9.45-4.05-1.8 7.2-6.3 10.8-13.5 10.8-10.8 0-12.15-8.1-17.55-9.45-3.6-.9-6.75.45-9.45 4.05z"></path>
                            </svg>
                            <h1 class="text-teal-500 text-3xl hover:text-teal-700">Zendero</h1>
                        </a>
                    </div>
                    <div class="ml-auto md:hidden">
                        <button class="flex items-center px-3 py-2 border rounded" type="button">
                            <svg class="h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <title>Menu</title>
                            <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/>
                            </svg>
                        </button>
                    </div>
                    <nav-bar></nav-bar>
                </div>
                <router-view></router-view>
            </section>
        </div>
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
