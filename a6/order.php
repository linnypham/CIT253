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
   
   $error = 0;
   
   $name = $_POST['name'];
   if (empty($name)){
	   $error += 1;
	   
   }
   
   $email = $_POST['email'];
   if (empty($email)){
	   $error += 1;
	   
   }
   
   $address = $_POST['address'];
   if (empty($address)){
	   $error += 1;
	   
   }
   
   $city = $_POST['city'];
   if (empty($city)){
	   $error += 1;
	   
   }
   
   $state = $_POST['state'];
   if (empty($state)){
	   $error += 1;
	   
   }
   
   $zip = $_POST['zip'];
   if (empty($zip)){
	   $error += 1;
	   
   }
   
   $phone = $_POST['phone'];
   if (empty($phone)){
	   $error += 1;
	   
   }

	$coffee_array = array(0, 'Boca Villa','South Beach Rhythm','Pumpkin Paradise','Sumatran Sunset','Bali Batur','Double Dark');
	$price_array = array(0, 7.99, 8.99, 8.99, 9.99, 10.95, 9.95);
	
	$coffee = $_POST['coffee'];
	$unit_cost = $price_array[$coffee];
	$coffee_type = $coffee_array[$coffee];
	
	
	if (empty($coffee)){
	   $error += 1;
	   
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
	   $error += 1; 
	   echo "<br>";
   }
   
   $total = ($unit_cost + $coffee_price) * $quantity;
  
	   if($error == 0){
			echo "<tr><th><h2>Order Summary</h2></th>";
			echo "<br>";
			echo "<tr><td>Name: </td>";
			echo "<td>";
			echo $name;
			echo "</td></tr>";
			echo "<br>";
			echo "<tr><td>Address: </td>";
			echo "<td>";
			echo $address;
			echo "</td></tr>";
			echo "<br>";
			echo "<tr><td>City, State, Zip: </td>";
			echo "<td>";
			echo $city.", ".$state.", ".$zip;
			echo "</td></tr>";
			echo "<br>";
			echo "<tr><td>Phone#: </td>";
			echo "<td>";
			echo $phone;
			echo "</td></tr>";
			echo "<br>";
			echo "<tr><td>Email: </td>";
			echo "<td>";
			echo $email;
			echo "</td></tr>";
			echo "<br>";
			
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
	echo "<p><a href='user_input.html' >Return to order form</a></p>";
   ?>
	
</body>

</html>