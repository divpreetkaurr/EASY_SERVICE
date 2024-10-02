<?php
include_once 'header.php';
$sqlcategory ="select * from services";
$result=mysqli_query($conn,$sqlcategory) or die(mysqli_error($conn));
if(isset($_POST['submit']))
{
	$state=$_POST['states'];
	$city = $_POST['city'];
	$sqlstate="select states from states where stateid = ".$state;
	$resultstate = mysqli_query($conn,$sqlstate);
	$rowstate = mysqli_fetch_assoc($resultstate);
	$sqlcity="select cityname from cities where cityid = ".$city;
	$resultcity = mysqli_query($conn,$sqlcity);
	$rowcity = mysqli_fetch_assoc($resultcity);
?>
        <section class="content-cat">
            	<br> <span style="margin-left:5%; font-size:large;">State Selected : 
<?php

echo $rowstate['states'];
	?> </span><span style="margin-left:5%; font-size:large;">City Selected :
<?php
	echo $rowcity['cityname']."<br>";
}
	?>
 </span><span style="float:right; font-size:small;"><a href="home.php">Go Back To Change/Select City-State</a></span>
            <p class="para5">Women Services
            </p>
	        <div class="grid-container">
		<?php
			$count=0;
			$test = 1;
			while($row=mysqli_fetch_row($result))
			{
				if($count < 4)
				{
				echo '<div><img src="content/'.$row[2].'"><a href="'.$row[4].'"><p>'.$row[1].'</p></a></div>';
				$count++;				
				}
				else{
					echo ' </div>';
					if($test==1)
						echo '<p class="para5">Men Services.</p>';
					else if($test ==2)
						echo '<p class="para5">Other Services.</p>';
					else if($test==3)
						echo '<p class="para5">Extra Services.</p>';

						$test++;
					echo '<div class="grid-container">';
					echo '<div><img src="content/'.$row[2].'"><a href="'.$row[4].'"><p>'.$row[1].'</p></a></div>';
					$count=1;
				}
			}
			?>
			</div>
        </section>






<?php
include_once 'footer.php';
?>