<?php 
// A function is a block of codes that can be used to completed any task there we used function
function address()
{

$address="150 feet ring road near alap green city behind savan signet riaya road";
echo $address;
}

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
    <style>
        .box 
        {
            width: 40%;
            height: auto;
            padding: 15px;
            background-color: aliceblue;
            margin-top: 5%;
            float:left;
            margin:5px;
        }
    </style>
</head>
<body>
  
    <div class="box">
        <h1>My Addresss</h1>
        <p><?php address(); ?> </p>
    </div>
    

    <div class="box">
        <h1>My Addresss</h1>
        <p><?php address(); ?> </p>
    </div>
    

</body>
</html>