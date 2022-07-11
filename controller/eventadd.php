<?php
	require_once "../model/events.php";
	require_once "../model/dbAccess.php";

if (isset($_REQUEST["eventadd"]))
{
	$eventName = $_REQUEST["eventName"];
	$date = $_REQUEST["date"];
	$time = $_REQUEST["time"];
	$duration = $_REQUEST["duration"];
	$location = $_REQUEST["location"];
	$AvailableTickets = $_REQUEST["AvailableTickets"];
	$Price = $_REQUEST["Price"];


	$newEvent = new Event();
	
	$newEvent->eventName = $eventName;
	$newEvent->date = $date;
	$newEvent->time = $time;
	$newEvent->duration = $duration;
	$newEvent->location = $location;
	$newEvent->AvailableTickets = $AvailableTickets;
	$newEvent->Price = $Price;

	newEvent($newEvent);
}


if (isset($_POST["Log_In"]))
{
	$username = $_REQUEST["userName"];
	$password = $_REQUEST["password"];

	if ($username == "alpaca" AND $password == "eesoocio")
	{
		require_once "../view/eventadd_view.php";
	}
}


	//controlling part
else require_once "../view/eventlogin_view.php";
?>