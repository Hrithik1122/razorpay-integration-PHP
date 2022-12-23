<?php 
include('include/header.php');
?>
<title>Razorpay Payment Gateway Integration</title>
<?php include('include/container.php');?>
<div class="container">
	<div class="row">		
		<div class="col-sm-12">	
			<h2>Example: Razorpay Payment Gateway Integration in PHP</h2>
			<br><br>
			<div class="col-sm-4 col-lg-4 col-md-4">
				<div class="thumbnail">
					<img src="prod.gif" alt="">
					<div class="caption">
						<h4 class="pull-right">₹1</h4>
						<h4><a href="#">Test</a></h4>
						<p>See more examples like this at <a target="_blank" href="#">Payment Gateway</a>.</p>
					</div>
					<form id="checkout-selection" action="pay.php" method="POST">		
						<input type="hidden" name="item_name" value="My Test Product">
						<input type="hidden" name="item_description" value="My Test Product Description">
						<input type="hidden" name="item_number" value="3456">
						<input type="hidden" name="amount" value="1">
						<input type="hidden" name="address" value="ABCD Address">
						<input type="hidden" name="currency" value="INR">	
						<input type="hidden" name="cust_name" value="test">								
						<input type="hidden" name="email" value="test@gmail.com">	
						<input type="hidden" name="contact" value="Enter Your Contact Number">								
						<input type="submit" class="btn btn-primary" value="Buy Now">					
					</form>						
				</div>
			</div>
		</div>
	</div>	
</div>
<?php include('include/footer.php');?>