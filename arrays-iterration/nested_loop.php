
<?php
    // for ($i=0; $i < 10; $i++) {
    //     for ($j=0; $j <5 ; $j++) { 
    //         echo $i .' - '. $j .'<br />';
    //     }
    // }
    
    // $a = 0;
    // while ($a <= 10) {
    //     $b = 0;
    //     while ($b <= 10) {
    //         echo $a .' - '. $b . '<br />';
    //         $b++;
    //     }
    //     $a++;
    // }

    $names = array("Salif Kante", "Omar Sissoko", "Ousman Diallo");
    $users = [
        ['name'=> 'Salif','email'=> 'kantsalif1@gmil.com','password'=> '123456'],
        ['name'=> 'Omar','email'=> 'omar@gmil.com','password'=> '123456'],
        ['name'=> 'Ousman','email'=> 'ousman@gmil.com','password'=> '123456'],
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nested-Loop PHP</title>
    <style>
        .grid-container{
            display: grid;
            grid-template-columns: repeat(5, 50px); /* Create 5 colums, each 50px wide */
            grid-gap: 5px; /* Add some spacing between grid items */
        }
        .grid-item{
            width: 50px;
            height: 50px;
            background-color: lightblue;
            text-align: center;
            line-height: 50px;
        }
    </style>
</head>
<body>
    <div class="grid-container">
        <?php for ($i=0; $i < 5; $i++):?>
            <?php for ($j=0; $j < 5; $j++):?>
                <div class="grid-item">
                     <?=  $i .' - '. $j; ?>
                </div>
            <?php endfor ?>
        <?php endfor ?>
    </div>
    <h3>Using a For Loop</h3>
    <ul>
        <?php for ($i=0; $i < count($names); $i++): ?>
            <li> <?=  $names[$i]; ?> </li>
        <?php endfor; ?>
    </ul>

    <h3>Using a ForEach Loop</h3>
    <ul>
        <?php foreach ($names as $name): ?>
            <li><?= $name ?></li>
        <?php endforeach; ?>
    </ul>
    <h3>Using a ForEach Loop With Index </h3>
    <ul>
        <?php foreach ($names as $index=>$name): ?>
            <li><?= $index .' : '. $name ?></li>
        <?php endforeach; ?>
    </ul>

    <h3>Using a ForEach Loop With Associative Array</h3>
    <ul>
        <?php foreach ($users as $user): ?>
            <li><?= $user['name'] .' : '. $user['email'] ?></li>
        <?php endforeach; ?>
    </ul>

    <h3>Getting Key names and Values From an Associative Array</h3>
    <ul>
        <?php foreach ($users as $user): ?>
            <?php foreach ($user as $key=>$values): ?>
                <li><?= $key .' : '. $values ?></li>
            <?php endforeach; ?>
        <?php endforeach; ?>
    </ul>
</body>
</html>