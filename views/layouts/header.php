<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Luar Sekolah Header</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .dropdown:hover .dropdown-menu {
            display: block;
        }
    </style>
</head>
<body class="bg-gray-900 text-white">
    <header class="bg-gray-800 py-2 px-4">
        <div class="container mx-auto flex items-center justify-between">
            <div class="flex items-center space-x-4">
                <div class="flex items-center">
                    <img src="../assets/logo/LS-logo-master.png" alt="Luar Sekolah" class="h-14 w-auto">
                </div>

                <div class="dropdown relative">
                    <button class="flex items-center space-x-1">
                        <span>Program</span>
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </button>
                    <div class="dropdown-menu absolute hidden bg-gray-700 mt-2 py-2 w-48 rounded-md shadow-xl z-10">
                        <?php
                        $programs = ['Prakerja', 'Magang+'];
                        foreach ($programs as $program) {
                            echo "<a href='#' class='block px-4 py-2 hover:bg-gray-600'>$program</a>";
                        }
                        ?>
                    </div>
                </div>
            </div>

            <div class="flex-1 max-w-2xl mx-auto">
                <div class="relative">
                    <input type="text" placeholder="text" class="w-full bg-white text-gray-900 rounded-md py-2 px-4 pl-10 focus:outline-none focus:ring-2 focus:ring-blue-600">
                    <svg class="w-5 h-5 text-gray-400 absolute left-3 top-2.5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                </div>
            </div>

            <div class="flex items-center space-x-2">
                <img src="../assets/user/profil.png" alt="User Avatar" class="w-8 h-8 rounded-full">
                <span>Hi, Bla Bla Bla</span>
            </div>
        </div>
    </header>