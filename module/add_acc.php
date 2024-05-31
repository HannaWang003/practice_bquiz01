<style>
    table {
        margin: auto;
    }
</style>
<div class="t">新增管理者帳號</div>
<hr>
<form action="../api/add_acc.php" method="post">
    <table>
        <tr>
            <td style="text-align: end;">帳號:</td>
            <td><input type="text" name="acc" id="acc"></td>
        </tr>
        <tr>
            <td style="text-align: end;">密碼:</td>
            <td><input type="password" name="pw" id="pw"></td>
        </tr>
        <tr>
            <td style="text-align: end;">確認密碼:</td>
            <td><input type="password" name="pw2" id="pw2"></td>
        </tr>
    </table>
    <div class="t"><input type="button" value="確認" onclick="chk()"><input type="reset" value="重置"></div>
</form>
<script>
    function chk() {
        let acc = $('#acc').val();
        let pw = $('#pw').val();
        let pw2 = $('#pw2').val();
        if (pw != pw2) {
            alert("輸入密碼不一致，請重新輸入");
        } else {
            $.post("../api/add_acc.php", {
                acc,
                pw
            }, function(res) {
                location.reload();
            })
        }
    }
</script>