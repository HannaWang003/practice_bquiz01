<?php
$table = $_GET['do'];
$DB = ${ucfirst($table)};
?>
<div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
    <p class="t cent botli">選單管理</p>
    <form method="post" action="./api/edit.php?do=<?= $table ?>">
        <table width="100%">
            <tbody>
                <tr class="yel">
                    <td width="35%">主選單名稱</td>
                    <td width="35%">選單連結網址</td>
                    <td width="10%">次選單數</td>
                    <td width="10%">顯示</td>
                    <td width="10%">刪除</td>
                    <td></td>
                </tr>
                <?php
                $rows = $DB->all(['big_id' => 0]);
                foreach ($rows as $row) {
                ?>
                    <input type="hidden" name="id[]" value="<?= $row['id'] ?>">
                    <tr>
                        <td><input type="text" name="text[]" value="<?= $row['text'] ?>" style="width:90%"></td>
                        <td><input type="text" name="url[]" value="<?= $row['url'] ?>" style="width:90%"></td>
                        <td></td>
                        <td><input type="checkbox" name="sh[]" value="<?= $row['id'] ?>" <?= ($row['sh'] == 1) ? "checked" : "" ?>></td>
                        <td><input type="checkbox" name="del[]" value="<?= $row['id'] ?>"></td>
                        <td><input type="button" value="編緝次選單" onclick="op('#cover','#cvr','./module/submenu.php?do=<?= $table ?>&id=<?= $row['id'] ?>')">
                        </td>
                    </tr>
                <?php
                }

                ?>
            </tbody>
        </table>
        <table style="margin-top:40px; width:70%;">
            <tbody>
                <tr>
                    <td width="200px"><input type="button" onclick="op('#cover','#cvr','./module/menu.php?do=<?= $table ?>')" value="新增主選單">
                    </td>
                    <td class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置"></td>
                </tr>
            </tbody>
        </table>
    </form>
</div>