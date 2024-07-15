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
    .task-card {
      border: 1px solid #ddd;
      border-radius: 10px;
      padding: 15px;
      margin-bottom: 15px;
      background-color: #fff;
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
      <a class="nav-link" href="index.php"><i class="bi bi-house-gear-fill"></i> Dashboard</a>
      <a class="nav-link" href="manajemenwaktu.php"><i class="bi bi-clock"></i> Manajemen Waktu</a>
      <a class="nav-link" href="manajemenkeuangan.php"><i class="bi bi-wallet"></i> Manajemen Keuangan</a>
      <a class="nav-link" href="kebersihanrumah.php"><i class="bi bi-box2-heart"></i> Kebersihan</a>
      <a class="nav-link" href="komunikasikeluarga.php"><i class="bi bi-chat-dots"></i> Komunikasi</a>
      <a class="nav-link" href="pembagiantugas.php"><i class="bi bi-check2-square"></i> Pembagian Tugas</a>
    </nav>
  </div>
  <!-- End Sidebar -->

  <!-- Content -->
  <div class="content">
    <div class="card">
      <h5 class="card-header">Pembagian Tugas</h5>
      <div class="card-body">
        <h5 class="card-title">Atur Tugas Rumah Tangga</h5>
        <p class="card-text">Bagikan tugas rumah tangga kepada anggota keluarga dengan lebih mudah menggunakan fitur pembagian tugas kami.</p>
        <a href="#" class="btn btn-primary">Selengkapnya</a>
      </div>
    </div>

    <h1 class="mt-4">Pembagian Tugas</h1>
    <p>Atur dan distribusikan tugas rumah tangga dengan lebih efisien. Buat daftar tugas, alokasikan kepada anggota keluarga, dan pantau penyelesaiannya.</p>
    
    <!-- Task List -->
    <div id="task-list">
      <div class="task-card">
        <h5>Cuci Piring</h5>
        <p>Tugas mencuci piring setelah makan malam.</p>
        <p><strong>Penanggung Jawab:</strong> Anak 1</p>
        <button class="btn btn-sm btn-danger"><i class="bi bi-trash"></i> Hapus</button>
      </div>
      <div class="task-card">
        <h5>Membersihkan Kamar</h5>
        <p>Tugas membersihkan kamar tidur setiap pagi.</p>
        <p><strong>Penanggung Jawab:</strong> Anak 2</p>
        <button class="btn btn-sm btn-danger"><i class="bi bi-trash"></i> Hapus</button>
      </div>
      <!-- Add more task entries as needed -->
    </div>

    <!-- Add Task Form -->
    <div class="mt-4">
      <h4>Tambah Tugas Baru</h4>
      <form id="add-task-form">
        <div class="mb-3">
          <label for="task-desc" class="form-label">Deskripsi Tugas</label>
          <textarea class="form-control" id="task-desc" rows="3" required></textarea>
        </div>
        <div class="mb-3">
          <label for="task-responsible" class="form-label">Penanggung Jawab</label>
          <input type="text" class="form-control" id="task-responsible" required>
        </div>
        <button type="submit" class="btn unique-btn">Tambah</button>
      </form>
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
      const form = document.getElementById('add-task-form');
      const taskList = document.getElementById('task-list');

      form.addEventListener('submit', function(event) {
        event.preventDefault();

        const taskDesc = document.getElementById('task-desc').value;
        const taskResponsible = document.getElementById('task-responsible').value;

        const taskCard = document.createElement('div');
        taskCard.className = 'task-card';
        taskCard.innerHTML = `
          <h5>${taskDesc}</h5>
          <p>${taskDesc}</p>
          <p><strong>Penanggung Jawab:</strong> ${taskResponsible}</p>
          <button class="btn btn-sm btn-danger"><i class="bi bi-trash"></i> Hapus</button>
        `;

        taskCard.querySelector('.btn-danger').addEventListener('click', function() {
          taskList.removeChild(taskCard);
        });

        taskList.appendChild(taskCard);

        form.reset();
      });
    });
  </script>
</body>
</html>
