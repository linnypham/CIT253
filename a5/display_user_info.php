<!DOCTYPE html PUBLIC "-//W3C//DTD/XHTML 1.0 Transitional//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml11-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<!--
		Name: Linh H. Pham
		File: display_user_info.php
		Date: 02/27/2022
		-->
  <title>User Info</title>
  <link rel="stylesheet" href="css/styles.css"/>
</head>
<body>
   <?php
   $name = $_POST['name'];
   $trimname = trim($name);
   $lowername = strtolower($trimname);
   $uppername = ucwords($lowername);
   list($firstname, $lastname) = explode(' ', $uppername);
	
   $telephone = $_POST['telephone'];
   $replacetelephone = str_replace(array('(', ')','–'), '', $telephone);
   $nospacephone = str_replace(" ","", $replacetelephone);
   $trimtelephone = trim($nospacephone);
 
   $email = $_POST['email'];
   $trimemail = trim($email);
   $loweremail = strtolower($trimemail);
   $nospaceemail = str_replace(" ","", $loweremail);
   list($username, $domain) = explode('@', $nospaceemail);
   
   $notes = strip_tags($_POST['notes']);
	
   
   ?>

   <h1>Display your info</h1>
   <table>
      <tr>
         <td>First name:</td>
         <td><?php echo $firstname;?></td>
      </tr>
	  <tr>
         <td>Last name:</td>
         <td><?php echo $lastname;?></td>
      </tr>
      <tr>
         <td>Telephone Number:</td>
         <td><?php echo $trimtelephone; ?></td>
      </tr>
      <tr>
         <td>Username:</td>
         <td><?php echo $username; ?></td>
      </tr>
      <tr>
         <td>Domain:</td>
         <td><?php echo $domain; ?></td>
      </tr>
      <tr>
         <td>Notes:</td>
         <td><?php echo $notes; ?></td>
      </tr>
   </table>
</body>
</html>