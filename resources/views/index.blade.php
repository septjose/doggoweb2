@extends('welcome')
@section('contenido')
      <!-- /nav --><!-- ==== Slider ==== -->
      <div class="container-fluid p-0">
        <div id="slider" class="overlay-parallax-slider" style="width:1200px;height:650px;margin:0 auto;margin-bottom: 0px;">
                <!-- Slide 1 -->
                <div class="ls-slide overlay2" data-ls="duration:4000; transition2d:7;">
                   <!-- bg image  -->
                   <img src="/img/principal.png" class="ls-bg" alt="" />
                               <!-- ls-l  -->
                    <img width="1200" height="376" src="img/slider/slide1-element.png" class="ls-l" alt="" style="top:296px; right:0
                    %;" data-ls="offsetxin:10; offsetyin:120; durationin:1100; rotatein:5; transformoriginin:59.3% 80.3% 0; offsetxout:-80; durationout:400; parallax:true; parallaxlevel:-4;">

                   <!-- text  -->
                   <div class="ls-l header-wrapper" data-ls="offsetyin:150; durationin:700; delayin:200; easingin:easeOutQuint; rotatexin:20; scalexin:1.4; offsetyout:600; durationout:400; parallax:true; parallaxlevel:2;">
                      <div class="header-text full-width text-light">
                         <h1>Bienvenidos a <span> Doggofit</span></h1>
                         <!--the div below is hidden on small screens  -->
                         <div class="hidden-small">
                          <p class="header-p">Nos dedicamos al bienestar de tus mascotas.</p>
                            <a class="btn btn-primary " href="/contacto">Contáctanos</a>
                         </div>
                         <!--/d-none  -->
                      </div>
                      <!-- header-text  -->
                   </div>
                </div>
                <!-- ls-slide -->

             </div>
             <!-- /slider --></div>
       <!-- /container-fluid -->
       <!-- ==== Page Content ==== -->
       <!-- section -->
       <section id="intro-home" class="container-fluid  pattern4-right" style="background-color:#f4f4f4; ">
          <div class="container">
             <!-- row -->
             <div class="row">
                <div class="col-lg-9">
                   <h3>Quieres vender nuestros productos en tu tienda? </h3>
                   <p>Pregunta por nuestros precios para provedores, con gusto te atenderemos para brindarte toda la información.</p>
                </div>
                <!-- /col-lg-->
                <div class="col-lg-3 justify-content-center align-self-center">
                   <!-- button -->
                   <a href="/contacto" class="btn btn-secondary"  data-aos="zoom-out">Envía mensaje</a>
                </div>
                <!-- /col-lg-->
             </div>
             <!-- /row -->
          </div>
          <!-- /container -->
       </section>
       <!-- /section ends -->
       <!-- section -->
       {{--<section id="call-widget" class="container-fluid pt-0 pb-0">
          <div class="row p-0">
             <!-- call 1 -->
             <div class="call-box col-lg-4 p-0">
                <a href="services.php">
                   <!-- image -->
                   <img src="img/box1.jpg" alt="" class="center-block img-responsive">
                   <div class="call-title">
                      <!-- call-info -->
                      <div class="call-info text-center">
                         <p class="subtitle text-light">more info</p>
                         <h3 class="text-light">Our Services</h3>
                      </div>
                   </div>
                </a>
             </div>
             <!-- /call-box -->
             <!-- call 2 -->
             <div class="call-box col-lg-4 p-0">
                <a href="about.php">
                   <!-- image -->
                   <img src="img/box2.jpg" alt="" class="center-block img-responsive">
                   <div class="call-title">
                      <!-- call-info -->
                      <div class="call-info text-center">
                         <p class="subtitle text-light">more info</p>
                         <h3 class="text-light">About us</h3>
                      </div>
                   </div>
                </a>
             </div>
             <!-- /call-box -->
             <!-- call 3 -->
             <div class="call-box col-lg-4 p-0">
                <a href="team.php">
                   <!-- image -->
                   <img src="img/box3.jpg" alt="" class="center-block img-responsive">
                   <div class="call-title">
                      <!-- call-info -->
                      <div class="call-info text-center">
                         <p class="subtitle text-light">more info</p>
                         <h3 class="text-light">Our Team</h3>
                      </div>
                   </div>
                </a>
             </div>
             <!-- /call-box -->
          </div>
          <!-- /row -->
       </section>--}}
       <!-- /section--><!-- section -->
       {{--<section id="services-home" class="container">
          <div class="container">
             <!-- section heading -->
             <div class="section-heading text-center">
                <p class="subtitle">what we offer</p>
                <h2>Our Services</h2>
             </div>
             <!-- /section heading -->
             <div class="row">
                <div class="col-lg-7">
                   <h3>Quality Services</h3>
                   <span class="h7 mt-0">We offer quick & easy services for cats and dogs, accumsan felis id, fermentum purus. Quisque vitae hendrerit elit. </span>
                   <p class="mt-3">Aliquam erat volutpat In id fermentum augue, ut pellentesque leo. Maecenas at arcu risus. Donec commodo sodales ex, scelerisque laoreet nibh hendrerit id. In aliquet magna nec lobortis maximus. Etiam rhoncus leo a dolor placerat, nec elementum ipsum convall.</p>
                   <!-- Button -->
                   <a href="contact.php" class="btn btn-primary mt-3">Contact us</a>
                </div>
                <!-- /col-lg-7-->
                <div class="col-lg-5">
                   <img src="img/introimg1.jpg" class="img-fluid" alt=""/>
                </div>
                <!-- /col-lg-5-->
             <!-- services carousel -->
       <div class="carousel-3items owl-carousel owl-theme container res-margin">
          <!-- service-box 1 -->
          <div class="serviceBox1 bg-primary pattern3">
             <div class="service-content " style="background-color:#f4f4f4; ">
                <!-- image -->
                <div class="service-icon">
                   <img src="img/services/service1.jpg" class="img-fluid rounded-circle" alt=""/>
                </div>
                <!-- title -->
                <h3 class="title"><a href="services-single.php">Veterinarian</a></h3>
                <!-- /description -->
                <p class="description">
                   Qui quaerat fugit quas veniam perferendis repudiandae sequi, dolore quisquam illum.
                </p>
                <!-- /description -->
             </div>
             <!-- button -->
             <div class="text-center">
                <a class="btn btn-secondary" href="services-single.php">Read More</a>
             </div>
          </div>
          <!-- /serviceBox-->
          <!-- service-box 2 -->
          <div class="serviceBox1 bg-primary pattern3">
             <div class="service-content " style="background-color:#f4f4f4; ">
                <!-- image -->
                <div class="service-icon">
                   <img src="img/services/service2.jpg" class="img-fluid rounded-circle" alt=""/>
                </div>
                <!-- title -->
                <h3 class="title"><a href="services-single.php">Grooming</a></h3>
                <!-- /description -->
                <p class="description">
                   Qui quaerat fugit quas veniam perferendis repudiandae sequi, dolore quisquam illum.
                </p>
                <!-- /description -->
             </div>
             <!-- button -->
             <div class="text-center">
                <a class="btn btn-secondary" href="services-single.php">Read More</a>
             </div>
          </div>
          <!-- /serviceBox -->
          <!-- service-box 3 -->
          <div class="serviceBox1 bg-primary pattern3">
             <div class="service-content " style="background-color:#f4f4f4; ">
                <!-- image -->
                <div class="service-icon">
                   <img src="img/services/service3.jpg" class="img-fluid rounded-circle" alt=""/>
                </div>
                <!-- title -->
                <h3 class="title"><a href="services-single.php">Adoption</a></h3>
                <!-- /description -->
                <p class="description">
                   Qui quaerat fugit quas veniam perferendis repudiandae sequi, dolore quisquam illum.
                </p>
                <!-- /description -->
             </div>
             <!-- button -->
             <div class="text-center">
                <a class="btn btn-secondary" href="services-single.php">Read More</a>
             </div>
          </div>
          <!-- /serviceBox -->
          <!-- service-box 4 -->
          <div class="serviceBox1 bg-primary pattern3">
             <div class="service-content "style="background-color:#f4f4f4; ">
                <!-- image -->
                <div class="service-icon">
                   <img src="img/services/service4.jpg" class="img-fluid rounded-circle" alt=""/>
                </div>
                <!-- title -->
                <h3 class="title"><a href="services-single.php">Dog Walker</a></h3>
                <!-- /description -->
                <p class="description">
                   Qui quaerat fugit quas veniam perferendis repudiandae sequi, dolore quisquam illum.
                </p>
                <!-- /description -->
             </div>
             <!-- button -->
             <div class="text-center">
                <a class="btn btn-secondary" href="services-single.php">Read More</a>
             </div>
          </div>
          <!-- /serviceBox -->
          <!-- service-box 5 -->
          <div class="serviceBox1 bg-primary pattern3">
             <div class="service-content "style="background-color:#f4f4f4; ">
                <!-- image -->
                <div class="service-icon">
                   <img src="img/services/service5.jpg" class="img-fluid rounded-circle" alt=""/>
                </div>
                <!-- title -->
                <h3 class="title"><a href="services-single.php">Agility</a></h3>
                <!-- /description -->
                <p class="description">
                   Qui quaerat fugit quas veniam perferendis repudiandae sequi, dolore quisquam illum.
                </p>
                <!-- /description -->
             </div>
             <!-- button -->
             <div class="text-center">
                <a class="btn btn-secondary" href="services-single.php">Read More</a>
             </div>
          </div>
          <!-- /serviceBox -->
       </div>
       <!-- /owl-carousel -->	    </div>
             <!-- /row -->
          </div>
          <!-- /container -->
       </section>--}}
       <!-- /section ends -->
       <!-- section -->
      {{-- <section id="about-home" class="overlay-light">
          <div class="container">
             <!-- section heading -->
             <div class="section-heading text-center">
                <p class="subtitle">Get to know us</p>
                <h2>About us</h2>
             </div>
             <!-- /section-heading -->
             <div class="row">
                <!-- Tabs -->
                <div class="col-md-12">
                   <!-- navigation -->
                   <nav>
                      <div class="nav nav-tabs" id="nav-tab" role="tablist">
                         <a class="nav-item nav-link active" id="tab1-tab" data-toggle="tab" href="#tab1" role="tab" aria-selected="true">Our Mission</a>
                         <a class="nav-item nav-link" id="tab2-tab" data-toggle="tab" href="#tab2" role="tab"  aria-selected="false">Our Events</a>
                         <a class="nav-item nav-link" id="tab3-tab" data-toggle="tab" href="#tab3" role="tab"  aria-selected="false">Testimonials</a>
                      </div>
                   </nav>
                   <!-- tab-content -->
                   <div class="tab-content block-padding" id="nav-tabContent">
                      <div class="tab-pane  fade show active" id="tab1" role="tabpanel" aria-labelledby="tab1-tab">
                         <!-- row -->
                         <div class="row">
                            <div class="col-lg-5"  data-aos="zoom-out" >
                               <!-- image -->
                               <div class="img-zoom-hover">
                               <img src="img/abouttab1.jpg" alt="" class="img-rotate-outline  img-left-absolute img-fluid" >
                             </div>
                             <!-- /img-zoom-hover -->
                            </div>
                            <!-- /col-lg-5 -->
                            <div class="col-lg-7 res-margin">
                               <h3>Your pets deserve the best</h3>
                               <!--divider -->
                               <hr class="small-divider left"/>
                               <p>Maecenas at arcu risus. Donec commodo sodales ex, scelerisque laoreet nibh hendrerit id. In aliquet magna nec lobortis maximus. Etiam rhoncus leo a dolor placerat, nec elementum ipsum convall.</p>
                               <div class="accordion">
                                  <!-- collapsible accordion 1 -->
                                  <div class="card">
                                     <div class="card-header">
                                        <a class="card-link" data-toggle="collapse" href="#collapseOne">
                                        Our Philosophy
                                        </a>
                                     </div>
                                     <!-- /card-header -->
                                     <div id="collapseOne" class="collapse show" data-parent=".accordion">
                                        <div class="card-body">
                                           <p>Donec commodo sodales ex, scelerisque laoreet nibh hendrerit id. In aliquet magna nec lobortis maximus. Etiam rhoncus leo a dolor placerat, nec elementum ipsum convall.</p>
                                        </div>
                                     </div>
                                  </div>
                                  <!-- /card -->
                                  <!-- collapsible accordion 2 -->
                                  <div class="card">
                                     <div class="card-header">
                                        <a class="collapsed card-link" data-toggle="collapse" href="#collapseTwo">
                                        Our Organization
                                        </a>
                                     </div>
                                     <div id="collapseTwo" class="collapse" data-parent=".accordion">
                                        <div class="card-body">
                                           <p>Donec commodo sodales ex, scelerisque laoreet nibh hendrerit id. In aliquet magna nec lobortis maximus. Etiam rhoncus leo a dolor placerat, nec elementum ipsum convall.</p>
                                        </div>
                                     </div>
                                  </div>
                                  <!-- /card -->
                                  <!-- collapsible accordion 3 -->
                                  <div class="card">
                                     <div class="card-header">
                                        <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree">
                                        Partnerships with our team
                                        </a>
                                     </div>
                                     <div id="collapseThree" class="collapse" data-parent=".accordion">
                                        <div class="card-body">
                                           <p>Donec commodo sodales ex, scelerisque laoreet nibh hendrerit id. In aliquet magna nec lobortis maximus. Etiam rhoncus leo a dolor placerat, nec elementum ipsum convall.</p>
                                        </div>
                                     </div>
                                  </div>
                                  <!-- /card -->
                               </div>
                               <!-- /accordion -->
                               <!-- Button -->
                               <a href="about.php" class="btn btn-primary mt-4">More about us</a>
                            </div>
                            <!-- /col-lg-6-->
                         </div>
                         <!-- row -->
                      </div>
                      <!-- ./Tab-pane -->
                      <div class="tab-pane fade" id="tab2" role="tabpanel" aria-labelledby="tab2-tab">
                         <!-- row -->
                         <div class="row">
                            <div class="col-lg-7">
                               <h3>Adoption Events</h3>
                               <!--divider -->
                               <hr class="small-divider left"/>
                               <p>Maecenas at arcu risus. Donec commodo sodales ex, scelerisque laoreet nibh hendrerit id. In aliquet magna nec lobortis maximus. Etiam rhoncus leo a dolor placerat, nec elementum ipsum convall.</p>
                               <!-- Button -->
                               <a href="events.php" class="btn btn-secondary mt-2">See all events</a>
                               <h4 class="mt-5">Upcoming events:</h4>
                                      <div class="carousel-2items owl-carousel owl-theme col-md-12">
                     <!-- event 1 -->
                   <div class="widget2">
                      <div class="card " style="background-color:#f4f4f4; " >
                         <div class="card-img">
                            <!-- image event -->
                            <a href="event-single.php">
                            <img class="card-img-top" src="img/adoption/adoptionsidebar1.jpg" alt="">
                            </a>
                         </div>
                         <div class="card-body text-center">
                            <!-- event info -->
                            <a href="event-single.php">
                               <h6 class="card-title">NYC Adoption Fair</h6>
                            </a>
                            <ul class="list-unstyled colored-icons">
                               <li><span><i class="fas fa-calendar-alt mr-2"></i>2th February at 4pm</span></li>
                               <li><span><i class="fas fa-map-marker-alt mr-2"></i>Washington Square Park</span></li>
                            </ul>
                            <!-- button -->
                            <a href="event-single.php" class="btn btn-primary btn-sm mt-0">More info</a>
                         </div>
                         <!--/card-body text-center -->
                      </div>
                      <!-- /card -->
                   </div>
                   <!--/widget2 -->
                   <!-- event 2 -->
                   <div class="widget2">
                      <div class="card "style="background-color:#f4f4f4; " >
                         <div class="card-img">
                            <!-- image event -->
                            <a href="event-single.php">
                            <img class="card-img-top" src="img/adoption/adoptionevent2.jpg" alt="">
                            </a>
                         </div>
                         <div class="card-body text-center">
                            <!-- event info -->
                            <a href="event-single.php">
                               <h6 class="card-title">Bronx Adoption Fair</h6>
                            </a>
                            <ul class="list-unstyled colored-icons">
                               <li><span><i class="fas fa-calendar-alt mr-2"></i>12th March at 3pm</span></li>
                               <li><span><i class="fas fa-map-marker-alt mr-2"></i>Bronx Park</span></li>
                            </ul>
                            <!-- button -->
                            <a href="event-single.php" class="btn btn-primary btn-sm mt-0">More info</a>
                         </div>
                         <!--/card-body text-center -->
                      </div>
                      <!-- /card -->
                   </div>
                   <!--/widget2 -->
                   <!-- event 3 -->
                   <div class="widget2">
                      <div class="card "style="background-color:#f4f4f4; " >
                         <div class="card-img">
                            <!-- image event -->
                            <a href="event-single.php">
                            <img class="card-img-top" src="img/adoption/adoptionevent3.jpg" alt="">
                            </a>
                         </div>
                         <div class="card-body text-center">
                            <!-- event info -->
                            <a href="event-single.php">
                               <h6 class="card-title">Jersey Adoption Fair</h6>
                            </a>
                            <ul class="list-unstyled colored-icons">
                               <li><span><i class="fas fa-calendar-alt mr-2"></i>8th April at 4pm</span></li>
                               <li><span><i class="fas fa-map-marker-alt mr-2"></i>Liberty State Park</span></li>
                            </ul>
                            <!-- button -->
                            <a href="event-single.php" class="btn btn-primary btn-sm mt-0">More info</a>
                         </div>
                         <!--/card-body text-center -->
                      </div>
                      <!-- /card -->
                   </div>
                   <!--/widget2 -->
                   </div>
                   <!-- /carousel -->                     </div>
                            <div class="col-lg-5 res-margin">
                               <!-- image -->
                               <div class="img-zoom-hover">
                               <img src="img/abouttab2.jpg" alt="" class="img-rotate-outline img-right-absolute img-fluid">
                             </div>
                             <!-- /img-zoom-hover -->
                            </div>
                            <!-- /col-lg-5 -->
                         </div>
                         <!-- /row -->
                      </div>
                      <!-- ./Tab-pane -->
                      <div class="tab-pane fade" id="tab3" role="tabpanel" aria-labelledby="tab3-tab">
                         <!-- row -->
                         <div class="row">
                            <div class="col-lg-7">
                               <h3>Testimonials</h3>
                               <!--divider -->
                               <hr class="small-divider left"/>
                               <p>Aliquam erat volutpat In id fermentum augue, ut pellentesque leo. Maecenas at arcu risus. Donec commodo sodales ex, scelerisque laoreet nibh hendrerit id. In aliquet magna nec lobortis maximus. Etiam rhoncus leo a dolor placerat, nec elementum ipsum convall.</p>
                               <div class="mt-5">
                                  <!-- testimonials -->
                                    <div class="carousel-1item card  owl-carousel owl-theme col-md-12" style="background-color:#f4f4f4; ">
                         <!-- testimonial -->
                         <div class="testimonial">
                            <div class="content">
                               <p class="description">
                                  Aliquam erat volutpat In id fermentum augue, ut pellentesque leo. Maecenas at arcu risus. Donec commodo sodales ex, scelerisque laoreet nibh hendrerit id. In aliquet magna nec lobortis maximus. Etiam rhoncus leo a dolor placerat, nec elementum ipsum convall.
                               </p>
                            </div>
                            <!-- /content -->
                            <div class="testimonial-pic">
                               <img src="img/team/team1.jpg" class="img-fluid" alt="">
                            </div>
                            <!-- /testimonial-pic -->
                            <div class="testimonial-review">
                               <h5 class="testimonial-title">Lucianna Smith</h5>
                               <span>Teacher</span>
                            </div>
                            <!-- /testimonial-review -->
                         </div>
                         <!-- /testimonial -->
                         <!-- testimonial -->
                         <div class="testimonial">
                            <div class="content">
                               <p class="description">
                                  Aliquam erat volutpat In id fermentum augue, ut pellentesque leo. Maecenas at arcu risus. Donec commodo sodales ex, scelerisque laoreet nibh hendrerit id. In aliquet magna nec lobortis maximus. Etiam rhoncus leo a dolor placerat, nec elementum ipsum convall.
                               </p>
                            </div>
                            <!-- /content -->
                            <div class="testimonial-pic">
                               <img src="img/team/team2.jpg" class="img-fluid" alt="">
                            </div>
                            <!-- /testimonial-pic -->
                            <div class="testimonial-review">
                               <h5 class="testimonial-title">John Sadana</h5>
                               <span>Doctor</span>
                            </div>
                            <!-- /testimonial-review -->
                         </div>
                         <!-- /testimonial -->
                         <!-- testimonial -->
                         <div class="testimonial">
                            <div class="content">
                               <p class="description">
                                  Aliquam erat volutpat In id fermentum augue, ut pellentesque leo. Maecenas at arcu risus. Donec commodo sodales ex, scelerisque laoreet nibh hendrerit id. In aliquet magna nec lobortis maximus. Etiam rhoncus leo a dolor placerat, nec elementum ipsum convall.
                               </p>
                            </div>
                            <!-- /content -->
                            <div class="testimonial-pic">
                               <img src="img/team/team3.jpg" class="img-fluid" alt="">
                            </div>
                            <!-- /testimonial-pic -->
                            <div class="testimonial-review">
                               <h5 class="testimonial-title">Jane Janeth</h5>
                               <span>Librarian</span>
                            </div>
                            <!-- /testimonial-review -->
                         </div>
                         <!-- /testimonial -->
                      </div>
                      <!-- /owl-testimonial -->                        </div>
                            </div>
                            <div class="col-lg-5 res-margin">
                               <!-- image -->
                               <div class="img-zoom-hover">
                               <img src="img/abouttab3.jpg" alt="" class="img-rotate-outline  img-right-absolute img-fluid">
                            </div>
                             <!-- /img-zoom-hover -->
                            </div>
                            <!-- /col-lg-5 -->
                         </div>
                         <!-- /row -->
                      </div>
                      <!-- ./Tab-pane -->
                   </div>
                   <!-- ./Tab-content -->
                </div>
                <!-- col-md-12 -->
             </div>
             <!-- /row -->
          </div>
          <!-- /container-->
       </section>--}}
       <!-- /section ends -->
       <!-- section -->
       {{--<section id="adoption-home" class="container-fluid pl-0 pr-0 overlay-dark bg-fixed">
          <!-- section heading -->
          <div class="section-heading text-center text-light">
             <p class="subtitle">Find your friend</p>
             <h2>Adoption</h2>
          </div>
          <!-- /section-heading -->
          <div class="container">
             <div class="col-lg-10 offset-lg-1 text-center text-light">
                <h3>Adopting is an act of <span class="text-tertiary">love</span></h3>
                <p class="h7">Etiam rhoncus leo a dolor placerat, nec elem entum ipsum convall.</p>
                <p>Maecenas at arcu risus. Donec commodo sodales ex, scelerisque laoreet nibh hendrerit id Maecenas at arcu ro In aliquet magna nec lobortis maximus. Etiam rhoncus leo a dolor placerat, nec elementum ipsum convall.</p>
             </div>
             <!-- /col-lg -->
             <!-- Carousel  -->
             <div class="col-md-12 carousel-2items owl-carousel owl-theme">
                 <!-- Adopt 1 -->
                   <div class="adopt-card res-margin row  pattern2" style="background-color:#f4f4f4; ">
                      <div class="col-md-5">
                         <!-- Image -->
                         <div class="adopt-image d-flex flex-wrap align-items-center ">
                            <a href="adoption-single.php">
                            <img src="img/adoption/adoption1.jpg" class="img-fluid" alt="">
                            </a>
                         </div>
                      </div>
                      <div class="col-md-7 res-margin">
                         <!-- Name -->
                         <div class="caption-adoption">
                            <h5 class="adoption-header"><a href="adoption-single.php">Magdalene</a></h5>
                            <!-- List -->
                            <ul class="list-unstyled">
                               <li><strong>Gender:</strong> Female</li>
                               <li><strong>Age:</strong> 2 years</li>
                               <li><strong>Breed:</strong> Poodle Mix</li>
                            </ul>
                         </div>
                      </div>
                      <div class="col-md-12 mt-3">
                         <!-- Button -->
                         <div class="text-center">
                            <!-- Adopt info -->
                            <ul class="adopt-card-info list-unstyled">
                               <li ><i class="flaticon-veterinarian-hospital"></i>special needs</li>
                               <li ><i class="flaticon-dog-4"></i>Friendly to other pets</li>
                            </ul>
                            <!-- button-->
                            <a href="adoption-single.php" class="btn btn-primary">More Info</a>
                         </div>
                         <!-- /text-center -->
                      </div>
                      <!-- /col-md -->
                   </div>
                   <!-- /adopt-card -->
             <!-- Adopt 2 -->
                   <div class="adopt-card res-margin row  pattern2" style="background-color:#f4f4f4; ">
                      <div class="col-md-5">
                         <!-- Image -->
                         <div class="adopt-image d-flex flex-wrap align-items-center ">
                            <a href="adoption-single.php">
                            <img src="img/adoption/adoption2.jpg" class="img-fluid" alt="">
                            </a>
                         </div>
                      </div>
                      <div class="col-md-7 res-margin">
                         <!-- Name -->
                         <div class="caption-adoption">
                            <h5 class="adoption-header"><a href="adoption-single.php">Leelo</a></h5>
                            <!-- List -->
                            <ul class="list-unstyled">
                               <li><strong>Gender:</strong> Male</li>
                               <li><strong>Age:</strong> 7 years</li>
                               <li><strong>Breed:</strong> Mixed</li>
                            </ul>
                         </div>
                      </div>
                      <div class="col-md-12 mt-3">
                         <!-- Button -->
                         <div class="text-center">
                            <!-- Adopt info -->
                            <ul class="adopt-card-info list-unstyled">
                               <li ><i class="flaticon-syringe"></i>Vaccinated</li>
                               <li ><i class="flaticon-dog-4"></i>Friendly to other pets</li>
                            </ul>
                            <!-- button-->
                            <a href="adoption-single.php" class="btn btn-primary">More Info</a>
                         </div>
                         <!-- /text-center -->
                      </div>
                      <!-- /col-md -->
                   </div>
                   <!-- /adopt-card -->
             <!-- Adopt 3 -->
                   <div class="adopt-card res-margin row  pattern2" style="background-color:#f4f4f4; ">
                      <div class="col-md-5">
                         <!-- Image -->
                         <div class="adopt-image d-flex flex-wrap align-items-center ">
                            <a href="adoption-single.php">
                            <img src="img/adoption/adoption3.jpg" class="img-fluid" alt="">
                            </a>
                         </div>
                      </div>
                      <div class="col-md-7 res-margin">
                         <!-- Name -->
                         <div class="caption-adoption">
                            <h5 class="adoption-header"><a href="adoption-single.php">Mimi</a></h5>
                            <!-- List -->
                            <ul class="list-unstyled">
                               <li><strong>Gender:</strong> Female</li>
                               <li><strong>Age:</strong> 3 years</li>
                               <li><strong>Breed:</strong> Mixed</li>
                            </ul>
                         </div>
                      </div>
                      <div class="col-md-12 mt-3">
                         <!-- Button -->
                         <div class="text-center">
                            <!-- Adopt info -->
                            <ul class="adopt-card-info list-unstyled">
                               <li ><i class="flaticon-syringe"></i>Vaccinated</li>
                               <li ><i class="flaticon-dog-20"></i>Children Friendly</li>
                            </ul>
                            <!-- button-->
                            <a href="adoption-single.php" class="btn btn-primary">More Info</a>
                         </div>
                         <!-- /text-center -->
                      </div>
                      <!-- /col-md -->
                   </div>
                   <!-- /adopt-card -->
             <!-- Adopt 4 -->
                   <div class="adopt-card res-margin row  pattern2" style="background-color:#f4f4f4; ">
                      <div class="col-md-5">
                         <!-- Image -->
                         <div class="adopt-image d-flex flex-wrap align-items-center ">
                            <a href="adoption-single.php">
                            <img src="img/adoption/adoption4.jpg" class="img-fluid" alt="">
                            </a>
                         </div>
                      </div>
                      <div class="col-md-7 res-margin">
                         <!-- Name -->
                         <div class="caption-adoption">
                            <h5 class="adoption-header"><a href="adoption-single.php">Jonas</a></h5>
                            <!-- List -->
                            <ul class="list-unstyled">
                               <li><strong>Gender:</strong> Male</li>
                               <li><strong>Age:</strong> 4 years</li>
                               <li><strong>Breed:</strong> Siberian Husky</li>
                            </ul>
                         </div>
                      </div>
                      <div class="col-md-12 mt-3">
                         <!-- Button -->
                         <div class="text-center">
                            <!-- Adopt info -->
                            <ul class="adopt-card-info list-unstyled">
                               <li ><i class="flaticon-syringe"></i>Vaccinated</li>
                               <li ><i class="flaticon-dog-20"></i>Children Friendly</li>
                            </ul>
                            <!-- button-->
                            <a href="adoption-single.php" class="btn btn-primary">More Info</a>
                         </div>
                         <!-- /text-center -->
                      </div>
                      <!-- /col-md -->
                   </div>
                   <!-- /adopt-card -->
             </div>
             <!-- /carousel -->
             <div class="col-lg-12 text-center">
                <!-- button -->
                <a href="adoption.php" class="btn btn-secondary mt-3">See adoption gallery</a>
             </div>
             <!-- /col-lg -->
          </div>
          <!-- /container-->
       </section>--}}
       <!-- /section ends -->
       <!-- section -->
       {{--<section id="gallery-home" class="container-fluid pl-0 pr-0">
          <div class="container">
             <!-- section heading -->
             <div class="section-heading text-center">
                <p class="subtitle">Image tour</p>
                <h2>Gallery</h2>
             </div>
             <!-- /section-heading -->
          </div>
           <!-- owl carousel gallery  -->
                <div class="owl-stage owl-carousel owl-theme top-centered-nav mt-5 magnific-popup">
                   <div class="col-md-12 gallery-img hover-opacity">
                      <!-- image -->
                      <a href="img/gallery/gallery1.jpg" title="your caption here">
                      <img src="img/gallery/gallery1.jpg" class="img-fluid rounded" alt="">
                      </a>
                   </div>
                   <!-- /col-md-12 -->
                   <div class="col-md-12 gallery-img hover-opacity">
                      <a href="img/gallery/gallery2.jpg" title="your caption here">
                      <img src="img/gallery/gallery2.jpg" class="img-fluid rounded" alt="">
                      </a>
                   </div>
                   <!-- /col-md-12 -->
                   <div class="col-md-12 gallery-img hover-opacity">
                      <a href="img/gallery/gallery3.jpg" title="your caption here">
                      <img src="img/gallery/gallery3.jpg" class="img-fluid rounded" alt="">
                      </a>
                   </div>
                   <!-- /col-md-12 -->
                   <div class="col-md-12 gallery-img hover-opacity">
                      <a href="img/gallery/gallery4.jpg" title="your caption here">
                      <img src="img/gallery/gallery4.jpg" class="img-fluid rounded" alt="">
                      </a>
                   </div>
                   <!-- /col-md-12 -->
                   <div class="col-md-12 gallery-img hover-opacity">
                      <a href="img/gallery/gallery5.jpg" title="your caption here">
                      <img src="img/gallery/gallery5.jpg" class="img-fluid rounded" alt="">
                      </a>
                   </div>
                   <!-- /col-md-12 -->
                   <div class="col-md-12 gallery-img hover-opacity">
                      <a href="img/gallery/gallery6.jpg" title="your caption here">
                      <img src="img/gallery/gallery6.jpg" class="img-fluid rounded" alt="">
                      </a>
                   </div>
                   <!-- /col-md-12 -->
                </div>
                <!-- /owl-carousel -->	</section>--}}
       <!-- /section ends -->
       <!-- section -->
       <section id="feature-section" class=" pattern1" style="background-color:#f4f4f4; ">
          <div class="container">
             <!-- section heading -->
             <div class="section-heading text-center">
                <p class="subtitle">Beneficios de </p>
                <h2>Nuestros premios para mascotas</h2>
             </div>
             <!-- /section-heading -->
             <!-- features -->
       <div class="row text-lg-right">
          <div class="col-md-6 col-lg-3">
             <!-- feature -->
             <div class="feature-with-icon">
                <div class="icon-features">
                   <!-- icon -->
                   <i class="flaticon-pet-lotion"></i>
                </div>
                <h5><strong>Naturales</strong></h5>
                <p>Productos elaborados artesanalmente por nosotros mismos, con ingredientes 100% naturales.</p>
             </div>
             <!-- /feature-with-icon-->
             <!-- feature -->
             <div class="feature-with-icon">
                <div class="icon-features">
                   <!-- icon -->
                   <i class="flaticon-veterinarian-hospital"></i>
                </div>
                <h5><strong>Limpieza del sarro de los dientes</strong></h5>
                <p>Como son muy duros los snacks, ayudará a tu mascota a limpiar el exceso de sarro que tenga en sus dientes al momento de morder el premio.</p>
             </div>
             <!-- /feature-with-icon-->
             <!-- feature -->
             <div class="feature-with-icon">
                <div class="icon-features">
                   <!-- icon -->
                   <i class="flaticon-dog-training-1"></i>
                </div>
                <h5><strong>Entrenamiento y juego</strong></h5>
                <p>Ideales para entrenar y jugar con tu mascota.</p>
             </div>
             <!-- /feature-with-icon-->
          </div>
          <div class="col-md-6 col-lg-3 text-left pt-3 pt-sm-0 order-lg-12">
             <!-- feature -->
             <div class="feature-with-icon">
                <div class="icon-features">
                   <!-- icon -->
                   <i class="flaticon-pet-shelter"></i>
                </div>
                <h5><strong>Ayuda en la flora intestinal</strong></h5>
                <p>Ayuda a tu mascota a poder hacer mejor del baño.</p>
             </div>
             <!-- /feature-with-icon-->
             <!-- feature -->
             <div class="feature-with-icon">
                <div class="icon-features">
                   <!-- icon -->
                   <i class="flaticon-animal-1"></i>
                </div>
                <h5><strong>Pelo brilloso</strong></h5>
                <p>El pelaje de tu mascota brillará.</p>
             </div>
             <!-- /feature-with-icon-->
             <!-- feature -->
             <div class="feature-with-icon">
                <div class="icon-features">
                   <!-- icon -->
                   <i class="flaticon-pet"></i>
                </div>
                <h5><strong>Heces mas duras</strong></h5>
                <p>Ayuda a que tu mascota haga las heces más duras y no sea difícil para ti de limpiar.</p>
             </div>
             <!-- /feature-with-icon-->
          </div>
          <!-- /col-l -->
          <div class="text-center col-lg-5 mx-auto mt-3">
             <!--image  -->
             <img alt="" class="img-fluid rounded" src="/img/snacks_todo.jpg" data-aos="flip-right">
          </div>
          <!-- col-lg-7  -->
       </div>
       <!-- /row-->
          </div>
          <!-- /container -->
       </section>
       <!-- /section ends -->
       <!-- section -->
       <section id="blogprev-home" class="overlay-dark bg-fixed">
          <div class="container">
             <!-- section heading -->
             <div class="section-heading text-center text-light">
                <p class="subtitle">Que no te cuenten, entérate por ti mismo!!</p>
                <h2>Días que estaremos vendiendo a público!</h2>
             </div>
             <!-- /section-heading -->
             <!-- blog carousel -->
             <div class="carousel-3items owl-carousel owl-theme col-md-12">
                <!-- blog-box -->
                <div class="blog-box">
                   <!-- image -->
                   <a href="blog-single.php">
                      <div class="image"><img src="img/blog/blogstyle2-1.jpg" alt=""/></div>
                   </a>
                   <!-- blog-box-caption -->
                   <div class="blog-box-caption">
                      <!-- date -->
                      <div class="date"><span class="day">Enero</span><span class="month">Diciembre</span></div>
                      <a href="blog-single.php">
                         <h4>Salamanca, Gto</h4>
                      </a>
                      <!-- /link -->
                      <p>
                         Abro lista de pedidos cada quince dias para poderselos llevar el dia sábado en la mañana a su domicilio.
                      </p>
                   </div>
                   <!-- blog-box-footer -->
                   <div class="blog-box-footer">
                      <div class="author">Publicado por<a href="#"><i class="fas fa-user"></i>Doggo fit</a></div>
                      <!-- Button -->

                   </div>
                   <!-- /blog-box-footer -->
                </div>
                <!-- /blog-box -->
                <div class="blog-box">
                   <!-- image -->
                   <a href="blog-single.php">
                      <div class="image"><img src="img/blog/blogstyle2-5.jpg" alt=""/></div>
                   </a>
                   <!-- blog-box-caption -->
                   <div class="blog-box-caption">
                      <!-- date -->
                      <div class="date"><span class="day">?</span><span class="month">Febrero</span></div>
                      <a href="blog-single.php">
                         <h4>Próximamente</h4>
                      </a>
                      <!-- /link -->
                      <p>
                        Notición esperalo
                      </p>
                   </div>
                   <!-- blog-box-footer -->
                   <div class="blog-box-footer">
                    <div class="author">Publicado por<a href="#"><i class="fas fa-user"></i>Doggo fit</a></div>
                    <!-- Button -->

                 </div>
                   <!-- /blog-box-footer -->
                </div>

                                <!-- /blog-box -->
                                <div class="blog-box">
                                    <!-- image -->
                                    <a href="blog-single.php">
                                       <div class="image"><img src="img/blog/blogstyle2-5.jpg" alt=""/></div>
                                    </a>
                                    <!-- blog-box-caption -->
                                    <div class="blog-box-caption">
                                       <!-- date -->
                                       <div class="date"><span class="day">?</span><span class="month">Marzo</span></div>
                                       <a href="blog-single.php">
                                          <h4>Próximamente</h4>
                                       </a>
                                       <!-- /link -->
                                       <p>
                                         Notición esperalo
                                       </p>
                                    </div>
                                    <!-- blog-box-footer -->
                                    <div class="blog-box-footer">
                                     <div class="author">Publicado por<a href="#"><i class="fas fa-user"></i>Doggo fit</a></div>
                                     <!-- Button -->

                                  </div>
                                    <!-- /blog-box-footer -->
                                 </div>
                <!-- /blog-box -->
             </div>
             <!-- /owl-carousel -->
          </div>
          <!-- /container -->
       </section>
       <!-- /section ends-->
       <!-- section-->
      {{-- <section id="team-home" class="container">
          <!-- section heading -->
          <div class="section-heading text-center">
             <p class="subtitle">Qualified Professionals</p>
             <h2>Our Team</h2>
          </div>
          <!-- /section-heading -->
          <div class="row">
             <div class="col-lg-3 justify-content-center align-self-center text-lg-left text-sm-center text-xs-center">
                <h3>Meet our professionals</h3>
                <p class="h7">We have an experienced qualified team to take care of your best friend</p>
                <!-- Button -->
                <a href="team.php" class="btn btn-secondary mt-2">View all team</a>
             </div>
             <div class="col-lg-9 res-margin">
                <!-- team carousel -->
       <div class="col-md-12 carousel-3items owl-carousel owl-theme">
          <!-- Team member 1 -->
          <div class="team-style2 col-lg-12">
             <!-- image and social icons -->
             <div class="img-box">
                <div class="text-center">
                   <img src="img/team/team1.jpg" class="img-fluid" alt="">
                   <ul class="social-icons text-center">
                      <li> <a href="#"><i class="fab fa-facebook"></i></a></li>
                      <li> <a href="#"><i class="fab fa-twitter"></i></a></li>
                      <li> <a href="#"><i class="fab fa-linkedin"></i></a></li>
                   </ul>
                </div>
             </div>
             <!-- Team header -->
             <a href="team-single.php">
                <h5 class="team-header">Laura Smith</h5>
             </a>
             <span>Veterinarian</span>
             <hr class="small-divider left"/>
             <p>Id fermentum augue, ut pellen tesque leo nas. Maecenas at arcu risus Donec com modo.</p>
          </div>
          <!--/ Team member 1 -->
          <!-- Team member 2 -->
          <div class="team-style2 col-lg-12">
             <!-- image and social icons -->
             <div class="img-box">
                <div class="text-center">
                   <img src="img/team/team2.jpg" class="img-fluid" alt="">
                </div>
                <ul class="social-icons text-center">
                   <li> <a href="#"><i class="fab fa-facebook"></i></a></li>
                   <li> <a href="#"><i class="fab fa-twitter"></i></a></li>
                   <li> <a href="#"><i class="fab fa-linkedin"></i></a></li>
                </ul>
             </div>
             <!-- Team header -->
             <a href="team-single.php">
                <h5 class="team-header">John Doe</h5>
             </a>
             <span>Pet Trainer</span>
             <hr class="small-divider left"/>
             <p>Id fermentum augue, ut pellen tesque leo nas. Maecenas at arcu risus Donec com modo.</p>
          </div>
          <!--/ Team member 2-->
          <!-- Team member 3 -->
          <div class="team-style2 col-lg-12">
             <!-- image and social icons -->
             <div class="img-box">
                <div class="text-center">
                   <img src="img/team/team3.jpg" class="img-fluid" alt="">
                </div>
                <ul class="social-icons text-center">
                   <li> <a href="#"><i class="fab fa-facebook"></i></a></li>
                   <li> <a href="#"><i class="fab fa-twitter"></i></a></li>
                   <li> <a href="#"><i class="fab fa-linkedin"></i></a></li>
                </ul>
             </div>
             <!-- Team header -->
             <a href="team-single.php">
                <h5 class="team-header">Meghan Smith</h5>
             </a>
             <span>Cat Specialist</span>
             <hr class="small-divider left"/>
             <p>Id fermentum augue, ut pellen tesque leo nas. Maecenas at arcu risus Donec com modo.</p>
          </div>
          <!--/ Team member 3 -->
          <!-- Team member 4 -->
          <div class="team-style2 col-lg-12">
             <!-- image and social icons -->
             <div class="img-box">
                <div class="text-center">
                   <img src="img/team/team4.jpg" class="img-fluid" alt="">
                </div>
                <ul class="social-icons text-center">
                   <li> <a href="#"><i class="fab fa-facebook"></i></a></li>
                   <li> <a href="#"><i class="fab fa-twitter"></i></a></li>
                   <li> <a href="#"><i class="fab fa-linkedin"></i></a></li>
                </ul>
             </div>
             <!-- Team header -->
             <a href="team-single.php">
                <h5 class="team-header">Mika Doe</h5>
             </a>
             <span>Adoption manager</span>
             <hr class="small-divider left"/>
             <p>Id fermentum augue, ut pellen tesque leo nas. Maecenas at arcu risus Donec com modo.</p>
          </div>
          <!--/ Team member 4 -->
          <!-- Team member 5 -->
          <div class="team-style2 col-lg-12">
             <!-- image and social icons -->
             <div class="img-box">
                <div class="text-center">
                   <img src="img/team/team5.jpg" class="img-fluid" alt="">
                </div>
                <ul class="social-icons text-center">
                   <li> <a href="#"><i class="fab fa-facebook"></i></a></li>
                   <li> <a href="#"><i class="fab fa-twitter"></i></a></li>
                   <li> <a href="#"><i class="fab fa-linkedin"></i></a></li>
                </ul>
             </div>
             <!-- Team header -->
             <a href="team-single.php">
                <h5 class="team-header">Jillian Smith</h5>
             </a>
             <span>Vet Assistant</span>
             <hr class="small-divider left"/>
             <p>Id fermentum augue, ut pellen tesque leo nas. Maecenas at arcu risus Donec com modo.</p>
          </div>
          <!--/ Team member 5 -->
       </div>
        <!--/col-md-12 -->
             </div>
          </div>
          <!-- /row-->
       </section>--}}
       <!-- /section ends-->
       <!-- Section  -->
       <section id="counter-section" class="container-fluid counter-calltoaction bg-fixed overlay">
          <div id="counter" class="container">
             <div  class="row col-lg-10 offset-lg-1">
                <!-- Counter -->
                <div class="col-xl-3 col-md-6">
                   <div class="counter">
                      <i class="counter-icon flaticon-dog-in-front-of-a-man"></i>
                      <!-- insert your final value on data-count= -->
                      <div class="counter-value" data-count="4">0</div>
                      <h3 class="title">Veterinarios</h3>
                   </div>
                   <!-- /counter -->
                </div>
                <!-- /col-lg -->
                <!-- Counter -->
                <div class="col-xl-3 col-md-6">
                   <div class="counter">
                      <i class="counter-icon flaticon-dog-2"></i>
                      <!-- insert your final value on data-count= -->
                      <div class="counter-value" data-count="3">0</div>
                      <h3 class="title">Asociaciones</h3>
                   </div>
                   <!-- /counter -->
                </div>
                <!-- /col-lg -->
                <!-- Counter -->
                <div class="col-xl-3 col-md-6">
                   <div class="counter">
                      <i class="counter-icon flaticon-prize-badge-with-paw-print"></i>
                      <!-- insert your final value on data-count= -->
                      <div class="counter-value" data-count="10">0</div>
                      <h3 class="title">puntos de venta</h3>
                   </div>
                   <!-- /counter -->
                </div>
                <!-- /col-lg -->
                 <!-- Counter -->
                <div class="col-xl-3 col-md-6">
                   <div class="counter">
                      <i class="counter-icon flaticon-dog-18"></i>
                      <!-- insert your final value on data-count= -->
                      <div class="counter-value" data-count="100">0</div>
                      <h3 class="title">Clientes</h3>
                   </div>
                   <!-- /counter -->
                </div>
                <!-- /col-lg -->
             </div>
             <!-- /row -->
          </div>
          <!-- /container -->
       </section>
       <!-- /section ends-->
       <!-- section-->
       {{--<section id="contact-home" class="container-fluid">
          <!-- section heading -->
          <div class="section-heading text-center">
             <p class="subtitle">Get in touch</p>
             <h2>Contact us</h2>
          </div>
          <!-- /section-heading -->
          <div class="container">
             <div class="row">
                <!-- image -->
                <img src="img/contactbg1.png" class="img-fluid contact-home-img hidden-medium-small" alt="">
                <!-- contact box -->
                <div class="col-lg-5 offset-lg-2 h-100">
                   <div class="contact-form3 bg-secondary"  data-aos="flip-right">
                      <div class="contact-image bg-secondary">
                         <!-- envelope icon-->
                         <i class="fas fa-envelope bg-secondary"></i>
                      </div>
                      <h4 class="text-center mt-3 text-light">Send us a message</h4>
                      <!-- Form Starts -->
                      <div id="contact_form">
                         <div class="form-group">
                            <div class="row">
                               <div class="col-md-12">
                                  <label>Name<span class="required">*</span></label>
                                  <input type="text" name="name" class="form-control input-field" required="">
                               </div>
                               <div class="col-md-12">
                                  <label>Email address <span class="required">*</span></label>
                                  <input type="email" name="email" class="form-control input-field" required="">
                               </div>
                               <div class="col-md-12">
                                  <label>Subject</label>
                                  <input type="text" name="subject" class="form-control input-field">
                               </div>
                               <div class="col-md-12">
                                  <label>Message<span class="required">*</span></label>
                                  <textarea name="message" id="message" class="textarea-field form-control" rows="3"  required=""></textarea>
                               </div>
                            </div>
                            <!-- button -->
                            <button type="submit" id="submit_btn" value="Submit" class="btn btn-quaternary btn-block mt-3">Send message</button>
                         </div>
                         <!-- /form-group-->
                         <!-- Contact results -->
                         <div id="contact_results"></div>
                      </div>
                      <!-- /contact-form-->
                   </div>
                </div>
                <!-- /col-lg-->
                <div class="text-center col-lg-5 res-margin">
                   <h3>Get in Touch</h3>
                   <p>In aliquet magna nec lobortis maximus. Etiam rhoncus leo a dolor placerat, nec elementum ipsum convall.</p>
                   <!-- contact icons-->
                   <ul class="list-inline mt-3 list-contact colored-icons font-weight-bold">
                      <li class="list-inline-item"><i class="fa fa-envelope margin-icon"></i><a href="mailto:email@yoursite.com">email@yoursite.com</a></li>
                      <li class="list-inline-item"><i class="fa fa-phone margin-icon"></i>(123) 456-789</li>
                      <li class="list-inline-item" ><i class="fa fa-map-marker margin-icon"></i>Pet Street 123 - New York</li>
                   </ul>
                   <!-- /list-->
                   <!--divider-->
                   <hr class="mt-2">
                   <!-- map-->
                   <div id="map-canvas" class="mt-5"></div>
                </div>
             </div>
             <!-- /row-->
          </div>
          <!-- /container-->
       </section>--}}
       <!-- /section --><!-- ==== Newsletter - call to action ==== -->
       {{--<div class="container-fluid footer-bg block-padding overlay">
          <div class="container">
             <div class="col-lg-5 text-light text-center">
                <h4>Subscribe to our newsletter</h4>
                <p>We send e-mails once a month, we never send Spam!</p>
                <!-- Form -->
                <div id="mc_embed_signup" >
                   <!-- your form address in the line bellow -->
               <form action="https://ingridkuhn.us20.list-manage.com/subscribe/post?u=2bc190484536d73c66c28d6a8&amp;id=8ea081e025" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" novalidate>
               <div class="mc-field-group">
                            <div class="input-group">
                               <input class="form-control border2 input-lg required email" type="email" value="" name="EMAIL" placeholder="Your email here" id="mce-EMAIL">
                               <span class="input-group-btn">
                               <button class="btn btn-primary btn-sm" type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe">Subscribe</button>
                               </span>
                            </div>
                            <!-- Subscription results -->
                            <div id="mce-responses" class="mailchimp">
                               <div class="alert alert-danger response" id="mce-error-response"></div>
                               <div class="alert alert-success response" id="mce-success-response"></div>
                            </div>
                         </div>
                         <!-- /mc-fiel-group -->
                      </div>
                      <!-- /mc_embed_signup_scroll -->
                   </form>
                   <!-- /form ends -->
                </div>
                <!-- /mc_embed_signup -->
             </div>
             <!--/ col-lg-->
          </div>
          <!--/ container-->
       </div>--}}
       <!--/container-fluid-->

@stop
