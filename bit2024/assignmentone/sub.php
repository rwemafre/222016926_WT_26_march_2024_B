<?php 
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$fnum=$_POST['fnum'];
$lnum=$_POST['lnum'];
$minus=$fnum-$lnum;
echo "<p> welcome: $fname    $lname <br></p>";
echo "subtraction of $fnum - $lnum is = $minus";

 ?>