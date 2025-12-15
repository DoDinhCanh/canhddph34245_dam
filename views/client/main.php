<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?= $title ?? 'Home' ?></title>

    <link
      href="https://fonts.googleapis.com/css2?family=Roboto&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
 <style>
      body {
        font-family: "Roboto", sans-serif;
      }

      .navbar-brand img {
        height: 90px;
      }

      .banner img {
        width: 100%;
        max-height: 400px;
        object-fit: cover;
        display: block;
      }

      .category-item {
        text-align: center;
      }
      .category-item img {
        width: 120px;
        height: 120px;
        object-fit: cover;
      }
      .category-item p {
        margin-top: 8px;
        font-weight: 500;
      }

      .product-card img {
        width: 100%;
        height: auto;
        object-fit: cover;
      }
      .product-card .price {
        font-weight: 600;
        color: #000;
      }

      .footer-bottom {
        border-top: 1px solid #e9ecef;
        padding: 16px 0;
        text-align: center;
        font-size: 14px;
      }
    </style>
<body>

        <nav class="navbar navbar-expand-lg bg-light">
      <div class="container">
        <a class="navbar-brand d-flex align-items-center" href="#">
          <img src="./public/img/logo.png" alt="AE Boutique Logo" />
        </a>

        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#mainNav"
        >
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="mainNav">
          <ul class="navbar-nav ms-auto me-3">
            <li class="nav-item"><a class="nav-link" href="#">TRANG CHỦ</a></li>
            <li class="nav-item"><a class="nav-link" href="<?= BASE_URL . '?action=products' ?>">SẢN PHẨM</a></li>
            <li class="nav-item"><a class="nav-link" href="#">DANH MỤC</a></li>
            <li class="nav-item"><a class="nav-link" href="#">PHỤ KIỆN</a></li>
            <li class="nav-item"><a class="nav-link" href="#">LIÊN HỆ</a></li>
          </ul>

          <div class="d-flex align-items-center gap-3">
            <span id="search-icon" role="button">🔍</span>
            <input
              type="text"
              id="search-input"
              class="form-control d-none"
              placeholder="Tìm sản phẩm..."
              style="width: 200px"
            />
            <div class="dropdown">
              <button
                class="btn btn-outline-secondary btn-sm dropdown-toggle d-flex align-items-center"
                type="button"
                data-bs-toggle="dropdown"
              >
                👤
              </button>
              <ul class="dropdown-menu dropdown-menu-end">
                <li>
                  <a class="dropdown-item" href="#">✏️ Chỉnh sửa tài khoản</a>
                </li>
                <li><a class="dropdown-item" href="#">🔑 Đăng nhập</a></li>
                <li><a class="dropdown-item" href="#">🚪 Đăng xuất</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </nav>

    <section class="banner">
      <img
        src="./public/img/banner.webp"
        alt="Banner chính"
        class="img-fluid"
      />
    </section>

    <div class="container">
        <h1 class="mt-3 mb-3"><?= $title ?? '' ?></h1>

        <div class="row">
            <?php
            if (isset($view)) {
                require_once PATH_VIEW_CLIENT . $view . '.php';
            }
            ?>
        </div>
    </div>

    <footer class="bg-light py-5">
      <div class="container">
        <div class="row g-4">
          <div class="col-12 col-md-3">
            <h3>DICAN</h3>
            <p>1112 Trịnh Văn Bô - Hà Nội</p>
          </div>
          <div class="col-6 col-md-3">
            <h4>Links</h4>
            <p class="mb-1">About</p>
            <p class="mb-0">Contact</p>
          </div>
          <div class="col-6 col-md-3">
            <h4>Help</h4>
            <p class="mb-1">Payment Options</p>
            <p class="mb-0">Privacy Policy</p>
          </div>
          <div class="col-12 col-md-3">
            <h4>Newsletter</h4>
            <div class="input-group">
              <input
                type="email"
                class="form-control"
                placeholder="Email của bạn"
              />
              <button class="btn btn-dark">Đăng ký</button>
            </div>
          </div>
        </div>
        <div class="footer-bottom mt-4">© 2025 DICAN All rights reserved.</div>
      </div>
    </footer>

    <script>
      document.addEventListener("DOMContentLoaded", function () {
        const searchIcon = document.getElementById("search-icon");
        const searchInput = document.getElementById("search-input");

        // Khi click vào biểu tượng search thì hiện ô input
        searchIcon.addEventListener("click", function (e) {
          searchInput.classList.remove("d-none");
          searchInput.focus();
          e.stopPropagation();
        });

        // Khi click ra ngoài ô input thì ẩn lại
        document.addEventListener("click", function (e) {
          if (
            !e.target.closest("#search-input") &&
            !e.target.closest("#search-icon")
          ) {
            searchInput.classList.add("d-none");
          }
        });

        // Ngăn ẩn khi click vào chính ô input
        searchInput.addEventListener("click", function (e) {
          e.stopPropagation();
        });
      });
    </script>

</body>

</html>