<template>
<body id="section_1">
<header class="site-header" style="background:black;">
<div class="container">
<div class="row">

<div class="col-lg-8 col-12 d-flex flex-wrap">
<p class="d-flex me-4 mb-0" style="font-weight:bold;">
<i class="bi-geo-alt me-2"></i>
Kampala Uganda
</p>

<p class="d-flex mb-0">
<i class="bi-envelope me-2"></i>

<a href="mailto:info@company.com" style="font-weight:bold;">
ucr@gmail.com
</a>
</p>
</div>

<div class="col-lg-3 col-12 ms-auto d-lg-block d-none">
<ul class="social-icon">
<li class="social-icon-item">
<a href="#" class="social-icon-link bi-twitter"></a>
</li>

<li class="social-icon-item">
<a href="#" class="social-icon-link bi-facebook">
</a>
</li>

<li class="social-icon-item">
<a href="#" class="social-icon-link bi-instagram"></a>
</li>

<li class="social-icon-item">
<a href="#" class="social-icon-link bi-youtube"></a>
</li>

<li class="social-icon-item">
<a href="#" class="social-icon-link bi-whatsapp"></a>
</li>
</ul>
</div>

</div>
</div>
</header>






<nav class="navbar navbar-expand-lg" style="color:white;">
<div class="container">
<router-link to="/" class="navbar-brand">
<img src="./assets/logo.png" class="logo img-fluid">
<span>
<div style="color:#138D75;">Uganda Carbon Registry</div>
<small style="padding:5px;color:#138D75;font-size:13px;text-transform:capitalize;">Empowering sustainability through data</small>
</span>
</router-link>



<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>



<div class="collapse navbar-collapse" id="navbarNav">
<ul class="navbar-nav ms-auto">
<li class="nav-item">
<router-link to="/" class="link">
Home
</router-link>
</li>

<li class="nav-item" >
<router-link to="/about" class="link">
About
</router-link>
</li>

<li class="nav-item" >
<router-link to="/about" class="link">
Contact Us
</router-link>
</li>

<li class="nav-item" >
<router-link to="/about" class="link">
Login
</router-link>
</li>

<!-- <li class="nav-item">
<a class="nav-link click-scroll" href="#section_3">Causes</a>
</li>

<li class="nav-item">
<a class="nav-link click-scroll" href="#section_4">Volunteer</a>
</li>

<li class="nav-item dropdown">
<a class="nav-link click-scroll dropdown-toggle" href="#section_5" id="navbarLightDropdownMenuLink" role="button" data-bs-toggle="dropdown"
aria-expanded="false">News</a>

<ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarLightDropdownMenuLink">
<li><a class="dropdown-item" href="news.html">News Listing</a></li>

<li><a class="dropdown-item" href="news-detail.html">News Detail</a></li>
</ul>
</li>

<li class="nav-item">
<a class="nav-link click-scroll" href="#section_6">Contact</a>
</li>

<li class="nav-item ms-3">
<a class="nav-link custom-btn custom-border-btn btn" href="donate.html">Donate</a>
</li> -->



</ul>
</div>
</div>
</nav>






<router-view/>







<footer class="site-footer" style="background:#784212;">
<div class="container">
<div class="row">
<div class="col-lg-3 col-12 mb-4">
<img src="images/logo.png" class="logo img-fluid" alt="">
</div>

<div class="col-lg-4 col-md-6 col-12 mb-4">
<h5 class="site-footer-title mb-3">Quick Links</h5>

<ul class="footer-menu">
<li class="footer-menu-item"><a href="#" class="footer-menu-link">Our Story</a></li>

<li class="footer-menu-item"><a href="#" class="footer-menu-link">Newsroom</a></li>

<li class="footer-menu-item"><a href="#" class="footer-menu-link">Causes</a></li>

<li class="footer-menu-item"><a href="#" class="footer-menu-link">Become a volunteer</a></li>

<li class="footer-menu-item"><a href="#" class="footer-menu-link">Partner with us</a></li>
</ul>
</div>

<div class="col-lg-4 col-md-6 col-12 mx-auto">
<h5 class="site-footer-title mb-3">Contact Infomation</h5>

<p class="text-white d-flex mb-2">
<i class="bi-telephone me-2"></i>

<a href="tel: 305-240-9671" class="site-footer-link">
305-240-9671
</a>
</p>

<p class="text-white d-flex">
<i class="bi-envelope me-2"></i>

<a href="mailto:info@yourgmail.com" class="site-footer-link">
donate@charity.org
</a>
</p>

<p class="text-white d-flex mt-3">
<i class="bi-geo-alt me-2"></i>
Akershusstranda 20, 0150 Oslo, Norway
</p>

<a href="#" class="custom-btn btn mt-3">Get Direction</a>
</div>
</div>
</div>

<div class="site-footer-bottom" style="background:black;">
<div class="container">
<div class="row">

<div class="col-lg-6 col-md-7 col-12">
<p class="copyright-text mb-0">Copyright © 2036 <a href="#">Kind Heart</a> Charity Org.
Design: <a href="https://templatemo.com" target="_blank">TemplateMo</a><br>Distribution:
<a href="https://themewagon.com">ThemeWagon</a>
</p>
</div>

<div class="col-lg-6 col-md-5 col-12 d-flex justify-content-center align-items-center mx-auto">
<ul class="social-icon">
<li class="social-icon-item">
<a href="#" class="social-icon-link bi-twitter"></a>
</li>

<li class="social-icon-item">
<a href="#" class="social-icon-link bi-facebook"></a>
</li>

<li class="social-icon-item">
<a href="#" class="social-icon-link bi-instagram"></a>
</li>

<li class="social-icon-item">
<a href="#" class="social-icon-link bi-linkedin"></a>
</li>

<li class="social-icon-item">
<a href="https://youtube.com/templatemo" class="social-icon-link bi-youtube"></a>
</li>
</ul>
</div>

</div>
</div>
</div>
</footer>


</body>
</template>
<script>
export default {
components:{},
data(){return{






}}
}
</script>
<style scoped>
@import url('./assets/main.css');
.nav-item .link{
padding:10px;
color:black;

}
</style>