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
                <p class="text-white px-7 py-7 font-bold text-lg ">
                    XPLCT-CONT
                </p>
                <ul class="text-white flex-1 text-center justify-center hidden md:flex">
                    <li class="list-none inline-block px-5">

                        <div class="dropdown">
                            <button class="text-white px-4 py-2 focus:outline-none" onclick="toggleServicesDropdown()">
                                Services &#x25BE;
                            </button>
                            <div class="dropdown-content hidden bg-white text-gray-800 absolute top-14 mt-2 left-0 right-0 flex justify-center" id="servicesDropdownContent">
                                <div class="max-w-screen-sm">
                                    <div class="flex flex-wrap justify-center">
                                        <div class="w-full sm:w-1/3 p-4">
                                            <div class="bg-gray-200 p-4">
                                                <h3 class="text-lg font-bold">Service 1</h3>
                                                <p class="text-gray-600">Description of Service 1</p>
                                            </div>
                                        </div>
                                        <div class="w-full sm:w-1/3 p-4">
                                            <div class="bg-gray-200 p-4">
                                                <h3 class="text-lg font-bold">Service 2</h3>
                                                <p class="text-gray-600">Description of Service 2</p>
                                            </div>
                                        </div>
                                        <div class="w-full sm:w-1/3 p-4">
                                            <div class="bg-gray-200 p-4">
                                                <h3 class="text-lg font-bold">Service 3</h3>
                                                <p class="text-gray-600">Description of Service 3</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
                    <button class="text-white px-4 py-2 focus:outline-none" onclick="toggleMobileDropdown()">
                        &#9776;
                    </button>
                    <div class="dropdown-content hidden text-center justify-center bg-white text-gray-800 absolute top-12 mt-2" id="mobileDropdownContent">
                            <a href="#" class="block px-4 py-2">Services</a>
                            <a href="#" class="block px-4 py-2">Latest</a>
                        <a href="#" class="block px-4 py-2">Blogs</a>
                    </div>
                </div>
            </nav>

            <h1 class="text-white text-4xl px-7 py-9 font-bold">
                Check out our latest projects,<br>
                clients and agency news.
            </h1>
        </div>
        <script>
            // Toggle the services dropdown menu
            function toggleServicesDropdown() {
                var servicesDropdownContent = document.getElementById('servicesDropdownContent');
                servicesDropdownContent.classList.toggle('hidden');
            }

            // Toggle the mobile dropdown menu
            function toggleMobileDropdown() {
                var mobileDropdownContent = document.getElementById('mobileDropdownContent');
                mobileDropdownContent.classList.toggle('hidden');
            }
        </script>
    </body>
</html>
