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

        <p> <h5 class="packhead">Package</h5><b>Face Detox</b> <button class="add" id="menbutton" type="submit"> Add </button></p> <span>$79 </span> <hr>
        <ul>
            <li>Face wash</li>
            <li>Skin Tanning </li>
            <li>Face Mask</li>
            <li>Black/White Heads Removal</li>
            <li>Skin Witening</li>
        </ul>
       </div>
</div>

<div class="pack">
    <div class="content-package">  

        <p> <h5 class="packhead">Package</h5><b>Body Massage</b> <button class="add" id="menbutton2" type="submit"> Add </button></p><span>$199 </span><hr>
        <ul>
            <li>Body Massage </li>
            <li>Foot Massage</li>
            <li>Body Moisturising</li>
            <li>Steam Therapy</li>
            <li>Chiropractor</li>
            
        </ul>
          </div>
</div>


</div>
<div class="con2">

<div class="pack">
    <div class="content-package">  

        <p> <h5 class="packhead">Package</h5><b>Hair Cutting</b> <button class="add" id="menbutton3" type="submit"> Add </button></p><span>$29 </span><hr>
        <ul>
            <li>Hair Cutting</li>
            <li>Beard Trimming </li>
            <li>Straigtning</li>
            <li>Hair Colouring</li>
            <li>Massage</li>
        </ul>
       
    </div>
</div>

<div class="pack">
    <div class="content-package">  

        <p> <h5 class="packhead">Package</h5><b>Mani Pedi delight</b> <button class="add" id="menbutton4" type="submit"> Add </button></p><span>$199</span><hr>
        <ul>
            <li>Massage</li>
            <li>Cleansing</li>
            <li>Elysian chocolate & vanilla manicure</li>
            <li>Elysian chocolate & vanilla pedicure</li>
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
    document.getElementById("menbutton").onclick = function () {
        location.href = "profiles.php";
    };
    document.getElementById("menbutton2").onclick = function () {
        location.href = "profiles.php";
    };
    document.getElementById("menbutton3").onclick = function () {
        location.href = "profiles.php";
    };
    document.getElementById("menbutton4").onclick = function () {
        location.href = "profiles.php";
    };
</script>