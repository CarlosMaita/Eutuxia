<!DOCTYPE html>
<html>
<head>
	@yield('title')
	@include('common.head_plantilla')
</head>
<body>
	<!-- header -->
	<header class="header-sticky header-dark">
	  <div class="container">
	    <nav class="navbar navbar-expand-lg navbar-dark">
	      <a class="navbar-brand" href="/">
	        <img class="navbar-logo navbar-logo-light" src="assets/images/demo/logo/logo-light.svg" alt="Logo">
	        <img class="navbar-logo navbar-logo-dark" src="assets/images/demo/logo/logo-dark.svg" alt="Logo">
	      </a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="burger"><span></span></span></button>

	      <div class="collapse navbar-collapse" id="navbarSupportedContent">
	        <ul class="navbar-nav align-items-center mr-auto">
	          <li class="nav-item">
	            <a class="nav-link" href="/" role="button">
	              Home
	            </a>
	          </li>
	          <li class="nav-item dropdown">
	            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	              Pages
	            </a>
	            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
	              <a class="dropdown-item" href="landing-pages.html">
	                <span>Landing Pages</span>
	                <p>Start with one of pre-made templates.</p>
	              </a>
	              <div class="dropdown-divider"></div>
	              <a class="dropdown-item" href="inner-pages.html">
	                <span>Inner Pages</span>
	                <p>Extend your website with these pages.</p>
	              </a>
	              <div class="dropdown-divider"></div>
	              <a class="dropdown-item" href="app-pages.html">
	                <span>App Pages</span>
	                <p>Add functionality to your website.</p>
	              </a>
	            </div>
	          </li>
	          <li class="nav-item dropdown dropdown-mega">
	            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown-1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	              Components
	            </a>
	            <div class="dropdown-menu" aria-labelledby="navbarDropdown-1">
	              <div class="row">
	                <div class="col">
	                  <ul class="mega-list">
	                    <li><a href="components/index.html" class="highlight">Getting Started</a></li>
	                    <li><a href="components/accordions.html">Accordions</a></li>
	                    <li><a href="components/backgrounds.html">Backgrounds</a></li>
	                    <li><a href="components/blog.html">Blog</a></li>
	                    <li><a href="components/boxes.html">Boxes</a></li>
	                    <li><a href="components/buttons.html">Buttons</a></li>
	                    <li><a href="components/cards.html">Cards</a></li>
	                    <li><a href="components/carousels.html">Carousels</a></li>
	                    <li><a href="components/cta.html">CTA</a></li>
	                    <li><a href="components/features.html">Features</a></li>
	                  </ul>
	                </div>
	                <div class="col">
	                  <ul class="mega-list">
	                    <li><a href="components/footers.html">Footers</a></li>
	                    <li><a href="components/forms.html">Forms</a></li>
	                    <li><a href="components/gallery.html">Gallery</a></li>
	                    <li><a href="components/lightbox.html">Lightbox</a></li>
	                    <li><a href="components/maps.html">Maps</a></li>
	                    <li><a href="components/masonry.html">Masonry</a></li>
	                    <li><a href="components/modals.html">Modals</a></li>
	                    <li><a href="components/partners.html">Partners</a></li>
	                    <li><a href="components/presentation.html">Presentations</a></li>
	                    <li><a href="components/pricing.html">Pricing</a></li>
	                  </ul>
	                </div>
	                <div class="col">
	                  <ul class="mega-list">
	                    <li><a href="components/progress.html">Progress</a></li>
	                    <li><a href="components/sliders.html">Sliders</a></li>
	                    <li><a href="components/steps.html">Steps</a></li>
	                    <li><a href="components/tables.html">Tables</a></li>
	                    <li><a href="components/tabs.html">Tabs</a></li>
	                    <li><a href="components/testimonials.html">Testimonials</a></li>
	                    <li><a href="components/typed.html">Typed</a></li>
	                    <li><a href="components/typography.html">Typography</a></li>
	                    <li><a href="components/users.html">Users</a></li>
	                    <li><a href="components/utility.html">Utility</a></li>
	                  </ul>
	                </div>
	              </div>
	            </div>
	          </li>
	        </ul>

	        <ul class="navbar-nav align-items-center mr-0">
	          <li class="nav-item dropdown">
	            <a class="nav-link" href="#">Sign Up</a>
	          </li>
	          <li class="nav-item dropdown">
	            <a class="nav-link" href="#">Sign in</a>
	          </li>
	        </ul>
	      </div>
	    </nav>
	  </div>
	</header>
	<!-- header -->



	<!-- cover -->
	<section class="bg-primary text-white pattern"
	    data-top-top="transform: translateY(0px);" 
	    data-top-bottom="transform: translateY(250px);">
	  <div class="container pt-10">
	    <div class="row mb-2">
	      <div class="col-md-8 col-lg-6">
	        <h1>App Pages</h1>
	      </div>
	    </div>
	    <div class="row">
	      <div class="col">
	        <nav aria-label="breadcrumb">
	          <ol class="breadcrumb">
	            <li class="breadcrumb-item"><a href="/">Home</a></li>
	            <li class="breadcrumb-item active" aria-current="page">App Pages</li>
	          </ol>
	        </nav>
	      </div>
	    </div>
	  </div>
	</section>
	<!-- / cover -->

	@yield('content')

	@include('common.footer')
<script src="{{asset('js/plantilla_js/app.js')}}"></script>
<script src="{{asset('js/plantilla_js/vendor.js')}}"></script>
</body>
</html>