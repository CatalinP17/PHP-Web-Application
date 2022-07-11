<!doctype html>
<?php require_once "../model/dbAccess.php";?>
<html>
	<head>
		<title>No Cheese for the Wicked</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link type="text/css" rel="stylesheet" href="../view/css/addcheese.css"/>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>
	<body>
		<div id="frm">
		<h2><span class="fa fa-bell"> Add New Cheeses, friendo </span></h2>
		<form method = "get" action = "cheeseadd.php">
		<p>
		<label>Add name:</label>
		<input name="cheeseName"/> <br/>
        </p>
		<p>
		<label>Add texture:</label>
		<input name="texture"/> <br/>
        </p>
		<p>
		<label>Add country:</label>
		<input name="country"/> <br/>
        </p>
		<p>
		<label>Add strength:</label>
		<input name="strength"/> <br/>
        </p>
		<p>
		<label>Add price:</label>
		<input name="price"/><br/>
        </p>
		<input name="cheeseadd" id="btn" input type = "submit" value = "cheeseadd">
		</form>
		<p class="lead">
         <a class="btn btn-primary btn-sm" href="https://kunet.uk/alpaca/controller/frontpage.php" role="button">Return to Homepage</a>
        </p>
        </div>
		<?php #$sql = "INSERT INTO Cheese (cheeseName,texture,country,strength,price)
			  #VALUES('addcheeseName','addtexture','addcountry','addstrength','addprice')"?>
	</body>
</html>