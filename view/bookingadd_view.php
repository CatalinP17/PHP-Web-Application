<!doctype html>
<?php require_once "../model/dbAccess.php";?>
<html>
	<head>
		<title>No Cheese for the Wicked Booking</title>
		<link type="text/css" rel="stylesheet" href="../view/css/"/>
	</head>
	<h1>Add New Booking</h1>
	<body>
		<form method = "get" action = "../controller/bookingadd.php">
		Add Client Name:
		<input name="ClientName"/> <br/>
		Add Event Name:
		<input name="EventName"/> <br/>
		<!-- -->
		Automate TicketNumber :
		<input name="TicketNumber"/> <br/>
		Insert Status:
		<input name="Status"/> <br/>
		 <!-- -->
		Add Email:
		<input name="ClientEmail"/> <br/>
		<input name="bookingadd" input type = "submit" value = "bookingadd">
		</form>
		<?php #$sql = "INSERT INTO Bookings (ClientName,EventName,TicketNumber,Status,ClientEmail)
			  #VALUES('addClientName','addEventName','addClientEmail')"?>
	</body>
</html>