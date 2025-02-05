<div class="container mx-auto">
    <div class="row">
        <?php include_once "logout.php";?>
    </div>
    <div class="row">
        <div class="text-center border-bottom border-dark border-3 mb-3 fs-5 fw-bold">網站標題管理</div>
        <form method="post" action="./api/edit.php">
            <table class="w-100">
                <tbody>
                    <tr class="text-center bg-secondary bg-gradient text-dark text-white">
                        <td width="30%">LOGO圖片</td>
                        <td width="40%">替代文字</td>
                        <td width="7%">顯示</td>
                        <td width="7%">刪除</td>
                        <td></td>
                    </tr>
                    <?php
                        $rows = $TITLE -> all();
                        foreach ($rows as $row) {
                    ?>
                    <tr class="text-center">
                        <td> 
                            <img src="./upload/<?=$row['img'];?>" class="mx-auto d-block" style="width:60px; height:60px;"> 
                        </td>
                        <td> 
                            <input type="text" name="text[]" value="<?=$row['text'];?>" class="form-control mx-auto">    
                        </td>
                        <td>  
                            <input type="radio" name="sh[]" value="<?=$row['id'];?>" <?=($row['sh']==1)?'checked':'';?> class="mx-auto d-block">
                        </td>
                        <td>  
                            <input type="checkbox" name="del[]" value="<?=$row['id'];?>" class="mx-auto d-block"> 
                        </td>
                        <td>
                            <input type="button" onclick="op('#cover','#cvr','./modal/upload_<?=$do;?>.php?id=<?=$row['id'];?>&table=<?=$do;?>')" value="更新圖片" class="btn btn-outline-primary btn-sm">
                        </td>
                        <input type="hidden" name="id[]" value="<?=$row['id'];?>">
                    </tr>
                    <?php
                        }
                    ?>
                </tbody>
            </table>

            <table class="w-75 mt-3 mx-auto">
                <tbody>
                    <tr>
                        <td class="w-25 text-center">
                            <input type="button" onclick="op('#cover','#cvr','./modal/<?=$do;?>.php?table=<?=$do;?>')" value="新增網站標題圖片" class="btn btn-outline-dark">
                        </td>
                        <td class="w-75 text-center mx-auto">
                            <input type="hidden" name="table" value="<?=$do;?>">
                            <input type="submit" value="修改確定" class="btn btn-outline-dark">
                            <input type="reset" value="重置" class="btn btn-outline-dark">
                        </td>
                    </tr>
                </tbody>
            </table>
        </form>
    </div>
</div>
