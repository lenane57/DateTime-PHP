<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Current Date Time</title>
  </head>
<body>

<?php
// Return today date.
echo "Today is " . date("Y/m/d") . "<br>";
echo "Today is " . date("Y.m.d") . "<br>";
echo "Today is " . date("Y-m-d") . "<br>";
echo "Today is " . date("l"."<br>");

// Return date/time info of a timestamp; then format the output
$mydate=getdate(date("U"));

echo "<br> $mydate[month] $mydate[mday], $mydate[year]";

?>

</body>
</html>
