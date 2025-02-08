<h3 class="cent">新增活動</h3>
<hr>
<form action="api/insert.php" method="post" enctype="multipart/form-data">
    <table style="margin:auto;">
    <tr>
            <td>活動圖片：</td>
            <td><input type="file" name="img" id="img"></td>
        </tr>
        <tr>
            <td>主要人物：</td>
            <td><input type="text" name="artist" id="artist"></td>
        </tr>
        <tr>
            <td>活動名稱：</td>
            <td><input type="text" name="title" id="title"></td>
        </tr>
        <tr>
            <td>售票日：</td>
            <td><input type="date" name="ticket_date" id="ticket_date"></td>
        </tr>
        <tr>
            <td>開演日：</td>
            <td><input type="date" name="ondate" id="ondate"></td>
        </tr>
        <tr>
            <td>場地：</td>
            <td><input type="text" name="place" id="place"></td>
        </tr>
    </table>
    <div class="cent">
        <input type="hidden" name="table" value="<?=$_GET['table'];?>">
        <input type="submit" value="新增">
        <input type="reset" value="重置">
    </div>
</form>