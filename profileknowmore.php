<?php
include_once('header.php');
if(isset($_REQUEST['id']))
{
    $id = $_REQUEST['id'];
    $sql="select * from professional where id = ".$id;
    $result =mysqli_query($conn,$sql);
    $row=mysqli_fetch_assoc($result);
    $sqlreviews ="select  *  from reviews where professionalid = ".$id;
    $resultreviews =mysqli_query($conn,$sqlreviews) or die(mysqli_error($conn));
    $sqlofferservice ="select * from service_provider where professionalid = ".$id;
    $resultofferservice =mysqli_query($conn,$sqlofferservice) or die(mysqli_error($conn));
}
if(isset($_POST['submit']))
{
    if(isset($_SESSION['userid']))
    {
        $userid =$_SESSION['userid'];
        $professionalid = $row['id'];
        //echo $userid. ' '.$professionalid;
        $stars=$_POST['stars'];
        $review=$_POST['exp'];
        $sqlreview="insert into reviews values('','$stars','$review','$professionalid','$userid')";
        $resultreview =mysqli_query($conn,$sqlreview) or die(mysqli_error($conn));
        echo "Review Added Successfully";
    }
    else
    {
         echo '<script type ="text/JavaScript">';  
echo 'alert("Please Login To Give Review")';  
echo '</script>';  
    }
}
if(isset($_POST['bookservice']))
{
    $date = $_POST['date'];
    $time = $_POST['time'];
    $charges =$row['charges'];
    $profid  = $row['id'];
    $addbooking = "insert into bookings values('',now(),1,'$userid','$profid','$date','$charges','booked')";
    $resultbooking =mysqli_query($conn,$addbooking) or die(mysqli_error($conn));
    echo "Booking Is Successfull";
}
?>

<div class="pro-con">

    <div class="proinfo">
        <form name="bookingform" action ="#" method="post">
         <?php
        echo '
    <img src="content/professional/'.$row['image'].'">
    <div class="proname">
        <b>'.$row['name'].'</b>
        <div class="review">★4 (400+) </div>
        <div class="money">'.$row['charges'].'$ <span class="light">per Hour</span> <br><Br>
          </div>
        <p>Speacilist in Women Hair Cutting</p>
        <p> Select Date to Visit <input type="date" name="date"><br><br>
        Select time To Visit <input type="time" name="time"><br><br></
        <span>'.$row['about'].'<Br><br>
        <input type="submit" value = "Book Service" name="bookservice" class="book" style="padding:12px 16px;"></span>
        </form>
    </div>
    </div>

    <div class="proinfo1">
      <div class="heading">Services Provided</div>
      <div class="grid-container">
      ';
      while($rowofferservice = mysqli_fetch_row($resultofferservice))
      {
        $sqlservice1 = "select servicename from services where serviceid = ".$rowofferservice[1];
            $getservice =mysqli_query($conn,$sqlservice1);
            $service =mysqli_fetch_assoc($getservice);
        echo '<div><a href="#"><p>'.$service['servicename'].'</p></a></div>';
      }
			echo'</div>
            <div class="proinfo2">
            <div class="heading"> Customer Reviews </div>
            ';
            while($rowreviews=mysqli_fetch_row($resultreviews))
            {

           echo  '<div class="grid-container"><p style="font-size:x-large;">Customer : ';
            $sqlcustomer = "select name from customer where id = ".$rowreviews[4];
            $getcustomer =mysqli_query($conn,$sqlcustomer);
            $cust =mysqli_fetch_assoc($getcustomer);
            echo $cust['name'].'<br>

            Ratings :  '.$rowreviews[2].'

            <br>Stars : '.$rowreviews[1].'★
            </p></div>';
        }
           echo'
            </div>

            ';
            ?>
            <form action="#" method="post">
      <div class="rating">
        <h3>Give Your Review</h3>
        <div class="review">
            <label>Tell us about your experience</label>
        <textarea placeholder="write your review" name="exp"></textarea>
        <label> Select Stars</label><br>
        <select name="stars">
            <option value="1"> 1 star </option>
            <option value="2"> 2 star </option>
            <option value="3"> 3 star </option>
            <option value="4"> 4 star </option>
            <option value="5"> 5 star </option>
        </select>
        </div>
        <button class="book" type="submit" name="submit">Add Review</button>
        <button class="btn-know" type="reset">Cancel</button>
      </div>
      </form>
    </div>



</div>


<?php
include_once('footer.php');
?>