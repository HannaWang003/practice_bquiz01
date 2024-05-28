<style>
.module {
    margin: auto;
}
</style>
<?php
$table = $_GET['do'];
?>
<form action="../api/add.php?do=<?= $table ?>" method="post" enctype="multipart/form-data">
    <div class="t">
        <?php
        switch ($table) {
            case "title":
                echo "新增標題區圖片";
                break;
            case "ad":
                echo "新增動態文字廣告";
                break;
            case "mvim":
                echo "新增動畫圖片:";
                break;
        }
        ?>
    </div>
    <hr>
    <table class="module">
        <tr>
            <?php
            switch ($table) {
                case "title":
            ?>
            <td style="text-align: end;">標題區圖片:</td>
            <td><input type="file" name="img"></td>
            <?php
                    break;
                case "mvim":
                ?>
            <td style="text-align: end;">動畫圖片:</td>
            <td><input type="file" name="img"></td>
            <?php
            }
            ?>
        </tr>
        <tr>
            <td>
                <?php
                switch ($table) {
                    case "title":
                        echo "標題區替代文字:";
                        break;
                    case "ad":
                        echo "動態文字廣告:";
                        break;
                }
                ?>
            </td>
            <td>
                <?php
                switch ($table) {
                    case "title":
                    case "ad":
                ?>
                <input type="text" name="text">
                <?php
                }

                ?>
            </td>
        </tr>
        <tr>
            <td><input type="submit" value="新增"><input type="reset" value="重置"></td>
        </tr>
    </table>
</form>