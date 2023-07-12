<?php 
// conditional statements are used where we check true and false
// conditions within another condition or if within another if that is called nested if

// syntax 

// if(conditions)
// {
//    if(condition)
//    {
//     statements;
// }
// }
// else 
// {
//     statements;
// }

$a=10;
$b=5;
if($a>$b)
{
    if($a!=0 && $b!=0)
    {
    echo "a is greter than b and both are positive numbers";
}
}
else 
{
    echo "a is smaller than b";
}



?>

