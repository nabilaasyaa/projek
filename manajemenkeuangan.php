<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>HOmeUSE - Manajemen Waktu</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
  <style>
    body {
      background-color: #f8f9fa;
      padding-top: 56px;
    }
    .container {
      margin-top: 20px;
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
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
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

  <div class="container">
    <h1 class="mt-4">Manajemen Waktu</h1>
    <p>Atur jadwal harian Anda dengan lebih baik menggunakan fitur manajemen waktu kami. Buat dan kelola tugas, acara, dan pengingat untuk memastikan Anda selalu terorganisir.</p>
    
    <!-- Task List -->
    <div id="task-list">
      <div class="task-card">
        <h5>Tugas 1</h5>
        <p>Deskripsi tugas pertama.</p>
        <p><strong>Waktu:</strong> 10:00 AM - 11:00 AM</p>
        <button class="btn btn-sm btn-danger"><i class="bi bi-trash"></i> Hapus</button>
      </div>
      <div class="task-card">
        <h5>Tugas 2</h5>
        <p>Deskripsi tugas kedua.</p>
        <p><strong>Waktu:</strong> 01:00 PM - 02:00 PM</p>
        <button class="btn btn-sm btn-danger"><i class="bi bi-trash"></i> Hapus</button>
      </div>
      <!-- Add more tasks as needed -->
    </div>
    
    <!-- Add Task Form -->
    <div class="mt-4">
      <h4>Tambah Tugas Baru</h4>
      <form id="add-task-form">
        <div class="mb-3">
          <label for="task-name" class="form-label">Nama Tugas</label>
          <input type="text" class="form-control" id="task-name" required>
        </div>
        <div class="mb-3">
          <label for="task-desc" class="form-label">Deskripsi Tugas</label>
          <textarea class="form-control" id="task-desc" rows="3" required></textarea>
        </div>
        <div class="mb-3">
          <label for="task-time" class="form-label">Waktu Tugas</label>
          <input type="time" class="form-control" id="task-time" required>
        </div>
        <button type="submit" class="btn unique-btn">Tambah Tugas</button>
      </form>
    </div>
  </div>

  <!-- Bootstrap JS and dependencies -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const form = document.getElementById('add-task-form');
      const taskList = document.getElementById('task-list');

      form.addEventListener('submit', function(event) {
        event.preventDefault();

        const taskName = document.getElementById('task-name').value;
        const taskDesc = document.getElementById('task-desc').value;
        const taskTime = document.getElementById('task-time').value;

        const taskCard = document.createElement('div');
        taskCard.className = 'task-card';
        taskCard.innerHTML = `
          <h5>${taskName}</h5>
          <p>${taskDesc}</p>
          <p><strong>Waktu:</strong> ${taskTime}</p>
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
