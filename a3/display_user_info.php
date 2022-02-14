<!DOCTYPE html PUBLIC "-//W3C//DTD/XHTML 1.0 Transitional//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml11-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  <title>User Information</title>
  <link rel="stylesheet" href="css/style.css"/>
</head>
<body>
   <?php
   $firstname = $_POST['firstname'];
   $lastname = $_POST['lastname'];
   $address = $_POST['address'];
   $city = $_POST['city'];
   $state = $_POST['state'];
   $zip = $_POST['zip'];
   $telephone = $_POST['telephone'];
   $email = $_POST['email'];
   ?>
   <table>
      <tr>
         <th colspan="2">Please enter user information</th>
      </tr>
      <tr>
         <td>Name:</td>
         <td><?php echo $firstname."".$lastname; ?></td>
      </tr>
      <tr>
         <td>Address:</td>
         <td><?php echo $address; ?></td>
      </tr>
      <tr>
         <td>City, State, Zip"</td>
         <td><?php echo $city.", ".$state.", ".$zip; ?></td>
      </tr>
      <tr>
         <td>Telephone #:</td>
         <td><?php echo $telephone; ?></td>
      </tr>
      <tr>
         <td>Email:</td>
         <td><?php echo $email; ?></td>
      </tr>
      <tr>
         <td><input type="button" name="return" value="Return to input form" onclick="user_input.html"></td>
      </tr>
   </table>
</body>
</html>