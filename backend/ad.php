<div class="container mx-auto">
    <div class="row">
        <?php include_once "logout.php"; ?>
    </div>
    <div class="row">
        <div class="text-center border-bottom border-dark border-3 mb-3 fs-5 fw-bold">網站標題管理</div>
        <form method="post" action="./api/edit.php">
            <table class="w-100">
                <tbody>
                    <tr class="text-center bg-secondary bg-gradient text-dark text-white">
                        <td width="86%">動態文字廣告</td>
                        <td width="7%">顯示</td>
                        <td width="7%">刪除</td>
                    </tr>
                    <?php
                    $rows = $AD->all();
                    foreach ($rows as $row) {
                    ?>
                        <tr class="text-center">
                            <td>
                                <input type="text" name="text[]" value="<?= $row['text']; ?>" style="width:90%;">
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
            <table class="w-75 mt-3 mx-auto">
                <tbody>
                    <tr>
                        <td width="200px">
                            <input type="button"
                                onclick="op('#cover','#cvr','./modal/<?= $do; ?>.php?table=<?= $do; ?>')"
                                value="新增動態文字廣告" class="btn btn-outline-dark">
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