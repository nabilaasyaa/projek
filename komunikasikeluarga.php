<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>HOmeUSE - Komunikasi Keluarga</title>
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
    .message-card {
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
      <h5 class="card-header">Komunikasi Keluarga</h5>
      <div class="card-body">
        <h5 class="card-title">Mempererat Komunikasi Keluarga</h5>
        <p class="card-text">Kirim pesan, buat grup chat, dan forum diskusi untuk berkomunikasi dengan seluruh anggota keluarga.</p>
        <a href="#" class="btn btn-primary">Selengkapnya</a>
      </div>
    </div>

    <h1 class="mt-4">Komunikasi Keluarga</h1>
    <p>Gunakan fitur komunikasi kami untuk berinteraksi dengan seluruh anggota keluarga. Kirim pesan, buat grup chat, dan diskusi di forum keluarga.</p>
    
    <!-- Messaging Section -->
    <div id="messaging-section">
      <h4>Pesan dan Grup Chat</h4>
      <div class="message-card">
        <h5>Grup Chat 1</h5>
        <p>Deskripsi grup chat pertama.</p>
        <button class="btn btn-sm btn-warning"><i class="bi bi-pencil-square"></i> Edit</button>
        <button class="btn btn-sm btn-danger"><i class="bi bi-trash"></i> Hapus</button>
      </div>
      <div class="message-card">
        <h5>Pesan Pribadi 1</h5>
        <p>Deskripsi pesan pribadi pertama.</p>
        <button class="btn btn-sm btn-warning"><i class="bi bi-pencil-square"></i> Edit</button>
        <button class="btn btn-sm btn-danger"><i class="bi bi-trash"></i> Hapus</button>
      </div>
      <!-- Add more messages or group chats as needed -->
    </div>

    <!-- Add Message Form -->
    <div class="mt-4">
      <h4>Tambah Pesan/Grup Chat Baru</h4>
      <form id="add-message-form">
        <div class="mb-3">
          <label for="message-type" class="form-label">Tipe</label>
          <select class="form-select" id="message-type" required>
            <option value="pesan">Pesan Pribadi</option>
            <option value="grup">Grup Chat</option>
          </select>
        </div>
        <div class="mb-3">
          <label for="message-desc" class="form-label">Deskripsi</label>
          <textarea class="form-control" id="message-desc" rows="3" required></textarea>
        </div>
        <button type="submit" class="btn unique-btn">Tambah</button>
      </form>
    </div>

    <!-- Forum Section -->
    <div id="forum-section" class="mt-5">
      <h4>Forum Diskusi Keluarga</h4>
      <div class="message-card">
        <h5>Topik Diskusi 1</h5>
        <p>Deskripsi topik diskusi pertama.</p>
        <button class="btn btn-sm btn-warning"><i class="bi bi-pencil-square"></i> Edit</button>
        <button class="btn btn-sm btn-danger"><i class="bi bi-trash"></i> Hapus</button>
      </div>
      <div class="message-card">
        <h5>Topik Diskusi 2</h5>
        <p>Deskripsi topik diskusi kedua.</p>
        <button class="btn btn-sm btn-warning"><i class="bi bi-pencil-square"></i> Edit</button>
        <button class="btn btn-sm btn-danger"><i class="bi bi-trash"></i> Hapus</button>
      </div>
      <!-- Add more discussion topics as needed -->
    </div>

    <!-- Add Discussion Topic Form -->
    <div class="mt-4">
      <h4>Tambah Topik Diskusi Baru</h4>
      <form id="add-topic-form">
        <div class="mb-3">
          <label for="topic-title" class="form-label">Judul Topik</label>
          <input type="text" class="form-control" id="topic-title" required>
        </div>
        <div class="mb-3">
          <label for="topic-desc" class="form-label">Deskripsi</label>
          <textarea class="form-control" id="topic-desc" rows="3" required></textarea>
        </div>
        <button type="submit" class="btn unique-btn">Tambah</button>
      </form>
    </div>

    <!-- Announcement Section -->
    <div id="announcement-section" class="mt-5">
      <h4>Pengumuman Keluarga</h4>
      <div class="message-card">
        <h5>Pengumuman 1</h5>
        <p>Deskripsi pengumuman pertama.</p>
        <button class="btn btn-sm btn-warning"><i class="bi bi-pencil-square"></i> Edit</button>
        <button class="btn btn-sm btn-danger"><i class="bi bi-trash"></i> Hapus</button>
      </div>
      <div class="message-card">
        <h5>Pengumuman 2</h5>
        <p>Deskripsi pengumuman kedua.</p>
        <button class="btn btn-sm btn-warning"><i class="bi bi-pencil-square"></i> Edit</button>
        <button class="btn btn-sm btn-danger"><i class="bi bi-trash"></i> Hapus</button>
      </div>
      <!-- Add more announcements as needed -->
    </div>

    <!-- Add Announcement Form -->
    <div class="mt-4">
      <h4>Tambah Pengumuman Baru</h4>
      <form id="add-announcement-form">
        <div class="mb-3">
          <label for="announcement-title" class="form-label">Judul Pengumuman</label>
          <input type="text" class="form-control" id="announcement-title" required>
        </div>
        <div class="mb-3">
          <label for="announcement-desc" class="form-label">Deskripsi</label>
          <textarea class="form-control" id="announcement-desc" rows="3" required></textarea>
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
      // Message Form
      const messageForm = document.getElementById('add-message-form');
      const messagingSection = document.getElementById('messaging-section');

      messageForm.addEventListener('submit', function(event) {
        event.preventDefault();

        const messageType = document.getElementById('message-type').value;
        const messageDesc = document.getElementById('message-desc').value;

        const messageCard = document.createElement('div');
        messageCard.className = 'message-card';
        messageCard.innerHTML = `
          <h5>${messageType === 'pesan' ? 'Pesan Pribadi' : 'Grup Chat'}</h5>
          <p>${messageDesc}</p>
          <button class="btn btn-sm btn-warning"><i class="bi bi-pencil-square"></i> Edit</button>
          <button class="btn btn-sm btn-danger"><i class="bi bi-trash"></i> Hapus</button>
        `;

        messageCard.querySelector('.btn-danger').addEventListener('click', function() {
          messagingSection.removeChild(messageCard);
        });

        messagingSection.appendChild(messageCard);

        messageForm.reset();
      });

      // Topic Form
      const topicForm = document.getElementById('add-topic-form');
      const forumSection = document.getElementById('forum-section');

      topicForm.addEventListener('submit', function(event) {
        event.preventDefault();

        const topicTitle = document.getElementById('topic-title').value;
        const topicDesc = document.getElementById('topic-desc').value;

        const topicCard = document.createElement('div');
        topicCard.className = 'message-card';
        topicCard.innerHTML = `
          <h5>${topicTitle}</h5>
          <p>${topicDesc}</p>
          <button class="btn btn-sm btn-warning"><i class="bi bi-pencil-square"></i> Edit</button>
          <button class="btn btn-sm btn-danger"><i class="bi bi-trash"></i> Hapus</button>
        `;

        topicCard.querySelector('.btn-danger').addEventListener('click', function() {
          forumSection.removeChild(topicCard);
        });

        forumSection.appendChild(topicCard);

        topicForm.reset();
      });

      // Announcement Form
      const announcementForm = document.getElementById('add-announcement-form');
      const announcementSection = document.getElementById('announcement-section');

      announcementForm.addEventListener('submit', function(event) {
        event.preventDefault();

        const announcementTitle = document.getElementById('announcement-title').value;
        const announcementDesc = document.getElementById('announcement-desc').value;

        const announcementCard = document.createElement('div');
        announcementCard.className = 'message-card';
        announcementCard.innerHTML = `
          <h5>${announcementTitle}</h5>
          <p>${announcementDesc}</p>
          <button class="btn btn-sm btn-warning"><i class="bi bi-pencil-square"></i> Edit</button>
          <button class="btn btn-sm btn-danger"><i class="bi bi-trash"></i> Hapus</button>
        `;

        announcementCard.querySelector('.btn-danger').addEventListener('click', function() {
          announcementSection.removeChild(announcementCard);
        });

        announcementSection.appendChild(announcementCard);

        announcementForm.reset();
      });
    });
  </script>
</body>
</html>
