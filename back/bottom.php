<?php
$bottom = $Bottom->find(1);
?>
<div class="t">
    <div>頁尾版權資料管理</div>
    <hr>
    <form action="./api/save.php?do=<?= $_GET['do'] ?>" method="post">
        <div>
            <span style="background:#FC3;padding:10px">頁尾版權資料:</span>
            <input type="text" name="bottom" value="<?= $bottom['bottom'] ?>">
        </div>
        <br><br><br>
        <div>
            <input type="hidden" name="id" value="<?= $bottom['id'] ?>">
            <input type="submit" value="修改確定"><input type="reset" value="重置">
        </div>
    </form>
</div>