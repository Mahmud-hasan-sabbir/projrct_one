<?php
require_once 'vendor/autoload.php';
use APP\classes\Product;



if ($_GET['page']=='home')
{
    include 'pages/home.php';
}elseif ($_GET['page'] == 'about')
{
    include 'pages/about.php';
}elseif ($_GET['page'] == 'product')
{
    $products = new Product();
    $allProducts = $products->addProduct();
    include 'pages/product.php';
}


