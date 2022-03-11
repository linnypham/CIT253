<!DOCTYPE html PUBLIC "-//W3C//DTD/XHTML 1.0 Transitional//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml11-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<!--
		Name: Linh H. Pham
		File: order.php
		Date: 03/09/2022
		-->
  <title>User Info</title>
  <link rel="stylesheet" href="css/styles.css"/>
</head>
<body>
   <?php
   $error = 0;
   
   $name = 0;
   $name = $_POST['name'];
   if ($name = 0){
	   $error = 1;
	   $error_name = "Please enter a name.";
   }
   
   $email = 0;
   $email = $_POST['email'];
   if ($email = 0){
	   $error = 1;
	   $error_email = "Please enter an e-mail address.";
   }
   
   $address = 0;
   $address = $_POST['address'];
   if ($address = 0){
	   $error = 1;
	   $error_address = "Please enter an address.";
   }
   
   $city = 0;
   $city = $_POST['city'];
   if ($city = 0){
	   $error = 1;
	   $error_city = "Please enter a city.";
   }
   
   $state = 0;
   $state = $_POST['state'];
   if ($state = 0){
	   $error = 1;
	   $error_state = "Please enter a state.";
   }
   
   $zip = 0;
   $zip = $_POST['zip'];
   if ($zip = 0){
	   $error = 1;
	   $error_zip = "Please enter a zip code.";
   }
   
   $phone = 0;
   $phone = $_POST['phone'];
   if ($phone = 0){
	   $error = 1;
	   $error_phone = "Please enter a phone number.";
   }

	$coffee = $_POST['coffee'];
	$coffee_array = array(0, 'Boca Villa','South Beach Rhythm','Pumpkin Paradise','Sumatran Sunset','Bali Batur','Double Dark');
	$price_array = array(0, 7.99, 8.99, 8.99, 9.99, 10.95, 9.95);
	$unit_cost = $price_array[$coffee];
	$coffee_type = $coffee_array[$coffee]
	
	if ($coffee = 0){
	   $error = 1;
	   $error_coffee = "Please enter a coffee to be purchased.";
   }
   
   $type = $_POST['type'];
   $coffee_type = 0;
   if($type == "regular"){
	   $coffee_type = 0;
   }
   elseif ($type == "decaffeinated"){
	   $coffee_type = 1;
   }
   else {
	   $error = 1;
	   $error_type = "Please select regular or decaffeinated.";
   }
   
   $quantity = 0;
   $quantity = $_POST['quantity'];
   if ($quantity = 0){
	   $error = 1;
	   $error_quantity = "Please enter a numeric value for quantity.";
   }
   
   $total = $unit_cost * $quantity;
   ?>

   <h1>The Coffee House</h1>
   
   <?php
	   if($error = 0){
			echo "<tr><th>Order Summary</th>";
			echo "<tr><td>Name:</td>";
			echo "<td>";
			echo $name;
			echo "</td></tr>";
			echo "<tr><td>Address:</td>";
			echo "<td>";
			echo $address;
			echo "</td></tr>";
			echo "<tr><td>City, State, Zip:</td>";
			echo "<td>";
			echo $city.", ".$state.", ".$zip;
			echo "</td></tr>";
			echo "<tr><td>Phone#:</td>";
			echo "<td>";
			echo $phone;
			echo "</td></tr>";
			echo "<tr><td>Email:</td>";
			echo "<td>";
			echo $email;
			echo "</td></tr>";
			
			echo "Order Information";
			echo "<table border=\"1\" align=\"center\">";
			echo "<tr><th>Coffee</th>";
			echo "<th>Type</th>";
			echo "<th>Quantity</th>";
			echo "<th>Unit Cost</th>";
			echo "<th>Total</th></tr>";
			echo "<tr><td>";
			echo $coffee_type;
			echo "</td><td>";
			echo $type;
			echo "</td><td>";
			echo $quantity;
			echo "</td><td>";
			echo $unit_cost;
			echo "</td><td>";
			echo $total;
			echo "</td></tr>";
	   }
	   elseif($error = 1){
		   echo "Errors!!";
		   echo $error_coffee;
		   echo $error_type;
		   echo $error_quantity;
		   echo $error_name;
		   echo $error_email;
		   echo $error_phone;
		   echo $error_address;
		   echo $error_city;
		   echo $error_state;
		   echo $error_zip;
	   }
   ?>

   <a href='user_input.html' >Return to order form</a>
</body>
</html>