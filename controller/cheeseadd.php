<?php
	require_once "../model/cheese.php";
	require_once "../model/dbAccess.php";

if (isset($_REQUEST["cheeseadd"]))
{
	$cheeseName = $_REQUEST["cheeseName"];
	$texture = $_REQUEST["texture"];
	$country = $_REQUEST["country"];
	$strength = $_REQUEST["strength"];
	$price = $_REQUEST["price"];


	$newCheese = new Cheese();
	
	$newCheese->cheeseName = $cheeseName;
	$newCheese->texture = $texture;
	$newCheese->country = $country;
	$newCheese->strength = $strength;
	$newCheese->price = $price;

	newCheese($newCheese);
}


if (isset($_POST["Log_In"]))
{
	$username = $_REQUEST["userName"];
	$password = $_REQUEST["password"];

	if ($username == "alpaca" AND $password == "eesoocio")
	{
		require_once "../view/cheeseadd_view.php";
	}
}

	//controlling part
else require_once "../view/cheeselogin_view.php";
?>