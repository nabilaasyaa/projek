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
    .finance-card {
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
      <h5 class="card-header">Manajemen Keuangan</h5>
      <div class="card-body">
        <h5 class="card-title">Senang Membantu Anda</h5>
        <p class="card-text">Kelola keuangan keluarga Anda dengan lebih efisien menggunakan fitur manajemen keuangan kami.</p>
        <a href="#" class="btn btn-primary">Selengkapnya</a>
      </div>
    </div>

    <h1 class="mt-4">Manajemen Keuangan</h1>
    <p>Kelola keuangan keluarga Anda dengan lebih efisien menggunakan fitur manajemen keuangan kami. Catat pemasukan dan pengeluaran, serta pantau anggaran bulanan Anda.</p>
    
    <!-- Finance List -->
    <div id="finance-list">
      <div class="finance-card">
        <h5>Pemasukan 1</h5>
        <p>Deskripsi pemasukan pertama.</p>
        <p><strong>Jumlah:</strong> Rp 1.000.000</p>
        <button class="btn btn-sm btn-warning"><i class="bi bi-pencil-square"></i> Edit</button>
        <button class="btn btn-sm btn-danger"><i class="bi bi-trash"></i> Hapus</button>
      </div>
      <div class="finance-card">
        <h5>Pengeluaran 1</h5>
        <p>Deskripsi pengeluaran pertama.</p>
        <p><strong>Jumlah:</strong> Rp 500.000</p>
        <button class="btn btn-sm btn-warning"><i class="bi bi-pencil-square"></i> Edit</button>
        <button class="btn btn-sm btn-danger"><i class="bi bi-trash"></i> Hapus</button>
      </div>
      <!-- Add more finance entries as needed -->
    </div>

    <!-- Add Finance Form -->
    <div class="mt-4">
      <h4>Tambah Pemasukan/Pengeluaran Baru</h4>
      <form id="add-finance-form">
        <div class="mb-3">
          <label for="finance-type" class="form-label">Tipe</label>
          <select class="form-select" id="finance-type" required>
            <option value="pemasukan">Pemasukan</option>
            <option value="pengeluaran">Pengeluaran</option>
          </select>
        </div>
        <div class="mb-3">
          <label for="finance-desc" class="form-label">Deskripsi</label>
          <textarea class="form-control" id="finance-desc" rows="3" required></textarea>
        </div>
        <div class="mb-3">
          <label for="finance-amount" class="form-label">Jumlah</label>
          <input type="number" class="form-control" id="finance-amount" required>
        </div>
        <div class="mb-3">
          <label for="finance-category" class="form-label">Kategori</label>
          <input type="text" class="form-control" id="finance-category">
        </div>
        <button type="submit" class="btn unique-btn">Tambah</button>
      </form>
    </div>

    <!-- Download Report -->
    <div class="mt-4">
      <h4>Unduh Laporan Keuangan</h4>
      <button class="btn unique-btn" id="download-pdf"><i class="bi bi-file-earmark-pdf"></i> Download PDF</button>
      <button class="btn unique-btn" id="download-excel"><i class="bi bi-file-earmark-spreadsheet"></i> Download Excel</button>
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
      const form = document.getElementById('add-finance-form');
      const financeList = document.getElementById('finance-list');
      const totalIncome = document.getElementById('total-income');
      const totalExpense = document.getElementById('total-expense');
      let incomeTotal = 0;
      let expenseTotal = 0;

      form.addEventListener('submit', function(event) {
        event.preventDefault();

        const financeType = document.getElementById('finance-type').value;
        const financeDesc = document.getElementById('finance-desc').value;
        const financeAmount = parseFloat(document.getElementById('finance-amount').value);
        const financeCategory = document.getElementById('finance-category').value;

        const financeCard = document.createElement('div');
        financeCard.className = 'finance-card';
        financeCard.innerHTML = `
          <h5>${financeType === 'pemasukan' ? 'Pemasukan' : 'Pengeluaran'}</h5>
          <p>${financeDesc}</p>
          <p><strong>Jumlah:</strong> Rp ${financeAmount.toLocaleString()}</p>
          <p><strong>Kategori:</strong> ${financeCategory}</p>
          <button class="btn btn-sm btn-warning"><i class="bi bi-pencil-square"></i> Edit</button>
          <button class="btn btn-sm btn-danger"><i class="bi bi-trash"></i> Hapus</button>
        `;

        financeCard.querySelector('.btn-danger').addEventListener('click', function() {
          financeList.removeChild(financeCard);
          if (financeType === 'pemasukan') {
            incomeTotal -= financeAmount;
          } else {
            expenseTotal -= financeAmount;
          }
          updateTotals();
        });

        financeCard.querySelector('.btn-warning').addEventListener('click', function() {
          // Implement edit functionality
        });

        financeList.appendChild(financeCard);

        if (financeType === 'pemasukan') {
          incomeTotal += financeAmount;
        } else {
          expenseTotal += financeAmount;
        }

        updateTotals();
        form.reset();
      });

      function updateTotals() {
        totalIncome.textContent = `Total Pemasukan: Rp ${incomeTotal.toLocaleString()}`;
        totalExpense.textContent = `Total Pengeluaran: Rp ${expenseTotal.toLocaleString()}`;
      }

      document.getElementById('download-pdf').addEventListener('click', function() {
        // Implement PDF download functionality
      });

      document.getElementById('download-excel').addEventListener('click', function() {
        // Implement Excel download functionality
      });
    });
  </script>
</body>
</html>
