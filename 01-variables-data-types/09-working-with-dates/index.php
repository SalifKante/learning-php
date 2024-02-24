<?php
/**
 * Y - The Year
 * m - The month
 * d - The day
 * D - The day of the week short name
 * l - The full day of the week name
 * h - The hour 
 * i - The minute
 * s - The second
 * a - AM/PM
 */
$output = null;

//Get Year
$output = date('Y');

//get year with timestamp
$output = date('Y',912553200);

//Get timestamp from strtotime
$output = date('Y',strtotime('1998-12-01'));

//Get the Month
$output = date('m');

//Get the Day Name
$output = date('D');

//Get the Full Day Name
$output = date('l');

// Get Year-Month-Day
$output = date('Y-m-l');

//Get The Hour
$output = date('h');

//Get The Minute
$output = date('i');

//Get The Second
$output = date('s');

//Get am/pm
$output = date('a');

//Put it all together
$output = date('Y-m-l:h:i:s a');


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>PHP From Scratch</title>
</head>

<body class="bg-gray-100">
    <header class="bg-blue-500 text-white p-4">
        <div class="container mx-auto">
            <h1 class="text-3xl font-semibold">PHP From Scratch</h1>
        </div>
    </header>
    <div class="container mx-auto p-4 mt-4">
        <div class="bg-white rounded-lg shadow-md p-6 mt-6">
            <!-- Output -->
            <p class="text-xl"><?php echo $output; ?></p>
        </div>
    </div>
</body>

</html>