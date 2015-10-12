<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8" <![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9" <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js"> <!--<![endif]-->

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="" />
    <title>Laravel Directory</title>

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="/assets/img/favicon.ico" />


    <!-- Stylesheet -->
    <link rel="stylesheet" href="/assets/css/style.css" />
    <!--[if IE 8]><link rel="stylesheet" href="/assets/css/ie.css"><![endif]-->

    <!-- Modernizr -->
    <script src="/assets/js/modernizr.custom.15390.js" type="text/javascript"></script>

		<script>
		   (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		ga('create', 'UA-47664640-20', 'auto');
		ga('send', 'pageview');
		</script>

</head>


<body>

  <div class="header">
    <div class="container">
      <h1 class="logo"><a href="https://laraveldirectory.com/">Laravel Directory</a></h1>
      <nav class="nav-collapse">
        <ul class="noList">
	  <li class="element first"><a href="/">Home</a></li>
	  <li><a href="/about">About</a></li>
	  <li><a href="/contact">Contact</a></li>
	  <li><a href="https://techendeavors.com" target="_blank">Other Projects</a></li>
	</ul>
        @if (session('status'))
          <div><strong>{{ session('status') }}</strong></div>
        @endif

      </nav>
    </div>
  </div><!-- end .header -->

   <div class="content">
      <div class="container">
	@yield('content')
      </div>
   </div><!-- end .content -->

	<div class="footer">
	   <div class="container">
	      <p class="copy">&copy; 2015 <a href="https://deftnerd.com">DeftNerd</a> (aka Adam Brown). 
		Powered by <a href="http://laravel.com">Laravel <?php $laravel = app(); echo $laravel::VERSION; ?></a>. Laravel is a trademark of Taylor Otwell.
              @if (Auth::guest())
                (<a href="/auth/login">Login</a>)
              @else
                (<a href="/auth/logout">Logout</a>)
              @endif
              </p>

	      <div class="footer-links">
	         <ul class="noList">
	            <li><a href="https://www.facebook.com/deftnerd">
	                  <svg id="facebook-square" class="custom-icon" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 100 100" style="height: 30px; width: 30px;"><circle class="outer-shape" cx="50" cy="50" r="48" style="opacity: 1;"></circle>
	                  <path class="inner-shape" style="opacity: 1;" transform="translate(25,25) scale(0.5)" d="M82.667,1H17.335C8.351,1,1,8.351,1,17.336v65.329c0,8.99,7.351,16.335,16.334,16.335h65.332 C91.652,99.001,99,91.655,99,82.665V17.337C99,8.353,91.652,1.001,82.667,1L82.667,1z M84.318,50H68.375v42.875H50V50h-8.855V35.973 H50v-9.11c0-12.378,5.339-19.739,19.894-19.739h16.772V22.3H72.967c-4.066-0.007-4.57,2.12-4.57,6.078l-0.023,7.594H86.75 l-2.431,14.027V50z"></path>
	                  </svg>
	            </a></li>
	            <li><a href="https://twitter.com/LaravelDirector">
	                  <svg id="twitter" class="custom-icon" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 100 100" style="height: 30px; width: 30px;"><circle class="outer-shape" cx="50" cy="50" r="48" style="opacity: 1;"></circle>
	                  <path class="inner-shape" style="opacity: 1;" transform="translate(25,25) scale(0.5)" d="M99.001,19.428c-3.606,1.608-7.48,2.695-11.547,3.184c4.15-2.503,7.338-6.466,8.841-11.189 c-3.885,2.318-8.187,4-12.768,4.908c-3.667-3.931-8.893-6.387-14.676-6.387c-11.104,0-20.107,9.054-20.107,20.223 c0,1.585,0.177,3.128,0.52,4.609c-16.71-0.845-31.525-8.895-41.442-21.131C6.092,16.633,5.1,20.107,5.1,23.813 c0,7.017,3.55,13.208,8.945,16.834c-3.296-0.104-6.397-1.014-9.106-2.529c-0.002,0.085-0.002,0.17-0.002,0.255 c0,9.799,6.931,17.972,16.129,19.831c-1.688,0.463-3.463,0.71-5.297,0.71c-1.296,0-2.555-0.127-3.783-0.363 c2.559,8.034,9.984,13.882,18.782,14.045c-6.881,5.424-15.551,8.657-24.971,8.657c-1.623,0-3.223-0.096-4.796-0.282 c8.898,5.738,19.467,9.087,30.82,9.087c36.982,0,57.206-30.817,57.206-57.543c0-0.877-0.02-1.748-0.059-2.617 C92.896,27.045,96.305,23.482,99.001,19.428z"></path>
	                  </svg>
	            </a></li>
	            <li><a href="https://github.com/deftnerd/laraveldirectory">
	                  <svg id="github" class="custom-icon" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 100 100" style="height: 30px; width: 30px;"><circle class="outer-shape" cx="50" cy="50" r="48" style="opacity: 1;"></circle>
	                  <path class="inner-shape" style="opacity: 1;" transform="translate(25,25) scale(0.5)" d="M50,1C22.938,1,1,22.938,1,50s21.938,49,49,49s49-21.938,49-49S77.062,1,50,1z M79.099,79.099 c-3.782,3.782-8.184,6.75-13.083,8.823c-1.245,0.526-2.509,0.989-3.79,1.387v-7.344c0-3.86-1.324-6.699-3.972-8.517 c1.659-0.16,3.182-0.383,4.57-0.67c1.388-0.287,2.855-0.702,4.402-1.245c1.547-0.543,2.935-1.189,4.163-1.938 c1.228-0.75,2.409-1.723,3.541-2.919s2.082-2.552,2.847-4.067s1.372-3.334,1.818-5.455c0.446-2.121,0.67-4.458,0.67-7.01 c0-4.945-1.611-9.155-4.833-12.633c1.467-3.828,1.308-7.991-0.478-12.489l-1.197-0.143c-0.829-0.096-2.321,0.255-4.474,1.053 c-2.153,0.798-4.57,2.105-7.249,3.924c-3.797-1.053-7.736-1.579-11.82-1.579c-4.115,0-8.039,0.526-11.772,1.579 c-1.69-1.149-3.294-2.097-4.809-2.847c-1.515-0.75-2.727-1.26-3.637-1.532c-0.909-0.271-1.754-0.439-2.536-0.503 c-0.782-0.064-1.284-0.079-1.507-0.048c-0.223,0.031-0.383,0.064-0.478,0.096c-1.787,4.53-1.946,8.694-0.478,12.489 c-3.222,3.477-4.833,7.688-4.833,12.633c0,2.552,0.223,4.889,0.67,7.01c0.447,2.121,1.053,3.94,1.818,5.455 c0.765,1.515,1.715,2.871,2.847,4.067s2.313,2.169,3.541,2.919c1.228,0.751,2.616,1.396,4.163,1.938 c1.547,0.543,3.014,0.957,4.402,1.245c1.388,0.287,2.911,0.511,4.57,0.67c-2.616,1.787-3.924,4.626-3.924,8.517v7.487 c-1.445-0.43-2.869-0.938-4.268-1.53c-4.899-2.073-9.301-5.041-13.083-8.823c-3.782-3.782-6.75-8.184-8.823-13.083 C9.934,60.948,8.847,55.56,8.847,50s1.087-10.948,3.231-16.016c2.073-4.899,5.041-9.301,8.823-13.083s8.184-6.75,13.083-8.823 C39.052,9.934,44.44,8.847,50,8.847s10.948,1.087,16.016,3.231c4.9,2.073,9.301,5.041,13.083,8.823 c3.782,3.782,6.75,8.184,8.823,13.083c2.143,5.069,3.23,10.457,3.23,16.016s-1.087,10.948-3.231,16.016 C85.848,70.915,82.88,75.317,79.099,79.099L79.099,79.099z"></path>
	                  </svg>
	            </a></li>
	            <li><a href="mailto:hello@laraveldirectory.com">
	                  <svg id="mail" class="custom-icon" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 100 100" style="height: 30px; width: 30px;"><circle class="outer-shape" cx="50" cy="50" r="48" style="opacity: 1;"></circle>
	                  <path class="inner-shape" style="opacity: 1;" transform="translate(25,25) scale(0.5)" d="M50,1C22.938,1,1,22.938,1,50s21.938,49,49,49s49-21.938,49-49S77.062,1,50,1z M25.5,25.5h49 c0.874,0,1.723,0.188,2.502,0.542L50,57.544L22.998,26.041C23.777,25.687,24.626,25.499,25.5,25.5L25.5,25.5z M19.375,68.375v-36.75 c0-0.128,0.005-0.256,0.014-0.383l17.96,20.953L19.587,69.958C19.448,69.447,19.376,68.916,19.375,68.375L19.375,68.375z M74.5,74.5 h-49c-0.541,0-1.072-0.073-1.583-0.212l17.429-17.429L50,66.956l8.653-10.096l17.429,17.429C75.572,74.427,75.041,74.5,74.5,74.5 L74.5,74.5z M80.625,68.375c0,0.541-0.073,1.072-0.211,1.583L62.652,52.195l17.96-20.953c0.008,0.127,0.014,0.255,0.014,0.383 L80.625,68.375L80.625,68.375z"></path>
	                  </svg>
	            </a></li>
	         </ul>
	      </div>
	   </div>
	</div><!-- end .footer -->

	<!-- Add jQuery and other scripts -->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="/assets/js/jquery-1.11.2.min.js"><\/script>')</script>
	<script src="/assets/js/dropcap.min.js"></script>
	<script src="/assets/js/responsive-nav.min.js"></script>
	<script src="/assets/js/scripts.js"></script>


</body>

</html>
