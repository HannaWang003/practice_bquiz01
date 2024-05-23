<?php
$total = $Total->find(1);
?>
<div class="t">
    <div>進站總人數管理</div>
    <hr>
    <form action="./api/save.php?do=<?= $_GET['do'] ?>" method="post">
        <div>
            <span style="background:#FC3;padding:10px">進站總人數:</span>
            <input type="text" name="total" value=<?= $total['total'] ?>>
        </div>
        <br><br><br>
        <div>
            <input type="hidden" name="id" value="<?= $total['id'] ?>">
            <input type="submit" value="修改確定"><input type="reset" value="重置">
        </div>
    </form>
</div>