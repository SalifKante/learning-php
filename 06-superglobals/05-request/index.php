<?php
$name = '';
$age = '';
$isSubmited = false;
if($_SERVER['REQUEST_METHOD'] == 'POST'){
  $name = $_REQUEST['name'];
  $age = $_REQUEST['age'];
  $isSubmited = true;
}
?>
<form method="post">
  <div>
    <label for="name">Name:</label>
    <input type="text" name="name" id="name">
  </div>
  <div>
    <label for="age">Age:</label>
    <input type="text" name="age" id="age">
  </div>
  <input type="submit" name="submit" value="Submit">
</form>
<?php if($isSubmited): ?> 
<div>
  <p>
    <strong>Name: <?= $name ?> </strong>
  </p>
  <p>
    <strong>Age: <?= $age ?> </strong>
  </p>
</div>
<?php endif; ?> 
