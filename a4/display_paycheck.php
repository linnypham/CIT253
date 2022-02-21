<!DOCTYPE html PUBLIC "-//W3C//DTD/XHTML 1.0 Transitional//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml11-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<!--
		Name: Linh H. Pham
		File: display_paycheck.php
		Date: 02/20/2022
		-->
  <title>Paycheck Information</title>
  <link rel="stylesheet" href="css/styles.css"/>
</head>
<body>
   <?php
   $firstname = $_POST['firstname'];
   $lastname = $_POST['lastname'];
   $hours = $_POST['hours'];
   $rate = $_POST['rate'];

   define("FED_CONST", 10.65/100);
   define("STATE_CONST", 4/100);
   define("SS_CONST", 3.8/100);
   define("MEDICARE_CONST", 1.3/100);

   $gross = $hours * $rate;
   $fed_tax = FED_CONST * $gross;
   $state_tax = STATE_CONST * $gross;
   $ss_tax = SS_CONST * $gross;
   $medicare = MEDICARE_CONST * $gross;
   $total_tax = $fed_tax + $state_tax + $ss_tax +$medicare;
   $net = $gross - $total_tax;
   ?>

   <h1>Paycheck Information</h1>
   <p>Hello <?php echo $firstname." ".$lastname.". ";?>This week you worked <?php echo $hours;?> hours and, based on the pay rate of $<?php echo $rate;?> per hour, your pay check information is:</p>
   <table>
      <tr>
         <td>Gross Pay:</td>
         <td>$<?php echo $gross;?></td>
      </tr>
      <tr>
         <td>Federal Taxes:</td>
         <td>$<?php echo $fed_tax; ?></td>
      </tr>
      <tr>
         <td>State Taxes:</td>
         <td>$<?php echo $state_tax; ?></td>
      </tr>
      <tr>
         <td>Social Security Taxes:</td>
         <td>$<?php echo $ss_tax; ?></td>
      </tr>
      <tr>
         <td>Medicare Taxes:</td>
         <td>$<?php echo $medicare; ?></td>
      </tr>
      <tr>
         <td>Total Taxes:</td>
         <td>$<?php echo $total_tax; ?></td>
      </tr>
      <tr>
         <td>Net Pay:</td>
         <td>$<?php echo $net; ?></td>
      </tr>
   </table>
   <a href='user_input.html' >Return to input form</a>
</body>
</html>