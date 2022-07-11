<?php
require_once "../model/cheese.php";
require_once "../model/dbAccess.php";?>
<!--menubar/banner located in cheeselist_view.php -->
<?php
session_start(); 
if (!isset($_SESSION["basket"]))
{
	$_SESSION["basket"] = [];	// If we haven't set our variable before, create an empty basket for the user.
}


//check le basket and get products here (adding a basket link to the view )
if(isset($_REQUEST["basketadd"]))
{
	$samplebasket = new Cheese();

	$samplebasket->cheeseName =$_REQUEST["cheeseName"];
	$samplebasket->texture =$_REQUEST["texture"];
	$samplebasket->country =$_REQUEST["country"];
	$samplebasket->strength =$_REQUEST["strength"];
	$samplebasket->price =$_REQUEST["price"];

	$_SESSION["basket"][] = $samplebasket;
}


if (isset($_REQUEST["searchbn"]) && $_REQUEST["searchbn"] != "")
{$listOfCheeses = getCheeseByName($_REQUEST["searchbn"]);}

else if (isset($_REQUEST["searchtexture"]) && $_REQUEST["searchtexture"] != "")  
{$listOfCheeses = getCheeseByTexture($_REQUEST["searchtexture"]);}

else if (isset($_REQUEST["searchcountry"]) && $_REQUEST["searchcountry"] != "")  
{$listOfCheeses = getCheeseByCountry($_REQUEST["searchcountry"]);}

else if (isset($_REQUEST["searchstrength"]) && $_REQUEST["searchstrength"] != "")  
{$listOfCheeses = getCheeseByStrength($_REQUEST["searchstrength"]);}

else if (isset($_REQUEST["searchprice"]) && $_REQUEST["searchprice"] != "")  
{$listOfCheeses = getCheeseByPrice($_REQUEST["searchprice"]);}

else  
{$listOfCheeses = getAllCheeses();} 

//controlling part
$basket = $_SESSION["basket"];
require_once "../view/cheeselist_view.php";
?>
