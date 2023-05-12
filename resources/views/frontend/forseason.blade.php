<!DOCTYPE HTML>
<html>
	<head>
	 <meta charset="utf-8" />
  <link data-vue-meta="ssr" rel="preload" href="https://cdn.getyourguide.com/design-system/GT-Eesti/GT-Eesti-Pro-Display-Regular.woff2" as="font" type="font/woff2" crossorigin="true">
  <link data-vue-meta="ssr" rel="preload" href="https://cdn.getyourguide.com/design-system/GT-Eesti/GT-Eesti-Pro-Display-Medium.woff2" as="font" type="font/woff2" crossorigin="true">
  <link data-vue-meta="ssr" rel="preload" href="https://cdn.getyourguide.com/design-system/GT-Eesti/GT-Eesti-Pro-Display-Bold.woff2" as="font" type="font/woff2" crossorigin="true">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.css" integrity="sha512-FA9cIbtlP61W0PRtX36P6CGRy0vZs0C2Uw26Q1cMmj3xwhftftymr0sj8/YeezDnRwL9wtWw8ZwtCiTDXlXGjQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/fontawesome.css" integrity="sha512-/Jsoj+nRoCkEHw4HnymLk48dWblqtN+0rW+UMAanfbHZjzgphJipQOEuuOEdZ0IzSEYgK0NXCNda8r+4juGbPg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/fontawesome.min.css" integrity="sha512-giQeaPns4lQTBMRpOOHsYnGw1tGVzbAIHUyHRgn7+6FmiEgGGjaG0T2LZJmAPMzRCl+Cug0ItQ2xDZpTmEc+CQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
 
  <link rel="stylesheet" href="{{asset('traveler')}}/css/animate.css">
  <link rel="stylesheet" href="{{asset('traveler')}}/css/icomoon.css">
  <link rel="stylesheet" href="{{asset('traveler')}}/css/themify-icons.css">
  <link rel="stylesheet" href="{{asset('traveler')}}/css/bootstrap.css">
  <link href="{{asset('traveler')}}/css/blogs2.css" rel="stylesheet" type="text/css"/>
  <link rel="stylesheet" href="{{asset('traveler')}}/css/blogs.css" />
  <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"
/>
  <link rel="stylesheet" href="{{asset('traveler')}}/css/magnific-popup.css">
  <link rel="stylesheet" href="{{asset('traveler')}}/css/bootstrap-datepicker.min.css">
  <link rel="stylesheet" href="{{asset('traveler')}}/css/owl.carousel.min.css">
  <link rel="stylesheet" href="{{asset('traveler')}}/css/owl.theme.default.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="{{asset('traveler')}}/css/style.css">
  <link rel="stylesheet" href="{{asset('traveler')}}/css/lightbox.min.css">
  <script src="{{asset('traveler')}}/js/modernizr-2.6.2.min.js"></script>
  <link rel="preload" href="{{asset('traveler')}}/css/new.css" as="style">
  <link rel="stylesheet" href="{{asset('traveler')}}/css/new2.css">
  <link rel="stylesheet" href="{{asset('traveler')}}/css/new3.css">
  <link rel="stylesheet" href="{{asset('traveler')}}/css/new4.css">
  <link rel="stylesheet" href="{{asset('traveler')}}/css/new5.css">
  <link rel="stylesheet" href="{{asset('traveler')}}/css/new6.css">
  <link rel="stylesheet" href="{{asset('traveler')}}/css/new7.css">
        
  <link rel="icon" type="image/png" sizes="32x32" href="{{asset('spica')}}/images/favicon.png">
  <link rel="icon" type="image/png" sizes="16x16" href="{{asset('spica')}}/images/favicon.png">
  <link rel="shortcut icon" href="favicon.png">
  <link rel="stylesheet" href="{{asset('traveler')}}/css/location.css"> 
  <meta name="viewport"content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no"
          />
  <link rel="stylesheet" href="{{asset('traveler')}}/css/grids.css">
  <link rel="stylesheet" href="{{asset('traveler')}}/css/activity.css">
  <link rel="stylesheet" href="{{asset('traveler')}}/css/location.css"> 
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  
    <!-- primary tag SEO -->
    @foreach($season as $item)
  <meta name="title" content="The BEST {{$item->namaseason}}| Jogja Borobudur Tour & Travel" />
  <meta name="description" content="Find Top-rated Things to Do in {{$item->namaseason}}. BEST Tours and Activities."/>
  <!-- facebook tag -->
  <meta property="og:type" content="website" />
  <meta property="og:url" content="www.jogjaborobudur.com" />
  <meta property="og:title" content="The BEST {{$item->namaseason}}| Jogja Borobudur Tour & Travel" />
  <meta property="og:description"
    content="Find Top-rated Things to Do in {{$item->namaseason}}. BEST Tours and Activities." />
  <meta property="og:image" content="{{asset('spica')}}/images/logomini.png" />
  @endforeach
  <!-- end tag -->
  <style type="text/css">
  @import url('https://fonts.cdnfonts.com/css/gt-eesti-display-trial');
.btn{
font-family: 'GT Eesti Display Trial', sans-serif;
font-family: 'GT Eesti Text Trial', sans-serif;    
}

.gtco-footer-links li{
  font-size: 18px;
}
</style>
<style>
.material-symbols-outlined {
  font-variation-settings:
  'FILL' 0,
  'wght' 400,
  'GRAD' 0,
  'opsz' 48
}
</style>

    @foreach($season as $item)<title>Jogja Borobudur Tour & Travel | {{$item->namaseason}} </title>@endforeach
	</head>
	<body>
	<!-- <div id="page"> -->
    @yield('nav')
	   @yield('content')
    

	


 <footer id="gtco-footer" role="contentinfo" style="background-color:#fc2c04;padding:0px;">
    <div class="gtco-container">
      <div class="row row-p b-md">
        <div class="col-md-3"  style="margin-top:50px;">
          <div class="gtco-widget">
            <h1 style="font-weight:bold;color: white;margin-bottom: 15px;font-size: 20px;">Payment Method</h1>
            <img style="margin-bottom: 10px;" src="{{asset('aset')}}/paypal.png">
            <img src="{{asset('spica')}}/images/logomini.png" height="80" width="100">
            <p> </p>
          </div>
        </div>
        <div class="col-md-3 col-md-push-1"  style="margin-top:50px;">
          <div class="gtco-widget">
            <h1 style="font-weight:bold;color: white;margin-bottom: 15px;font-size: 20px;">About Us</h1>
            <ul class="gtco-footer-links" style="color: white;">
              <li><a href="/about-us" style="color: white;">About Us</a></li>
              <li><a href="/blog" style="color: white;">Blog</a></li>
              <li><a href="/contacts" style="color: white;">Contact</a></li>
              <li><a href="#" style="color: white;">Terms & Condition</a></li>
              <li><a href="/privacy-policy" style="color: white;">Privacy Policy</a></li>
            </ul>
          </div>
        </div>
        <div class="col-md-3 col-md-push-1"  style="margin-top:50px;">
          <div class="gtco-widget">
            <h1 style="font-weight:bold;color: white;margin-bottom: 15px;font-size: 20px;">Partnership</h1>
            <ul class="gtco-footer-links">
              <li ><a style="color: white;" href="/travelagent/travelagent">Travel Agent</a></li>
              <li><a href="/bookingplatform" style="color: white;">Booking Platform</a></li>
              <li><a href="/corporate/corporatediscount" style="color: white;">Corporate Event</a></li>
              <li><a href="/influencer/influencer" style="color: white;">Influencer</a></li>
              <li><a href="/influencer" style="color: white;">Affiliate Program</a></li>
              <li><a href="/influencer" style="color: white;">Sell Your Tours</a></li>
            </ul>
          </div>
        </div>
        <div class="col-md-3 col-md-push-1"  style="margin-top:50px;">
          <div class="gtco-widget">
            <h1 style="font-weight:bold;color: white;margin-bottom: 15px;font-size: 20px;">Language</h1>
            <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false" style="background-color: white;color: black;">
              Select Language
            </button>
            <div class="dropdown-menu">
              @foreach($bahasa as $item)
              <a class="dropdown-item" href="/change-language/{{$item->bahasa}}">{{$item->bahasa}}</a>
              @endforeach
            </div>
          </div>
            <h1 style="font-weight:bold;color: white;margin-top: 10px;margin-bottom: 15px;font-size: 20px;">Currency</h1>
            <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false" style="background-color: white;color: black;">
              Select Currency
            </button>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="/change-session/USD">USD</a>
              <a class="dropdown-item" href="/change-session/IDR">IDR</a>
              <a class="dropdown-item" href="/change-session/MYR">MYR</a>
              <a class="dropdown-item" href="/change-session/SGD">SGD</a>
              <a class="dropdown-item" href="/change-session/EUR">EUR</a>
            </div>
          </div>
          <h1 style="color: white;margin-top:20px;font-size:15px;">Download our app:</h1>
          <a href="/"><img src="{{asset('aset')}}/download.png"></a>
          </div>
        </div>
        <div class="col-md-12">
          <p class="text-center">
            <small class="block" style="color: white;">&copy; 2010 - 2023 JogjaBorobudur Tour. All Rights Reserved.</small> 
          </p>
        </div>
      </div>
      
    </div>
  </footer>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <div class="gototop js-top">
        <a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
        </div>
  
  <!-- jQuery -->
  <script src="{{asset('traveler')}}/js/lightbox-plus-jquery.min.js"></script>
  <script src="{{asset('traveler')}}/js/jquery.min.js"></script>
  <!-- jQuery Easing -->
  <script src="{{asset('traveler')}}/js/jquery.easing.1.3.js"></script>
  <!-- Bootstrap -->
  <script src="{{asset('traveler')}}/js/bootstrap.min.js"></script>
  <!-- Waypoints -->
  <script src="{{asset('traveler')}}/js/jquery.waypoints.min.js"></script>
  <!-- Carousel -->
  <script src="{{asset('traveler')}}/js/owl.carousel.min.js"></script>
  <!-- countTo -->
  <script src="{{asset('traveler')}}/js/jquery.countTo.js"></script>

  <!-- Stellar Parallax -->
  <script src="{{asset('traveler')}}/js/jquery.stellar.min.js"></script>

  <!-- Magnific Popup -->
  <script src="{{asset('traveler')}}/js/jquery.magnific-popup.min.js"></script>
  <script src="{{asset('traveler')}}/js/magnific-popup-options.js"></script>
  
  <!-- Datepicker -->
  <script src="{{asset('traveler')}}/js/bootstrap-datepicker.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

  <!-- Main -->
  <script src="{{asset('traveler')}}/js/main.js"></script>
	<script>
	var swiper = new Swiper(".slide-container", {
  slidesPerView: 3,
  spaceBetween: 10,
  sliderPerGroup: 3,
  loop: true,
  centerSlide: "true",
  fade: "true",
  grabCursor: "true",
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
    dynamicBullets: true,
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },

  breakpoints: {
    0: {
      slidesPerView: 1,
    },
    520: {
      slidesPerView: 2,
    },
    768: {
      slidesPerView: 3,
    },
    1000: {
      slidesPerView: 4,
    },
  },
});
	</script>

  <script type="text/javascript">
    const tabsBox = document.querySelector(".tabs-box"),
allTabs = tabsBox.querySelectorAll(".tab"),
arrowIcons = document.querySelectorAll(".icon i");

let isDragging = false;

const handleIcons = (scrollVal) => {
    let maxScrollableWidth = tabsBox.scrollWidth - tabsBox.clientWidth;
    arrowIcons[0].parentElement.style.display = scrollVal <= 0 ? "none" : "flex";
    arrowIcons[1].parentElement.style.display = maxScrollableWidth - scrollVal <= 1 ? "none" : "flex";
}

arrowIcons.forEach(icon => {
    icon.addEventListener("click", () => {
        // if clicked icon is left, reduce 350 from tabsBox scrollLeft else add
        let scrollWidth = tabsBox.scrollLeft += icon.id === "left" ? -340 : 340;
        handleIcons(scrollWidth);
    });
});

allTabs.forEach(tab => {
    tab.addEventListener("click", () => {
        tabsBox.querySelector(".active").classList.remove("active");
        tab.classList.add("active");
    });
});

const dragging = (e) => {
    if(!isDragging) return;
    tabsBox.classList.add("dragging");
    tabsBox.scrollLeft -= e.movementX;
    handleIcons(tabsBox.scrollLeft)
}

const dragStop = () => {
    isDragging = false;
    tabsBox.classList.remove("dragging");
}

tabsBox.addEventListener("mousedown", () => isDragging = true);
tabsBox.addEventListener("mousemove", dragging);
document.addEventListener("mouseup", dragStop);
  </script>

	</body>
</html>

