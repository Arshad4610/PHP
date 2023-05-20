<html> <body><form method="post"><br><center>

<font color="coral"><h1><u>STRING PALINDROME</u></h1></font></center>

<br><table bgcolor="darkslateblue" align="center"><tr><td><br>

<input type="text" value="	Enter the String" readonly><input type="text" name="n">

</tr></td><tr><td><br><br><center><br><br>

<input type="submit" value="&nbsp;&nbsp; SUBMIT &nbsp;&nbsp;">

<br><br><br></center></tr></td></table></form>

<?php if($_POST)
{

$str=$_POST['n'];

echo '<table align="center" border="2" width="39%"><tr align="center"><td><br>'; echo '<font color="darkmengenta">';
$rev=strrev($str); if($str==$rev)
echo"<h3>The String ($str) is a Palindrome</h3>"; else
echo"<h3>The String ($str) is not a Palindrome</h3>";

}

echo"</font></td></tr></table>";

?>

</body></html>
