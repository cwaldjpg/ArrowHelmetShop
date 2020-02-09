<?php
include_once("DataProvider.php");
class Category
{
	private $da;
	function __construct()
	{
		$this->da = new DataProvider(); 
	}
	function InsertCategory($TenLoai)
	{
		$sql="Insert into loaisanpham (TenLoai) Values('$TenLoai')";
		return $this->da->ExecuteQuery($sql);
	}
	function GetCategories()
	{
		return $this->da->FetchAll("Select * from loaisanpham");
	}
	function GetListCategories($start,$limit)
	{
		$sql="Select * from loaisanpham order by MaLoai desc limit $start,$limit";
		return $this->da->FetchAll($sql);
	}
	function GetCategoryByID($id)
	{
		$sql="Select * from loaisanpham where MaLoai='$id'";
		return $this->da->Fetch($sql);
	}
	function CountCategory()
	{
		$sql="Select MaLoai from loaisanpham";
		return $this->da->NumRows($sql);
	}
	function UpdateCategory($id, $TenLoai)
	{
		$sql="Update loaisanpham set TenLoai='$TenLoai' where MaLoai=$id";
		return $this->da->ExecuteQuery($sql);
	}
	function DeleteCategory($id)
	{
		$sql="Delete from loaisanpham where MaLoai = $id";
		return $this->da->ExecuteQuery($sql);
	}
	function __destruct()
	{
		unset($this->da);
	}
}
?>