<?php
	include 'Interface/IItem.php';
	
	class Item implements IItem {
	private $_ID;
	private $_Name;
	private $_Price;
	private $_ImageURL;
	
	public function __construct() {
		$this->_ID = NULL;
		$this->_Name = NULL;
		$this->_Price = NULL;
		$this->_ImageURL = NULL;
	}
	
	function GetID() {
		return $this->_ID;
	}
	function SetID($value) {
		$this->_ID = $value;
	}
	function GetName() {
		return $this->_Name;
	}
	function SetName($value) {
		$this->_Name = $value;
	}
	function GetPrice() {
		return $this->_Price;
	}
	function SetPrice($value) {
		$this->_Price = $value;
	}
	function GetImageURL() {
		return $this->_ImageURL;
	}
	function SetImageURL($value) {
		$this->_ImageURL = $value;
	}
}
?>