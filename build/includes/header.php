<?php
	ob_start();
	require_once "functions.php";
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title><?php echo get_school_name(); ?></title>
	<!-- stylesheet -->
	<!-- <link rel="stylesheet" tpe="text/css" href="./assets/css/bootstrap.min.css">
	<link rel="stylesheet" tpe="text/css" href="./assets/css/font-awesome.min.css">
	<link rel="stylesheet" tpe="text/css" href="./style1.css"> -->
	<link rel="stylesheet" tpe="text/css" href="./assets/css/style.css">
</head>
<body class="bg-[#FBFBFB]">
	<nav class="fixed top-0 left-0 w-full z-50 bg-black py-6 xl:px-20 lg:px-10 px-5">
  <div class="flex justify-between items-center text-white">
    <div class="flex items-center space-x-4">
      <img src="" alt="">
      <h1 class="md:text-2xl text-xl font-bold">Learning Hub</h1>
    </div>

    <!-- Menu -->
    <div class="hidden lg:flex">
      <ul class="flex space-x-8 items-center">

        <li><a href="index.php" class="font-medium text-base">Home</a></li>

        <!-- Courses Dropdown (Desktop Hover) -->
    <?php
require_once "includes/db.php"; // adjust path if needed

// Fetch all course titles
$query = "SELECT id, title FROM courses";
$result = mysqli_query($conn, $query);
?>

<li class="relative group">
  <a href="#" class="font-medium text-base flex items-center space-x-1">
    <span>Courses</span>
    <i class="fas fa-chevron-down text-sm transition-transform duration-300 group-hover:rotate-180"></i>
  </a>
  <ul class="absolute bg-white text-black rounded shadow-lg w-48 hidden group-hover:block z-50">
    <?php while ($row = mysqli_fetch_assoc($result)) : ?>
      <li>
        <a href="game.php?id=<?= $row['id'] ?>" class="block px-4 py-2 hover:bg-black hover:text-white text-base">
          <?= htmlspecialchars($row['title']) ?>
        </a>
      </li>
    <?php endwhile; ?>
  </ul>
</li>


        <li><a href="about.php" class="font-medium text-base">About Us</a></li>
        <li><a href="contact.php" class="font-medium text-base">Contact Us</a></li>

        <!-- Login Dropdown (Desktop Hover) -->
        <li class="relative group">
          <a href="login.php" class="font-medium text-base flex items-center space-x-1">
            <span>Log In</span>
            <i class="fas fa-chevron-down text-sm transition-transform duration-300 group-hover:rotate-180"></i>
          </a>

          <ul class="absolute bg-white text-black rounded shadow-lg w-32 hidden group-hover:block">
            <li><a href="login.php" class="block px-4 py-2 hover:bg-black hover:text-white">Admin</a></li>
            <li><a href="login.php" class="block px-4 py-2 hover:bg-black hover:text-white">Teacher</a></li>
            <li><a href="login.php" class="block px-4 py-2 hover:bg-black hover:text-white">Student</a></li>
          </ul>
        </li>

      </ul>
    </div>

    <!-- Mobile Menu Button -->
    <div class="lg:hidden">
      <button id="menu-btn">
        <i class="fas fa-bars text-2xl"></i>
      </button>
    </div>
  </div>

  <!-- Mobile Menu -->
  <div id="mobile-menu" class="lg:hidden mt-5 text-white hidden text-center items-center">
    <ul class="space-y-4">
      <li><a href="index.php" class="block font-medium text-base">Home</a></li>

      <!-- Courses Dropdown (Mobile Click) -->
      <li>
        <button onclick="toggleDropdown('courses-mobile', 'courses-icon-mobile')" class="flex justify-center items-center space-x-2 font-medium text-base w-full">
          <span>Courses</span>
          <i id="courses-icon-mobile" class="fas fa-chevron-down transition-transform duration-300"></i>
        </button>
        <ul id="courses-mobile" class="ml-4 mt-2 space-y-2 hidden">
          <li><a href="web.php" class="block text-sm">Web Development</a></li>
          <li><a href="game.php" class="block text-sm">Game Development</a></li>
          <li><a href="graphics.php" class="block text-sm">Graphic Designing</a></li>
          <li><a href="digital.php" class="block text-sm">Digital Marketing</a></li>
          
        </ul>
      </li>

      <li><a href="about.php" class="block font-medium text-base">About Us</a></li>
      <li><a href="contact.php" class="block font-medium text-base">Contact Us</a></li>

      <!-- Login Dropdown (Mobile Click) -->
      <li>
        <button onclick="toggleDropdown('login-mobile', 'login-icon-mobile')" class="flex justify-center items-center space-x-2 font-medium text-base w-full">
          <span>Log In</span>
          <i id="login-icon-mobile" class="fas fa-chevron-down transition-transform duration-300"></i>
        </button>
        <ul id="login-mobile" class="ml-4 mt-2 space-y-2 hidden">
          <li><a href="login.php" class="block text-base">Admin</a></li>
          <li><a href="login.php" class="block text-base">Teacher</a></li>
          <li><a href="login.php" class="block text-base">Student</a></li>
        </ul>
      </li>
    </ul>
  </div>
</nav>

<script>
  // Mobile Menu Toggle with icon change
  const menuBtn = document.getElementById('menu-btn');
  const mobileMenu = document.getElementById('mobile-menu');
  const menuIcon = menuBtn.querySelector('i');

  menuBtn.addEventListener('click', () => {
    mobileMenu.classList.toggle('hidden');
    
    if (mobileMenu.classList.contains('hidden')) {
      menuIcon.classList.remove('fa-times');
      menuIcon.classList.add('fa-bars');
    } else {
      menuIcon.classList.remove('fa-bars');
      menuIcon.classList.add('fa-times');
    }
  });

  // Dropdown Toggle for Mobile only
  function toggleDropdown(menuId, iconId) {
    const dropdowns = [
      {menu: 'courses-mobile', icon: 'courses-icon-mobile'},
      {menu: 'login-mobile', icon: 'login-icon-mobile'},
    ];

    dropdowns.forEach(item => {
      const menu = document.getElementById(item.menu);
      const icon = document.getElementById(item.icon);

      if (item.menu === menuId) {
        menu.classList.toggle('hidden');
        icon.classList.toggle('rotate-180');
      } else {
        menu.classList.add('hidden');
        icon.classList.remove('rotate-180');
      }
    });
  }
</script>


    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x/dist/cdn.min.js" defer></script>
  <script src="https://kit.fontawesome.com/a2ada4947c.js" crossorigin="anonymous"></script>