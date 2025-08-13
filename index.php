<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="vi">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Trang Tin DN&TT</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

</head>

<body>

  <!-- Header -->
  <header class="bg-white border-bottom py-2 d-none d-lg-block">
    <div class="container d-flex justify-content-between align-items-center">
      <div>
        <img src="assets/images/logo.jpeg" alt="Logo"
          style="height: 80px;object-fit: contain; margin-top: 1px;margin-left: 150px;">
      </div>
      <div class="d-none d-md-flex gap-2 align-items-center">
        <span class="badge bg-light text-dark">
          <i class="fas fa-bolt text-primary me-1"></i> # Biểu tình lan ra tại Mỹ
        </span>
        <span class="badge bg-light text-dark"># Nhân sự, Đại hội...</span>
        <span class="badge bg-light text-dark"># Dịch Covid19</span>
      </div>
    </div>
  </header>


  <!-- navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">

      <!-- Logo mobile -->
      <a class="navbar-brand d-lg-none" href="#">
        <img src="assets/images/logo.jpeg" alt="Logo" style="height: 40px; object-fit: contain;">
      </a>

      <!-- Search+Menu mobile -->
      <div class="d-flex align-items-center d-lg-none ms-auto">
        <a class="nav-link text-white" href="#"><i class="fas fa-search"></i></a>
        <button class="navbar-toggler ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>

      <!-- navbar-web-->
      <div class="collapse navbar-collapse" id="mainNav">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item"><a class="nav-link" href="#"><i class="fas fa-home me-1"></i> TRANG CHỦ</a></li>
          <li class="nav-item"><a class="nav-link" href="#">SỰ KIỆN</a></li>
          <li class="nav-item"><a class="nav-link" href="#">DOANH NGHIỆP</a></li>
          <li class="nav-item"><a class="nav-link" href="#">TIẾP THỊ</a></li>
          <li class="nav-item"><a class="nav-link" href="#">KINH TẾ</a></li>
          <li class="nav-item"><a class="nav-link" href="#">XÃ HỘI</a></li>
          <li class="nav-item"><a class="nav-link" href="#">PHÁP LUẬT</a></li>
          <li class="nav-item"><a class="nav-link" href="#">QUỐC TẾ</a></li>
          <li class="nav-item"><a class="nav-link" href="#">VIDEO</a></li>
          <li class="nav-item d-none d-lg-block"><a class="nav-link" href="#"><i class="fas fa-search"></i></a></li>
        </ul>

        <!-- Menu-laptop -->
        <ul class="navbar-nav ms-auto d-none d-lg-flex">
          <li class="nav-item">
            <a class="nav-link text-white" href="#" id="menuToggle"><i class="fas fa-bars"></i></a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- detail menu-->
  <div id="megaMenu" class="mega-menu d-none">
    <div class="container py-4">
      <div class="row">
        <div class="col-12 d-flex flex-wrap">
          <div class="col-md-1-7 px-3">
            <h6 class="text-primary fw-bold">SỰ KIỆN</h6>
            <ul class="list-unstyled">
              <li>Chính trị - Xã hội</li>
              <li>Cải cách hành chính</li>
              <li>Tiêu điểm</li>
              <li>Tin địa phương</li>
              <li>Hoạt động của Hội</li>
            </ul>
          </div>
          <div class="col-md-1-7 px-3">
            <h6 class="text-primary fw-bold">DOANH NGHIỆP</h6>
            <ul class="list-unstyled">
              <li>Diễn đàn</li>
              <li>Thương hiệu</li>
              <li>Thông tin thương hiệu</li>
              <li>Trách nhiệm xã hội</li>
              <li>Khởi nghiệp</li>
            </ul>
          </div>
          <div class="col-md-1-7 px-3">
            <h6 class="text-primary fw-bold">TIẾP THỊ</h6>
            <ul class="list-unstyled">
              <li>Nhịp đập thị trường</li>
              <li>Tiếp thị số</li>
              <li>Dịch vụ</li>
              <li>Bảo vệ người tiêu dùng</li>
            </ul>
          </div>
          <div class="col-md-1-7 px-3">
            <h6 class="text-primary fw-bold">KINH TẾ</h6>
            <ul class="list-unstyled">
              <li>Kinh doanh</li>
              <li>Tài chính – Đầu tư</li>
              <li>Ngân hàng</li>
              <li>Bất động sản</li>
              <li>Chứng khoán</li>
            </ul>
          </div>
          <div class="col-md-1-7 px-3">
            <h6 class="text-primary fw-bold">XÃ HỘI</h6>
            <ul class="list-unstyled">
              <li>Văn hóa</li>
              <li>Giáo dục</li>
              <li>Sức khỏe</li>
              <li>Du lịch</li>
              <li>Ẩm thực</li>
            </ul>
          </div>
          <div class="col-md-1-7 px-3">
            <h6 class="text-primary fw-bold">PHÁP LUẬT</h6>
            <ul class="list-unstyled">
              <li>Chính sách mới</li>
              <li>Tiếp thị và Pháp luật</li>
              <li>Tư vấn</li>
              <li>Luật sư của bạn</li>
              <li>Đơn thư bạn đọc</li>
            </ul>
          </div>
          <div class="col-md-1-7 px-3">
            <h6 class="text-primary fw-bold">QUỐC TẾ</h6>
            <ul class="list-unstyled">
              <li>Thế giới 24H</li>
              <li>Tư liệu</li>
              <li>Phân tích – Bình luận</li>
            </ul>
          </div>
        </div>
      </div>

      <!-- menu cuối -->
      <div class="row mt-4 border-top pt-3">
        <div class="col-12">
          <div class="d-flex gap-5 align-items-center">
            <div><i class="fas fa-play-circle me-1 text-primary"></i> <strong>VIDEO</strong></div>
            <div><i class="fas fa-image me-1 text-primary"></i> <strong>ẢNH</strong></div>
            <div><i class="fas fa-chart-pie me-1 text-primary"></i> <strong>INFOGRAPHIC</strong></div>
            <div><i class="fas fa-book-open me-1 text-primary"></i> <strong>EMAGAZINE</strong></div>
            <div><i class="fas fa-newspaper me-1 text-primary"></i> <strong>TẠP CHÍ IN</strong></div>
          </div>
        </div>
      </div>
    </div>
  </div>



  <!-- main -->
  <main class="container mt-4">
    <div class="row">
      <!-- Sidebar left -->
      <div class="col-12 col-lg-3 order-2 order-lg-1">
        <?php
        $sqlSidebar = "SELECT category, title, image FROM news ORDER BY id ASC LIMIT 4";
        $resultSidebar = $conn->query($sqlSidebar);
        while ($row = $resultSidebar->fetch_assoc()):
        ?>
          <div class="d-flex align-items-start border-bottom py-2 flex-lg-column">
            <!--category + title -->
            <div class="flex-grow-1">
              <div class="news-meta text-primary fw-bold small"><?= htmlspecialchars($row['category']) ?></div>
              <div class="news-title small fw-semibold"><?= htmlspecialchars($row['title']) ?></div>
            </div>

            <!--image chỉ hiển thị ở mobile -->
            <img src="<?= htmlspecialchars($row['image']) ?>"
              alt=""
              class="ms-2 d-block d-lg-none"
              style="width: 100px; height: 100px; object-fit: cover;">
          </div>
        <?php endwhile; ?>
      </div>


      <!-- Main news center -->
      <div class="col-12 col-lg-6 order-1 order-lg-2" style="border-left: 1px solid #eee; border-right: 1px solid #eee;">
        <?php
        $sqlMainNews = "SELECT * FROM news ORDER BY id ASC LIMIT 1 OFFSET 4";
        $resultMain = $conn->query($sqlMainNews);
        if ($row = $resultMain->fetch_assoc()):
        ?>
          <div class="news-item">
            <img src="<?= htmlspecialchars($row['image']) ?>" alt="" class="img-fluid w-100 mb-2">
            <!-- Category:laptop -->
            <div class="news-meta text-primary fw-bold small d-none d-lg-block">
              <?= htmlspecialchars($row['category']) ?>
            </div>
            <!-- Tittle -->
            <div class="news-title h5 fw-bold">
              <?= htmlspecialchars($row['title']) ?>
            </div>
            <!-- category: cho mobile -->
            <div class="news-meta text-primary fw-bold small d-block d-lg-none">
              <?= htmlspecialchars($row['category']) ?>
            </div>
            <!-- mô tả -->
            <div class="news-desc small text-muted">
              <?= htmlspecialchars($row['summary']) ?>
            </div>
          </div>

        <?php endif; ?>
      </div>


      <!-- Sidebar right -->
      <div class="col-12 col-lg-3 order-3">
        <?php
        $sqlSidebarRight = "SELECT * FROM news ORDER BY id ASC LIMIT 2 OFFSET 5";
        $resultRight = $conn->query($sqlSidebarRight);
        while ($row = $resultRight->fetch_assoc()):
        ?>
          <div class="sidebar-news-item border-bottom py-2">
            <!-- Mobile -->
            <div class="d-flex d-lg-none align-items-start">
              <div class="flex-grow-1">
                <div class="news-meta text-primary fw-bold small"><?= htmlspecialchars($row['category']) ?></div>
                <div class="news-title small fw-semibold"><?= htmlspecialchars($row['title']) ?></div>
              </div>
              <img src="<?= htmlspecialchars($row['image']) ?>"
                alt=""
                class="ms-2"
                style="width: 100px; height: 100px; object-fit: cover;">
            </div>

            <!-- Laptop-->
            <div class="d-none d-lg-block">
              <div class="sidebar-news-title">
                <?= htmlspecialchars($row['title']) ?>
              </div>
              <div class="sidebar-news-body d-flex">
                <img src="<?= htmlspecialchars($row['image']) ?>"
                  alt=""
                  style="width: 100px; height: 100px; object-fit: cover; margin-right: 10px;">
                <div class="sidebar-news-content">
                  <div class="sidebar-news-meta text-primary fw-bold small">
                    <?= htmlspecialchars($row['category']) ?>
                  </div>
                  <div class="sidebar-news-desc small text-muted">
                    <?= htmlspecialchars($row['summary']) ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <?php endwhile; ?>
      </div>

    </div>
    <div class="row">
      <!-- Các bài viết 'Xem thêm'-->
      <div id="news-container" class="row g-4 col-lg-9">
        <div id="news-list" style="display: none;">
          <?php
          $sql = "SELECT * FROM news ORDER BY id ASC LIMIT 10 OFFSET 7";
          $result = $conn->query($sql);
          while ($row = $result->fetch_assoc()):
          ?>
            <!-- Mobile -->
            <div class="col-12 d-block d-lg-none mb-4 border-bottom">
              <h6 class="mb-1 fw-bold"><?= htmlspecialchars($row['title']) ?></h6>
              <div class="text-muted small mb-2">
                <?= htmlspecialchars($row['summary']) ?>
              </div>
              <img src="<?= htmlspecialchars($row['image']) ?>" alt="News" class="img-fluid w-100 mb-2" style="object-fit: cover;">
              <div class="d-flex justify-content-between align-items-center">
                <div class="news-meta text-primary text-uppercase fw-bold small">
                  <?= htmlspecialchars($row['category']) ?>
                </div>
                <a href="#" class="text-muted small text-decoration-none">
                  <i class="fab fa-facebook-f me-1"></i> Chia sẻ
                </a>
              </div>
            </div>

            <!-- Laptop -->
            <div class="col-12 d-none d-lg-flex news-item" style="padding-top: 15px;">
              <img src="<?= htmlspecialchars($row['image']) ?>" class="me-3" style="width: 40%; height: 80%; object-fit: cover;" alt="News">
              <div class="flex-grow-1">
                <h6 class="mb-1 fw-bold line-2"><?= htmlspecialchars($row['title']) ?></h6>
                <div class="text-primary text-uppercase fw-bold small mb-1"><?= htmlspecialchars($row['category']) ?></div>
                <div class="text-muted small line-2">
                  <?= htmlspecialchars($row['summary']) ?>
                </div>
              </div>
            </div>
          <?php endwhile; ?>
        </div>
      </div>


      <!-- Nút Xem thêm -->
      <div id="load-more-wrapper" class="text-center my-4">
        <button id="load-more" class="btn btn-primary">Xem thêm</button>
        <div id="loading" class="mt-2" style="display:none;">
          <div class="spinner-border text-primary"></div>
        </div>
      </div>
    </div>
  </main>
  </main>
  <!-- navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary d-none d-lg-block" style="border-bottom: 1px solid #eee;">
    <div class="container">
      <a class="navbar-brand d-lg-none" href="#"><i class="fas fa-bars"></i> </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="mainNav">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="#">
              <i class="fas fa-home me-1"></i> TRANG CHỦ
            </a>
          </li>
          <li class="nav-item"><a class="nav-link" href="#">SỰ KIỆN</a></li>
          <li class="nav-item"><a class="nav-link" href="#">DOANH NGHIỆP</a></li>
          <li class="nav-item"><a class="nav-link" href="#">TIẾP THỊ</a></li>
          <li class="nav-item"><a class="nav-link" href="#">KINH TẾ</a></li>
          <li class="nav-item"><a class="nav-link" href="#">XÃ HỘI</a></li>
          <li class="nav-item"><a class="nav-link" href="#">PHÁP LUẬT</a></li>
          <li class="nav-item"><a class="nav-link" href="#">QUỐC TẾ</a></li>
          <li class="nav-item"><a class="nav-link" href="#">VIDEO</a></li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <i class="fas fa-search"></i>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Footer -->
  <footer class="bg-primary text-white py-4">
    <div class="container">
      <div class="row">
        <div class="col-md-2">
          <img src="assets/images/logo.jpeg" alt="Logo" style="height: 100px;object-fit: contain; margin-top: 4px;">
        </div>
        <div class="col-md-6">
          <p class="mb-1 fw-bold">Logo Here Newspaper</p>
          <p class="mb-1">Địa chỉ: 85 Vũ Trọng Phụng, Thanh Xuân, Hà Nội</p>
          <p class="mb-1">Hotline: 0912 345 678</p>
          <p class="mb-0">Email: abc@gmail.com</p>
        </div>


        <div class="col-md-4">
          <p class="mb-1"><strong>Tổng biên tập:</strong> Nguyễn Văn A</p>
          <p class="mb-1"><strong>Phó tổng biên tập:</strong> Trần Thị B</p>
          <p class=" mb-0">
            Chỉ được phát hành lại thông tin từ website này khi có sự đồng ý bằng văn bản của cơ quan chủ quản.
          </p>
        </div>
      </div>
    </div>
  </footer>
  <!-- mobile taskbar-->
  <div class="d-lg-none" style="height: 60px;"></div>

  <!-- Mobile Menu -->
  <div class="d-flex d-lg-none justify-content-around align-items-center bg-white border-top shadow-sm fixed-bottom py-2">
    <div class="text-center">
      <i class="fas fa-home text-primary"></i><br>
      <small class="text-dark">Trang chủ</small>
    </div>
    <div class="text-center">
      <i class="fas fa-tag text-primary"></i><br>
      <small class="text-dark">Tin mới</small>
    </div>
    <div class="text-center">
      <i class="fas fa-play-circle text-primary"></i><br>
      <small class="text-dark">Video</small>
    </div>
    <div class="text-center">
      <i class="fas fa-bars text-primary"></i><br>
      <small class="text-dark">Chuyên mục</small>
    </div>
  </div>

  <!-- js -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/script.js"></script>
</body>


</html>