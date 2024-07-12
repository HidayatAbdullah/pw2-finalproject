<!DOCTYPE html>
<html lang="en">
<head>

     <title>Car Rental Website</title>

     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

     <link rel="stylesheet" href="{{ asset('src/landing/css/bootstrap.min.css') }}">
     <link rel="stylesheet" href="{{ asset('src/landing/css/font-awesome.min.css') }}">
     <link rel="stylesheet" href="{{ asset('src/landing/css/owl.carousel.css') }}">
     <link rel="stylesheet" href="{{ asset('src/landing/css/owl.theme.default.min.css') }}">

     <!-- MAIN CSS -->
     <link rel="stylesheet" href="{{ asset('src/landing/css/style.css') }}">

</head>
<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

     <!-- PRE LOADER -->


     <!-- MENU -->
     <section class="navbar custom-navbar navbar-fixed-top" role="navigation">
          <div class="container">

               <div class="navbar-header">
                    <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                    </button>

                    <!-- lOGO TEXT HERE -->
                    <a href="#" class="navbar-brand">Car Rental Website</a>
               </div>

               <!-- MENU LINKS -->
               <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                         <li><a href="{{ route('login') }}">Login</a></li>
                         <li><a href="{{ route('register') }}">Register</a></li>
                    </ul>
                </div>

          </div>
     </section>

     <!-- HOME -->
     <section id="home">
          <div class="row">
               <div class="owl-carousel owl-theme home-slider">
                    <div class="item item-first">
                         <div class="caption">
                              <div class="container">
                                   <div class="col-md-6 col-sm-12">
                                        <h1 style="color: green;">Welcome to car rental</h1>
                                        <h3>Voluptas dignissimos esse, explicabo cum fugit eaque, perspiciatis quia ab nisi sapiente delectus eiet.</h3>
                                   </div>
                              </div>
                         </div>
                    </div>

                    <div class="item item-second">
                         <div class="caption">
                              <div class="container">
                                   <div class="col-md-6 col-sm-12">
                                        <h1 style="color: green;">Welcome to car rental</h1>
                                        <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo, excepturi.</h3>
                                   </div>
                              </div>
                         </div>
                    </div>

                    <div class="item item-third">
                         <div class="caption">
                              <div class="container">
                                   <div class="col-md-6 col-sm-12">
                                        <h1 style="color: green;">Welcome to car rental</h1>
                                        <h3>Nam eget sapien vel nibh euismod vulputate in vel nibh. Quisque eu ex eu urna venenatis sollicitudin ut at libero.</h3>
                                   </div>
                              </div>
                         </div>
                    </div>
               </div>
          </div>
     </section>

     <main>
          <section>
               <div class="container">
                    <div class="row">
                         <div class="col-md-12 col-sm-12">
                              <div class="text-center">
                                   <h2>About us</h2>

                                   <br>

                                   <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore molestias ipsa veritatis nihil iusto maiores natus dolor, a reiciendis corporis obcaecati ex. Totam assumenda impedit aut eum, illum distinctio saepe explicabo. Consequuntur molestiae similique id quos, quasi quas perferendis laboriosam, fugit natus odit totam! Id dolores saepe, sint debitis rerum dolorem tempora aliquid, pariatur enim nisi. Quia ab iusto assumenda.</p>
                              </div>
                         </div>
                    </div>
               </div>
          </section>

          <section>
               <div class="container">
                    <div class="row">
                         <div class="col-md-12 col-sm-12">
                              <div class="section-title text-center">
                                   <h2>Offers <small>Lorem ipsum dolor sit amet.</small></h2>
                              </div>
                         </div>

                         <div class="col-md-4 col-sm-6">
                              <div class="team-thumb">
                                   <div class="team-image">
                                        <img src="src/landing/images/offer-1-720x480.jpg" class="img-responsive" alt="">
                                   </div>
                                   <div class="team-info">
                                        <h3>FAMILY CARS</h3>

                                        <p class="lead"><small>from</small> <strong>$120</strong> <small>per weekend</small></p>

                                        <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum dicta voluptas quia dolor fuga odit.</span>
                                   </div>
                              </div>
                         </div>

                         <div class="col-md-4 col-sm-6">
                              <div class="team-thumb">
                                   <div class="team-image">
                                        <img src="src/landing/images/offer-2-720x480.jpg" class="img-responsive" alt="">
                                   </div>
                                   <div class="team-info">
                                        <h3>LUXURY & PRESTIGE CARS</h3>

                                        <p class="lead"><small>from</small> <strong>$99</strong> <small>per weekend</small></p>

                                        <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non beatae soluta, placeat vitae cum maxime culpa itaque minima.</span>
                                   </div>
                              </div>
                         </div>

                         <div class="col-md-4 col-sm-6">
                              <div class="team-thumb">
                                   <div class="team-image">
                                        <img src="src/landing/images/offer-3-720x480.jpg" class="img-responsive" alt="">
                                   </div>
                                   <div class="team-info">
                                        <h3>TOP SELLERS</h3>

                                        <p class="lead"><small>from</small> <strong>$110</strong> <small>per weekend</small></p>

                                        <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt nisi quia aspernatur, harum facere delectus saepe enim?</span>
                                   </div>
                              </div>
                         </div>
                    </div>
               </div>
          </section>
          <section id="testimonial">
               <div class="container">
                    <div class="row">

                         <div class="col-md-12 col-sm-12">
                              <div class="section-title text-center">
                                   <h2>Testimonials <small>from around the world</small></h2>
                              </div>

                              <div class="owl-carousel owl-theme owl-client">
                                   <div class="col-md-4 col-sm-4">
                                        <div class="item">
                                             <div class="tst-image">
                                                  <img src="src/landing/images/tst-image-1-200x216.jpg" class="img-responsive" alt="">
                                             </div>
                                             <div class="tst-author">
                                                  <h4>Jackson</h4>
                                                  <span>Shopify Developer</span>
                                             </div>
                                             <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam voluptas, facilis adipisci dolorem exercitationem nemo aut error impedit repudiandae iusto.</p>
                                             <div class="tst-rating">
                                                  <i class="fa fa-star"></i>
                                                  <i class="fa fa-star"></i>
                                                  <i class="fa fa-star"></i>
                                                  <i class="fa fa-star"></i>
                                                  <i class="fa fa-star"></i>
                                             </div>
                                        </div>
                                   </div>

                                   <div class="col-md-4 col-sm-4">
                                        <div class="item">
                                             <div class="tst-image">
                                                  <img src="src/landing/images/tst-image-2-200x216.jpg" class="img-responsive" alt="">
                                             </div>
                                             <div class="tst-author">
                                                  <h4>Camila</h4>
                                                  <span>Marketing Manager</span>
                                             </div>
                                             <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente error, unde eos laborum consequatur officiis perferendis vel debitis, dolore, ipsum quibusdam culpa quisquam, reiciendis aspernatur.</p>
                                             <div class="tst-rating">
                                                  <i class="fa fa-star"></i>
                                                  <i class="fa fa-star"></i>
                                                  <i class="fa fa-star"></i>
                                             </div>
                                        </div>
                                   </div>

                                   <div class="col-md-4 col-sm-4">
                                        <div class="item">
                                             <div class="tst-image">
                                                  <img src="src/landing/images/tst-image-3-200x216.jpg" class="img-responsive" alt="">
                                             </div>
                                             <div class="tst-author">
                                                  <h4>Barbie</h4>
                                                  <span>Art Director</span>
                                             </div>
                                             <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit laborum minima autem, reprehenderit mollitia amet id, beatae quo sequi culpa assumenda neque a quisquam, magni.</p>
                                             <div class="tst-rating">
                                                  <i class="fa fa-star"></i>
                                                  <i class="fa fa-star"></i>
                                                  <i class="fa fa-star"></i>
                                                  <i class="fa fa-star"></i>
                                             </div>
                                        </div>
                                   </div>

                                   <div class="col-md-4 col-sm-4">
                                        <div class="item">
                                             <div class="tst-image">
                                                  <img src="src/landing/images/tst-image-4-200x216.jpg" class="img-responsive" alt="">
                                             </div>
                                             <div class="tst-author">
                                                  <h4>Andrio</h4>
                                                  <span>Web Developer</span>
                                             </div>
                                             <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore natus culpa laudantium sit dolores quidem at nulla, iure atque laborum! Odit tempora, enim aliquid at modi illum ducimus explicabo soluta.</p>
                                             <div class="tst-rating">
                                                  <i class="fa fa-star"></i>
                                                  <i class="fa fa-star"></i>
                                                  <i class="fa fa-star"></i>
                                                  <i class="fa fa-star"></i>
                                             </div>
                                        </div>
                                   </div>

                              </div>
                        </div>
                    </div>
               </div>
          </section> 
     </main>    

     <!-- FOOTER -->
     <footer id="footer ">
     <div class="container">
          <div class="row">
               <div class="col-md-4 col-sm-6 footer-info">
                    <ul class="list-inline social-icon">
                        <li class="list-inline-item"><a href="#" class="fa fa-facebook-square"></a></li>
                        <li class="list-inline-item"><a href="#" class="fa fa-twitter"></a></li>
                        <li class="list-inline-item"><a href="#" class="fa fa-instagram"></a></li>
                    </ul>
                    <p>Copyright &copy; 2024 Dayat</p>
               </div>

               <div class="col-md-4 col-sm-6 footer-info">
                    <div class="section-title">
                        <h2>Contact Info</h2>
                    </div>
                    <address>
                        <p>+1 333 4040 5566</p>
                        <p><a href="mailto:contact@company.com">sttnurulfikri.student.ac.id</a></p>
                    </address>
               </div>
          </div>
     </div>
     </footer>

     <!-- SCRIPTS -->
     <script src="{{ asset('src/landing/js/jquery.js') }}"></script>
     <script src="{{ asset('src/landing/js/bootstrap.min.js') }}"></script>
     <script src="{{ asset('src/landing/js/owl.carousel.min.js') }}"></script>
     <script src="{{ asset('src/landing/js/smoothscroll.js') }}"></script>
     <script src="{{ asset('src/landing/js/custom.js') }}"></script>

</body>
</html>