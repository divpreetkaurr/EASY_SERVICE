<?php
include_once('header.php');
include_once 'dbconn.php';
$sqlpackage="select * from services";
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

        <p> <h5 class="packhead">Package</h5><b>Face Detox</b> <button class="add" id="womenbutton" type="submit"> Add </button></p><span>&#x20b9;199</span><hr>
        <ul>
            <li>Face wash</li>
            <li>Eyebrow threading </li>
            <li>Face & neck</li>
        </ul>
        <button class="edit" type="submit"> Edit your Package</button>
    </div>
</div>

<div class="pack">
    <div class="content-package">  

    <p> <h5 class="packhead">Package</h5><b>Face Detox</b> <button class="add" id="womenbutton2" type="submit"> Add </button></p><span> &#x20b9;199</span><hr>
        <ul>
            <li>Eyebrow threading </li>
            <li>Cholocate Roll on</li>
            <li>Elysian firming wine glow facial</li>
            <li>Elysian chocolate & vanilla manicure</li>
            <li>Elysian chocolate & vanilla pedicure</li>
            
        </ul>
        <button class="edit" type="submit"> Edit your Package</button>
    </div>
</div>


</div>
<div class="con2">

<div class="pack">
    <div class="content-package">  

    <p> <h5 class="packhead">Package</h5><b>Face Detox</b> <button class="add" id="womenbutton3" type="submit"> Add </button></p><span>&#x20b9;199</span><hr>
        <ul>
            <li>Full legs RICA</li>
            <li>Full arms + Underarms(RICA) </li>
            <li>Upper lip</li>
            <li>Eyebrow threading</li>
            <li>O3+ power brightning facial</li>
        </ul>
        <button class="edit" type="submit"> Edit your Package</button>
    </div>
</div>

<div class="pack">
    <div class="content-package">  

    <p> <h5 class="packhead">Package</h5><b>Face Detox</b> <button class="add" id="womenbutton4" type="submit"> Add </button></p><span>&#x20b9;199</span><hr>
        <ul>
            <li>Eye brow threading </li>
            <li>Upper lip</li>
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
    document.getElementById("womenbutton").onclick = function () {
        location.href = "profiles.php";
    };
      document.getElementById("womenbutton2").onclick = function () {
        location.href = "profiles.php";
    };
      document.getElementById("womenbutton3").onclick = function () {
        location.href = "profiles.php";
    };
      document.getElementById("womenbutton4").onclick = function () {
        location.href = "profiles.php";
    };
</script>