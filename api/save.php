<?php
include_once "db.php";
//total
//bottom
$DB = ${ucfirst($_GET['do'])};
$DB->save($_POST);
to("../back.php?do={$_GET['do']}");
