<?php
class Cart
{
	public static function IsExist($id)
	{
		return isset($_SESSION["MyCart"][$id]);
	}
	public static function InsertCart($id)
	{
		$_SESSION["MyCart"][$id] = 1;
	}
	
	public static function DeleteCart($id)
	{
		if(isset($_SESSION["MyCart"][$id]))
			unset($_SESSION["MyCart"][$id]);
	}
	
	public static function UpdateCart($id, $quantity)
	{
		if(isset($_SESSION["MyCart"][$id]))
			$_SESSION["MyCart"][$id] = $quantity;
	}
}
?>
