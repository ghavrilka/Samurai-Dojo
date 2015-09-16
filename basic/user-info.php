<center><h2><b>Account Details</b></h2></center><p>

<p>Use the form below to update your account.</p>

<?php
$password = $_REQUEST["password"];
$signature = $_REQUEST["signature"];
$cid = base64_decode($_COOKIE["uid"]);
if ($password <> "") {
	$query = "UPDATE accounts SET password='" . $password . "', mysignature='" . $signature . "' WHERE cid='" . $cid . "'";
	$result = mysql_query($query) or die(mysql_error($conn) . '<p><b>SQL Statement:</b>' . $query);
	header("Location: ".$_SERVER['SCRIPT_NAME']."?page=".basename(__FILE__));
}
?>

<?php
$query = "SELECT * FROM accounts WHERE cid='". $cid ."'";
$result = mysql_query($query) or die(mysql_error($conn) . '<p><b>SQL Statement:</b>' . $query);
if (mysql_num_rows($result) > 0) {
	while($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "<form method=\"POST\" action=\"{$_SERVER['SCRIPT_NAME']}?{$_SERVER['QUERY_STRING']}\">";
		echo "<p>Password:</p><p><input type=\"password\" name=\"password\" value=\"{$row['password']}\"></p>";
		echo "<p>Signature:</p><p><input type=\"text\" name=\"signature\" value=\"{$row['mysignature']}\"></p>";
		echo "<p><input type=\"submit\" name=\"Submit_button\" value=\"Update\"></p>";
		echo "</form><p>";
	}
} else {
	echo '<font color="#ff0000">Error retrieving profile.</font>';
}
?>

<?php
// Begin hints section
if ($_COOKIE["showhints"]==1) {
	echo '<p><p><span style="background-color: #FFFF00">
	<b>For SQL Injection:</b>The old "\' or 1=1 -- " is a classic, but there are others. This just shows
	you too much info. Also try an injection like this on the <a href="?page=login.php">Login</a> page.
	<br><br>
	<b>For Session and Authentication:</b>As for playing with sessions, try a 
	<a href="https://addons.mozilla.org/en-US/firefox/addon/4510">cookie editor</a> 
	to change your UID.
	<br><br>
	<b>For XSS:</b> You may also see an XSS attack you left when you used the
	registration page.
	</span>'; 
}
// End hints section
?>
