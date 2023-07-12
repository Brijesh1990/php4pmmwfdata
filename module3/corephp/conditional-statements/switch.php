<?php 

$grade="U";
switch($grade)
{
    case 'A':
        echo "I am topper &#9786";
        break;


case 'B':
    echo "I am average &#9786";
    break;     

    
    case 'C':
        echo "I am failed &#9785";
        break;

 default :

    echo "your grade is not found anywhere please try again";
    break;
}


?>