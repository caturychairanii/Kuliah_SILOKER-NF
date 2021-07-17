
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>SILOKERNF - Dashboard</title>
  <link href="<?= base_url() ?>/assets/admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="<?= base_url() ?>/assets/admin/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="<?= base_url() ?>/assets/admin/css/ruang-admin.min.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body id="page-top">
  <div id="wrapper">
    <!-- Sidebar -->
    <ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-text mx-3">SILOKERNF</div>
      </a>
      <hr class="sidebar-divider my-0">
      <li class="nav-item active">
        <a class="nav-link" href="index.html">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>
      <hr class="sidebar-divider">
      <div class="sidebar-heading">
        Features
      </div>
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('index.php/Admin/user') ?>">
          <i class="fas fa-fw fa-palette"></i>
          <span>User</span>
        </a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="<?= base_url('index.php/admin/bidangusaha') ?>">
          <i class="fas fa-fw fa-palette"></i>
          <span>Bidang Usaha</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('index.php/admin/keahlian') ?>">
          <i class="fas fa-fw fa-palette"></i>
          <span>Keahlian</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('index.php/admin/sektorusaha') ?>">
          <i class="fas fa-fw fa-palette"></i>
          <span>Sektor Usaha</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('index.php/admin/mitra') ?>">
          <i class="fas fa-fw fa-palette"></i>
          <span>Mitra</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('index.php/Login/Logout')?>">
          <i class="fas fa-fw fa-palette"></i>
          <span>Logout</span>
        </a>
      </li>
      <hr class="sidebar-divider">
      
      
      
    </ul>
    <!-- Sidebar -->
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        <!-- TopBar -->
        <nav class="navbar navbar-expand navbar-light bg-navbar topbar mb-4 static-top">
          <button id="sidebarToggleTop" class="btn btn-link rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>
          <ul class="navbar-nav ml-auto">
          </ul>
        </nav>
        <!-- Topbar -->

        <!-- Container Fluid-->
      
        <!---Container Fluid-->
     