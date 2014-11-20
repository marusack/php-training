<?php

include './bootstrap.php';
require './lib/fileToArray1.php';
$input = fileToArray('./lib/provinces.txt');
if (!empty($input)){
    foreach ($input as $provinceName => $cities){
        $province = $entityManager->getRepository("Province")->findOneBy(array("name" => $provinceName));
                if(is_null($province)){
                    $province = new Province();
                    $province->setName($provinceName);
                }
                foreach ($cities as $cityName){
                    $city = new City();
                    $city->setName($cityName);
                    $city->setProvince($province);
                    
                    $province->getCities()->add($city);
                    $entityManager->persist($city);
                }
                $entityManager->persist($province);
    }
    $entityManager->flush();
    echo "Seems we save them";
}
?>

