<?php 

$fname=$_POST['fname'];
$lname=$_POST['lname'];
$fnum=$_POST['fnum'];
$lnum=$_POST['lnum'];
$div=$fnum/$lnum;
echo "<p> welcome: $fname    $lname <br></p>";
echo" the division of $fnum / $lnum is : $div";
 ?>