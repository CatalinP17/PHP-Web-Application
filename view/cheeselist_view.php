<!doctype html>
<?php require_once("../controller/cheeselist.php"); ?>
<html>
	<head>
		<title>No Cheese for the Wicked</title>
		<link type="text/css" rel="stylesheet" href="../view/css/cheeselist.css"/>
		<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>	 	         	  	         	        	 	         	
        <script type="text/javascript" src="../view/Javascript/Javascript.js"></script>
	</head>
	<body>
	<div class="header">
	<h1>Our Cheese Library</h1>
</div>
<div class = "banner">
<a href="https://kunet.uk/alpaca/controller/frontpage.php">Home</a>
<a href="https://kunet.uk/alpaca/controller/aboutus.php">About Us</a>
<a href="https://kunet.uk/alpaca/controller/cheeselist.php">Cheese</a>
<a href="https://kunet.uk/alpaca/controller/events.php">Events</a>
</div>
		<hr/>
		<a href="../controller/cheeseadd.php">Add New Cheese</a><br/>
		
		<form method="POST">
		<div class = "namesearch">
			<p>
			Name:  
		<input name="searchbn"/> <input type="submit" value="Search"><br/>
         </p>
		</div>
		<div class = "texturesearch">
	    <p>
	    Texture:
		<input name="searchtexture"/> <input type="submit" value="Search"><br/>
       </p>
</div>
<div class = "countrysearch">
	   <p>
	    Country:
		<input name="searchcountry"/> <input type="submit" value="Search"><br/>
</p>
</div>
<div class = "strengthsearch">
	<p>
	    Strength:
		<input name="searchstrength"/> <input type="submit" value="Search"><br/>
</p>
</div>
<div class = "pricesearch">
	<p>
	    Price:
		<input name="searchprice"/> <input type="submit" value="Search"><br/>
</p>
</div>
		<!--
		Add current cheeses to basket?:
		<input type="checkbox" name="addbasket" value="true"/> 
		-->
		</form>
		<div class = "clear">
<a href="../controller/cheeselist.php">Clear Search</a>
</div>
		<hr/>
		<table>
			<tr>
				<th><div class ="card">Cheese Name</div></th>
				<th><div class ="card">Texture</div></th>
				<th><div class ="card">Country</div></th>
				<th><div class ="card">Strength</div></th>	
				<th><div class ="card">Price</div></th>
				<th><div class ="card">Purchase</div></th>
			</tr><br/>
			<?php foreach($listOfCheeses as $cheese): ?>
				<tr>
					<td><div class ="card"><?= $cheese->cheeseName ?></div></td> 
					<td><div class ="card"><?= $cheese->texture ?></div></td>
					<td><div class ="card"><?= $cheese->country ?></div></td>
					<td><div class ="card"><?= $cheese->strength ?></div></td>
					<td><div class ="card"><?= $cheese->price ?></div></td>
					<!-- vv appends data for the basket to the end of the(add to basket)hyperlink when clicked-->
					<td><div class ="card"><a href ="?basketadd=yes&cheeseName=<?=$cheese->cheeseName?>
								&texture=<?=$cheese->texture?>
								&country=<?=$cheese->country ?>
								&strength=<?=$cheese->strength ?>
								&price=<?=$cheese->price?>">Add to Basket</a></div></td>
								<!-- consider making add to basket a check box ^^ -->			
				</tr>
			<?php endforeach ?>
		</table>
	
 
		ITEM(S) ADDED: </a> <?=count($basket)?>
		<?php if (count($basket) !=0):?>
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
		<?php endif ?> 
		<a href="../controller/checkout.php">CHECKOUT</a>
	</body>
</html>