<!DOCTYPE html>
<html lang="zh-TW">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>door售票網站</title>
    <!-- 引入 Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- 引入 jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <!-- 導航欄 -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container flex-row flex-wrap">
            <!-- logo -->
            <div class="d-flex logoContainer">
                <a class="navbar-brand image-logo" href="#">
                    <img src="./icon/house.png" alt="DoorTicket Logo" class="navbar-brand" style="max-height:10vh;">
                </a>
            </div>
            <!--  -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li id="activity" class="nav-item">
                        <a class="nav-link active" href="#about">節目資訊</a>
                    </li>
                    <li id="news" class="nav-item">
                        <a class="nav-link" href="#news">最新消息</a>
                    </li>
                    <li id="faq" class="nav-item">
                        <a class="nav-link" href="#faq">常見問題</a>
                    </li>
                    <li id="orders" class="nav-item">
                        <a class="nav-link" href="#orders">訂單查詢</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#events">參與活動</a>
                    </li>
                    <li class="searchBox">
                        <div class="input-box">
                            <input type="text" class="search-input" id="txt-search" placeholder="搜索節目">
                        </div>
                        <button type="button" class="search-btn" data-href="/activity">
                            <svg width="1.5em" height="1.5em" viewBox="0 0 24 24" aria-hidden="true" focusable="false">
                            </svg>
                        </button>

                        <form url="/events.php" class="navbar-form navbar-left" action="/events" accept-charset="UTF-8" method="get">
                            <input name="utf8" type="hidden" value="✓">
                            <div class="form-group">
                                <input type="text" name="search" id="search" placeholder="搜尋活動" class="form-control">
                                <input type="hidden" name="start_at" id="start_at" value="2025/01/26">
                                <i class="fa fa-search"></i>
                            </div>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </nav>







    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.bundle.min.js" integrity="sha512-7Pi/otdlbbCR+LnW+F7PwFcSDJOuUJB3OxtEHbg4vSMvzvJjde4Po1v4BR9Gdc9aXNUNFVUY+SK51wWT8WF0Gg==" crossorigin="anonymous" referrerpolicy="no-referrer">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer">
    </script>
    <script>

    </script>
</body>

</html>