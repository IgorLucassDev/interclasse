
<!-- Navbar CSS link -->
<link rel="stylesheet" href="./css/navbar.css?v=1.0">

<!-- Navbar -->
<nav class="navbar">
        <div class="logo-container">
            <img class="logo" src="./assets/logo.png" alt="logo">
        </div>
        <img onclick="toggleMenu()" class="menu" src="./assets/menu.png" alt="menu">
        <ul class="list">
            <img onclick="toggleMenu()" class="close-btn" src="./assets/close.png" alt="close button">
            <li><a href="index.php">Inicio</a></li>
            <li><a href="login.php">Login</a></li>
            <li><a href="./cadastro.php">Cadastro</a></li>
            <!-- <li><a href="./perfil.php"></a></li> -->
        </ul>
    </nav>
    <!-- End Navbar -->


<script>
    // Menu toggle
    const menuBtn = document.querySelector('.menu');
    const closeBtn = document.querySelector('.close-btn');
    const navbarList = document.querySelector('.list');

    function toggleMenu(){
        navbarList.classList.toggle('active')
    }


</script>