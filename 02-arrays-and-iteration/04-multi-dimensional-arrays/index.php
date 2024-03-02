<?php
$output = null;

function format($value){
  echo '<pre>';
    print_r($value);
  echo '</pre>';
}

$fruits = [
  ['Apple', 'Red'],
  ['Orange', 'Orange'],
  ['Banna', 'Yellow'],
];

$output = $fruits[0][0];
$output = $fruits[0][1];

$fruits[] = ['Grape', 'Purple'];

$users =[
  ['name' => 'Salif', 'email' => 'salif@gmail.com', 'password' => '123456' ],
  ['name' => 'John', 'email' => 'john@gmail.com', 'password' => '123456' ],
  ['name' => 'moh', 'email' => 'moh@gmail.com', 'password' => '123456' ]
];

$users[] = ['name' => 'jack', 'email' => 'jack@gmail.com', 'password' => '123456'];

$output = $users[1]['email'];

//Delete the last user
array_pop($users);

//Delete the first user
array_shift($users);

//Delete a specific user
unset($users[0]);
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
      <p class="text-xl"><?= $output ?></p>
      <p class="text-xl"><?= format($users) ?></p>
    </div>
  </div>
</body>

</html>