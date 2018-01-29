<?php
// connect to database
include 'database.php';
 
// include objects
include_once "product.php";
include_once "product_image.php";
include_once "cart_item.php";
 
// get database connection
$database = new Database();
$db = $database->getConnection();
 
// initialize objects
$product = new Product($db);
$product_image = new ProductImage($db);
$cart_item = new CartItem($db);

// set page title
$page_title="Products";
 
// page header html
include 'layout_head.php';
 
// contents will be here 
 
// layout footer code
include 'layout_foot.php';
?>