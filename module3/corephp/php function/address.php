<?php 
$address="150 feet ring road near alap green city behind savan signet riaya road";
echo $address;
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
            width: 50%;
            height: auto;
            padding: 15px;
            background-color: aliceblue;
            margin-top: 5%;
        }
    </style>
</head>
<body>
  
    <div class="box">
        <h1>My Addresss</h1>
        <p><?php echo $address;?> </p>
    </div>
    

</body>
</html>