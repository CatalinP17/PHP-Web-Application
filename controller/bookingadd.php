<?php
	require_once "../model/bookings.php";
	require_once "../model/dbAccess.php";

if (isset($_REQUEST["bookingadd"]))
{
	$ClientName = $_REQUEST["ClientName"];
	$EventName = $_REQUEST["EventName"];
	$TicketNumber = $_REQUEST["TicketNumber"];
	$Status = $_REQUEST["Status"];
	$ClientEmail = $_REQUEST["ClientEmail"];
	

	$newBooking = new Bookings();
	//$newBooking->BookingId = $BookingId;
	$newBooking->ClientName = $ClientName;
	$newBooking->EventName = $EventName;
	//change bottom two to be set 
	$newBooking->TicketNumber = $TicketNumber;
	$newBooking->Status = $Status;
	//
	$newBooking->ClientEmail = $ClientEmail;

	newBooking($newBooking);
}

	//controlling part
require_once "../view/bookingadd_view.php";
?>