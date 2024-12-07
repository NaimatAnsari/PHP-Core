<?php
// Set the default timezone to Asia/Karachi
// This ensures the date and time displayed correspond to the Pakistan Standard Time (PST).
date_default_timezone_set("Asia/Karachi");

// Add a line break for better readability in the output
echo "<br>";

// Display the current date in the format "day month year"
// 'd' = Day of the month (2 digits)
// 'm' = Month (2 digits)
// 'y' = Year (2 digits)
echo date("d m y"); 
echo "<br>";

// Display the current time in the format "hour:minute:second am/pm"
// 'h' = Hour (12-hour format)
// 'i' = Minutes
// 's' = Seconds
// 'a' = am/pm (lowercase)
echo date("h i s a");
?>
