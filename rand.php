<html>
<head>
<form method="post" action="">
First number:<input type="text" name="n1"><br>
Second number:<input type="text" name="n2"><br>
<input type="submit" value="submit" name="submit">
</body>
</html>
<?php
if(isset($_POST['submit']))
{
$v1=$_POST['n1'];
$v2=$_POST['n2'];
echo"<br>";
echo "any random number between ",$v1," and ",$v2," is: ",rand($v1,$v2);
echo"<br>";
}
?>
