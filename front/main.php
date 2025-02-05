<style>
    * {
        box-sizing: border-box;
    }

    #altt {
        position: absolute;
        width: 350px;
        min-height: 100px;
        background-color: rgb(255, 255, 204);
        z-index: 99;
        display: none;
        padding: 5px;
        border: 3px double rgb(255, 153, 0);
        word-wrap: break-word;
        /* 讓長字串換行 */
        white-space: pre-wrap;
        /* 保留換行符號並自動換行 */
    }

    .limited-text {
        word-wrap: break-word;
        /* 讓長單字換行 */
        overflow-wrap: break-word;
        /* 確保內容換行 */
        white-space: normal;
        /* 允許換行 */
        max-width: 100%;
    }
</style>

<div class="container-fluid">
    <div class="row">
        <div class="col">
            <marquee scrolldelay="120" direction="left" style="width:100%; height:40px;">
                <?php
                $ads = $AD->all(['sh' => 1]);
                foreach ($ads as $ad) {
                    echo $ad['text'];
                    echo str_repeat("&nbsp", 4);
                }
                ?>
            </marquee>
        </div>
    </div>

    <div class="row">
        <!-- carousel -->
        <div id="demo" class="owl-carousel owl-theme">
            <!-- The slideshow/carousel -->
            <?php
            $events = $EVENT->all(['sh' => 1]);
            $idx = 0;
            foreach ($events as $event) {
                echo "<div class='item' style='width:700px; height:300px; overflow:hidden'>";
                echo "<img src='./upload/{$event['img']}' alt='pic' style='width:700px; height:300px;'>";
                echo "</div>";
            }
            ?>
        </div>
    </div>
</div>

<div class="container" style="background:#eee">
    <div class="row mx-5">
        <div class="fs-4 fw-bold border-bottom border-2 my-3">最新消息區
            <!-- 顯示more -->
            <a href='index.php?do=news' style='float:right; font-size:14px; position:bottom;'> MORE... </a>
        </div>
        <!-- 最新消息列表 -->
        <div class="col-12">
            <ul class="news d-flex flex-wrap flex-coloumn" style="list-style-type:disc; list-style-position:inside;">
                <?php
                $news = $NEWS->all(['sh' => 1], " limit 6");
                foreach ($news as $list) {
                    echo "<li class='col-lg-6 col-md-6 col-sm-12 limited-text pe-2 mb-3'>";
                    // echo dd($list['title']);
                    echo "<span>" . htmlspecialchars($list['title']) . "</span>";
                    echo "<span class='all' style='display:none'>";
                    echo $list['title'];
                    echo "</span>";
                    echo "</li>";
                }
                ?>
            </ul>
        </div>
    </div>
</div>

<!-- 彈出視窗 -->
<div id="altt"></div>


<!-- 活動列表 -->
<div class="container">
    <div class="row mx-5">
        <div class="fs-4 fw-bold border-bottom border-2 my-3">活動資訊
            <a href='index.php?do=events' style='float:right; font-size:14px; position:bottom;'> MORE... </a>
        </div>
        <!-- 活動列表 -->
        <div class="col-12">
            <ul class="news d-flex flex-wrap" style="list-style-type:decimal;">
                <?php
                $events = $EVENT->all(['sh' => 1], " limit 6");
                foreach ($events as $event):
                ?>
                    <div class='col-lg-4 col-md-6 col-sm-12 pe-2 mb-3 text-center'>
                        <div class="">
                            <img src="./upload/<?= $event['img']; ?>" class="mx-auto d-block" style="width:80%;">
                        </div>
                        <div class=""><?=$event['ondate'];?></div>
                        <div class="fw-bold"><?=$event['title'];?></div>
                    </div>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>


<script>
    $(".news li").hover(
        function(event) {
            let content = $(this).children(".all").html(); // 獲取隱藏的文字
            $("#altt").html("<pre>" + content + "</pre>"); // 顯示文字
            $("#altt").css({
                "top": event.pageY + 10 + "px", // Y 軸位置 (避免覆蓋)
                "left": event.pageX + 5 + "px", // X 軸位置 (在旁邊)
                "display": "block"
            });
        },
        function() {
            $("#altt").hide(); // 滑鼠離開時隱藏
        }
    );

    $(document).ready(function() {
        $('.owl-carousel').owlCarousel({
            center: true,
            loop: true,
            margin: 10,
            autoWidth: true,
            autoplay: true,
            autoplayTimeout: 3000,
            autoplayHoverPause: true,
            nav: true,
            dots: false
        })
    })
</script>
</div>
</div>