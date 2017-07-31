<?php
include 'Class/DefaultItems.php';

$defaultItems = new DefaultItems();
$object = $defaultItems->GenerateDefaultItems();

foreach($object as $o) {
	echo "Item ID :" . $o->GetID() . "<br />";
	echo "Name :" . $o->GetName() . "<br />";
	echo "Price :" . $o->GetPrice() . "<br />";
	echo "Image :" . "<img src='".$o->GetImageURL() . "' width='100' height='100' />" . "<br />";
	echo "---------------------------------------------------<br/><br/>";
}
?>