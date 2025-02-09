<?php 
include_once "../api/db.php"; 
$row = $EVENT->find(['id' => $_GET['id']]);
?>
<h3 class="cent">編輯活動</h3>
<hr>
<form action="api/edit_event.php" method="post" enctype="multipart/form-data">
    <table class="m-auto">
        <tr>
            <td></td>
            <td class='m-auto text-center'>

                <img src="./upload/<?=$row['img'];?>" alt="<?=$row['img'];?>" width="300px">
            </td>
        </tr>
        <tr>
            <td>縮略圖：</td>
            <td><input type="file" name="img" id="img"></td>
        </tr>
        <tr>
            <td>主要人物：</td>
            <td><input type="text" name="artist" id="artist" value="<?=$row['artist'];?>"></td>
        </tr>
        <tr>
            <td>標題：</td>
            <td><input type="text" name="title" id="title" value="<?=$row['title'];?>"></td>
        </tr>
        <tr>
            <td>售票日：</td>
            <td><input type="date" name="ticket_date" id="ticket_date" value="<?=$row['ticket_date'];?>"></td>
        </tr>
        <tr>
            <td>開演日：</td>
            <td><input type="date" name="ondate" id="ondate" value="<?=$row['ondate'];?>"></td>
        </tr>
        <tr>
            <td>地點：</td>
            <td><input type="text" name="place" id="place" value="<?=$row['place'];?>"></td>
        </tr>
    </table>
    <div class="text-center mt-3">
        <input type="hidden" name="id" value="<?=$_GET['id'];?>">
        <input type="submit" value="修改確定">
        <input type="reset" value="重置">
    </div>
</form>