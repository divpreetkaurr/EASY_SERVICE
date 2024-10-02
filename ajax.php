<?php
include_once('dbconn.php');
if (isset($_POST['stateid'])) {
	$stateid=$_POST['stateid'];
	echo "<option>Select Cities</option>";
	$res=mysqli_query($conn,"select * from cities where stateid='$stateid'");
	while ($data=mysqli_fetch_assoc($res)) {
		echo '<option value="'.$data['cityid'].'">'.$data['cityname'].'</option>';
	}
}

if (isset($_POST['cityid'])) {
	$cityid=$_POST['cityid'];
    echo 'hi';
    header("location:categories.php?$cityid");
}
?>