<?php
include 'ItemValue.php';
class DefaultItems {
	function GenerateDefaultItems() {		
		$object = array();
		
		if (($handle = fopen("Resources/DefaultItems.csv", "r")) !== FALSE) {
			while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
				$item = new Item();
				$item->setID($data[0]);
				$item->setName($data[1]);
				$item->setPrice($data[2]);
				$item->setImageUrl($data[3]);
				
				array_push($object, $item);
			}
			fclose($handle);
		}
		return $object;
	}
}

?>