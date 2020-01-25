<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>IT XPERTS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/main.css" />
    <script src="main.js"></script>


    <link rel="stylesheet" href="css/nav.css">


    <link rel="stylesheet" href="css/drop.css">

    <link rel="stylesheet" href="slider.css">


<link rel="stylesheet" href="fontawesome-free-5.6.3-web/css/all.css" />
		<link rel="stylesheet" href="fontawesome-free-5.6.3-web/css/fontawesome.css" />
		<link rel="stylesheet" href="fontawesome-free-5.6.3-web/webfonts" />
	<script src="js/jquery-3.3.1.min.js"></script>

	<script src="js/jquery.counterup.min.js"></script>
	<script src="js/scrollreveal.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
</head>
<body>

	<div class="logo">
		
<div class="log">
	

</div>
<div class="social">
	
	<ul>
	<li><a href="#" target="_blank"><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
	<li><a href="#" target="_blank"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
	<li><a href="#" target="_blank"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
<li><a href="#" target="_blank"><i class="fab fa-whatsapp" aria-hidden="true"></i></a></li>

</ul>
</div>
	</div>
   <div class="header"> 

   	<nav>

   		<ul>
   				<li><a href="index.php">Home</a></li>

   			<li><a href="about.php">Who Are We &nbsp<i class="fas fa-caret-down"></i></a>
   				<ul>
   					

   					<li><a href="">Overview</a></li>
   					<li><a href="">Career</a></li>
   					<li><a href="">Partners</a></li>
   					<li><a href="">Corporate Profile</a></li>
   				</ul>

   			</li>

   			<li><a href="programmes.php">What We Do &nbsp<i class="fas fa-caret-down"></i></a>
   				<ul>   					
   					<li><a href="">Services</a></li>
   					<li><a href="">Product 2</a></li>
   					<li><a href="">Product3</a></li>
   					<li><a href="">Product 4</a></li>
   				</ul></li>
   			<li><a href="contact.php">Contact Us</a></li>

<span class="sideheader"><a href="login.php"><i class="far fa-user-circle"></a></i>&nbsp<i class="fas fa-bars bar" onclick="openSideMenu()"></i></span> 
   		</ul>
   	</nav>
 </div>

  </div>

<div id="side-menu" class="side-nav">
		<a href="#" class="btn-close" onclick="closeSideMenu()"><i class="fas fa-times"></i></a>
		<ul>
<li><a href="">Home</a></li>

   			<li><a href="about.php">Who Are We</a>
   			</li>

   			<li><a href="programmes.php">What We Do </a>

</li>
   			<li><a href="contact.php">Contact Us</a></li>

	</div>	


<div class="wrap">
  
  <div id="arrow-left" class="arrow"></div>

<div id="slider">
  <div class="slide slide1">
  
  <div class="slide-content">
    
    <span>
      Image One
    </span>
  </div>
</div>  

<div class="slide slide2">
  
  <div class="slide-content">
    
    <span>
      Image Two
    </span>
  </div>
</div>  

<div class="slide slide3">
  
  <div class="slide-content">
    
    <span>
      Image Three
    </span>
  </div>
</div>  

  <div id="arrow-right" class="arrow"></div>
</div>
</div>
</body>
</html>
<script>

let sliderImages = document.querySelectorAll('.slide'),
 arrowRight = document.querySelector('#arrow-right'),
 arrowLeft = document.querySelector('#arrow-left'),
 current = 0;

 //clear all images
 function reset(){
for (let i = 0; i < sliderImages.length; i++) {
  sliderImages[i].style.display ='none';
}
 }

 function startSlide() {
  reset();
  sliderImages[0].style.display = 'block';
 }

 function slideLeft(){
 reset();
 sliderImages[current -1].style.display ='block';
 current--; 
 }

 function slideRight(){
 reset();
 sliderImages[current + 1].style.display = 'block';
 current++; 
 }

// left arrow click

arrowLeft.addEventListener('click', function(){
   if(current === 0){
    current = sliderImages.length;
  }
  slideLeft();
});


// Right arrow click

arrowRight.addEventListener('click', function(){
   if(current === sliderImages.length -1){
    current = - 1;
  }

  slideRight();
});

 startSlide();
</script>