<?php 
// if elseif is used to check multiple conditions at once time if conditions is true elseif executed multiple times otherwise else is executed

// if(condition)
// {
//     statements;
// }
// elseif(condition)
// {
//     statements;
// }
// else 
// {
//     statements;
// }

$a=12;
$b=12;
if($a>$b)
{
    echo "a is greter than b";
}
elseif($b>$a)
{
    echo "b is greter than a";
}
else 
{
echo "a and b both are positive";
}
?>