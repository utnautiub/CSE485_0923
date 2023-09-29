<?php
include "../../connect/queryMySQL.php";
$mysql = new QueryMySQL();
$id = $_GET['id'];
$result =  $mysql->delete("delete from users where userid = $id");
if(!$result){
    $message = "success";
    $type="success";
}
else{
    $message = "falid";
    $type = "danger";
}
header("location:../../index?message=$message&type=$type");
?>