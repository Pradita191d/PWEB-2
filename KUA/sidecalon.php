<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <!-- Poppins Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap">

    <!-- Icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@mdi/font/css/materialdesignicons.min.css">

    <style>
        body {
            font-family: 'Poppins', 'Courier New', Courier, monospace, sans-serif;
            background-color: #f8f9fa;
        }

        .bg-light-green {
            background-color: #508D69; /* Light green color */
        }
    </style>
</head>

<body>

<div id="wrapper">

   <!-- Sidebar -->
   <ul class="navbar-nav bg-light-green sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex">
    <div class="sidebar-brand-icon rotate-n-15">
        <i class="fas fa-laugh-wink"></i>
    </div>
    <div class="sidebar-brand-text mx-2">SILAPER</div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="calon.php" data-target="#collapsePages"
        aria-expanded="true" aria-controls="collapsePages">
        <i class="mdi mdi-view-dashboard"></i>
        <span>Dashboard</span>
    </a>
    <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
    </div>
</li>

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="daftar.php" data-target="#collapsePages"
        aria-expanded="true" aria-controls="collapsePages">
        <i class="mdi mdi-account-heart"></i>
        <span>Daftar Nikah</span>
    </a>
    <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
    </div>
</li>
<li class="nav-item">
    <a class="nav-link collapsed" href="dokumen.php" data-target="#collapseTwo"
        aria-expanded="true" aria-controls="collapseTwo">
        <i class="mdi mdi-file"></i>
        <span>Dokumen Persyaratan</span>
    </a>
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