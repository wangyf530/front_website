<?php include_once "api/db.php";
?>
<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <title>Door售票網</title>
    <!-- 引入 Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- 引入 jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href="./css/css.css" rel="stylesheet" type="text/css">
    <script src="./js/js.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
</head>

<body>

    <!-- nav -->
    <nav class="navbar navbar-expand-sm  sticky-top bg-light navbar-light">
        <div class="container-fluid">
            <a class="navbar-brand image-logo" href="index.php">
                <img src="./upload/<?= $TITLE->find(['sh' => 1])['img']; ?>" alt="icon" class="header-logo" style="max-height: 5vh;">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <?php
                    $mains = $MENU->all(['sh' => 1, 'main_id' => 0]);
                    foreach ($mains as $main) {
                        echo "<li class='nav-item'>";
                        echo "<a class='nav-link' href='{$main['href']}'>";
                        echo $main['text'];
                        echo "</a>";
                        echo "</li>";
                    }
                    ?>
                </ul>
            </div>
        </div>
    </nav>

    <!--主選單-->
    <div class="container-fluid">
        <div class='row'>
            <!-- 主頁面 -->
            <?php
            $do = $_GET['do'] ?? 'main';
            $file = "./front/{$do}.php";

            if (file_exists($file)) {
                include $file;
            } else {
                include "./front/main.php";
            }
            ?>
        </div>


        <div style="clear:both;"></div>


        <!-- footer -->
        <div class="container-fluid">
            <div class="row">
                <span class="col-12 text-center bg-info" style="line-height:123px;">
                    <?= $BOTTOM->find(1)['bottom']; ?>
                </span>
            </div>
        </div>

    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.bundle.min.js" integrity="sha512-7Pi/otdlbbCR+LnW+F7PwFcSDJOuUJB3OxtEHbg4vSMvzvJjde4Po1v4BR9Gdc9aXNUNFVUY+SK51wWT8WF0Gg==" crossorigin="anonymous" referrerpolicy="no-referrer">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer">
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
</body>

</html>