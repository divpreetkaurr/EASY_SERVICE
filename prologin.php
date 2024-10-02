<?php
include_once 'header.php';
include_once 'dbconn.php';

if(isset($_POST['submit']))
{
  $user=$_POST['email'];
  $pass=$_POST['psw'];
$sql="select * from professional where email='$user'";
     $result=mysqli_query($conn,$sql) or die(mysqli_error($conn));
    $row=mysqli_fetch_assoc($result);
       if (empty($row)) {
    	$status="User does not exist";
    	echo '<script type="text/javascript">alert("'.$status.'")</script>';
    }
    else
    {
      $password=$row['password'];
      $userid=$row['id'];  
	    if ($password==$pass) {
	        header('Location:home.php?userid='.$userid);  
	    }
	    else{
	        $status="Username or Password is incorrect!";
	        echo '<script type="text/javascript">alert("'.$status.'")</script>';
	    }
	}
}
?>

<section class="formpage">
    <div class="leftside-formpage2">

    <div class="advertisement2">
          <p class="para10"><img src="content/coupon.png" alt="logo"><a href="#"> Offer for first time user</a></p>
          </div>
      <div class="advertisement2">
          <p class="para10"><img src="content/discount.png" alt="logo"><a href="#"> Save 10% on every order</a></p>
          </div>
      <div class="advertisement2">
          <p class="para10"><img src="content/discount.png" alt="logo"><a href="#"> Discount of multiple</a></p>
           </div>

    </div>
    <div class="rightside-formpage">
    <form class="modal-content" method="post">
    <div class="container">
      <h1> Professional Log in </h1> 
      <p>Login with your existing account.</p>
      <hr>
      <label for="email"><b>Email/Username</b></label>
      <input type="text" placeholder="Enter Email" name="email" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>


      

      <label style="margin-right: 205px;">
        <input type="checkbox"  name="remember" style="margin-bottom:10px; margin-top: 20px;"> Remember me
       
      </label>

      <div>

      	<input type="checkbox">By logging you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a></label>
      
      </div>
      <hr>

      <div class="sub">
        <button type="button" class="cancelbtn">Cancel</button>
        <button type="submit" class="loginbtn" name="submit">Log in</button>
      </div>
    </div>
  </form>
    </div>
</section>

<?php
include_once 'footer.php';

?>