<!DOCTYPE html>
<html lang="zh-Hant">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sanrio Taiwan 仿制网站</title>

    <!-- 引入 Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- 引入 jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- 自定义 CSS 样式 -->
    <style>
        /* 主图片区域占满页面宽度，高度为20% */
        .carousel {
            width: 100%;
            height: 20vh; /* 20% 的页面高度 */
        }
        .carousel-inner img {
            width: 100%;
            height: 100%;
            object-fit: cover; /* 确保图片覆盖整个区域 */
        }

        /* 页脚样式 */
        .footer {
            background-color: #f8f9fa;
            padding: 20px 0;
            text-align: center;
        }

        /* 中间内容区的样式 */
        .content-area {
            min-height: 60vh; /* 设置中间区域的高度，可以根据需要调整 */
            padding: 20px;
        }
    </style>
</head>
<body>

    <!-- 导航栏 -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="https://www.sanrio.com.tw/images/logo.png" alt="Sanrio Logo" class="header-logo" style="max-width: 150px;">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">首頁</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">產品</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">活動</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">關於我們</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">聯絡我們</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- 主图片区域 -->
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://www.sanrio.com.tw/images/banner1.jpg" class="d-block w-100" alt="Banner 1">
            </div>
            <div class="carousel-item">
                <img src="https://www.sanrio.com.tw/images/banner2.jpg" class="d-block w-100" alt="Banner 2">
            </div>
            <div class="carousel-item">
                <img src="https://www.sanrio.com.tw/images/banner3.jpg" class="d-block w-100" alt="Banner 3">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- 中间内容区（可以包含不同页面内容）-->
    <div class="content-area">
        <!-- 这里可以通过 PHP 或 JavaScript 动态加载其他页面内容 -->
        <?php
            // 示例：包含其他页面内容
            include('home.php');  // 根据需要包含不同的页面内容
        ?>
    </div>

    <!-- 页脚 -->
    <footer class="footer">
        <p>&copy; 2025 Sanrio Taiwan. 版權所有。</p>
    </footer>

    <!-- 引入 Bootstrap 5 JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
