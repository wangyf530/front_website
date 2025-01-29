<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Responsive Toggle Content</title>
    <style>
        .about-content > div {
            display: none; /* 預設隱藏所有內容 */
        }
        .about-content > .active {
            display: block; /* 顯示目前活動內容 */
        }
        @media (max-width: 768px) {
            .about-content > div {
                display: block; /* 小螢幕顯示所有內容 */
            }
        }
    </style>
</head>
<body>
    <div class="container d-flex">
        <div class="about-menu px-3 py-5 d-none d-md-block">
            <div class="bnd my-2">
                <a href="#" class="toggle-content" data-target=".aboutBnd">BOYNEXTDOOR</a>
            </div>
            <div class="koz my-2">
                <a href="#" class="toggle-content" data-target=".aboutKoz">KOZ Entertainment</a>
            </div>
            <div class="hybe my-2">
                <a href="#" class="toggle-content" data-target=".aboutHybe">HYBE Inc.</a>
            </div>
        </div>
        <div class="w-75 bg-info about-content flex-grow-1"> 
            <div class="aboutBnd active">This is BND</div>
            <div class="aboutKoz">This is KOZ</div>
            <div class="aboutHybe">This is HYBE</div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
        $(document).ready(function () {
            $(".toggle-content").click(function (e) {
                e.preventDefault();
                const target = $(this).data("target");

                // 判斷視窗大小
                if (window.innerWidth >= 768) {
                    // 大螢幕: 隱藏所有內容並顯示目標內容
                    $(".about-content > div").removeClass("active");
                    $(target).addClass("active");
                }
            });

            // 確保在視窗縮放時，內容正確顯示
            $(window).on("resize", function () {
                if (window.innerWidth < 768) {
                    // 小螢幕: 顯示所有內容
                    $(".about-content > div").removeClass("active").show();
                } else {
                    // 大螢幕: 隱藏非活動內容
                    $(".about-content > div").hide();
                    $(".about-content > .active").show();
                }
            }).trigger("resize");
        });
    </script>
</body>
</html>
