<?php 
require_once("config.php");
if(isset($_POST["countryid"]))
{
    $countryid=$_POST["countryid"];
    $select="select * from student_addstate where country_id='$countryid'";
    $exe=mysqli_query($con,$select);
    while($fetch=mysqli_fetch_array($exe))
    {
        ?>
        <option value="<?php echo $fetch["state_id"];?>"><?php echo $fetch["statename"];?></option>
        <?php 
    }
}


if(isset($_POST["st"]))
{
    $st=$_POST["st"];
    $select="select * from student_addcity where state_id='$st'";
    $exe=mysqli_query($con,$select);
    while($fetch=mysqli_fetch_array($exe))
    {
        ?>
        <option value="<?php echo $fetch["city_id"];?>"><?php echo $fetch["cityname"];?></option>
        <?php 
    }
}

?>