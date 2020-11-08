<!--Main index file -->
<!--TODO Get RSS info and content done up..-->
<?php include 'meta.php'; ?>

</head>


<body>
<div class="container">
   
     <?php include 'nav.php'; ?>                      
    
    <div class="innercontainer">
        <div class="aboutcontainer">
            <div class="infoblock">
                <div class="profilepiccontainer"><img src="pics/profile.jpg" alt="The Boss" class="profilepic"></div>
                <div class="bossintro">
                    <h1> MEET CHARLES </h1>
                    <p> Huge Christmas fan and pillar of our community. </p>
                </div>
            </div>
            <div class="linkblock">
                <div class="linkcontainers">
                    <a href="https://qrco.de/bbhNV1"><a href="mailto: bhpub71@gmail.com" class="foot-links"> <i class="bx bxs-envelope"></i></a>
                    <a href="https://www.facebook.com/BraveheartsPub/" class="foot-links"> <i class="bx bxl-facebook-square"></i></a>
                    <a href="https://www.instagram.com/braveheartspub/" class="foot-links"> <i class="bx bxl-instagram-alt"></i></a>
                </div>
            </div>
        </div>
    </div> 

    <?php include 'footer.php'; ?>                      

</div>
</body>


<script>
var slideIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("slide");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > x.length) {slideIndex = 1}
  x[slideIndex-1].style.display = "block";
  setTimeout(carousel, 4200); // Change image every 2 seconds
}


</script>

</html>
