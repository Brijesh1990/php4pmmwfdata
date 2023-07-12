<?php 
require_once("config.php");
require_once("header.php");
?>
<!-- content here -->
<div class="container mt-5 p-5">
<div class="row">
    <div class="col-md-4">
        <img src="https://i.gifer.com/OyH3.gif" class="img-fluid">
    </div>
    <div class="col-md-8">
        <h3 class="text-primary">Login here   <button type="button" class="float-end btn btn-sm btn-primary ms-4" data-bs-toggle="modal" data-bs-target="#addstudent"><span class="bi bi-plus fs-5"></span>&nbsp;Add Students</button></h3>
        <hr class="border border-1 border-primary w-100">
        <div class="mt-5">

        <!-- login form -->
            
        <form method="post">
        <div class="input-group mt-3">
           <input type="email" name="txt_email" placeholder="Enter Email *" required class="form-control">  
        </div>
        
        <div class="input-group mt-3">
           <input type="password" name="txt_pwd" placeholder="Enter Password *" required class="form-control">  
        </div>

        
        <div class="input-group mt-5">
           <input type="submit" name="txt_login" value="SignIn" class="btn btn-primary btn-lg">
           <b class="ms-3"><a href="forgetpassword.php">Forget Password ?</a></b>  
        </div>

        <div class="input-group mt-5">
          
           <b class="ms-1">Don't have account ?<a href="#"  data-bs-toggle="modal" data-bs-target="#addstudent">Create your account ?</a></b>  
        </div>
      
       </form>
    
    
    </div> 

    </div>
</div>
</div>

<?php 
require_once("addstudent.php");

?>