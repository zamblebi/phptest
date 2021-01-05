<?php 

$first_name = "Zamble";
$last_name = "Samuel";
$age = 22;

$qry = $database->prepare("insert into users (first_name, last_name, age) values (:first_name,:last_name, :age)");

$qry->bindParam(':first_name', $first_name);
$qry->bindParam(':last_name', $last_name);
$qry->bindParam(':age', $age);


$qry->execute();
