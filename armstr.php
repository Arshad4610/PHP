<html>

<body>

<form action="" method="post">

<br><center><h1><u>ARMSTRONG</u></h1></center>

<br><table bgcolor="Crimson" align="center">

<tr><td><br><input type="text" value="	Enter the Input" readonly>

<input type="text" name="n"></tr></td>

<tr><td><br><br><center><br><br>

<input type="submit" value="&nbsp;&nbsp; SUBMIT &nbsp;&nbsp;">

<br><br><br></center></tr></td></table>

</form>

<?php if($_POST)
{

$n1=$_POST["n"];

$m=$n1;

$s=0; while($n1>0)
{

$r=$n1%10;

$n1=$n1/10;

$s=$s+($r*$r*$r);
 
}

echo '<table align="center" border="2" width="38%"><tr align="center"><td><br>'; echo '<font color="Crimson">';
if($m==$s)

echo"<h2> $m is Armstrong Number</h2>"; else
echo"<h2> $m is not Armstrong Number</h2>";

}

echo'</font>'; echo'</td></tr></table>';
?>

</body>

</html>
