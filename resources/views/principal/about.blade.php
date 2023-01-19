@extends('welcome')
@section('contenido')
<div class="jumbotron jumbotron-fluid" data-center="background-size: 100%;"
   data-top-bottom="background-size: 110%;">
   <div class="container" >
      <!-- jumbo-heading -->
      <div class="jumbo-heading" data-aos="fade-up">
         <h1></h1>
         <br>
         <!-- Breadcrumbs -->
         <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
               <li class="breadcrumb-item"><a href="/">Inicio</a></li>
               <li class="breadcrumb-item active" aria-current="page">Acerca de </li>
            </ol>
         </nav>
         <!-- /breadcrumb -->
      </div>
      <!-- /jumbo-heading -->
   </div>
   <!-- /container -->
</div>
<!-- /jumbotron -->
<!-- ==== Page Content ==== -->
<div class="page container">
   <div class="row">
      <!-- page with sidebar starts -->
      <div class="col-lg-9 page-with-sidebar">
         <h2>¿Quienes somos?</h2>
         <span class="h7 mt-2">Nuestra historia</span>
         <!-- divider -->
         <hr class="small-divider left">
         <div class="row">
            <div class="col-xl-6 ">
               <p class="mt-4 res-margin">Doggo Fit nace de la idea de poder brindar productos naturales de calidad a nuestros doggo amigos, con la convicción de poder ganarnos un lugar en la alimentación de tu doggo amigo.</p>
            </div>
            <!-- /col-xl -->
            <div class="col-xl-6 ">
               <!-- image -->
               <img class="img-fluid rounded" src="/img/doggo_team.jpeg" alt="">
            </div>
            <!-- /col-xl -->
         </div>
         <!-- /row -->
         <!-- accordion -->
         <div class="accordion mt-5">
            <!-- collapsible accordion 1 -->
            <div class="card">
               <div class="card-header">
                  <a class="card-link" data-toggle="collapse" href="#collapseOne">
                  Nuestra misión
                  </a>
               </div>
               <!-- /card-header -->
               <div id="collapseOne" class="collapse show" data-parent=".accordion">
                  <div class="card-body">
                    <p>Contribuir en el bienestar y salud de las mascotas, así como la satisfacción de las personas que las quieren. Brindando productos y servicios que ayuden a proteger y mejorar la vida de las mascotas.</p>
                  </div>
               </div>
            </div>
            <!-- /card -->
            <!-- collapsible accordion 2 -->
            <div class="card">
               <div class="card-header">
                  <a class="collapsed card-link" data-toggle="collapse" href="#collapseTwo">
                 Nuestra visión
                  </a>
               </div>
               <div id="collapseTwo" class="collapse" data-parent=".accordion">
                  <div class="card-body">
                    <p>Ser una empresa reconocida, líder en el país y con proyección internacional. Siempre buscando innovar, para ofrecer la mejor experiencia en servicios y productos que beneficien, cuiden y mejoren la salud de las mascotas. Así como ayudar a concientizar, acerca del respeto y cuidado de las mascotas.</p>
                  </div>
               </div>
            </div>
            <!-- /card -->
            <!-- collapsible accordion 3 -->
            <div class="card">
               <div class="card-header">
                  <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree">
                  Nuestros valores
                  </a>
               </div>
               <div id="collapseThree" class="collapse" data-parent=".accordion">
                  <div class="card-body">
                     <ul>
                        <li>Responsabilidad: Un valor fundamental dentro de la estructura de la empresa, ya que tenemos el compromiso con cada uno
                            de nuestros clientes y sus mascotas.</li>
                            <li>Compromiso: Para poder servir a nuestros doggo amigos y clientes, es necesario sentir esa pasión y sentimiento de servicio hacia ellos, con la finalidad de poder lograr ofrecerles calidad en nuestros productos y servicios.</li>
                            <li>Respeto: Valor esencial para lograr mantener un ambiente laboral sano, en el que todos los colaboradores podamos tener una convencia sana.</li>
                            <li>Tolerancia: Tener la capacidad para poder sobre llevar problematicas de la empresa.</li>
                            {{--<li>Innovación: Para seguir mejorando y poder ofrecer una mejor experiencia a nuestros clientes, estamos en continua búsqueda de oportunidades, mejoras y correcciones que nos ayuden a brindar mejores productos y servicios. </li>--}}
                            <li>Innovación: Para seguir mejorando y poder ofrecer lo mejor de nosotros a nuestros clientes, estamos en continua búsqueda de oportunidades, mejoras y correcciones que nos ayuden a brindar la mejor experiencia a nuestros clientes mejores productos y servicios. </li>

                     </ul>
                  </div>
               </div>
            </div>
            <!-- /card -->
         </div>
         <!--/accordion -->
         <div class="container mt-5">
            <h3 class="res-margin">Comentarios de nuestros clientes</h3>
            <!-- divider -->
            <hr class="small-divider left"/>
            <div class="mt-3 row">
               <!-- testimonials -->
                 <div class="carousel-1item card  owl-carousel owl-theme col-md-12" style="background-color: #f4f4f4">
                  <!-- testimonial -->
                  <div class="testimonial">
                     <div class="content">
                        <p class="description">
                            A mi perrito le encantaron los mini muffins sin duda alguna 100% recomendados.
                        </p>
                     </div>
                     <!-- /content -->
                     <div class="testimonial-pic">
                        <img src="/img/logo.png" class="img-fluid" alt="">
                     </div>
                     <!-- /testimonial-pic -->
                     <div class="testimonial-review">
                        <h5 class="testimonial-title">Angelica Rubio</h5>
                        <span>Estudiante</span>
                     </div>
                     <!-- /testimonial-review -->
                  </div>
                  <!-- /testimonial -->
                  <!-- testimonial -->
                  <div class="testimonial">
                     <div class="content">
                        <p class="description">
                            Mi novio me los recomendo para mi perrito y la verdad son sus favoritos simplemente los adora.
                        </p>
                     </div>
                     <!-- /content -->
                     <div class="testimonial-pic">
                        <img src="/img/logo.png" class="img-fluid" alt="">
                     </div>
                     <!-- /testimonial-pic -->
                     <div class="testimonial-review">
                        <h5 class="testimonial-title">Melissa cervantes</h5>
                        <span>Doctora</span>
                     </div>
                     <!-- /testimonial-review -->
                  </div>
                  <!-- /testimonial -->
                  <!-- testimonial -->
                  <div class="testimonial">
                     <div class="content">
                        <p class="description">
                            Sin duda alguna su snack favorito y 100% naturales ¡excelente producto!.
                        </p>
                     </div>
                     <!-- /content -->
                     <div class="testimonial-pic">
                        <img src="/img/logo.png" class="img-fluid" alt="">
                     </div>
                     <!-- /testimonial-pic -->
                     <div class="testimonial-review">
                        <h5 class="testimonial-title">Adriana camacho</h5>
                        <span>Ingeniera</span>
                     </div>
                     <!-- /testimonial-review -->
                  </div>

                  <div class="testimonial">
                    <div class="content">
                       <p class="description">
                        Los snacks son los mejores mis 3 perritos adoran los de hígado de pollo 100% recomendados.
                       </p>
                    </div>
                    <!-- /content -->
                    <div class="testimonial-pic">
                       <img src="/img/logo.png" class="img-fluid" alt="">
                    </div>
                    <!-- /testimonial-pic -->
                    <div class="testimonial-review">
                       <h5 class="testimonial-title">Susana tafoya</h5>
                       <span>Ingeniera</span>
                    </div>
                    <!-- /testimonial-review -->
                 </div>
                  <!-- /testimonial -->
               </div>
               <!-- /owl-testimonial -->            </div>
            <!-- /row -->
         </div>
         <!-- /container -->
      </div>
      <!-- /page-with-sidebar -->
      <!-- ==== Sidebar ==== -->
      <div id="sidebar" class="h-100 col-lg-3 card pattern3" style="background-color:#f4f4f4; ">
   <!--widget-area -->
   <!--/widget-area -->
   <div class="widget-area">
      <h5 class="sidebar-header">Síguenos</h5>
      <div class="contact-icon-info">
         <ul class="social-media text-center">
		    <!--social icons -->
            <li><a href="https://www.facebook.com/profile.php?id=100063886890114" target="_blank"><i class="fab fa-facebook-square"></i></a></li>
            <li><a href="https://www.instagram.com/doggofit_mx/" target="_blank"><i class="fab fa-instagram"></i></a></li>
            <li><a href="https://www.tiktok.com/@doggofit" target="_blank"><i class="fas fa-mobile"></i></a></li>

         </ul>
      </div>
      <!--/contact-icon-info -->
   </div>
   <!--/widget-area -->
   <div class="widget-area">
      <h5 class="sidebar-header">Doggo video</h5>
      <!-- video -->
      <div class="embed-responsive embed-responsive-4by3">
         <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/Kloio65AoKE"></iframe>
      </div>
   </div>
   <!--/widget-area -->

   <!--/widget-area -->
</div>
<!--/sidebar -->   </div>
   <!-- /row -->
</div>


@stop
