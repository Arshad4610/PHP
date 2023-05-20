HTML FILENAME: Fact.html

<html>

<body bgcolor="darkkhaki">

<form action="factorial.php" method="post">

<center><br><br><br><br><br><br>

<table align="center" border="2" width="30%">

<tr align="center" bgcolor="darkblue"><td><font color="white"><br><h1>FACTORIAL</h1></td></tr>
<tr bgcolor="chocolate"><td><br><br><br>&nbsp;&nbsp;&nbsp;&nbsp;

<font face="arial" size="6" color="white">Enter the Digit:</font>

<input type="text" name="n" size="15">

<br><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&n bsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&n bsp;&nbsp;
<input type="submit" value="&nbsp;&nbsp;&nbsp; SEND &nbsp;&nbsp;&nbsp; "><br><br><br>

</td></tr></table>

</center>

</form>

</html>
--------------------------------------------------------------------------------------------------------------------------

PHP FILENAME: Factorial.php

<?php
 
$m=$_POST["n"]; function factorial($m)
{

if($m<2) return 1; else
return($m*factorial($m-1));

}

$f=factorial($m);

echo'<br><table border="2" align="center"><tr><td>';

echo'<center><font face="arial" size="15" color="crimson">FACTORIAL</font><br><br>'; echo"<b>	</b>";
echo'<font face="arial" size="10"><br>'; echo"Given Digit = $m <br>"; echo'<br><font color="green">';
echo "Factorial &nbsp;&nbsp;= $f"; echo"</center></font>"; echo'</td></tr></table>';
?>
