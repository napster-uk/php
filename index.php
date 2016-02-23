<?php
//objects

$object = new stdClass;

$object->name = ['John','Belly','Sue'];

$products=$object->name;
foreach ($products as $names){

    echo $names . '<br>';

}
?>