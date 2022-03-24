<!DOCTYPE html PUBLIC "-//W3C//DTD/XHTML 1.0 Transitional//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml11-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<!--
		Name: Linh H. Pham
		File: coffee_order.php
		Date: 03/20/2022
		-->
  <title>User Info</title>
  <link rel="stylesheet" href="css/styles.css"/>
</head>
<body>
	<?php
	
   if($_SERVER['REQUEST_METHOD'] == 'POST'){
   echo "<h1>The Coffee House</h1>";
   echo "<br>";
   
   $error_name = "Please enter a name.";
   $error_email = "Please enter an e-mail address.";
   $error_address = "Please enter an address.";
   $error_city = "Please enter a city.";
   $error_state = "Please enter a state.";
   $error_zip = "Please enter a zip code.";
   $error_phone = "Please enter a phone number.";
   $error_coffee =  "Please enter a coffee to be purchased.";
   $error_type = "Please select regular or decaffeinated.";
   $error_quantity = "Please enter a numeric value for quantity.";
   
   $error = false;
   
   $name = $_POST['name'];
   if (empty($name)){
	   $error = true;
	   
   }
   
   $email = $_POST['email'];
   if (empty($email)){
	    $error = true;
	   
   }
   
   $address = $_POST['address'];
   if (empty($address)){
	    $error = true;
	   
   }
   
   $city = $_POST['city'];
   if (empty($city)){
	    $error = true;
	   
   }
   
   $state = $_POST['state'];
   if (empty($state)){
	    $error = true;
	   
   }
   
   $zip = $_POST['zip'];
   if (empty($zip)){
	    $error = true;
	   
   }
   
   $phone = $_POST['phone'];
   if (empty($phone)){
	    $error = true;
	   
   }

	$coffee_array = array(0, 'Boca Villa','South Beach Rhythm','Pumpkin Paradise','Sumatran Sunset','Bali Batur','Double Dark');
	$price_array = array(0, 7.99, 8.99, 8.99, 9.99, 10.95, 9.95);
	
	$coffee = $_POST['coffee'];
	$unit_cost = $price_array[$coffee];
	$coffee_type = $coffee_array[$coffee];
	
	
	if (empty($coffee)){
	    $error = true;
	   
   }
   
   $type = $_POST['type'];
   $coffee_price = 0;
   if($type == "1"){
	   $coffee_price = 0;
	   $coffee_type_extra = "Regular";
   }
   elseif ($type == "2"){
	   $coffee_price = 1;
	   $coffee_type_extra = "Decaffeinated";
   }
   else {
	   $error += 1;
	   echo "<br>";
   }
   
   
   $quantity = $_POST['quantity'];
   if (empty($quantity)){
	   $quantity = 0;
	    $error = true; 
	   echo "<br>";
   }
   
   $total = ($unit_cost + $coffee_price) * $quantity;
  
	   if($error == false){
			echo "<tr><th><h2>Order Summary</h2></th>";
			echo "<table>";
			echo "<tr><td>Name: </td>";
			echo "<td>";
			echo $name;
			echo "</td></tr>";			
			echo "<tr><td>Address: </td>";
			echo "<td>";
			echo $address;
			echo "</td></tr>";		
			echo "<tr><td>City, State, Zip: </td>";
			echo "<td>";
			echo $city.", ".$state.", ".$zip;
			echo "</td></tr>";	
			echo "<tr><td>Phone#: </td>";
			echo "<td>";
			echo $phone;
			echo "</td></tr>";
			echo "<tr><td>Email: </td>";
			echo "<td>";
			echo $email;
			echo "</td></tr>";
			echo "<table>";
			
			echo "<table>";
			echo "<center>Order Information</center>";
			echo "<br>";
			echo "<table border=\"1\" align=\"center\">";
			echo "<tr><th>Coffee</th>";
			echo "<th>Type</th>";
			echo "<th>Quantity</th>";
			echo "<th>Unit Cost</th>";
			echo "<th>Total</th></tr>";
			echo "<tr><td>";
			echo $coffee_type;
			echo "</td><td>";
			echo $coffee_type_extra;
			echo "</td><td>";
			echo $quantity;
			echo " lb(s)</td><td>$";
			echo $unit_cost;
			echo "</td><td>$";
			echo $total;
			echo "</td></tr>";
			echo "</table>";
	   }
	   
	   else{
			echo "<h2><font color=red>Errors!!</font></h2>";
			echo "<br>";
			if (empty($coffee)){
				echo "<font color=red>";
				echo $error_coffee;
				echo "</font>";
			}
			echo "<br>";
			if ($type == 0){
				echo "<font color=red>";
				echo $error_type;
				echo "</font>";
			}
			echo "<br>";
			if (empty($quantity)){
				echo "<font color=red>";
				echo $error_quantity;
				echo "</font>";
			}
			echo "<br>";
			if (empty($name)){
				echo "<font color=red>";
				echo $error_name;
				echo "</font>";
			}
			echo "<br>";
			if (empty($email)){
				echo "<font color=red>";
				echo $error_email;
				echo "</font>";
			}
			echo "<br>";
			if (empty($phone)){
				echo "<font color=red>";
				echo $error_phone;
				echo "</font>";
			}
			echo "<br>";
			if (empty($address)){
				echo "<font color=red>";
				echo $error_address;
				echo "</font>";
			}
			echo "<br>";
			if (empty($city)){
				echo "<font color=red>";
				echo $error_city;
				echo "</font>";
			}
			echo "<br>";
			if (empty($state)){
				echo "<font color=red>";
				echo $error_state;
				echo "</font>";
			}
			echo "<br>";
			if (empty($zip)){
				echo "<font color=red>";
				echo $error_zip;
				echo "</font>";
			}
			
	   }
	echo "<p><a href='coffee_order.php' >Return to order form</a></p>";
   }
   
   ?>
   <?php
   if($_SERVER['REQUEST_METHOD'] != 'POST' OR $error == true ){
	   ?>
   <form action="coffee_order.php" method="POST">
			<h1>The Coffee House</h1>
			<h2>Order Form</h2>
			<table>
				<tr>
					<td>Coffee:</td>
					<td>
						<select name="coffee" id="coffee">
							<option <?php if(isset($_POST['coffee']) AND $coffee =="0") echo 'selected="selected"'; ?> value="0">Select Coffee:</option>
							<option <?php if(isset($_POST['coffee']) AND $coffee =="1") echo 'selected="selected"'; ?> value="1">Boca Villa</option>
							<option <?php if(isset($_POST['coffee']) AND $coffee =="2") echo 'selected="selected"'; ?> value="2">South Beach Rhythm</option>
							<option <?php if(isset($_POST['coffee']) AND $coffee =="3") echo 'selected="selected"'; ?> value="3">Pumpkin Paradise</option>
							<option <?php if(isset($_POST['coffee']) AND $coffee =="4") echo 'selected="selected"'; ?> value="4">Sumatran Sunset</option>
							<option <?php if(isset($_POST['coffee']) AND $coffee =="5") echo 'selected="selected"'; ?> value="5">Bali Batur</option>
							<option <?php if(isset($_POST['coffee']) AND $coffee =="6") echo 'selected="selected"'; ?> value="6">Double Dark</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>Type:</td>
					<td>
						<input type="radio" name ="type" id="1" <?php if(isset($_POST['type']) AND $type =="1") echo 'checked'; ?> value="1">
						<label for="regular">Regular</label><br>
						<input type="radio" name ="type" id="2" <?php if(isset($_POST['type']) AND $type =="2") echo 'checked'; ?> value="2">
						<label for="decaffeinated">Decaffeinated</label>
						
					</td>
				</tr>
				<tr>
					<td>Quantity (in pounds):</td>
					<td><input type="number" name="quantity" value="<?php if(isset($_POST['quantity'])) print $_POST['quantity']; ?>"></td>
				</tr>
				<tr>
					<td>Name:</td>
					<td><input type="text" name="name"  value="<?php if(isset($_POST['name'])) print $_POST['name']; ?>"></td>
				</tr>
				<tr>
					<td>E-mail address::</td>
					<td><input type="text" name="email" value="<?php if(isset($_POST['email'])) print $_POST['email']; ?>"></td>
				</tr>
				<tr>
					<td>Telephone #:</td>
					<td><input type="text" name="phone" value="<?php if(isset($_POST['phone'])) print $_POST['phone']; ?>"'></td>
				</tr>
				<tr>
					<td>Address:</td>
					<td><input type="text" name="address" value="<?php if(isset($_POST['address'])) print $_POST['address']; ?>"></td>
				</tr>
				<tr>
					<td>City:</td>
					<td><input type="text" name="city" value="<?php if(isset($_POST['city'])) print $_POST['city']; ?>"></td>
				</tr>
				<tr>
					<td>State:</td>
					<td><input type="text" name="state" value="<?php if(isset($_POST['state'])) print $_POST['state']; ?>"></td>
				</tr>
				<tr>
					<td>Zip:</td>
					<td><input type="text" name="zip" value="<?php if(isset($_POST['zip'])) print $_POST['zip']; ?>"></td>
				</tr>
				<tr>
					<td><input type="submit" name="submit" value="Submit"></td>
					<td><input type="reset" name="reset" value="Reset"></td>
				</tr>
			</table>
		</form>
   <?php
   }
   ?>
	
</body>

</html>