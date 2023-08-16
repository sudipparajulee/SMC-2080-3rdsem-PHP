<?php
// $d = date("Y-m-d");
$d = date("D");
// if($d == "Thu")
// {
//     echo "Today is Thursday";
// }

switch($d){
    case "Sun":
        echo "Today is Sunday";
        break;
    case "Mon":
        echo "Today is Monday";
        break;
    case "Tue":
        echo "Today is Tuesday";
        break;
    case "Wed":
        echo "Today is Wednesday";
        break;
    case "Thu":
        echo "Tody is Thursday";
        break;
    case "Fri":
        echo "Today is Friday";
        break;
    case "Sat":
        echo "Today is Saturday";
        break;
    default:
        echo "Invalid Day";
        break;
}

echo "<br>";

//condition for even or odd
$num = 50;
if($num%2 == 0)
{
    echo "$num is even";
}
else
{
    echo "$num is odd";
}

echo "<br>";

//function
function myfunction($a,$b){
    // echo "This is from function with message $a";
    $sum = $a + $b;
    echo "The sum is $sum";
}

// myfunction();
//function with parameter
// myfunction("hello");
myfunction(5.5,3.5);


//function with return value
function sum($a,$b)
{
    return ($a+$b);
}

$total = sum(5,6);
echo "<br>The sum is $total";



?>