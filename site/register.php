    <?php
    include("header.php");
    ?>
    <?php
    include("navBarLogin.php");
    ?>


<div class="container-fluid">
    <section class="container">
    <div class="container-page">        
      <div class="col-md-6">
        <h3 class="dark-grey">Registration</h3>
        
        <div class="form-group col-lg-12">
          <label>Username</label>
          <input type="" name="" class="form-control" id="" value="">
        </div>
        
        <div class="form-group col-lg-6">
          <label>Password</label>
          <input type="password" name="" class="form-control" id="" value="">
        </div>
        
        <div class="form-group col-lg-6">
          <label>Repeat Password</label>
          <input type="password" name="" class="form-control" id="" value="">
        </div>
                
        <div class="form-group col-lg-6">
          <label>Email Address</label>
          <input type="" name="" class="form-control" id="" value="">
        </div>
        
        <div class="form-group col-lg-6">
          <label>Confirm Email Address</label>
          <input type="" name="" class="form-control" id="" value="">
        </div>      
        
        <div class="col-sm-6">
          <label class="age_box"><input type="checkbox" class="checkbox check_age" />Sign up for our newsletter</label>
        </div>
        <form>
        <div class="col-sm-6" >
          <label class="age_box"><input type="checkbox" class="checkbox check_age" />Confirm you are 18 and over</label> 
        </div>        
        </form>
      </div>
    
      <div class="col-md-6">
        <h3 class="dark-grey">Terms and Conditions</h3>
        <p>
          By clicking on "Register" you agree to BigTool's Terms and Conditions
        </p>
        <p>
          While rare, prices are subject to change based on exchange rate fluctuations - 
          should such a fluctuation happen, we may request an additional payment. You have the option to request a full refund or to pay the new price. (Paragraph 13.5.8)
        </p>
        <p>
          Should there be an error in the description or pricing of a product, we will provide you with a full refund (Paragraph 13.5.6)
        </p>
        <p>
          Acceptance of an order by us is dependent on our suppliers ability to provide the product. (Paragraph 13.5.6)
        </p>
        
        <a href="loginSignup.php" type="submit" class="btn btn-primary">Register</a>
      </div>
    </div>
  </section>
</div><br><br><br><br><br><br>
<?php
    include("footer.php");
    ?>