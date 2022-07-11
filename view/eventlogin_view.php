<!doctype html>
<html>
	<head>
		<title> No Cheese for the Wicked EVENT LOG IN PAGE </title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link type="text/css" rel="stylesheet" href="../view/css/eventslogin.css"/>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>
	
	<body>
	<div id="frm">
	<h2><span class="fa fa-user"> Managers Log in EVENTS </span></h2>
			<form method = "POST" action = "..\controller\eventadd.php">
		<p>
		UserName:
			<input name = "userName"> 	</br>
		</p>
		<p>
		Password:
			<input name = "password"> 	</br>
		</p>
		<input name = "Log_In" id="btn" input type = "submit" value = "Log_In">
			</form>
		<p class="lead">
         <a class="btn btn-primary btn-sm" href="https://kunet.uk/alpaca/controller/frontpage.php" role="button">Return to Homepage</a>
        </p>
	</div>
	</body>
</html>	