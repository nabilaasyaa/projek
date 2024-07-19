<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>HOmeUSE - Kebersihan Rumah</title>
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
    .cleaning-card {
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
  <?php include "header.php"; ?>
  <!-- End Header -->

  <!-- Sidebar -->
  <?php include "sidebar.php"; ?>
  <!-- End Sidebar -->

  <!-- Content -->
  <div class="content">
    <div class="card">
      <h5 class="card-header">Kebersihan Rumah</h5>
      <div class="card-body">
        <h5 class="card-title">Senang Membantu Anda</h5>
        <p class="card-text">Atur dan kelola jadwal kebersihan rumah Anda dengan lebih efisien menggunakan fitur kami.</p>
        <a href="#" class="btn btn-primary">Selengkapnya</a>
      </div>
    </div>

    <h1 class="mt-4">Kebersihan Rumah</h1>
    <p>Buat dan kelola jadwal kebersihan rumah Anda. Sistem akan mengirimkan pengingat otomatis dan checklist dapat diakses oleh semua anggota keluarga.</p>
    
    <!-- Cleaning Schedule List -->
    <div id="cleaning-list">
      <div class="cleaning-card">
        <h5>Membersihkan Kamar Tidur</h5>
        <p>Jadwal: Setiap hari Minggu</p>
        <button class="btn btn-sm btn-warning"><i class="bi bi-pencil-square"></i> Edit</button>
        <button class="btn btn-sm btn-danger"><i class="bi bi-trash"></i> Hapus</button>
      </div>
      <div class="cleaning-card">
        <h5>Menyapu dan Mengepel Lantai</h5>
        <p>Jadwal: Setiap hari Sabtu</p>
        <button class="btn btn-sm btn-warning"><i class="bi bi-pencil-square"></i> Edit</button>
        <button class="btn btn-sm btn-danger"><i class="bi bi-trash"></i> Hapus</button>
      </div>
    </div>

    <!--fform menambahkan jadwal -->
    <div class="mt-4">
      <h4>Tambah Jadwal Kebersihan Baru</h4>
      <form id="add-cleaning-form">
        <div class="mb-3">
          <label for="cleaning-task" class="form-label">Tugas</label>
          <input type="text" class="form-control" id="cleaning-task" required>
        </div>
        <div class="mb-3">
          <label for="cleaning-schedule" class="form-label">Jadwal</label>
          <input type="text" class="form-control" id="cleaning-schedule" required>
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
      const form = document.getElementById('add-cleaning-form');
      const cleaningList = document.getElementById('cleaning-list');

      form.addEventListener('submit', function(event) {
        event.preventDefault();

        const cleaningTask = document.getElementById('cleaning-task').value;
        const cleaningSchedule = document.getElementById('cleaning-schedule').value;

        const cleaningCard = document.createElement('div');
        cleaningCard.className = 'cleaning-card';
        cleaningCard.innerHTML = `
          <h5>${cleaningTask}</h5>
          <p>Jadwal: ${cleaningSchedule}</p>
          <button class="btn btn-sm btn-warning"><i class="bi bi-pencil-square"></i> Edit</button>
          <button class="btn btn-sm btn-danger"><i class="bi bi-trash"></i> Hapus</button>
        `;

        cleaningCard.querySelector('.btn-danger').addEventListener('click', function() {
          cleaningList.removeChild(cleaningCard);
        });

        cleaningList.appendChild(cleaningCard);

        form.reset();
      });
    });
  </script>
</body>
</html>
