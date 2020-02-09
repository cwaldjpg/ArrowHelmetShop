<?php
include_once("DataProvider.php");
class NhaSanXuat
{
	private $da;
	function __construct()
	{
		$this->da = new DataProvider(); 
	}
	function GetNSX()
	{
		$sql="Select * from nhasanxuat";
		return $this->da->FetchAll($sql);
	}
	function __destruct()
	{
		unset($this->da);
	}
}
?>