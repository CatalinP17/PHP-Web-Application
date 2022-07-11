<?php
//class for events
class Events{
	private $eventName;
	private $date;
	private $time;
	private $duration;
	private $location;
	private $AvailableTickets;
	private $Price; 

function __get($name)
	{
		return $this->$name;
	}

	function __set($name,$value)
	{
		$this->$name=$value;
	}

}
?>