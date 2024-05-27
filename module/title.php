<style>
    .module-new {
        margin: auto;
    }
</style>
<form action="../api/new-title.php" method="post" enctype="multipart/form-data">
    <div class="t">新增標題區圖片</div>
    <hr>
    <table class="module-new">
        <tr>
            <td style="text-align: end;">標題區圖片:</td>
            <td><input type="file" name="img"></td>
        </tr>
        <tr>
            <td>標題區替代文字:</td>
            <td><input type="text" name="text"></td>
        </tr>
        <tr>
            <td><input type="submit" value="新增"><input type="reset" value="重置"></td>
        </tr>
    </table>
</form>