<?php
interface IItem {
	function GetID();
	function SetID($value);
	function GetName();
	function SetName($value);
	function GetPrice();
	function SetPrice($value);
	function GetImageURL();
	function SetImageURL($value);
}
?>