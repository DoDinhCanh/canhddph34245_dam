<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $title ?? 'Trang quản trị' ?></title>

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

  <!-- CSS riêng -->
  <link rel="stylesheet" href="../../../admin.css">
  <style>
    body {
      margin: 0;
    }

    .layout {
      display: flex;
      height: 100vh;
    }

    .sidebar {
      width: 260px;
      background-color: #1f3343;
      color: white;
      padding: 20px;
    }

    .main-content {
      flex-grow: 1;
      padding: 20px;
      overflow-y: auto;
    }

    .sidebar-link {
      padding: 10px 15px;
      border-radius: 5px;
    }

    .sidebar-link:hover {
      background: #2c465a;
    }

    .sidebar-link.active {
      background-color: #2c465a;
      font-weight: 500;
    }

    .product-img {
  width: 60px;
  height: 60px;
  object-fit: cover;
  border-radius: 5px;
}
  </style>
</head>
<body>
  <div class="layout">
    <!-- Sidebar -->
    <nav class="sidebar">
      <h2 class="fw-bold mb-4 text-center">DICAN STORE<br>ADMIN</h2>
      <ul class="nav flex-column gap-2">
        <li class="nav-item">
          <a href="?mode=admin" class="nav-link active text-white sidebar-link">Quản lý Sản phẩm</a>
        </li>
        <li class="nav-item">
          <a href="?mode=admin&action=list-category" class="nav-link text-white sidebar-link">Danh mục</a>
        </li>
        <li class="nav-item">
          <a href="?mode=admin&action=list-user" class="nav-link text-white sidebar-link">Người dùng</a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link text-white sidebar-link">Bình luận</a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link text-white sidebar-link">Thống kê</a>
        </li>
      </ul>
    </nav>

    <!-- Nội dung chính -->
    <div class="main-content">
      <?php
      if (isset($view)) {
          require_once PATH_VIEW_ADMIN . $view . '.php';
      }
      ?>
    </div>
  </div>
</body>
</html>