<!doctype html>
<?php require_once("../controller/cheeselist.php"); ?>
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
		
		<div class= "table">
		<table>
			<tr>
				<th>Cheese Name</th>
				<th>Texture</th>
				<th>Country</th>
				<th>Strength</th>	
				<th>Price</th>
				<th>Purchase</th>

			</tr> 
		</table>
</div>
		<?=count($basket)?>
		<?php if (count($basket) !=0):?>
			<div class= "table">
			<table>
				<tbody>
				<?php foreach ($basket as $samplebasket):?>
					<tr>
						<td><?= $samplebasket->cheeseName ?></td>
						<td><?= $samplebasket->texture ?></td>
						<td><?= $samplebasket->country ?></td>
						<td><?= $samplebasket->strength ?></td>
						<td><?= $samplebasket->price ?></td>
					</tr>
				<?php endforeach ?>
				</tbody>
			</table>
				</div>
		<?php endif ?> 
	
		<a href="../view/checkout.php">Go to checkout page!</a>
	</body>
</html>
