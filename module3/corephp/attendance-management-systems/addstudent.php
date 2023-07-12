<!-- ajax called here -->

<script type="text/javascript">
function str(val)
{
  $.ajax({
    type:"POST", 
    url:"data.php",
    data:"countryid="+val,
   
    success:function(data)
    {
      //alert('hi')
      $("#st").html(data);

    }
})

}

function str1(val)
{
  $.ajax({
    type:"POST", 
    url:"data.php",
    data:"st="+val,
   
    success:function(data)
    {
      //alert('hi')
      $("#ct").html(data);

    }
})

}
</script>


<div class="modal" tabindex="-1" id="addstudent">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Add student</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body p-5">
        
<div class="mb-3">
<label for="exampleFormControlInput1" class="form-label">Email address</label>
<input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
</div>

<div class="mb-3">
<label for="exampleFormControlInput1" class="form-label">Password</label>
<input type="password" class="form-control" id="exampleFormControlInput1" placeholder="password">
</div>

<div class="mb-3">
<label for="exampleFormControlInput1" class="form-label">Confirm Password</label>
<input type="password" class="form-control" id="exampleFormControlInput1" placeholder="confirm password">
</div>

<div class="mb-3">
<label for="exampleFormControlInput1" class="form-label">Phone</label>
<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="phone">
</div>


<div class="mb-3">
<label for="exampleFormControlTextarea1" class="form-label">Address</label>
<textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
</div>

<!-- country , state and its city  fetch by without page refresh there we applied ajax 
ajax : asynchrounous javascript and xml 
ajax are used to reload data from server without page refresh
-->

<div class="mb-3">
<label for="exampleFormControlTextarea1" class="form-label">select country</label>
<select name="txt_country" class="form-control" id="countryid" onchange="return str(this.value)">
<option value="">-select country-</option>
<?php 
$select="select * from student_addcountry";
$exe=mysqli_query($con,$select);
while($fetch=mysqli_fetch_array($exe))
{
?>
<option value="<?php echo $fetch["countryid"];?>"><?php echo $fetch["countryname"];?></option>
<?php 
}
?>
</select>
</div>


<div class="mb-3">
<label for="exampleFormControlTextarea1" class="form-label">select state</label>
<select name="txt_state" class="form-control" id="st" onchange="return str1(this.value)">
<option value="">-select state-</option>

</select>
</div>



<div class="mb-3">
<label for="exampleFormControlTextarea1" class="form-label">select city</label>
<select name="txt_city" class="form-control" id="ct">
<option value="">-select city-</option>

</select>
</div>




<!-- 
<div class="mb-3">
<label for="exampleFormControlTextarea1" class="form-label">select state</label>
<select name="txt_state" class="form-control" id="exampleFormControlTextarea1">
<option value="">-select state-</option>
<?php 
$select="select * from student_addstate";
$exe=mysqli_query($con,$select);
while($fetch=mysqli_fetch_array($exe))
{
?>
<option value="<?php echo $fetch["state_id"];?>"><?php echo $fetch["statename"];?></option>
<?php 
}
?>
</select>
</div>

<div class="mb-3">
<label for="exampleFormControlTextarea1" class="form-label">select city</label>
<select name="txt_city" class="form-control" id="exampleFormControlTextarea1">
<option value="">-select city-</option>
<?php 
$select="select * from student_addcity";
$exe=mysqli_query($con,$select);
while($fetch=mysqli_fetch_array($exe))
{
?>
<option value="<?php echo $fetch["city_id"];?>"><?php echo $fetch["cityname"];?></option>
<?php 
}
?>
</select>
</div> -->


</div>
<div class="modal-footer">
<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
<button type="button" class="btn btn-primary">Register here</button>
</div>
</div>
</div>
</div>
