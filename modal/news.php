<h3 class="text-center my-3">新增最新消息資料</h3>
<hr>
<form action="api/insert.php" method="post" enctype="multipart/form-data">
    <table class="m-auto">
        <tr>
            <td>標題：</td>
            <td><textarea name="title" style="width:300px"></textarea></td>
        </tr>
        <tr>
            <td>內容：</td>
            <td><textarea name="detail" style="width:300px"></textarea></td>
        </tr>
    </table>
    <div class="text-center mt-3">
        <input type="hidden" name="table" value="<?=$_GET['table'];?>">
        <input type="submit" value="新增">
        <input type="reset" value="重置">
    </div>
</form>