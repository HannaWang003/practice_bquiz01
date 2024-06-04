<form action="../api/menu.php" method="post">
    <h2 class="t">新增主選單</h2>
    <hr>
    <table style="margin:auto">
        <tr>
            <td>主選單名稱</td>
            <td>主選單連結網址</td>
        </tr>
        <tr id="init">
            <td><input type="text" name="text" value=""></td>
            <td><input type="text" name="url" value=""></td>
        </tr>
        <tr>
            <td colspan="3" style="text-align:center">
                <input type="submit" value="確定"><input type="reset" value="重置">
            </td>
        </tr>
    </table>
</form>