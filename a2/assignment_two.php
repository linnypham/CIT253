<!DOCTYPE html PUBLIC "-//W3C//DTD/XHTML 1.0 Transitional//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml11-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  <title>Variables and Arithmetic Operations</title>
</head>
<body>

<?php 
  $number_one = rand(1,100);
  $number_two = rand(1,100);
  $addition = $number_one + $number_two;
  $difference = $number_two - $number_one;
  $product = $number_one * $number_two;
  $division = $number_two / $number_one;
  $remainder = $number_two % $number_one;

  echo $number_one." + ".$number_two." = ".$addition."<br/>";
  echo $number_two." - ".$number_one." = ".$difference."<br/>";
  echo $number_one." * ".$number_two." = ".$product."<br/>";
  echo $number_two." / ".$number_one." = ".$division."<br/>";
  echo $number_two." % ".$number_one." = ".$remainder."<br/>";
?>

</body>
</html>