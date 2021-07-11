
<!-- Header -->
<?php 
include ('include/header.php');
session_start();
include("./include/db.inc.php");
include("./include/functions.php");

$user_data = check_login($con);



?>

<!-- Header -->
<nav class="bg-gray-800 pt-2 md:pt-1 pb-1 px-1 mt-0 h-auto fixed w-full z-20 top-0">

<div class="flex flex-wrap items-center">
    <div class="flex flex-shrink md:w-1/2 justify-center md:justify-start text-white">
        <a href="#">
            <img class="h-8 ml-8 rounded" src="./img/3s-soft-logo-2-300px.jpg" alt="">
        </a>
    </div>

    

    <div class="flex w-full pt-2 content-center justify-between md:w-1/3 md:justify-end">
        <ul class="list-reset flex justify-between flex-1 md:flex-none items-center">
            <li class="flex-1 md:flex-none md:mr-3">
                <a class="inline-block py-2 px-4 text-white no-underline" href="#">Home</a>
            </li>
            <li class="flex-1 md:flex-none md:mr-3">
                <a class="inline-block text-gray-200 no-underline hover:text-yellow-200 hover:text-underline py-2 px-4" href="#">Post</a>
            </li>
            <li class="flex-1 md:flex-none md:mr-3">
                <a class="inline-block text-gray-200 no-underline hover:text-gray-200 hover:text-underline py-2 px-4" href="#">Portfolio</a>
            </li>
            <!-- <li class="flex-1 md:flex-none md:mr-3">
                <a class="inline-block text-gray-200 no-underline hover:text-gray-200 hover:text-underline py-2 px-4" href="#">Login</a>
            </li> -->
            <!-- <li class="flex-1 md:flex-none md:mr-3">
                <a class="inline-block text-gray-200 no-underline hover:text-gray-200 hover:text-underline py-2 px-4" href="#">Register</a>
            </li> -->
            <li class="flex-1 md:flex-none md:mr-3">
                <a class="inline-block text-gray-200 no-underline hover:text-gray-200 hover:text-underline py-2 px-4" href="./include/singout.inc.php">SingOut</a>
            </li>
        </ul>
    </div>
</div>

</nav>


<!-- Main Content -->


<!-- Main Content  -->

<!-- Footer -->
<?php 
include ('include/footer.php');
?>
<!-- Footer -->
