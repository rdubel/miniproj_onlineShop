<?php
require "config.php";
$id = $_POST["product"];
$btn = $_POST["btn"];
$sql = "SELECT quantity FROM contains WHERE id_product = $id";
$res = $mysql->query($sql);
$qty = $res->fetch_assoc()["quantity"];

if ($qty != null) {
    if ($btn == "plus") {
        $qty += 1;
        $sql = "UPDATE contains SET quantity = $qty WHERE id_product = $id";
        $mysql->query($sql);
    }
    elseif ($btn == "minus") {
        $qty -= 1;
        $sql = "UPDATE contains SET quantity = $qty WHERE id_product = $id";
        $mysql->query($sql);
    }
}
?>
