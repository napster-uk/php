<?php
//objects
/*
$object = new stdClass;

$object->name = ['John','Belly','Sue'];

$products=$object->name;
foreach ($products as $names){

    echo $names . '<br>';

}
*/
?>

<?php
// class person

require 'Person.php';

$person = new Person('John',20);




echo $person->sentence();

?>
