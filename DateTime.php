<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Current Date Time</title>
  </head>
<body>

<?php
// Return today date in different date formats.
echo "Today is " . date("Y/m/d") . "<br>";
echo "Today is " . date("Y.m.d") . "<br>";
echo "Today is " . date("Y-m-d") . "<br>";
echo "Today is " . date("l"."<br>");

// Return date/time info of a timestamp; then format the output
$mydate=getdate(date("U"));

echo "<br> $mydate[month] $mydate[mday], $mydate[year]<br>";

//this tells the current time for the regoin of Dublin Ireland
//you'll need to change "Europe/Dublin" to the region of your choice

date_default_timezone_set("Europe/Dublin");
echo "The time is " . date("H:i:s")."<br>";

?>

© 2010-<?php echo date("Y");?>

</body>
</html>
