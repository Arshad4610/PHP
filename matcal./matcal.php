<?php if(isset($_POST['disp']))
{

$f=$_POST['f'];

$s=$_POST['s'];

$ch=$_POST['ch']; switch($ch)
{

case 'ADDITION':

$res=$f+$s; break;
case 'SUBTRACTION':

$res=$f-$s; break;
case 'MULTIPLICATION':

$res=$f*$s; break;
case 'DIVISION':

$res=$f/$s; break;
}

}

?>

<html>
 
<body bgcolor="gold">

<form action="" method="post">

<table align="center" border="3" width="20%"><br><br>

<tr bgcolor="forestgreen"><td align="center" colspan="2">

<font color="white" face="arial black" size="5">CALCULATOR</font></td></tr>

<tr><td><input type="button" value="Enter First Input "></td>

<td><input type="text" name="f"></td></tr>

<tr><td><input type="button" value="Enter Second Input"></td>

<td><input type="text" name="s"></td></tr>

<tr><td><input type="button" value="Select Your Choice"></td>

<td><center><select name="ch">

<option>ADDITION</option>

<option>SUBTRACTION</option>

<option>MULTIPLICATION</option>

<option>DIVISION</option>

</center></select></td></tr>

<tr><td><input type="submit" value="	RESULT	" name="disp"></td>

<td><input type="text" value="<?php echo @$res; ?>" readonly="true"/>

</td>
</tr>
</table>

</body>
</html>
