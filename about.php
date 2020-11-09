<!--Main index file -->
<!--TODO Get RSS info and content done up..-->
<?php include 'meta.php'; ?>

</head>


<body>
<div class="container">
   
     <?php include 'nav.php'; ?>                      
    
    <div class="innercontainer">
        <div class="aboutcontainer">
            <div class="bossname"><h2> MEET CHARLES </h2></div>
            <div class="infoblock">
                <div class="profilepiccontainer"><img src="pics/profile.jpg" alt="The Boss" class="profilepic"></div>
                <div class="bossintro">
                    <div class="bossdescribe"><p> Charles started his journey at Bravehearts Pub just over 20 years ago, and he has been a pillar of the Alma Community ever since. When he isn't at the Pub, he'll be found spending time with his fantastic family. Be sure to say "hi" if your paths happen to cross! </p>
                        <p> GO DOLPHINS!</p></div>
                </div>
            </div>
            <div class="linkblock">
                <div class="linkcontainer">
                    <div><a href="https://qrco.de/bbhNV1"><a href="mailto: bhpub71@gmail.com" class="foot-links"> <i class="bx bxs-envelope"></i></a></div>
                    <div><a href="https://www.facebook.com/BraveheartsPub/" class="foot-links"> <i class="bx bxl-facebook-square"></i></a></div>
                    <div><a href="https://www.instagram.com/braveheartspub/" class="foot-links"> <i class="bx bxl-instagram-alt"></i></a></div>
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
