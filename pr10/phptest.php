<?php
$name = "Tom";            
$age = 21;                
$marks = 85.5;            
$isStudent = true;        


echo "Name: $name <br>";
echo "Age: $age <br>";
echo "Marks: $marks <br>";
echo "Is Student: " . ($isStudent ? "Yes" : "No") . "<br><br>";


$total = $marks + 15;     
echo "Total Marks after bonus: $total <br>";


if ($marks > 50) {
    echo "You have passed the exam.<br>";
} else {
    echo "You have failed the exam.<br>";
}


$fruits = array("Apple", "Banana", "Orange", "Mango"); 
$marks_subjects = array(
    "Math" => 90,
    "Science" => 85,
    "English" => 88
); 


echo "<br>Fruits List:<br>";
foreach ($fruits as $fruit) {
    echo "- $fruit <br>";
}

echo "<br>Marks in subjects:<br>";
foreach ($marks_subjects as $subject => $mark) {
    echo "$subject: $mark <br>";
}


echo "<br>Checking top marks:<br>";
if ($marks_subjects["Math"] > 80) {
    echo "Excellent in Math!<br>";
}

echo "<br>Loop example (1 to 5):<br>";
for ($i = 1; $i <= 5; $i++) {
    echo "Number: $i <br>";
}

echo "<br>While loop example:<br>";
$j = 1;
while ($j <= 3) {
    echo "Counter: $j <br>";
    $j++;
}
?>
