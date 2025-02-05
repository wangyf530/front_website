<div class="container mx-auto">
    <div class="row">
        <?php include_once "logout.php"; ?>
    </div>
    <div class="row">
        <div class="text-center border-bottom border-dark border-3 mb-3 fs-5 fw-bold">最新消息管理</div>
        <form method="post" action="./api/edit.php">
            <table class="w-100">
                <tbody>
                    <tr class="text-center bg-secondary bg-gradient text-dark text-white">
                        <td width="30%">標題</td>
                        <td width="60%">內容</td>
                        <td width="5%">顯示</td>
                        <td width="5%">刪除</td>
                    </tr>
                    <?php
                    $div = 10;
                    $total = $NEWS->count();
                    $pages = ceil($total / $div);
                    $now = $_GET['p'] ?? 1;
                    $start = ($now - 1) * $div;
                    $rows = $NEWS->all(" limit $start,$div");
                    foreach ($rows as $row) {
                    ?>
                        <tr class="text-center">
                            <td>
                                <!-- 不能斷行要不然會有空格 -->
                                <textarea name="title[]" style="width:95%;height:60px"><?= $row['title']; ?></textarea>
                            </td>
                            <td>
                                <!-- 不能斷行要不然會有空格 -->
                                <textarea name="detail[]" style="width:95%;height:60px"><?= $row['detail']; ?></textarea>
                            </td>
                            <td>
                                <input type="checkbox" name="sh[]" value="<?= $row['id']; ?>" <?= ($row['sh'] == 1) ? 'checked' : ''; ?>>
                            </td>
                            <td>
                                <input type="checkbox" name="del[]" value="<?= $row['id']; ?>">
                            </td>
                            <input type="hidden" name="id[]" value="<?= $row['id']; ?>">
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
            <div class="text-center my-3">
                <?php
                if (($now - 1) > 0) {
                    $prev = $now - 1;
                    echo "<a href='?do=$do&p=$prev'> < </a>";
                }
                for ($i = 1; $i <= $pages; $i++) {
                    echo "<a href='?do=$do&p=$i' style='font-size:16px;padding:0px 5px;'>";
                    echo $i;
                    echo "</a>";
                }

                if (($now + 1) <= $pages) {
                    $next = $now + 1;
                    echo "<a href='?do=$do&p=$next'> > </a>";
                }
                ?>
            </div>

            <table class="w-75 mt-3 mx-auto">
                <tbody>
                    <tr>
                        <td class="w-25 text-center">
                        <input type="button"
                                onclick="op('#cover','#cvr','./modal/<?= $do; ?>.php?table=<?= $do; ?>')"
                                value="新增最新消息資料" class="btn btn-outline-dark">
                        </td>
                        <td class="w-75 text-center mx-auto">
                            <input type="hidden" name="table" value="<?= $do; ?>">
                            <input type="submit" value="修改確定" class="btn btn-outline-dark">
                            <input type="reset" value="重置" class="btn btn-outline-dark">
                        </td>
                    </tr>
                </tbody>
            </table>
        </form>
    </div>
</div>