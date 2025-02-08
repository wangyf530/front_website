<div class="container mx-auto">
    <div class="row">
        <?php include_once "logout.php"; ?>
    </div>
    <div class="row">
        <div class="text-center border-bottom border-dark border-3 mb-3 fs-5 fw-bold">活動管理</div>
        <form method="post" action="./api/edit.php">
            <table class="w-100">
                <tbody>
                    <tr class="text-center bg-secondary bg-gradient text-dark text-white">
                        <td width="25%">活動縮圖</td>
                        <td width="20%">主要人物</td>
                        <td width="20%">標題</td>
                        <td width="7%">顯示</td>
                        <td width="7%">刪除</td>
                        <td width="15%"></td>
                    </tr>
                    <?php
                        $rows = $EVENT -> all();
                        foreach ($rows as $row) {
                    ?>
                    <tr class="text-center">
                        <td> 
                        <img src="./upload/<?=$row['img'];?>" class="mx-auto d-block" style="width:210px; height:90px;">   
                        </td>
                        <td> 
                            <input type="text" name="artist[]" value="<?=$row['artist'];?>">    
                        </td>
                        <td> 
                            <input type="text" name="title[]" value="<?=$row['title'];?>">    
                        </td>
                        <td>  
                            <input type="checkbox" name="sh[]" value="<?=$row['id'];?>" <?=($row['sh']==1)?'checked':'';?>>
                        </td>
                        <td>  
                            <input type="checkbox" name="del[]" value="<?=$row['id'];?>"> 
                        </td>
                        <td>  
                        <input type="button" onclick="op(&#39;#cover&#39;,&#39;#cvr&#39;,&#39;./modal/submenu.php?id=<?=$row['id'];?>&#39;)" value="編輯活動"> 
                        </td>
                        <input type="hidden" name="id[]" value="<?=$row['id'];?>">
                    </tr>
                    <?php
                        }
                    ?>
                </tbody>
            </table>
            <table style="margin-top:40px; width:70%;">
                <tbody>
                    <tr>
                        <td width="200px"><input type="button"
                                onclick="op(&#39;#cover&#39;,&#39;#cvr&#39;,&#39;./modal/<?=$do;?>.php?table=<?=$do;?>&#39;)"
                                value="新增活動"></td>
                        <td class="cent">
                            <input type="hidden" name="table" value="<?=$do;?>">
                            <input type="submit" value="修改確定">
                            <input type="reset" value="重置">
                        </td>
                    </tr>
                </tbody>
            </table>

        </form>
    </div>
</div>