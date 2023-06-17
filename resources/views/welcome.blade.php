<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        @vite('resources/css/app.css')
    </head>
    <body class="bg-slate-700">
        <div class="container mx-auto min-h-screen">
            <nav class="flex items-center justify-center">
                <p class="text-white px-7 py-7 font-bold">
                    Xplct
                </p>
                <ul class="text-white flex-1 text-center justify-center hidden md:flex">
                    <li class="list-none inline-block px-5">
                        <div class="dropdown">
                            <button class="text-white px-4 py-2 focus:outline-none">
                                Services &#x25BE;
                            </button>
                            <div class="dropdown-content hidden text-center justify-center bg-white text-gray-800 absolute top-12 mt-2">
                                <a href="#" class="block px-4 py-2">Service 1</a>
                                <a href="#" class="block px-4 py-2">Service 2</a>
                                <a href="#" class="block px-4 py-2">Service 3</a>
                            </div>
                        </div>
                    </li>
                    <li class="list-none inline-block px-4 py-2">
                        <a href="#">Latest</a>
                    </li>
                    <li class="list-none inline-block px-4 py-2">
                        <a href="#">Blogs</a>
                    </li>
                </ul>
                <div class="dropdown md:hidden">
                    <button class="text-white px-4 py-2 focus:outline-none">
                        &#9776;
                    </button>
                    <div class="dropdown-content hidden text-center justify-center bg-white text-gray-800 absolute top-12 mt-2">
                        <a href="#" class="block px-4 py-2">Services</a>
                        <a href="#" class="block px-4 py-2">Latest</a>
                        <a href="#" class="block px-4 py-2">Blogs</a>
                    </div>
                </div>
            </nav>
        </div>
        <script>
            // Toggle the dropdown menu on mobile view
            document.querySelector('.dropdown').addEventListener('click', function() {
                document.querySelector('.dropdown-content').classList.toggle('hidden');
            });
        </script>
    </body>
</html>
