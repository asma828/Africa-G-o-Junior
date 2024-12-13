<?php include '../src/connect.php'; 

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id'])) {
     $id = $_GET['id']; 
      
     $sql = "SELECT * FROM Pays WHERE id = $id";
     $result = $conn->query($sql); 
     $country = $result->fetch_assoc(); 
     } 
     ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Country</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class=" bg-white ">
<header class="bg-white">
    <div class="flex justify-between items-center px-16">
            <a href="#">
                <img src="../images/africa.png" class="max-w-full h-auto w-16" alt="logo">
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

    <section class="container mx-auto p-4">
        <form action="save_country.php" method="POST" class="bg-white p-6 rounded-lg shadow-md">
        <input type="hidden" name="id" value="<?php echo $country['id']; ?>">
            <div class="mb-4">
                <label for="name" class="block text-sm font-bold mb-2">Country Name</label>
                <input type="text" id="name" name="name" class="w-full px-3 py-2 border rounded-md" value="<?php echo $country['nom']; ?>" required>
            </div>
            <div class="mb-4">
                <label for="population" class="block text-sm font-bold mb-2">Population</label>
                <input type="number" id="population" name="population" class="w-full px-3 py-2 border rounded-md" value="<?= $country['population'] ?>" required>
            </div>
            <div class="mb-4">
                <label for="languages" class="block text-sm font-bold mb-2">Official Language</label>
                <input type="text" id="languages" name="languages" class="w-full px-3 py-2 border rounded-md" value="<?php echo $country['langue'] ?>" required>
            </div>
            <input type="hidden" name="continent_id" value="1"> 
            <button type="submit" class="bg-yellow-900 text-white px-4 py-2 rounded-md">Update Country</button>
        </form>
    </section>

 <!-- Footer -->
 <footer class="bg-orange-800 text-white text-center p-4 mt-8">
        <p>© 2024 Jeu Éducatif Géographique</p>
    </footer>
    <script src="public/script.js"></script>

</body>
</html>