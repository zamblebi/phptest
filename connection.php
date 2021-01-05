<?php
try{
    $user = 'root';
    $pass = '';
    $database = new PDO('mysql:host=localhost;dbname=test', $user, $pass);
}catch(PDOException $e)
{
    print "Error !: " . $e . "<br/>";
    die();
}