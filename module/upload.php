<style>
.module {
    margin: auto;
}
</style>
<form action="../api/upload.php?do=<?= $_GET['do'] ?>&id=<?= $_GET['id'] ?>" method="post"
    enctype="multipart/form-data">
    <div class="t">
        <?php
        switch ($_GET['do']) {
            case "title":
                echo "更新網站標題圖片";
                break;
        }
        ?>
    </div>
    <hr>
    <table class="module">
        <tr>
            <td style="text-align: end;">標題區圖片:</td>
            <td><input type="file" name="img"></td>
        </tr>
        <tr>
            <td><input type="submit" value="更新"><input type="reset" value="重置"></td>
        </tr>
    </table>
</form>