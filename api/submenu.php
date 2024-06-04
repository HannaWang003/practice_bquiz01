<?php
include_once "db.php";
if (isset($_POST['id'])) {
    foreach ($_POST['id'] as $key => $id) {
        if (isset($_POST['del']) && in_array($id, $_POST['del'])) {
            $Menu->del($id);
        } else {
            $row = $Menu->find($id);
            dd($row);
            $row['text'] = $_POST['text'][$key];
            $row['url'] = $_POST['url'][$key];
            $Menu->save($row);
        }
    }
}
if (isset($_POST['add_text'])) {
    foreach ($_POST['add_text'] as $key => $text) {
        $Menu->save(['text' => $text, 'url' => $_POST['add_url'][$key], 'big_id' => $_GET['id']]);
    }
}
to('../back.php?do=menu');
