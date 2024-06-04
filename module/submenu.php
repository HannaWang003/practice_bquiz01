<?php
include_once "../api/db.php";
?>
<form action="../api/submenu.php?id=<?= $_GET['id'] ?>" method="post">
    <h2 class="t">編輯次選單</h2>
    <hr>
    <table style="margin:auto" id="init">
        <tr>
            <td>次選單名稱</td>
            <td>次選單連結網址</td>
            <td>刪除</td>
        </tr>
        <?php
        $rows = $Menu->all(['big_id' => $_GET['id']]);
        foreach ($rows as $row) {
        ?>

        <tr>
            <td><input type="text" name="text[]" value="<?= $row['text'] ?>"></td>
            <td><input type="text" name="url[]" value="<?= $row['url'] ?>"></td>
            <td><input type="checkbox" name="del[]" value="<?= $row['id'] ?>"></td>
            <input type="hidden" name="id[]" value="<?= $row['id'] ?>">
        </tr>

        <?php
        }

        ?>
    </table>
    <div class="t">
        <input type="submit" value="修改確定"><input type="reset" value="重置"><input type="button" value="更多次選單"
            onclick="more()">
    </div>
</form>
<script>
function more() {
    let doc = `
        <tr>
        <td><input type="text" name="add_text[]" value=""></td>
        <td><input type="text" name="add_url[]" value=""></td>
    </tr>
        `
    $('#init').append(doc);
}
</script>