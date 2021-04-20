<?php

require_once('db.inc.php');
$shopping = new Database("elevarbetensys.se.mysql","elevarbetensys_se_in18tw","in18tw123","elevarbetensys_se_in18tw");
$shopping->create_table("shopping");

?>