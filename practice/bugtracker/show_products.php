<?php
// list_products.php
require_once "bootstrap.php";
$id = $argv[1];

// con Repository
//$productRepository = $entityManager->getRepository('Product');
//$products = $productRepository->findById($id);
//foreach ($products as $product) {
//    echo sprintf("-%s\n", $product->getName());
//};

// con entityManager
$product = $entityManager->find('Product', $id);
echo (is_object($product)) ? $product->getName() : "No existe";

?>