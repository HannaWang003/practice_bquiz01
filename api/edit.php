<?php
include_once "db.php";
$table = $_GET['do'];
$DB = ${ucfirst($table)};
foreach ($_POST['id'] as $key => $id) {
    if (isset($_POST['del']) && in_array($id, $_POST['del'])) {
        $DB->del($id);
    } else {
        $row = $DB->find($id);
        if (in_array($id, $_POST['sh'])) {
            $row['sh'] = 1;
        } else {
            $row['sh'] = 0;
        }
        $row['text'] = $_POST['text'][$key];
        $DB->save($row);
    }
}
to("../back.php?do=$table");
