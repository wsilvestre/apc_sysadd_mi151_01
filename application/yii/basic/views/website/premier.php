<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'ROOMS';
$this->params['breadcrumbs'][] = $this->title;
?>

     <div class="body-content">
        <div class="slideshow-container">

  <div class="mySlides">
    <img src="uploads/banner1.jpg" style="width:1000px;height:320px;"> 
   
  </div>

  <div class="mySlides">
    <img src="uploads/banner2.jpg" style="width:1000px;height:320px;"> 
   
  </div>

  <div class="mySlides">
    <img src="uploads/banner3.jpg" style="width:1000px;height:320px;"> 
  
  </div>

  
</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>
<script>

var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex> slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 2000); // Change image every 2 seconds
}
  

</script>

<h1>ROOMS</h1>
<hr class = "hrColor">
<h2>PREMIER ROOM</h2>
 <hr class = "hrColor">
<div class="bullet">
<div class="body-content">
        <div class="slideshow-container">
        <br>
         <img src="uploads/premier.jpg" style="width:1000px;height:320px;">
         </div>
</div>
<p>
 <br>
<ul>
  <li>37 square meters with a 7 square meter balcony</li></br>
  <li>Two queen-sized beds that can fit up to four adults or two adults and two children.</li>
</ul>
</p>
</div>
</div>


