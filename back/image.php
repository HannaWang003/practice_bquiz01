<?php
$table = $_GET['do'];
$DB = ${ucfirst($table)};
$total = $DB->count();
$div = 3;
$pages = ceil($total / $div);
$now = ($_GET['p']) ?? 1;
$start = ($now - 1) * $div;
?>
<div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
    <p class="t cent botli">校園映像資料管理</p>
    <form method="post" action="./api/edit.php?do=<?= $table ?>">
        <table width="100%">
            <tbody>
                <tr class="yel">
                    <td width="60%">校園映像資料圖片</td>
                    <td width="7%">顯示</td>
                    <td width="7%">刪除</td>
                    <td width="26%"></td>
                </tr>
                <?php
                $rows = $DB->all("limit $start,$div");
                foreach ($rows as $row) {
                ?>
                    <input type="hidden" name="id[]" value="<?= $row['id'] ?>">
                    <tr>
                        <td style="text-align:center"><img src="./img/<?= $row['img']; ?>" style="width:100px;height:68px">
                        </td>
                        <td><input type="checkbox" name="sh[]" value="<?= $row['id'] ?>" <?= ($row['sh'] == 1) ? "checked" : "" ?>></td>
                        <td><input type="checkbox" name="del[]" value="<?= $row['id'] ?>"></td>
                        <td><input type="button" value="更新圖片" onclick="op('#cover','#cvr','./module/upload.php?do=<?= $table ?>&id=<?= $row['id'] ?>')">
                        </td>
                    </tr>
                <?php
                }

                ?>
            </tbody>
        </table>
        <div class="t">
            <?php
            for ($i = 1; $i <= $pages; $i++) {
            ?>
                <a href="?do=<?= $table ?>&p=<?= $i ?>"><?= $i ?></a>
            <?php
            }
            ?>
        </div>
        <table style="margin-top:40px; width:70%;">
            <tbody>
                <tr>
                    <td width="200px"><input type="button" onclick="op('#cover','#cvr','./module/add.php?do=<?= $table ?>')" value="新增校園映像圖片">
                    </td>
                    <td class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置"></td>
                </tr>
            </tbody>
        </table>
    </form>
</div>