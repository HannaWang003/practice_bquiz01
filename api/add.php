<?php
include_once "db.php";
$table = $_GET['do'];
$DB = ${ucfirst($table)};
if (!empty($_FILES['img']['tmp_name'])) {
    move_uploaded_file($_FILES['img']['tmp_name'], "../img/" . $_FILES['img']['name']);
    $_POST['img'] = $_FILES['img']['name'];
}
$DB->save($_POST);
to("../back.php?do=$table");
