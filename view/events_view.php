<!doctype html>
<?php require_once("../controller/events.php"); ?>
<html>
	<head>
		<title>No Cheese for the Wicked</title>
		<link type="text/css" rel="stylesheet" href="../view/css/events.css"/>
	</head>
	<body>
	<div class="header">
	<h1>Come to Our Events!</h1>
</div>
<div class = "banner">
<a href="https://kunet.uk/alpaca/controller/frontpage.php">Home</a>
<a href="https://kunet.uk/alpaca/controller/aboutus.php">About Us</a>
<a href="https://kunet.uk/alpaca/controller/cheeselist.php">Cheese</a>
<a href="https://kunet.uk/alpaca/controller/events.php">Events</a>
</div>

<hr/>
		<a href="../controller/eventadd.php">Add New Events</a><br/>

		<form method="POST">
		<p>
		Event Name:
	    <input name="searchbn"/> <input type="submit" value="Search"><br/>
		</p>
		<p>
	    Date:
	    <input name="searchdate"/> <input type="submit" value="Search"><br/>
		</p>
		<p>
	    Time:
	    <input name="searchtime"/> <input type="submit" value="Search"><br/>
		</p>
		<p>
	    Duration:
	    <input name="searchduration"/> <input type="submit" value="Search"><br/>
		</p>
		<p>
	    Location:
		<input name="searchlocation"/> <input type="submit" value="Search"><br/>
		</p>
		<p>
		Price:
		<input name="searchprice"/> <input type="submit" value="Search"><br/>
		</p>
		<!--
		Add current cheeses to basket?:
		<input type="checkbox" name="addbasket" value="true"/> 
		-->
		</form>
		<a href="../controller/event.php">Clear Search</a>
		<hr/>
		<table>
			<tr>
				<th><div class ="card">Event Name</div></th>
				<th><div class ="card">Date</div></th>
				<th><div class ="card">Time</div></th>
				<th><div class ="card">Duration</div></th>	
				<th><div class ="card">Location</div></th>
				<th><div class ="card">Available Tickets</div></th>
				<th><div class ="card">Price</div></th>
				<th><div class ="card">Purchase</div></th>
			</tr><br/>
			<?php foreach($listOfEvents as $event): ?>
				<tr>
					<td><div class ="card"><?= $event->eventName ?></div></td> 
					<td><div class ="card"><?= $event->date ?></div></td>
					<td><div class ="card"><?= $event->time ?></div></td>
					<td><div class ="card"><?= $event->duration ?></div></td>
					<td><div class ="card"><?= $event->location ?></div></td>
					<td><div class ="card"><?= $event->AvailableTickets ?></div></td>
					<td><div class ="card"><?= $event->Price ?></div></td>
					<!-- vv appends data for the basket to the end of the(add to basket)hyperlink when clicked-->
					<td><div class ="card"><a href ="?eventbasketadd=yes&eventName=<?=$event->eventName?>
								&date=<?=$event->date?>
								&time=<?=$event->time ?>
								&duration=<?=$event->duration ?>
								&location=<?=$event->location ?>
								&AvailableTickets=<?=$event->AvailableTickets ?>
								&Price=<?=$event->Price?>">Add to Basket</a></div></td>
								<!-- consider making add to basket a check box ^^ -->			
				</tr>
			<?php endforeach ?>
		</table>
		
 
		ITEM(S) ADDED: </a> <?=count($eventbasket)?>
		<?php if (count($eventbasket) !=0):?>
			<table>
				<tbody>
				<?php foreach ($eventbasket as $ebasket):?>
					<tr>
						<td><?= $ebasket->eventName ?></td>
						<td><?= $ebasket->date ?></td>
						<td><?= $ebasket->time ?></td>
						<td><?= $ebasket->duration ?></td>
						<td><?= $ebasket->location ?></td>
						<td><?= $ebasket->AvailableTickets ?></td>
						<td><?= $ebasket->Price ?></td>
					</tr>
				<?php endforeach ?>
				</tbody>
			</table>
		<?php endif ?> 
		<a href="../controller/bookingscheckout.php">CHECKOUT</a>
	</body>
</html>