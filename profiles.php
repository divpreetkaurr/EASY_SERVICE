<?php
include_once 'header.php';
$sqlquery = "select * from professional";
$result =mysqli_query($conn,$sqlquery);
?>
<div class="profiles">Our Professonals Team</div>
<div class="profile">
    <?php
    while($row=mysqli_fetch_row($result))
    {
        echo ' <div class="profile-card">
        <div class="profile-cardphoto"><img src="content/professional/'.$row[6].'" alt="profile"></div>
        <div class="profile-cardcontent">'.$row[1].'</div>
        <div class="profile-carddesc">'.$row[7].'</div>
        <a href="profileknowmore.php?id='.$row[0].'"><button id="knowmore" class="btn-know-1">Know More</button></a>
    </div>';
    }
    ?>

</div>
<?php
include_once 'footer.php';
?>
