<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>HOmeUSE - Sistem Informasi Ketertiban Rumah Tangga</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
  <style>
    body {
      display: flex;
      flex-direction: column;
      min-height: 100vh;
      background-color: #f8f9fa;
    }
    .navbar {
      background-color: #007bff;
    }
    .navbar .nav-link {
      color: #fff;
    }
    .navbar .nav-link:hover {
      color: #ffeb3b;
    }
    .navbar .navbar-brand {
      display: flex;
      align-items: center;
    }
    .navbar .navbar-brand .brand-text {
      font-size: 1.5rem;
      font-weight: bold;
      margin-left: 10px;
      color: #ffeb3b;
      text-shadow: 2px 2px 4px rgba(0,0,0,0.4);
    }
    .sidebar {
      height: 100vh;
      position: fixed;
      top: 0;
      left: 0;
      width: 250px;
      background-color: #343a40;
      padding-top: 20px;
    }
    .sidebar .nav-link {
      color: #cfd8dc;
    }
    .sidebar .nav-link:hover {
      background-color: #495057;
      color: #ffeb3b;
    }
    .content {
      margin-left: 250px;
      padding: 20px;
    }
    .unique-btn {
      background-color: #ffeb3b;
      color: #007bff;
      border-radius: 25px;
      border: none;
    }
    .unique-btn:hover {
      background-color: #ffc107;
      color: #007bff;
    }
  </style>
</head>
<body>
  <!-- Header -->
  <nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <i class="bi bi-house-door"></i>
        <span class="brand-text">HOmeUSE</span>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="bi bi-person-circle"></i> User
            </a>
            <ul class="dropdown-menu dropdown-menu-end">
              <li><a class="dropdown-item" href="#"><i class="bi bi-person"></i> Profile</a></li>
              <li><a class="dropdown-item" href="#"><i class="bi bi-gear"></i> Settings</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#"><i class="bi bi-box-arrow-left"></i> Logout</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- End Header -->

  <!-- Sidebar -->
  <div class="sidebar">
    <nav class="nav flex-column">
      <a class="nav-link" href="#manajemenwaktu.php"><i class="bi bi-clock"></i> Manajemen Waktu</a>
      <a class="nav-link" href="#manajemenkeuangan.php"><i class="bi bi-wallet"></i> Manajemen Keuangan</a>
      <a class="nav-link" href="#kebersihanrumah.php"><i class="bi bi-broom"></i> Kebersihan</a>
      <a class="nav-link" href="#komunikasikeluarga.php"><i class="bi bi-chat-dots"></i> Komunikasi</a>
      <a class="nav-link" href="#pembagiantugas.php"><i class="bi bi-check2-square"></i> Pembagian Tugas</a>
    </nav>
  </div>
  <!-- End Sidebar -->

  <!-- Content -->
  <div class="content">
    <div class="container">
      <h1 class="mt-4">Selamat Datang di HOmeUSE</h1>
      <p>HOmeUSE membantu Anda mengatur rumah tangga dengan lebih baik dan efisien.</p>
      
      <!-- Manajemen Waktu Section -->
      <section id="manajemen-waktu" class="mt-5">
        <h2>Manajemen Waktu</h2>
        <p>Atur jadwal harian Anda dengan lebih baik menggunakan fitur manajemen waktu kami.</p>
        <button class="btn unique-btn">Lihat Detail</button>
      </section>
      
      <!-- Manajemen Keuangan Section -->
      <section id="manajemen-keuangan" class="mt-5">
        <h2>Manajemen Keuangan</h2>
        <p>Kelola keuangan keluarga Anda dengan lebih efisien menggunakan fitur manajemen keuangan.</p>
        <button class="btn unique-btn">Lihat Detail</button>
      </section>
      
      <!-- Kebersihan Rumah Section -->
      <section id="kebersihan-rumah" class="mt-5">
        <h2>Kebersihan Rumah</h2>
        <p>Pastikan rumah Anda selalu bersih dan teratur dengan fitur kebersihan rumah kami.</p>
        <button class="btn unique-btn">Lihat Detail</button>
      </section>
      
      <!-- Komunikasi Keluarga Section -->
      <section id="komunikasi-keluarga" class="mt-5">
        <h2>Komunikasi Keluarga</h2>
        <p>Perbaiki komunikasi antar anggota keluarga dengan fitur komunikasi keluarga kami.</p>
        <button class="btn unique-btn">Lihat Detail</button>
      </section>
      
      <!-- Pembagian Tugas Section -->
      <section id="pembagian-tugas" class="mt-5">
        <h2>Pembagian Tugas</h2>
        <p>Bagikan tugas rumah tangga dengan merata menggunakan fitur pembagian tugas kami.</p>
        <button class="btn unique-btn">Lihat Detail</button>
      </section>
    </div>
  </div>
  <!-- End Content -->

  <!-- Footer -->
  <footer class="text-center bg-light py-3 mt-auto">
    <p>&copy; 2024 HOmeUSE. All rights reserved.</p>
  </footer>
  <!-- End Footer -->

  <!-- Bootstrap JS and dependencies -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      // Custom JS can be added here if needed
    });
  </script>
</body>
</html>
