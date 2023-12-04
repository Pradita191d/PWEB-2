<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Poppins Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    
    <!-- Icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@mdi/font/css/materialdesignicons.min.css">

    <style>
        body {
            font-family: 'Poppins', 'Courier New', Courier, monospace, sans-serif;
            background-color: #f8f9fa;
        }

        .bg-light-green {
            background-color: #508D69; 
        }
</style>

    </style>
</head>

<body>
<div id="wrapper">

   <!-- Sidebar -->
   <ul class="navbar-nav bg-light-green sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex">
    <div class="sidebar-brand-icon rotate-n-15">
        <!-- Replace FontAwesome with Material Design Icon -->
    </div>
    <div class="sidebar-brand-text mx-2">ADMIN SILAPER</div>
</a>


<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="admin.php" data-target="#collapsePages"
        aria-expanded="true" aria-controls="collapsePages">
        <!-- Replace FontAwesome with Material Design Icon -->
        <i class="mdi mdi-view-dashboard"></i>
        <span>Dashboard</span>
    </a>
    <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
    </div>
</li>

<!-- Repeat the process for other icons -->

<li class="nav-item">
    <a class="nav-link collapsed" href="akad.php" data-target="#collapsePages"
        aria-expanded="true" aria-controls="collapsePages">
        <!-- Replace FontAwesome with Material Design Icon -->
        <i class="mdi mdi-file"></i>
        <span>Data Akad</span>
    </a>
    <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
    </div>
</li>
<li class="nav-item">
    <a class="nav-link collapsed" href="cami.php" data-target="#collapseTwo"
        aria-expanded="true" aria-controls="collapseTwo">
        <i class="mdi mdi-human-male"></i>
        <span>Data Calon Suami</span>
    </a>
</li>

<li class="nav-item">
    <a class="nav-link collapsed" href="cais.php" data-target="#collapseUtilities"
        aria-expanded="true" aria-controls="collapseUtilities">
        <i class="mdi mdi-human-female"></i>
        <span>Data Calon Istri</span>
    </a>
</li>

<li class="nav-item">
    <a class="nav-link collapsed" href="penghulu.php" data-target="#collapsePages"
        aria-expanded="true" aria-controls="collapsePages">
        <i class="mdi mdi-account-tie"></i>
        <span>Data Penghulu</span>
    </a>
    <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
    </div>
</li>
<li class="nav-item">
    <a class="nav-link collapsed" href="user.php" data-target="#collapsePages"
        aria-expanded="true" aria-controls="collapsePages">
        <i class="mdi mdi-account-group"></i>
        <span>Data User</span>
    </a>
    <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
    </div>
</li>
<li class="nav-item">
    <a class="nav-link collapsed" href="../onepage/index.html" onclick="confirmLogout(event);" data-target="#collapsePages"
        aria-expanded="true" aria-controls="collapsePages">
        <i class="mdi mdi-logout"></i>
        <span>Keluar</span>
    </a>
    <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
    </div>
</li>
</ul>
<!-- End of Sidebar -->

<!-- JavaScript untuk peringatan konfirmasi logout -->
<script>
    function confirmLogout(event) {
        var answer = confirm("Apakah Anda ingin keluar?");
        if (!answer) {
            // Jika pengguna menekan Cancel atau tombol lainnya, proses logout dibatalkan
            event.preventDefault();
        } else {
            // Jika pengguna menekan OK, redirect ke halaman login.php
            window.location.href = "../onepage/index.html";
        }
    }
</script>
</body>
</html>
