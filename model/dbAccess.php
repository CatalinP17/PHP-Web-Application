<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//these can be put directly into the PDO object
//link to db login = http://kunet.uk/kudbmanage
//$db_server ="kunet.kingston.ac.uk";  $db_server ="kunet.uk"; 
//$db_server ="kunet.uk/kudbmanage/"; 
$db_server = "localhost";
$db_user = "alpaca";
$db_name = "db_alpaca";
$db_password = "eesoocio";

////error messages for dbconnection [PDO::ATTR_ERRORMODE -> PDO::ERRORMODE_EXCEPTION]
$pdo = new 
PDO("mysql:host=$db_server;port=3306;dbname=$db_name",
$db_user,$db_password,
[PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
//

//pdo to perform a query and creates class from tablename
/*
function fnGetObjBy()
{
global $pdo;
$statement = $pdo ->query("SELECT * FROM Cheese");
$statement->execute();
$result = $statement->fetchAll(PDO::FETCH_OBJ);
}
*/

function getAllCheeses()
{
	global $pdo;
	$statement = $pdo->prepare('SELECT cheeseName,texture,country,strength,price FROM Cheese');
	$statement->execute();
	$result = $statement->fetchAll(PDO::FETCH_CLASS, 'Cheese');
	return $result;
}

function getAllEvents()
{
	global $pdo;
	$statement = $pdo->prepare('SELECT * FROM Events');
	$statement->execute();
	$result = $statement->fetchAll(PDO::FETCH_CLASS, 'Events');
	return $result;
}

function getCheeseByName($cheeseNameToSearchFor)
{
	global $pdo;
	$statement = $pdo->prepare("SELECT cheeseName,texture,country,strength,price FROM Cheese WHERE cheeseName = ?");
	$statement->execute([$cheeseNameToSearchFor]);
	$result = $statement->fetchAll(PDO::FETCH_CLASS, 'Cheese');
	return $result;
}

function getCheeseByTexture($textureToSearchFor)
{
	global $pdo;
	$statement = $pdo->prepare("SELECT cheeseName,texture,country,strength,price FROM Cheese WHERE texture = ?");
	$statement->execute([$textureToSearchFor]);
	$result = $statement->fetchAll(PDO::FETCH_CLASS, 'Cheese');
	return $result;
}

function getCheeseByCountry($countryToSearchFor)
{
	global $pdo;
	$statement = $pdo->prepare("SELECT cheeseName,texture,country,strength,price FROM Cheese WHERE country = ?");
	$statement->execute([$countryToSearchFor]);
	$result = $statement->fetchAll(PDO::FETCH_CLASS, 'Cheese');
	return $result;

}

function getCheeseByStrength($strengthToSearchFor)
{
	global $pdo;
	$statement = $pdo->prepare("SELECT cheeseName,texture,country,strength,price FROM Cheese WHERE strength = ?");
	$statement->execute([$strengthToSearchFor]);
	$result = $statement->fetchAll(PDO::FETCH_CLASS, 'Cheese');
	return $result;

}

function getCheeseByPrice($PriceToSearchFor)
{
	global $pdo;
	$statement = $pdo->prepare("SELECT cheeseName,texture,country,strength,price FROM Cheese WHERE price = ?");
	$statement->execute([$PriceToSearchFor]);
	$result = $statement->fetchAll(PDO::FETCH_CLASS, 'Cheese');
	return $result;
}

function newCheese($newCheese)
{
	global $pdo;
	$statement = $pdo->prepare("INSERT INTO Cheese(cheeseName,texture,country,strength,price) VALUES (?, ?, ?, ?, ?)") ;
	$statement->execute([$newCheese->cheeseName,$newCheese->texture,$newCheese->country,$newCheese->strength,$newCheese->price]);
}

function newEvent($newEvent)
{
	global $pdo;
	$statement = $pdo->prepare("INSERT INTO Events(eventName, date, time, duration, location,AvailableTickets,Price) VALUES (?, ?, ?, ?, ?,?,?)");
	$statement->execute([$newEvent->eventName,$newEvent->date, $newEvent->time, $newEvent->duration,$newEvent->location,$newEvent->AvailableTickets,$newEvent->Price]);

}

function newBooking($newBooking)
{
	global $pdo;
	$statement = $pdo->prepare("INSERT INTO Bookings(ClientName,EventName,TicketNumber,Status,ClientEmail) VALUES (?, ?, ?, ?, ?)");
	$statement->execute([$newBooking->ClientName,$newBooking->EventName,$newBooking->TicketNumber,$newBooking->Status, $newBooking->ClientEmail]);

}

?>
