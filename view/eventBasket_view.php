<!doctype html>
<?php require_once("../controller/events.php"); ?>
<html>
	<head>
		<title>No Cheese for the Wicked</title>
		<link type="text/css" rel="stylesheet" href="../view/css/basket.css"/>

	<!--	<div class = "banner"><div class = "header"><h1>
	<a href="https://kunet.uk/alpaca/controller/frontpage.php">Home</a>
    <a href="https://kunet.uk/alpaca/view/aboutus_view.php">About Us</a>
    <a href="https://kunet.uk/alpaca/controller/cheeselist.php">Cheese</a>
    <a href="https://kunet.uk/alpaca/view/events_view.php">Events</a>
    <a href="https://kunet.uk/alpaca/controller/basket.php">Basket</a>
	</h1></div></div>  -->
	
	</head>
	<body>

	<!--<div class = "header"><h1>No Cheese for the Wicked</h1></div>-->
		
		<div class= "Bookingtable">
		<table>
			<tr>
				<th>Event Name</th>
				<th>Date</th>
				<th>Time</th>
				<th>Duration</th>	
                <th>Location</th> 
                <th>Available Tickets</th>
				<th>Price</th>
			</tr> 
		</table>
</div>
        
		<?=count($eventbasket)?>
		<?php if (count($eventbasket) !=0):?>
            <div class= "Bookingtable">
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
            </div>
		<?php endif ?> 
	
		<a href="../view/checkout.php">Go to checkout page!</a>
	</body>
</html>
