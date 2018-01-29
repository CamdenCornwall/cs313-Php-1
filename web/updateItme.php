<?php
    session_start();
    $itemAmount = $_REQUEST["quantity"];
    settype($itemAmount, "integer");
    $_SESSION["cart"][$_REQUEST["item"] - 1]["quantity"] = $itemAmount;
?>