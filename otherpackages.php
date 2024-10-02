<?php
include_once('header.php');
?>
<p class="para17">Packages Available</p>
<div class="box">

<div class="sidenav">
  <a href="about.php">About Us</a>
  <a href="contact.php">Contact Us</a>
  <a href="#about">Policies of Company</a>
  <a href="contact.php">Feedback
  </a>
</div>


<div class="main">
<div class="con">
<div class="con1">
<div class="pack">
    <div class="content-package">  

        <p> <h5 class="packhead">Package</h5><b>Home Furniture Care</b> <button class="add" id="otherbutton" type="submit"> Add </button></p> <span>$79 </span> <hr>
        <ul>
            <li>Drill and Hang</li>
            <li>Major Door Repair </li>
            <li>Cupboard Hinge Service</li>
            <li>Channel Repair</li>
            <li>Curtain Handging</li>
        </ul>
    </div>
</div>

<div class="pack">
    <div class="content-package">  

        <p> <h5 class="packhead">Package</h5><b>Plumbers Pack</b> <button class="add" id="otherbutton2" type="submit"> Add </button></p><span>$199 </span><hr>
        <ul>
            <li></li>
            <li>Tap Repair</li>
            <li>Pipe Leakage</li>
            <li>Tap Replacement</li>
            <li>Minor Fitting Installation</li>
            
        </ul>
            </div>
</div>


</div>
<div class="con2">

<div class="pack">
    <div class="content-package">  

        <p> <h5 class="packhead">Package</h5><b>Disinfection Service</b> <button class="add" id="otherbutton3" type="submit"> Add </button></p><span>$29 </span><hr>
        <ul>
            <li>House Disinfection</li>
            <li>Bunglow Disinfection</li>
            <li>Office Disinfection</li>
            <li>Small Shop and Retail</li>
            <li>Others</li>
        </ul>
        </div>
</div>

<div class="pack">
    <div class="content-package">  

        <p> <h5 class="packhead">Package</h5><b>AC/Electronic Services</b> <button class="add" id="otherbutton4" type="submit"> Add </button></p><span>$199</span><hr>
        <ul>
            <li>AC Fitting</li>
            <li>Deep Cleaning of AC</li>
            <li>TV/LED Fitting</li>
            <li>Single/Double Door Refrigerator Checkup</li>
        </ul>
        
    </div>
</div>

</div>
</div>
</div>



</div>



<?php
include_once('footer.php');
?>
<script type="text/javascript">
    document.getElementById("otherbutton").onclick = function () {
        location.href = "profiles.php";
    };
       document.getElementById("otherbutton2").onclick = function () {
        location.href = "profiles.php";
    };
       document.getElementById("otherbutton3").onclick = function () {
        location.href = "profiles.php";
    };
       document.getElementById("otherbutton4").onclick = function () {
        location.href = "profiles.php";
    };
</script>