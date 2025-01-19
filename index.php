<!DOCTYPE html>
<html lang="zh-Hant">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BOYNEXTDOOR 介紹網站</title>

    <!-- 引入 Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- 引入 jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- 自定义 CSS 样式 -->
    <link rel="stylesheet" href="style.css">
    
</head>
<body>

    <!-- 導航欄 -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand image-logo" href="#">
                <img src="./icon/BOYNEXTDOOR_Logo.png" alt="BND Logo" class="header-logo" style="max-width: 40vw;">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="#about">關於我們</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#news">最新消息</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#members">成員介紹</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#albums">專輯列表</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#events">參與活動</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>



    <!-- 內容區-->
    <div class="content-area">
        <!-- 通過 PHP 加載其他頁面內容 -->
        <?php
            include('./main.php');
            include('./about.php');  
        ?>
    </div>

    <!-- footer -->
    <footer class="footer">
        <!-- instagram -->
        <span></span>
    </footer>

    <!-- 引入 Bootstrap 5 JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
