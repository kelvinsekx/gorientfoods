<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>GorientFoods/welcome...</title>
        <!-- Fonts -->
        <link rel="stylesheet" href="css/slider.css">
        <link rel="stylesheet" href="css/app.css">
        
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    
        <script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>
    </head>
    <body>
       <header>
            @include('PARTS.headersection')
             @include('PARTS.navbar') 
       </header>
             @yield('content')

       @include('BODY.footer')
       <!--:class="{show: modalOpen}"-->
        <div id="modal" > 
        <div class="modal-close">&times;</div>
        <div class="modal-content">
        <div id="mobilenavModal">
        
        <ul>
            <li><a href="/">Home</a></li>
            <li class="mobilenav"><a href="/about">About us</a></li>
            <li class="mobilenav"><a href="/contact">Contact</a></li>
            <li class="mobilenav">
                <a href="http://">Our statement</a>
                <div class="drop_down_content">
                    <a href="">vision statement</a>
                    <a href="">mission statement</a>
                </div>
            </li>
        </ul>
      </div>
        </div>
    </div>
       <script src="{{asset('js/app.js')}}"></script>
       <script src="{{asset('js/navstyle.js')}}"></script>
    </body>
</html>
