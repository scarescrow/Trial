<?php
session_start();

include "connection.php";

$sp=$_POST['sp'];
$tc=$_POST['tc'];
$mc=$_POST['mc'];
$os=$_POST['os'];
$adda=$_POST['adda'];
//$coa=$_POST['coa'];
$spl=$_POST['spl'];
$osl=$_POST['osl'];
$mcl=$_POST['mcl'];
$day=$_POST['day'];
$i=0;

$_SESSION['day']=$day;

if ($sp=='p')
{
	$q1="SELECT * FROM attendance WHERE Subject='sp'";
	$r1=mysql_query($q1);
	$p=mysql_result($r1,$i,"Present");
	$a=mysql_result($r1,$i,"Absent");
	$p++;
	$tot=$p+$a;
	$t=$p.'/'.$tot;
	$pe=$p*100/$tot;
	$q="UPDATE attendance SET Present='$p', Absent='$a', Total='$t', Percentage='$pe' WHERE Subject='sp'";
	$r=mysql_query($q);
}
if ($tc=='p')
{
	$q1="SELECT * FROM attendance WHERE Subject='tc'";
	$r1=mysql_query($q1);
	$p=mysql_result($r1,$i,"Present");
	$a=mysql_result($r1,$i,"Absent");
	$p++;
	$tot=$p+$a;
	$t=$p.'/'.$tot;
	$pe=$p*100/$tot;
	$q="UPDATE attendance SET Present='$p', Absent='$a', Total='$t', Percentage='$pe' WHERE Subject='tc'";
	$r=mysql_query($q);
}
if ($mc=='p')
{
	$q1="SELECT * FROM attendance WHERE Subject='mc'";
	$r1=mysql_query($q1);
	$p=mysql_result($r1,$i,"Present");
	$a=mysql_result($r1,$i,"Absent");
	$p++;
	$tot=$p+$a;
	$t=$p.'/'.$tot;
	$pe=$p*100/$tot;
	$q="UPDATE attendance SET Present='$p', Absent='$a', Total='$t', Percentage='$pe' WHERE Subject='mc'";
	$r=mysql_query($q);
}
if ($os=='p')
{
	$q1="SELECT * FROM attendance WHERE Subject='os'";
	$r1=mysql_query($q1);
	$p=mysql_result($r1,$i,"Present");
	$a=mysql_result($r1,$i,"Absent");
	$p++;
	$tot=$p+$a;
	$t=$p.'/'.$tot;
	$pe=$p*100/$tot;
	$q="UPDATE attendance SET Present='$p', Absent='$a', Total='$t', Percentage='$pe' WHERE Subject='os'";
	$r=mysql_query($q);
}
if ($adda=='p')
{
	$q1="SELECT * FROM attendance WHERE Subject='adda'";
	$r1=mysql_query($q1);
	$p=mysql_result($r1,$i,"Present");
	$a=mysql_result($r1,$i,"Absent");
	$p++;
	$tot=$p+$a;
	$t=$p.'/'.$tot;
	$pe=$p*100/$tot;
	$q="UPDATE attendance SET Present='$p', Absent='$a', Total='$t', Percentage='$pe' WHERE Subject='adda'";
	$r=mysql_query($q);
}
/*if ($coa=='p')
{
	$q1="SELECT * FROM attendance WHERE Subject='COA'";
	$r1=mysql_query($q1);
	$p=mysql_result($r1,$i,"Present");
	$a=mysql_result($r1,$i,"Absent");
	$p++;
	$tot=$p+$a;
	$t=$p.'/'.$tot;
	$pe=$p*100/$tot;
	$q="UPDATE attendance SET Present='$p', Absent='$a', Total='$t', Percentage='$pe' WHERE Subject='COA'";
	$r=mysql_query($q);
}*/
if ($spl=='p')
{
	$q1="SELECT * FROM attendance WHERE Subject='SP-LAB'";
	$r1=mysql_query($q1);
	$p=mysql_result($r1,$i,"Present");
	$a=mysql_result($r1,$i,"Absent");
	$p++;
	$tot=$p+$a;
	$t=$p.'/'.$tot;
	$pe=$p*100/$tot;
	$q="UPDATE attendance SET Present='$p', Absent='$a', Total='$t', Percentage='$pe' WHERE Subject='SP-LAB'";
	$r=mysql_query($q);
}
if ($osl=='p')
{
	$q1="SELECT * FROM attendance WHERE Subject='OS-LAB'";
	$r1=mysql_query($q1);
	$p=mysql_result($r1,$i,"Present");
	$a=mysql_result($r1,$i,"Absent");
	$p++;
	$tot=$p+$a;
	$t=$p.'/'.$tot;
	$pe=$p*100/$tot;
	$q="UPDATE attendance SET Present='$p', Absent='$a', Total='$t', Percentage='$pe' WHERE Subject='OS-LAB'";
	$r=mysql_query($q);
}
if ($mcl=='p')
{
	$q1="SELECT * FROM attendance WHERE Subject='MC-LAB'";
	$r1=mysql_query($q1);
	$p=mysql_result($r1,$i,"Present");
	$a=mysql_result($r1,$i,"Absent");
	$p++;
	$tot=$p+$a;
	$t=$p.'/'.$tot;
	$pe=$p*100/$tot;
	$q="UPDATE attendance SET Present='$p', Absent='$a', Total='$t', Percentage='$pe' WHERE Subject='MC-LAB'";
	$r=mysql_query($q);
}
if ($sp=='a')
{
	$q1="SELECT * FROM attendance WHERE Subject='SP'";
	$r1=mysql_query($q1);
	$p=mysql_result($r1,$i,"Present");
	$a=mysql_result($r1,$i,"Absent");
	$a++;
	$tot=$p+$a;
	$t=$p.'/'.$tot;
	$pe=$p*100/$tot;
	$q="UPDATE attendance SET Present='$p', Absent='$a', Total='$t', Percentage='$pe' WHERE Subject='SP'";
	$r=mysql_query($q);
}
if ($tc=='a')
{
	$q1="SELECT * FROM attendance WHERE Subject='TC'";
	$r1=mysql_query($q1);
	$p=mysql_result($r1,$i,"Present");
	$a=mysql_result($r1,$i,"Absent");
	$a++;
	$tot=$p+$a;
	$t=$p.'/'.$tot;
	$pe=$p*100/$tot;
	$q="UPDATE attendance SET Present='$p', Absent='$a', Total='$t', Percentage='$pe' WHERE Subject='TC'";
	$r=mysql_query($q);
}
if ($mc=='a')
{
	$q1="SELECT * FROM attendance WHERE Subject='MC'";
	$r1=mysql_query($q1);
	$p=mysql_result($r1,$i,"Present");
	$a=mysql_result($r1,$i,"Absent");
	$a++;
	$tot=$p+$a;
	$t=$p.'/'.$tot;
	$pe=$p*100/$tot;
	$q="UPDATE attendance SET Present='$p', Absent='$a', Total='$t', Percentage='$pe' WHERE Subject='MC'";
	$r=mysql_query($q);
}
if ($os=='a')
{
	$q1="SELECT * FROM attendance WHERE Subject='OS'";
	$r1=mysql_query($q1);
	$p=mysql_result($r1,$i,"Present");
	$a=mysql_result($r1,$i,"Absent");
	$a++;
	$tot=$p+$a;
	$t=$p.'/'.$tot;
	$pe=$p*100/$tot;
	$q="UPDATE attendance SET Present='$p', Absent='$a', Total='$t', Percentage='$pe' WHERE Subject='OS'";
	$r=mysql_query($q);
}
if ($adda=='a')
{
	$q1="SELECT * FROM attendance WHERE Subject='ADDA'";
	$r1=mysql_query($q1);
	$p=mysql_result($r1,$i,"Present");
	$a=mysql_result($r1,$i,"Absent");
	$a++;
	$tot=$p+$a;
	$t=$p.'/'.$tot;
	$pe=$p*100/$tot;
	$q="UPDATE attendance SET Present='$p', Absent='$a', Total='$t', Percentage='$pe' WHERE Subject='ADDA'";
	$r=mysql_query($q);
}
/*if ($coa=='a')
{
	$q1="SELECT * FROM attendance WHERE Subject='COA'";
	$r1=mysql_query($q1);
	$p=mysql_result($r1,$i,"Present");
	$a=mysql_result($r1,$i,"Absent");
	$a++;
	$tot=$p+$a;
	$t=$p.'/'.$tot;
	$pe=$p*100/$tot;
	$q="UPDATE attendance SET Present='$p', Absent='$a', Total='$t', Percentage='$pe' WHERE Subject='COA'";
	$r=mysql_query($q);
}*/
if ($mcl=='a')
{
	$q1="SELECT * FROM attendance WHERE Subject='MC-LAB'";
	$r1=mysql_query($q1);
	$p=mysql_result($r1,$i,"Present");
	$a=mysql_result($r1,$i,"Absent");
	$a++;
	$tot=$p+$a;
	$t=$p.'/'.$tot;
	$pe=$p*100/$tot;
	$q="UPDATE attendance SET Present='$p', Absent='$a', Total='$t', Percentage='$pe' WHERE Subject='MC-LAB'";
	$r=mysql_query($q);
}
if ($osl=='a')
{
	$q1="SELECT * FROM attendance WHERE Subject='OS-LAB'";
	$r1=mysql_query($q1);
	$p=mysql_result($r1,$i,"Present");
	$a=mysql_result($r1,$i,"Absent");
	$a++;
	$tot=$p+$a;
	$t=$p.'/'.$tot;
	$pe=$p*100/$tot;
	$q="UPDATE attendance SET Present='$p', Absent='$a', Total='$t', Percentage='$pe' WHERE Subject='OS-LAB'";
	$r=mysql_query($q);
}
if ($mcl=='a')
{
	$q1="SELECT * FROM attendance WHERE Subject='MC-LAB'";
	$r1=mysql_query($q1);
	$p=mysql_result($r1,$i,"Present");
	$a=mysql_result($r1,$i,"Absent");
	$a++;
	$tot=$p+$a;
	$t=$p.'/'.$tot;
	$pe=$p*100/$tot;
	$q="UPDATE attendance SET Present='$p', Absent='$a', Total='$t', Percentage='$pe' WHERE Subject='MC-LAB'";
	$r=mysql_query($q);
}
echo "Your attendance has been updated";
header('location:index.html');

?>
