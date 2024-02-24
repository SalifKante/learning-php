<?php
/*
Challenge  1: Sum of an array
    1. Create an array of numbers.
    2. Get the sum of all of the number combined and put it into a variable.
    3. Get the amount of numbers in the array and put it into a variable.
    4.Print out 'The sum of the {amount} numbers is: {sum} '. For example, if 
        the array is [1,2,3,4,5], the output should be 'The sum of the number 5 is 15'
*/
/*
echo '<h3>Sum of an array</h3>';
function inspect($value){
    echo'<pre>';
        var_dump($value);
    echo'</pre>';
}
$arr = [12,25,36,36,9];
$sum = array_sum($arr);
$amount = count($arr);
*/

/*
Challenge  2: Colors Array
    1. Reverse the `colors` array.
    2. Add 'purple and 'orange' at the end of the array.
    3. Replace the second color with 'pink'.
    4. Remove the last element of the array. 
    You should end up with the following array: ['yellow', 'pink', 'blue', 'red', 'purple']
*/
/*
echo '<h3>Colors Array</h3>';

$colors = ['red', 'blue', 'green', 'yellow'];
$colors = array_reverse($colors);
// array_push($colors, 'purple');
// array_push($colors, 'orange');

//Using array_merge method
$colors = array_merge($colors, ['purple','orange']);
$colors[1] ='pink';
array_pop($colors);
*/

/*
Challenge 3: Job Listing
    1. Create a multi dimentional array of associative arrays of 3 job listings with the fields id,
         job_title, company, contact_email, and contact_phone. Also add an array field for skills.
         The skills array should be an array of strings with each skill a person has. For example
         'PHP', 'MySQL', 'JavaScript', 'HTML', 'CSS', etc... 
    2. Create a new listing using the `array_push()` function. The new listing should
        have the same fields as others
    3. Print out the job_title of the second job lsiting in the array
    4. Print out the first skill of the third job lsiting in the array 


*/
/*
echo '<h3>Job Listing</h3>';

function inspect($value){
    echo'<pre>';
        var_dump($value);
    echo'</pre>';
}
$job_lists = [
    ['id'=>'1',
     'job_title'=>'Junior Web Dev',
     'company'=>'Google',
     'contact_email' => 'google@gmail.com',
     'contact_phone' => '2363636363',
     'skills' => ['PHP', 'MySQL', 'JavaScript', 'HTML', 'CSS']
    ],
    ['id'=>'2',
    'job_title'=>'Senior Web Dev',
     'company'=>'Yandex',
     'contact_email' => 'yandex@gmail.com',
     'contact_phone' => '2363636363',
     'skills' => ['PHP', 'MySQL', 'JavaScript', 'HTML', 'CSS']
    ],
    ['id'=>'3',
     'job_title'=>'Data Science',
     'company'=>'Yandex',
     'contact_email' => 'yandex@gmail.com',
     'contact_phone' => '2363636363',
     'skills' => ['PHP', 'MySQL', 'JavaScript', 'HTML', 'CSS', 'Python']
    ]
];
array_push($job_lists, ['id'=>'4', 'job_title'=>'Web Developer',
     'company'=>'KanTec',
     'contact_email' => 'kantec@gmail.com',
     'contact_phone' => '2363636363',
     'skills' => ['PHP', 'MySQL', 'JavaScript', 'HTML', 'CSS']
])
<p><?php echo'<h5>'. $job_lists[0]['job_title'] .'</h5>'?></p>
<p><?php echo'<h5>'. $job_lists[3]['skills'][0] .'</h5>'?></p>
<p><?php inspect($job_lists) ?></p>
*/

?>
