<!DOCTYPE html>
<?php require_once("../controller/cheeselist.php"); ?>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link type="text/css" rel="stylesheet" href="../view/css/checkout.css"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!--
<div class = "banner">
    <a href="https://kunet.uk/alpaca/view/aboutus_view.php">About Us</a>
    <a href="https://kunet.uk/alpaca/controller/cheeselist.php">Cheese</a>
    <a href="https://kunet.uk/alpaca/view/events_view.php">Events</a>
    <a href="https://kunet.uk/alpaca/controller/basket.php">Basket</a>
</div>
-->
</head>
<body>

<h2>Checkout</h2>
<div class="row">
  <div class="col-75">
    <div class="container">
      <form action="../view/confirmationpage_view.php">
      
        <div class="row">
          <div class="col-50">
            <h3>Billing Address</h3>
            <label for="fname"><i class="fa fa-user"></i> Full Name</label>
            <input type="text" id="fname" name="firstname" placeholder="John M. Doe">
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="text" id="email" name="email" placeholder="john@example.com">
            <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
            <input type="text" id="adr" name="address" placeholder="542 W. 15th Street">
            <label for="city"><i class="fa fa-institution"></i> City</label>
            <input type="text" id="city" name="city" placeholder="London">

            <div class="row">
              <div class="col-50">
                <label for="county">County</label>
                <input type="text" id="county" name="county" placeholder="Tower Hamlets">
              </div>
              <div class="col-50">
                <label for="Postcode">Postcode</label>
                <input type="text" id="Postcode" name="Postcode" placeholder="E14">
              </div>
            </div>
          </div>

          <div class="col-50">
            <h3>Payment</h3>
            <label for="fname">Accepted Cards</label>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div>
            <label for="cname">Name on Card</label>
            <input type="text" id="cname" name="cardname" placeholder="John More Doe">
            <label for="ccnum">Credit card number</label>
            <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444">
            <label for="expmonth">Exp Month</label>
            <input type="text" id="expmonth" name="expmonth" placeholder="September">
            <div class="row">
              <div class="col-50">
                <label for="expyear">Exp Year</label>
                <input type="text" id="expyear" name="expyear" placeholder="2018">
              </div>
              <div class="col-50">
                <label for="cvv">CVV</label>
                <input type="text" id="cvv" name="cvv" placeholder="352">
              </div>
            </div>
          </div>
          
        </div>
        <label>
          <input type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing
        </label>
        <input type="submit" value="Complete your order" class="btn">
      </form>
    </div>
  </div>
  <div class="col-25">
    <div class="container">
      <h4>Cart <span class="price" style="color:black"><i class="fa fa-shopping-cart"></i> <b><?=count($basket)?></b></span></h4>
      <?=count($basket)?>
      <?php $totalval=0;?>
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
          <?php $totalval = $totalval + $samplebasket->price ?>
				<?php endforeach ?>
				</tbody>
			</table>
				</div>
		<?php endif ?> 
      <hr>
      <p>Total <span class="price" style="color:black"><b><?=$totalval?></b></span></p>
    </div>
  </div>
</div>

</body>
</html>