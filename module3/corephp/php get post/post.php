<?php 
if(isset($_POST["sub"]))
{
    $nm=$_POST["name"];
    echo $nm;
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
</head>
<body>
    
    <!-- <?php 
       $name="Brijesh";
       echo $name;
    ?> -->
    <form method="post">
        <!-- 
             post is  secured pass data in url
             post is  able to send senstive data
             post is  able to send more than 2mb data   
        -->

        <input type="text" name="name" placeholder="Enter name *" required>
        <br><br>
        <input type="submit" name="sub" value="Check">

    </form>
</body>
</html>