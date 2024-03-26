<?php 
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$fnum=$_POST['fnum'];
$lnum=$_POST['lnum'];
$multi=$fnum*$lnum;
echo "<p> welcome: $fname    $lname <br></p>";
echo "product of $fnum * $lnum is = $multi";

 ?>