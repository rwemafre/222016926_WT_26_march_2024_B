<?php 

$fname=$_POST['fname'];
$lname=$_POST['lname'];
$fnum=$_POST['fnum'];
$lnum=$_POST['lnum'];
$sum=$fnum+$lnum;
echo "<p> welcome: $fname    $lname <br></p>";
echo" the total sum of $fnum + $lnum is : $sum";
 ?>