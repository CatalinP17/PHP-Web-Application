<!doctype html>
<?php require_once "../model/dbAccess.php";?>
<html>
	<head>
		<title>No Cheese for the Wicked EVENTS</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link type="text/css" rel="stylesheet" href="../view/css/addcheese.css"/>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>
	<body>
	<div id="frm">
	<h2><span class="fa fa-bell"> Add New Events, friendinie </span></h2>
		<form method = "get" action = "../controller/eventadd.php">
		<p>
		Add Event Name:
		<input name="eventName"/> <br/>
		</p>
		<p>
		Add date:
		<input name="date"/> <br/>
		</p>
		<p>
		Add time:
		<input name="time"/> <br/>
		</p>
		<p>
		Add duration (hours):
		<input name="duration"/> <br/>
		</p>
		<p>
		Add location:
		<input name="location"/><br/>
		</p>
		<p>
		Add Available Tickets:
		<input name="AvailableTickets"/><br/>
		</p>
		<p>
		Add price:
		<input name="Price"/><br/>
		</p>
		<input name="eventbasketadd" id="btn" input type = "submit" value = "AddEvent">
		</form>
		<p class="lead">
         <a class="btn btn-primary btn-sm" href="https://kunet.uk/alpaca/controller/frontpage.php" role="button">Return to Homepage</a>
        </p>
		</div>
		<?php #$sql = "INSERT INTO Events (eventName,date,time,duration,location)
			  #VALUES('addeventName','adddate','addtime','addduration','addlocation')"?>
	</body>
</html>