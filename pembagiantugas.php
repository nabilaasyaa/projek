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
  <?php include "header.php"; ?>
  <!-- End Header -->

  <!-- Sidebar -->
  <?php include "sidebar.php"; ?>
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
