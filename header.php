<!DOCTYPE html>
<html>
<head>
  <title>ParticaBB</title>
  <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<header class="text-gray-500 bg-gray-900 body-font">
  <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
    <a href="index.php" class="flex title-font font-medium items-center text-white mb-4 md:mb-0 logo">
    <img class="logo" src="img/Partica-Logo-Blanco01.png">

    </a>
    <nav class="md:ml-auto flex flex-wrap items-center text-base justify-center">
       <a href="https://particaartistgroup.com/" target="_blank" class="mr-5 hover:text-gray">Shop</a>
  		<a href="https://www.twitch.tv/partica" target="_blank" class="mr-5 hover:text-gray twitch">Twitch</a>
       <a href="https://soundcloud.com/particaartistgroup" target="_blank" class="mr-5 hover:text-gray soundcloud">Soundcloud</a>
      <a  href="" target="_blank" class="mr-5 hover:text-gray">Patreon</a>
    </nav>
    <?php 
      if(isset($_SESSION['access_token']) == null){
       echo "   <a href='login.php?action=login'><button onclick='location.href='login.php?action=login'' class='inline-flex items-center bg-gray-800 border-0 py-1 px-3 focus:outline-none hover:bg-gray-700 rounded text-base mt-4 md:mt-0 login'>Login
    </button></a>";
      }
      else{
           echo "   <button onclick='location.href='login.php?action=login'' class='inline-flex items-center bg-gray-800 border-0 py-1 px-3 focus:outline-none hover:bg-gray-700 rounded text-base mt-4 md:mt-0 login'>Logout
    </button>";
      }
     ?>
 
  </div>
</header>