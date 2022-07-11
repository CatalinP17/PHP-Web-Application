<?php
require_once "../model/events.php";
require_once "../model/dbAccess.php";?>
<!--menubar/banner located in cheeselist_view.php -->
<?php
session_start(); 
if (!isset($_SESSION["eventbasket"]))
{
	$_SESSION["eventbasket"] = [];	// If we haven't set our variable before, create an empty basket for the user.
}


//check le basket and get products here (adding a basket link to the view )
if(isset($_REQUEST["eventbasketadd"]))
{
	$ebasket = new Events();

	$ebasket->eventName =$_REQUEST["eventName"];
	$ebasket->date =$_REQUEST["date"];
	$ebasket->time =$_REQUEST["time"];
	$ebasket->duration =$_REQUEST["duration"];
	$ebasket->location =$_REQUEST["location"];
	$ebasket->AvailableTickets =$_REQUEST["AvailableTickets"];
	$ebasket->Price =$_REQUEST["Price"];


	$_SESSION["eventbasket"][] = $ebasket;
}


if (isset($_REQUEST["searchbn"]) && $_REQUEST["searchbn"] != "")
{$listOfEvents = getEventByName($_REQUEST["searchbn"]);}

else if (isset($_REQUEST["searchdate"]) && $_REQUEST["searchdate"] != "")  
{$listOfEvents = getEventByDate($_REQUEST["searchdate"]);}

else if (isset($_REQUEST["searchtime"]) && $_REQUEST["searchtime"] != "")  
{$listOfEvents = getEventByTime($_REQUEST["searchtime"]);}

else if (isset($_REQUEST["searchduration"]) && $_REQUEST["searchduration"] != "")  
{$listOfEvents = getEventByDuration($_REQUEST["searchduration"]);}

else if (isset($_REQUEST["searchlocation"]) && $_REQUEST["searchlocation"] != "")  
{$listOfEvents = getEventByLocation($_REQUEST["searchlocation"]);}

else if (isset($_REQUEST["searchprice"]) && $_REQUEST["searchprice"] != "")  
{$listOfEvents = getEventByPrice($_REQUEST["searchprice"]);}

else  
{$listOfEvents = getAllEvents();} 

//controlling part
$eventbasket = $_SESSION["eventbasket"];
require_once "../view/events_view.php";
?>