<?php

session_start();

?>
<html>
<head>
<title>View Attendance</title>
</head>
<body>
<?php
	if(isset($_SESSION['day']))
	{
?>
Last Marked On: <?php echo $_SESSION['day'];?>
<?php
}
?>
<center>
<table cellspacing="3" cellpadding="3">
<tr><th>Subject</th><th>Present</th><th>Absent</th><th>Total</th><th>Percentage</th></tr>
<?php

include 'connection.php';
$q="SELECT * FROM attendance";
$r=mysql_query($q);
$num=mysql_num_rows($r);
$i=0;
while($i<$num)
{
$f1=mysql_result($r,$i,'Subject');
$f2=mysql_result($r,$i,'Present');
$f3=mysql_result($r,$i,'Absent');
$f4=mysql_result($r,$i,'Total');
$f5=mysql_result($r,$i,'Percentage');
?>
<tr align="center"><td><?php echo $f1; ?></td><td><?php echo $f2; ?></td><td><?php echo $f3; ?></td><td><?php echo $f4; ?></td><td><?php echo $f5; ?></td></tr>
<?php

$i++;
}
mysql_close($con);

?>
</body>
</html>