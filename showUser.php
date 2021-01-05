<?php

$qry = $database->prepare("select first_name from users");
if($qry->execute())
{
    while($row = $qry->fetch()) {
        echo "Your first name is : " . $row[0] . "<br/>";
    }
}
