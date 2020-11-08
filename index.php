<!--Main index file -->
<!--TODO Get RSS info and content done up..-->
<?php include 'meta.php'; ?>

<!--FOR GOOGLE MAP-->
<script
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCVqAhef7qpg4FG2Svh5HnoAM7770XA14M&callback=initMap"
    defer    
></script>

<script>
// Initialize and add the map
function initMap() {
    // The location of map
    const pub = { lat: 43.378822, lng: -84.659324 };
    
    // The map, centered at map
    const map = new google.maps.Map(document.getElementById("map"), {
        zoom: 14,
        center: pub,
    });
    
    // The marker, positioned at map
    const marker = new google.maps.Marker({
        position: pub,
        map: map,
    });
}
</script>
</head>


<body>
<div class="container">
   
     <?php include 'nav.php'; ?>                      
    
    <div class="innercontainer">
        <div class="header">
            <div class="welcome">
                <h2 class="message">WELCOME  TO</h2>
                <h1 class="message">BRAVEHEARTS</h1>
                <h1 class="message">PUB</h1>
            </div>
            <div class="buttons">
                <div class="button"><a href="#MENUS">MENUS</a></div>
                <div class="button"><a href="https://www.doordash.com/store/bravehearts-pub-alma-1176516/en-US">DELIVERY</a></div>
                <div class="button"><a href="about.php">ABOUT</a></div>
            </div>
        </div>
        
        <div class="slideshow">
            <div class="slide"><img src="slideshow/slide_0.jpg"></div>
            <div class="slide"><img src="slideshow/slide_1.jpg"></div>
            <div class="slide"><img src="slideshow/slide_2.jpg"></div>
            <div class="slide"><img src="slideshow/slide_3.jpg"></div>
            <div class="slide"><img src="slideshow/slide_4.jpg"></div>
            <div class="slide"><img src="slideshow/slide_5.jpg"></div>
            <div class="slide"><img src="slideshow/slide_6.jpg"></div>
            <div class="slide"><img src="slideshow/slide_7.jpg"></div>
            <div class="slide"><img src="slideshow/slide_8.jpg"></div>
            <div class="slide"><img src="slideshow/slide_9.jpg"></div>
        </div>

        <a name="MENUS"></a>
        <div class="centerfold">
            <div class="intro">
                <h2>STOP BY FOR FOOD OR DRINKS! </h2>
                <div class="introcontent">
                    <div class="blocktext"><h3>Located in the heart of Downtown Alma!</h3></div>
                    <div class="mapcontainer"><div id="map" class="map"></div></div>
                </div>
            </div>
            
            <div class="menus">
                <div class="buttons">
                    <div class="button"><a href="https://qrco.de/bbhNV1">FOOD</a></div>
                    <div class="button"><a href="https://qrco.de/bbhNaY">DRAFT</a></div>
                    <div class="button"><a href="https://qrco.de/bbhO8p">DRINKS</a></div>
                </div>
            </div>
        </div>
        
        <div class="hours">
            <ul class="hours-list">
                <li class="title"><u><h1>HOURS</h1></u></li>
                <li class="day"><h2>   SUNDAY    </h2></li>
                <li class="time"><h3>12:00P-09:00A</h3></li>
                <li class="day"><h2>   MONDAY    </h2></li>
                <li class="time"><h3>11:00A-12:00A</h3></li>
                <li class="day"><h2>  TUESDAY    </h2></li>
                <li class="time"><h3>11:00A-12:00A</h3></li>
                <li class="day"><h2>  WEDNESDAY  </h2></li>
                <li class="time"><h3>11:00A-12:00A</h3></li>
                <li class="day"><h2>  THURSDAY   </h2></li>
                <li class="time"><h3>11:00A-12:00A</h3></li>
                <li class="day"><h2>   FRIDAY    </h2></li>
                <li class="time"><h3>11:00A-02:00A</h3></li>
                <li class="day"><h2>  SATURDAY   </h2></li>
                <li class="time"><h3>11:00A-02:00A</h3></li>
            </ul>
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
  x[slideIndex-1].style.display = "flex";
  setTimeout(carousel, 4200); // Change image every 2 seconds
}


</script>

</html>
