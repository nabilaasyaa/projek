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
    .event-card {
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
      <h5 class="card-header">Manajemen Waktu</h5>
      <div class="card-body">
        <h5 class="card-title">Kelola Waktu Anda</h5>
        <p class="card-text">Atur kegiatan harian, mingguan, dan bulanan dengan fitur manajemen waktu kami.</p>
        <a href="#" class="btn btn-primary">Selengkapnya</a>
      </div>
    </div>

    <h1 class="mt-4">Manajemen Waktu</h1>
    <p>Kelola waktu Anda dengan lebih efisien menggunakan fitur kami. Tambah, edit, dan hapus kegiatan dengan mudah. Sistem akan mengirimkan pengingat otomatis sebelum kegiatan dimulai.</p>
    
    <!-- Calendar View -->
    <div class="d-flex justify-content-between mb-3">
      <div>
        <button class="btn btn-outline-primary" id="view-daily">Harian</button>
        <button class="btn btn-outline-primary" id="view-weekly">Mingguan</button>
        <button class="btn btn-outline-primary" id="view-monthly">Bulanan</button>
      </div>
      <button class="btn unique-btn" data-bs-toggle="modal" data-bs-target="#addEventModal">Tambah Kegiatan</button>
    </div>
    <div id="calendar-view" class="mb-4">
      <!-- Placeholder for calendar -->
      <div class="alert alert-info" role="alert">
        Tampilan kalender akan muncul di sini.
      </div>
    </div>

    <!-- Event List -->
    <div id="event-list">
      <div class="event-card">
        <h5>Meeting Keluarga</h5>
        <p>Meeting keluarga untuk diskusi rencana liburan.</p>
        <p><strong>Waktu:</strong> 10 Juli 2024, 19:00</p>
        <button class="btn btn-sm btn-warning"><i class="bi bi-pencil-square"></i> Edit</button>
        <button class="btn btn-sm btn-danger"><i class="bi bi-trash"></i> Hapus</button>
      </div>
      <div class="event-card">
        <h5>Belanja Bulanan</h5>
        <p>Belanja bulanan di supermarket.</p>
        <p><strong>Waktu:</strong> 15 Juli 2024, 09:00</p>
        <button class="btn btn-sm btn-warning"><i class="bi bi-pencil-square"></i> Edit</button>
        <button class="btn btn-sm btn-danger"><i class="bi bi-trash"></i> Hapus</button>
      </div>
      <!-- Add more event entries as needed -->
    </div>
  </div>
  <!-- End Content -->

  <!-- Footer -->
  <footer class="text-center bg-light py-3 mt-auto">
    <p>&copy; 2024 HOmeUSE. All rights reserved.</p>
  </footer>
  <!-- End Footer -->

  <!-- Add Event Modal -->
  <div class="modal fade" id="addEventModal" tabindex="-1" aria-labelledby="addEventModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="addEventModalLabel">Tambah Kegiatan Baru</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form id="add-event-form">
            <div class="mb-3">
              <label for="event-title" class="form-label">Judul Kegiatan</label>
              <input type="text" class="form-control" id="event-title" required>
            </div>
            <div class="mb-3">
              <label for="event-desc" class="form-label">Deskripsi Kegiatan</label>
              <textarea class="form-control" id="event-desc" rows="3" required></textarea>
            </div>
            <div class="mb-3">
              <label for="event-date" class="form-label">Tanggal & Waktu</label>
              <input type="datetime-local" class="form-control" id="event-date" required>
            </div>
            <button type="submit" class="btn unique-btn">Tambah</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- End Add Event Modal -->

  <!-- Bootstrap JS and dependencies -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const form = document.getElementById('add-event-form');
      const eventList = document.getElementById('event-list');
      const calendarView = document.getElementById('calendar-view');

      form.addEventListener('submit', function(event) {
        event.preventDefault();

        const eventTitle = document.getElementById('event-title').value;
        const eventDesc = document.getElementById('event-desc').value;
        const eventDate = document.getElementById('event-date').value;

        const eventCard = document.createElement('div');
        eventCard.className = 'event-card';
        eventCard.innerHTML = `
          <h5>${eventTitle}</h5>
          <p>${eventDesc}</p>
          <p><strong>Waktu:</strong> ${eventDate}</p>
          <button class="btn btn-sm btn-warning"><i class="bi bi-pencil-square"></i> Edit</button>
          <button class="btn btn-sm btn-danger"><i class="bi bi-trash"></i> Hapus</button>
        `;

        eventCard.querySelector('.btn-danger').addEventListener('click', function() {
          eventList.removeChild(eventCard);
        });

        eventCard.querySelector('.btn-warning').addEventListener('click', function() {
          // Implement edit functionality
        });

        eventList.appendChild(eventCard);

        form.reset();
        const modal = bootstrap.Modal.getInstance(document.getElementById('addEventModal'));
        modal.hide();
      });

      document.getElementById('view-daily').addEventListener('click', function() {
        calendarView.innerHTML = '<div class="alert alert-info" role="alert">Tampilan Harian.</div>';
      });

      document.getElementById('view-weekly').addEventListener('click', function() {
        calendarView.innerHTML = '<div class="alert alert-info" role="alert">Tampilan Mingguan.</div>';
      });

      document.getElementById('view-monthly').addEventListener('click', function() {
        calendarView.innerHTML = '<div class="alert alert-info" role="alert">Tampilan Bulanan.</div>';
      });
    });
  </script>
</body>
</html>
