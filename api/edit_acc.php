<?php
include_once "db.php";
$table = $_GET['do'];
$DB = ${ucfirst($table)};
foreach ($_POST['id'] as $key => $id) {
    if (isset($_POST['del']) && in_array($id, $_POST['del'])) {
        $DB->del($id);
    } else {
        $row = $DB->find($id);
        $row['acc'] = $_POST['acc'][$key];
        $row['pw'] = $_POST['pw'][$key];
        $DB->save($row);
    }
}
to("../back.php?do=admin");
