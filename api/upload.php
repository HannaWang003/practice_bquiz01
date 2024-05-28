<?php
include_once "db.php";
$table = $_GET['do'];
$DB = ${ucfirst($table)};
$row = $DB->find($_GET['id']);
if (!empty($_FILES['img']['tmp_name'])) {
    move_uploaded_file($_FILES['img']['tmp_name'], "../img/" . $_FILES['img']['name']);
    $row['img'] = $_FILES['img']['name'];
}
$DB->save($row);
to("../back.php?do=$table");
