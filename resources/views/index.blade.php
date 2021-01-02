
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="description" content="A freelance web developer, web application developer, online services, online marketing solutions, 
    online presence, projects, portfolio, lets bring to your amazing applications to live."/>
    <meta name="author" content="Idongesit">
    <meta name="keywords" content="Web developer Abuja, web application development Abuja, Nigeria, PHP developer, PHP developer in 
    Abuja Nigeria, web development companies in Abuja, Web designer companies in Abuja Nigeria, Web application developer Nigeria, Nigerian laravel developer, Nigerian     PHP developer web designer, web developer, websites, Idongesit, freelancers in Abuja Nigeria, freelance web development, Web developer freelance
    website portal development, Wuse Abuja developers, Apo Abuja developers, E-commerce website developers, web programmer, programming
    Abuja Nigeria"/>

    <meta property="og:title" content="Idongesit - Freelance Web developer in Abuja, Nigeria"/>
    <meta property="og:description" content="A freelance web application developer living in Abuja, Nigeria"/>
    <meta property="og:url" content="https://ide.com.ng"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Wealthy Developer - Freelance Web developer in Abuja, Nigeria </title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" type="text/css" href="apps/bootstrap/css/bootstrap.css">  
    <script type="text/javascript" src="apps/bootstrap/js/jquery-3.1.1.js"></script>
  	<script type="text/javascript" src="apps/bootstrap/js/bootstrap.js"></script> 

    <!-- Fonts -->
    <link rel="stylesheet" href="apps/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.rawgit.com/konpa/devicon/df6431e323547add1b4cf45992913f15286456d3/devicon.min.css">
    <link rel="shortcut icon" href="favicon-96x96.png" type="image/x-icon">
    
    <!-- Theme CSS -->
    <link rel="stylesheet" href="apps/css/styles.css">
    <!--<link-->


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
 
</head>
<body>
  <!-- Navigation -->    
<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container-fluid">

  <!-- Collapsable Navbar -->
  		  <div class="navbar-header">							
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               
						</button>
				  <a class="navbar-brand animated flip" id="bot" href="#top">Idongesit</a>
				</div>
				<div class="collapse navbar-collapse" id="myNavbar">
					<ul class="nav navbar-nav navbar-right">						 
            <li><a href="#about"><span class="fa fa-info-circle"></span> About</a></li>
            <li><a href="#skills"><span class="fa fa-cogs"></span> Tools</a></li>
            <li><a href="#services"><span class="fa fa-smile-o"></span> MyServices</a></li>
					  <li><a href="#portfolio"><span class="fa fa-book"></span> Portfolio</a></li> 
					  <li><a href="#contact"><span class="fa fa-envelope"></span> Contact</a></li> 
					</ul>
				</div>
    </div>
     <!-- /.container-fluid -->
</nav>
 
<!-- Header -->
<header>
 <div class="container-fluid slides">
     <div class="row">
        <div class="col-md-3"> </div>
        <div class="col-md-6"> 
          
            <div class="social-profile">
               <figure class="social-avatar">
                <img src="/developer/public/storage/{{ $first_profiles->image }}"  class="img-responsive img-circle" alt="profile-picture"/>
                <figcaption>
                   <a target="_blank" href="https://twitter.com/Styleid1" class="s-twitter"><i class="fa fa-twitter fa-fw"></i><span> his twitter </span></a>
                   <a target="_blank" href="https://github.com/wealthydeveloper" class="s-github"><i class="fa fa-github fa-fw"></i><span> his github </span></a>
                   <a target="_blank" href="https://www.instagram.com/wealthy_developer/" class="s-instagram"><i class="fa fa-instagram fa-fw"></i><span> his instagram </span></a>
                   <a target="_blank" href="https://ng.linkedin.com/in/idongesit-utong-186684169" class="s-twitter"><i class="fa fa-linkedin fa-fw"></i><span>his linkedin </span></a>
                </figcaption>
               </figure>
            </div>
              <div style="ground-color:rgba(71, 51, 51, 0.0)">  
                  <h2 class="intro-lead-in" style="padding-left:50px">{{ $first_profiles->title }}</h2>
                  <h3 class="intro-heading" style="padding-left:50px">
                    {{ $first_profiles->caption }}
                  </h3>
            </div>
          <div class="col-md-3"> </div>
       </div>
      </div>
</header>
<!-- Header Ends-->


<!-- About Section -->
<section id="about" class="container">

    <div class="row section-banner">
      <div class="col-md-offset-3 col-md-6 text-center">
        <div>
          <span class="line about"></span>
          <span class="section-title about">ABOUT</span>
          <span class="line about"></span>
        </div>
      </div>
    </div>


    <div class="row max">

      <div class="col-sm-4 text-center">
        <div class="desc">
          <div class="icon-me"><i class="fa fa-user"></i></div>
          <p>{{ $settings->about1 }}</p>
        </div>
      </div>

      <div class="col-sm-4 text-center">
        <div class="desc">
          <div class="icon-me"><i class="fa fa-mortar-board"></i></div>
          <p>{{ $settings->about2 }}</p>
        </div>
      </div>

      <div class="col-sm-4 text-center">
        <div class="desc">
          <div class="icon-me"><i class="fa fa-rocket"></i></div>
          <p>{{ $settings->about3 }}</p>
        </div>
      </div>

    </div>


  </section>

<!--End About Section -->

<!-- start of Tools -->
<section id="skills">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading">TOOLS</h2>
          <hr>
        </div>
      </div>

      <div class="row text-center">
        <div class="col-md-3">
          <div class="icon-container">
            <i class="devicon-git-plain wordmark colored fa-5x"></i>
          </div>
          <h4 class="skills-heading">Git</h4>
        </div>

        <div class="col-md-3">
        <div class="icon-container">
            <i class="devicon-javascript-plain colored fa-5x"></i>
          </div>
          <h4 class="skills-heading">JavaScript</h4>
        </div>

        <div class="col-md-3">
        <div class="icon-container">
            <i class="devicon-vuejs-plain colored fa-5x"></i>
          </div>
          <h4 class="skills-heading">VueJs</h4>
          </div>

        <div class="col-md-3">
          <div class="icon-container">
          <i class="devicon-php-plain colored fa-5x"></i>
          </div>
          <h4 class="skills-heading">Php</h4>
        </div>
      </div>

      <!-- -->

      <div class="row text-center">
        <div class="col-md-3">
          <div class="icon-container">
          <i class="devicon-laravel-plain colored fa-5x"></i>
          </div>
          <h4 class="skills-heading">Laravel</h4>
        </div>

        
            <div class="col-md-3">
              <div class="icon-container">
                <i class="devicon-bootstrap-plain colored fa-5x"></i>
              </div>
              <h4 class="skills-heading">BootStrap</h4>
            </div>
            

        <div class="col-md-3">
          <div class="icon-container">
            
            <i class="devicon-css3-plain colored fa-5x"></i>
          </div>
          <h4 class="skills-heading">CSS3</h4>
          
        </div>

        <div class="col-md-3">
          <div class="icon-container">
          <i class="devicon-html5-plain colored fa-5x"></i> 
          </div>
          <h4 class="skills-heading">Html5</h4>
        </div>

      </div>
    </div>
  </section>
  <!-- end of Tools -->


 <!-- Service section -->
<section id="services">
    <div class="container">
        <div class="section-title">
            <h1>My <span class="accent-text">Services</span></h1>
        </div>
        
        <div class="row center-xs center-sm center-md center-lg trigger"><!--Row 1-->
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 hb vb">
                <div class="service-block">
                    <span class="icon"><i class="fa fa-code"></i></span>
                    <h4 class="ho">Web Development</h4>
                    <p>{{ $settings->wdev }}</p>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 hb vb">
                <div class="service-block">
                    <span class="icon"><i class="fa fa-laptop"></i></span>
                    <h4 class="ho">Web Design</h4>
                    <p>{{ $settings->wdesign }}</b></p>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 hb vb">
                <div class="service-block">
                   <span class="icon"><i class="fa fa-mobile"></i></span>
                    <h4 class="ho">Fully Responsive</h4>
                    <p>{{ $settings->frespon }} </p>
                </div>
            </div>  
        
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 hb vb">
                <div class="service-block">
                    <span class="icon"><i class="fa fa-shopping-cart"></i></span>
                    <h4 class="ho">e-commerce  site</h4>
                    <p>{{ $settings->ecom }}</p>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 hb vb">
                <div class="service-block">
                    <span class="icon"><i class="fa fa-user-plus"></i></span>
                    <h4 class="ho">Personal Website</h4>
                    <p>{{ $settings->pweb }}</p>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 hb vb">
                <div class="service-block">
                    <span class="icon"><i class="fa fa-cogs"></i></span>
                    <h4 class="ho">Custom Support</h4>
                    <p>{{ $settings->customs }}</p>
                </div>
            </div>
        </div>
        
    </div>
</section>
    
<!-- Portfolio -->




  <div id="portfolio" class="content-section">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <h1 class="section-title">PORT <span class="accent-text">FOLOI</span></h1>
          <p class="lead text-center">Below you'll find some of my recent work.</p>
        </div>

        @foreach($posts as $post)
        <div class="col-sm-6 col-md-4">
          <div class="thumbnail">
             <a href="{{ route('show', [$post->id]) }}">
            <img src="/developer/public/storage/{{ $post->image }}" class="img-responsive" style="width:150px" alt="Sliced WhatsApp web at first attempt">
            <div class="caption">
              <p class="text-center">{{ $post->title }}</p>
             
            </div>
            </a>
          </div>
         
        </div>
       

        @endforeach
        
        
        

      </div>
    </div>
  </div>
<!-- Portfolio -->

<!-- contact -->
<section id="contact">
    <div class="container" id="cont">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h1>Contact</h1>
                <h3 class="section-subheading" style="text-align:center" id="make">Let's have a chat and build something worldclass website.</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">

              @if(Session::has('success'))
              <div class="alert alert-success">
        	    {{ Session::get('success') }}
               </div>
               @endif

               <form method="POST" action="contact-us"">
                {{csrf_field()}}
                    <div class="row">
                        <div class="col-md-3">
                            <div>
                                <h4 class="section-heading">Free feel to contact me</h4>
                                <h4 class="section-heading">Email:</h4>
                                <p><b>info@ide.com.ng</b></p>

                                <h4 class="section-heading"> <span class="icon"><i class="fa fa-mobile colored fa-3x"></i></span> </h4>
                                <p><b>+2347086106891</b></p>

                                
                                <h4 class="section-heading"> <span  class="icon"><i style="color: #00ff00;" class="fa fa-whatsapp fa-3x"></i></span> </h4>
                                <p><b>+2348137489567  </b>
                               
                            </div>
                        </div>
                        <div class="col-md-9">

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name"> I will like to know you:</label>

                                        <input type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Name" name="name" value="{{ old						('name') }}">
                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong class="text-danger" >{{ $message }}</strong>
                                                </span>
                                            @enderror                                    
                                    </div>

                                    <div class="form-group">
                                        <label for="email">Email:</label>

                                        <input type="text" class="form-control @error('email') is-invalid @enderror" placeholder="Email" name="email" value="{{ old						('email') }}">
                                              @error('email')
                                                  <span class="invalid-feedback" role="alert">
                                                      <strong class="text-danger" >{{ $message }}</strong>
                                                  </span>
                                              @enderror
                                                                               
                                    </div>
                                    
                                </div>



                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="phone">Phone:</label>
                                        <input type="text" class="form-control @error('phone_number') is-invalid @enderror" placeholder="Phone 						Number" name="phone_number" value="{{ old('phone_number') }}">
                                        @error('phone_number')
                                            <span class="invalid-feedback" role="alert">
                                                <strong  class="text-danger" >{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        
                                    </div>

                                    <div class="form-group">
                                        <label for="how">How did you found out about me:</label>
                                        <input type="text" class="form-control @error('subject') is-invalid @enderror" placeholder="Subject" name="subject" value="{{ 						old('subject') }}">
                                          @error('subject')
                                              <span class="invalid-feedback" role="alert">
                                                  <strong  class="text-danger" >{{ $message }}</strong>
                                              </span>
                                          @enderror
                                             
                                    </div>
                                    
                                </div>

                                <div class="col-md-12 col-lg-12">
                                    <div class="form-group">
                                        <label for="message">Your messagee:</label>
                                        <textarea class="form-control textarea @error('message') is-invalid @enderror" placeholder="Message" name="message">{{ old						('message') }} </textarea>
                                          @error('message')
                                              <span class="invalid-feedback" role="alert">
                                                  <strong  class="text-danger" >{{ $message }}</strong>
                                              </span>
                                          @enderror
                                    </div>
                                    <div class="form-group">
                                    <input type="submit" value="Send Message" class="btn btn-success btn-block" />
                                  
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- contact -->


<!-- footer -->
<footer class="nb-footer">
	<div class="container">
	<div class="row">
	<div class="col-sm-12">
	<div class="about">
	
	<div class="social-media">
		<ul class="list-inline">
			<li><a href="https://twitter.com/Styleid1" title=""><i class="fa fa-twitter"></i></a></li>
			<li><a href="https://github.com/wealthydeveloper" title=""><i class="fa fa-github"></i></a></li>
			<li><a href="https://www.instagram.com/wealthy_developer/" title=""><i class="fa fa-instagram"></i></a></li>
			<li><a href="https://ng.linkedin.com/in/idongesit-utong-186684169" title=""><i class="fa fa-linkedin"></i></a></li>
		</ul>
	</div>
	</div>
	</div>


	</div>
	</div>

<section class="copyright">
<div class="container">
<div class="row">
<div class="col-sm-12">
<p>Copyright  &#169 <?php echo date("Y");?></p>
</div>

</div>
</div>
</section>
</footer>
<!-- footer -->
    
</body>
</html>