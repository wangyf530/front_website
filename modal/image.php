<h3 class="cent">新增動態文字廣告管理</h3>
<hr>
<form action="api/insert.php" method="post" enctype="multipart/form-data">
    <table style="margin:auto;">
        <tr>
            <td>校園映像圖片：</td>
            <td><input type="file" name="img" id="img"></td>
        </tr>
    </table>
    <div class="cent">
        <input type="hidden" name="table" value="<?=$_GET['table'];?>">
        <input type="submit" value="新增">
        <input type="reset" value="重置">
    </div>
</form>