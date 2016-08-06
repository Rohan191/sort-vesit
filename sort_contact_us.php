<!DOCTYPE html>
<html>
<?php
function spamcheck($field)
  {
  // Sanitize e-mail address
  $field=filter_var($field, FILTER_SANITIZE_EMAIL);
  // Validate e-mail address
  if(filter_var($field, FILTER_VALIDATE_EMAIL))
    {
    return TRUE;
    }
  else
    {
    return FALSE;
    }
  }
?>
	<head>
		<link rel="stylesheet" type="text/css" href="home.css">
		<link rel="stylesheet" type="text/css" href="slider.css">
		<link rel="stylesheet" type="text/css" href="enlarge.css">
		<link rel="shortcut icon" href="favicon.ico">
		<link rel="icon" type="image/gif" href="animated_favicon1.gif">
		<style type="text/css">
		
		#main
		{
			height:400px;
			border:10px;
			border-radius:25px;
			padding:10px 20px;
		}
		
		</style>
		<title>SoRT VESIT</title>
	</head>
	
	<body>
	<div id=one>
		<div>
			<br><a href="home.html"><img  id=sortlogo src="sort_web_logo1.png" width="175" height="190" /></a>
			<img id=moto src="moto.png">
		</div> 
	</div>
	
	<div id=navigation>
		<a href="home.html">HOME</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="sort_events.html">EVENTS</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="council.html">COUNCIL</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="sort_gallery.html">GALLERY</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="sort_about_us.html">ABOUT US</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a  style="color:blue" href="sort_contact_us.php">CONTACT US</a>
	<br>
	</div>
	<hr>
<div id=main>
<table width="100%" border="1" height="100%">
<tr>
<td width="50%">
<center><h2>CONTACT DETAILS</h2></center>
<center>
<table cellpadding="2" cellspacing="4" border=3">
<tr>
<td><b>Secretary</b>
<td>Salil Kanetkar

<tr>
<td><b>Ph:</b>
<td>+919970309515 

<tr>
<td><b>Email: </b>
<td><a href="mailto:salil.kanetkar@yahoo.co.in">salil.kanetkar@yahoo.co.in</a>
<tr>
<tr>
<tr>
<td><b>Dp. Secretary</b>
<td>Grishma Mehta

<tr>
<td><b>Ph:</b>
<td>+919820630205

<tr>
<td><b>Email: </b>
<td><a href="mailto:grishmamehta@gmail.com">grishmamehta@gmail.com</a>
<tr>
<tr>
<tr>
<td><b>Dp. Secretary</b>
<td>Monica Jeshnani

<tr>
<td><b>Ph:</b>
<td>+917588722677

<tr>
<td><b>Email:</b>
<td><a href="mailto:monica.jeshnani@gmail.com">monica.jeshnani@gmail.com</a>

</table></center>
<td width="50%">
<center><h2>FEEDBACK FORM</h2></center>
<?php
// display form if user has not clicked submit
if (!isset($_POST["submit"]))
  {
  ?>
  <form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>"><center>
  <table>
  <tr>
  <td>From: <td><input type="text" name="from">
  <tr>
  <td>Subject: <td><input type="text" name="subject">
  <tr>
  <td>Message: <td><textarea rows="10" cols="40" name="message"></textarea>
  <tr>
  <td colspan="2"><center><input type="submit" name="submit" value="Submit Feedback"></center>
  </table></center>
  </form>
  </table>
  <?php
  }
else
  // the user has submitted the form
  {
  // Check if the "from" input field is filled out
  if (isset($_POST["from"]))
    {
    // Check if "from" email address is valid
    $mailcheck = spamcheck($_POST["from"]);
    if ($mailcheck==FALSE)
      {
      echo "Invalid input";
      }
    else
      {
      $from = $_POST["from"]; // sender
      $subject = $_POST["subject"];
      $message = $_POST["message"];
      // message lines should not exceed 70 characters (PHP rule), so wrap it
      $message = wordwrap($message, 70);
      // send mail
      mail("ron1tondulkar@gmail.com",$subject,$message,"From: $from\n");
      echo "<center><h3>Thank you for sending us feedback.</h3></center>";
      }
    }
  }
?>

</form>

</div>
<hr>
<footer>
<footer>
<table width="100%">
<tr>
<td width="25%"><center><h3>SoRT <font color="red">VESIT</font></h3></center>
<td width="25%"><center><h3>Our Moto:</h3></center>
<td width="25%"><center><h3>Contact Us:</h3></center>
<td width="25%"><center><h3>Feedback & queries:</h3></center>
<tr>
<td><center>Copyright © <br>
	SoRT VESIT<br>
	All Rights Reserved</center>
<td><center>"Be The Wings The World Needs"</center>
<td><center>sort.vesit@gmail.com</center>
<br><center><a href="https://www.facebook.com/groups/266293553480893/"><img src="fb.png" width="25" height="25"></a></center>
<td><center>For queries <a style="color:blue" href="sort_contact_us.php">click here</a></center>
</table>
</footer>
	</body>