<?php
//class for bookings
class Bookings{
	private $ClientName;
	private $EventName;
	private $TicketNumber;
	private $Status;
	private $ClientEmail;

function __get($name)
	{return $this->$name;}

function __set($name,$value)
	{$this->$name=$value;}

}
?>