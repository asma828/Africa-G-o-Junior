<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mama Africa</title>
    <script src="https://cdn.tailwindcss.com"></script>
   
</head>
<body class=" bg-white ">
<header class="bg-white">
    <div class="flex justify-between items-center px-16">
            <a href="#">
                <img src="images/africa.png" class="max-w-full h-auto w-16" alt="logo">
            </a>
            <div class="block lg:hidden">
                <button id="menu-button" class="text-gray-500 focus:outline-none">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                    </svg>
                </button>
            </div>
            <div class=" hidden lg:flex space-x-8">
                <a href="" class="font-semibold lg:text-lg text-black p-2 ">Home</a>
                <a href="" class="font-semibold  lg:text-lg text-black p-2 ">About</a>
                <a href="#" class="font-semibold  lg:text-lg text-black p-2 ">Contact</a>
                <a href="#" class="font-semibold  lg:text-lg text-black p-2 ">Login</a>
               
            </div>
        </div>

        <div id="menu" class="fixed top-0 left-0 h-screen w-[70%] bg-orange-100 px-4 py-2 transform -translate-x-full transition-transform duration-300 ease-in-out lg:hidden flex-col justify-center items-center space-y-4 z-50 hidden pt-[20%]">
            <div class="text-center space-y-8">
            <div><a href="#" class="font-semibold text-black hover:text-[#F7E0A1]">Home</a></div>
              <div><a href="#" class="font-semibold text-black hover:text-[#F7E0A1]">Players</a></div>
              <div><a href="#" class="font-semibold text-black hover:text-[#F7E0A1]">Formation</a></div>
              <div><a href="#" class="font-semibold text-black hover:text-[#F7E0A1]">Contact</a></div>
           
          </div>
          </div>

       </header>
       
<!-- Hero Section -->
<section class="relative bg-cover bg-center h-screen" style="background-image: url('images/hero.jpg');">
    
    <div class="absolute inset-0 bg-black bg-opacity-40"></div>

    <div class="relative z-10 flex flex-col items-center justify-center h-full text-center text-white px-4">
      <h1 class="text-4xl md:text-6xl font-extrabold mb-4">Welcome to the African Explorer</h1>
      <p class="text-lg md:text-xl max-w-2xl mb-6">
        Dive into the heart of Africa! Learn about its countries, capitals, cities, and diverse cultures in an interactive and educational way.
      </p>
      <a href="#start-learning" class="px-6 py-3 bg-orange-950 hover:bg-orange-900 rounded-lg text-lg font-semibold">
        Start Learning
      </a>
    </div>
  </section>

    <section class="container mx-auto p-4"> 
        <h2 class="text-xl font-bold mb-2">Countries</h2>
        <a href="crud/add_country.php" class="bg-yellow-950 text-white px-4 py-2 rounded-md mb-4 inline-block">Add New Country</a> 
        <div id="country-cards" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4"> 
            
                   

    <!-- Footer -->
    <footer class="bg-orange-800 text-white text-center p-4 mt-8">
        <p>© 2024 Jeu Éducatif Géographique</p>
    </footer>
    <script src="public/script.js"></script>
</body>
</html>