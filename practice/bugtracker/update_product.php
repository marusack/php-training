<?php
//update_product.php
require_once "bootstrap.php";

$id = $argv[1];
$newName = $argv[2];

$product = $entityManager->find('Product', $id);

if ($product){
    $product->setName($newName);
    $entityManager->persist($product);
    $entityManager->flush();
} else {
    echo "Product does not exist";
}

?>