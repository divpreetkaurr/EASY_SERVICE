<?php
include_once 'header.php';
include_once 'dbconn.php';
if(isset($_POST['submit']))
{
  $name=$_POST['name'];
  $email=$_POST['email'];
  $pass=$_POST['psw'];
  $address=$_POST['address'];
  $zipcode=$_POST['postal'];
  $sql="insert into customer values('','$name','$email','$pass','$address','$zipcode')";
  $test=mysqli_query($conn,$sql) or die(mysqli_error($conn));
  if($test)
  {
    echo 'Registration was successfull';
    header('Location:login.php');
  }

}
?>
<section class="formpage">
    <div class="leftside-formpage">
      
      <div class="advertisement">
          <p class="para10"><img src="content/coupon.png" alt="logo"><a href="#"> Offer for first time user</a></p>
          </div>
      <div class="advertisement">
          <p class="para10"><img src="content/discount.png" alt="logo"><a href="#"> Save 10% on every order</a></p>
          </div>
      <div class="advertisement">
          <p class="para10"><img src="content/discount.png" alt="logo"><a href="#"> Discount of multiple</a></p>
           </div>
      <div class="advertisement">
          <p class="para10"><img src="content/coupon.png" alt="logo"><a href="#"> Get $5 voucher on refferals</a></p>
          </div>
      <div class="advertisement">
          <p class="para10"><img src="content/discount.png" alt="logo"><a href="#"> 10% Extra cashback on amount above $99.</a></p>
          
      </div>
      

  

    </div>
    <div class="rightside-formpage">
    <form class="modal-content" method="post" action="#">
    <div class="container2">
      <h1>Sign Up</h1>
      <p>Please fill in this form to create an account.</p>
      <hr>
      <label for="email"><b>Email</b></label>
      <input type="text" placeholder="Enter Email" name="email" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>

     <div>
        <label for="street-address"><b>Street address</b></label>
        <input type="text" name="address" required placeholder="House/Flat, Street 1, Street 2, Area/Block/Colony"></input>
      
      </div>
      <div>
        <label for="postal-code"><b>ZIP or postal code</b> (optional)</label>
        <input type="text" name="postal" class="postal-code">
      </div>
      <div>
        <label for="name"><b>Full Name</b></label>
        <input required type="text" name="name" placeholder="enter your full name">
      </div>
      <label>
        <input type="checkbox"  name="remember" style="margin-bottom:10px; margin-top: 20px;"> Remember me
        <span style="padding-left: 10px;">Already have an account  <a href="#">Login</a></span> 
      </label>

      <div>
      <span><input type="checkbox">By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a></span>
      </div>

      <div class="sub">
        <button type="reset" name="reset" class="cancelbtn">Cancel</button>
        <button type="submit"  name="submit"  class="signupbtn loginbtn">Sign Up</button>
      </div>
    </div>
  </form>
    </div>
</section>

<?php
include_once 'footer.php';

?>