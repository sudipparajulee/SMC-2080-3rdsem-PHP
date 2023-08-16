<?php
//syntax
echo "hello";

//this is single line comment
/* this is 
multiline
comment
*/

echo "<br>";
//variable declaration
$a = 2;
$b = 3.5;
$sum = $a + $b;

echo 'The sum of $a and $b is $sum';
echo "<br>";
echo "The sum of <b>$a</b> and <strong>$b</strong> is <i>$sum</i>";

//array
$fruits = array("Apple","Banana","Mango");

for($i=0; $i<count($fruits); $i++)
{
    echo "<br>$fruits[$i]";
}

foreach($fruits as $fruit)
{
    echo "<br>$fruit";
}

?>