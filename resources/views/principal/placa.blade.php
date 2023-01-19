@extends('welcome')
@section('contenido')
<div class="jumbotron jumbotron-fluid" data-center="background-size: 100%;"
   data-top-bottom="background-size: 110%;">
   <div class="container" >
      <!-- jumbo-heading -->
      <div class="jumbo-heading" data-aos="fade-up">
         <h1>Doggo placa</h1>
         <!-- Breadcrumbs -->
         <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
               <li class="breadcrumb-item"><a href="/">Inicio</a></li>
               <li class="breadcrumb-item active" aria-current="page">Doggo placa</li>
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
<div class="page">
   <div class="container block-padding">
      <div class="row">
         <div class="col-lg-7">
            <h2>¿Qué es la doggo placa?</h2>
            <hr class="small-divider left">
            <p class="mt-4">
                Es la nueva manera de cuidar a tu doggo amigo. Siempre lleva contigo toda la información de tu doggo amigo y muéstrasela a su veterinario.
La doggo placa ofrece control de citas, registro desparasitaciones y vacunación, notas, reportes de extravío y mucho más. Todo esto en una placa moderna y cómoda para tu doggo amigo.

            </p>
            <!-- Button -->
            <a href="/doggo_contacto" class="btn btn-primary mt-4 ml-1">Pregunta por ella</a>
         </div>
         <!-- /col-lg -->
         <div class="col-lg-5 res-margin">
            <img src="img/services/serviceimg1.jpg" alt="" class="rounded img-fluid">
         </div>
         <!-- /col-lg -->
      </div>
      <!-- /row -->
   </div>
   <!-- /container -->
   <!-- services carousel -->
   <div class="container-fluid block-padding pattern1" style="background-color: #f4f4f4">
      <div class="carousel-4items owl-carousel owl-theme container">
         <!-- service 1  -->
         {{--<div class="col-md-12">
            <div class="serviceBox2">
               <!-- service icon -->
               <div class="service-icon">
                  <i class="flaticon-people-1"></i>
               </div>
               <!-- service content -->
               <div class="service-content">
                  <h5>Activities</h5>
                  <p>
                     Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer dictum malesuada.
                  </p>
                  <a class="custom-link" href="services-single.php">read more</a>
               </div>
            </div>
         </div>--}}
         <!-- service 2  -->
         <div class="col-md-12">
            <div class="serviceBox2">
               <!-- service icon -->
               <div class="service-icon">
                  <i class="flaticon-pet-shelter"></i>
               </div>
               <!-- service content -->
               <div class="service-content">
                  <h5>Información</h5>
                  <p>
                    Módulo dedicado exclusivamente a mostrar la información más relevante de tu doggo amigo, para que solo con tu consentimiento y mediante una contraseña que generes se la puedas mostrar al veterinario. En caso de que te encuentres de viaje y lleves a tu doggo amigo contigo, el veterinario podrá acceder a todo su registro clínico y recibir la atención que necesita.                  </p>
               </div>
            </div>
         </div>
         <!-- service 3  -->
         {{--<div class="col-md-12">
            <div class="serviceBox2">
               <!-- service icon -->
               <div class="service-icon">
                  <i class="flaticon-animals-2"></i>
               </div>
               <!-- service content -->
               <div class="service-content">
                  <h5>Grooming Services</h5>
                  <p>
                     Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer dictum malesuada.
                  </p>
                  <a class="custom-link" href="services-single.php">read more</a>
               </div>
            </div>
         </div>--}}
         <!-- service 4 -->
         <div class="col-md-12">
            <div class="serviceBox2">
               <!-- service icon -->
               <div class="service-icon">
                  <i class="flaticon-dog-with-first-aid-kit-bag"></i>
               </div>
               <!-- service content -->
               <div class="service-content">
                  <h5>Notas del veterinario</h5>
                  <p>
                    Con este módulo, el veterinario podrá realizar las notas necesarias para registrar los aspectos más relevantes de la atención médica de tu doggo amigo, como tratamientos, evolución, diagnósticos, etc.                  </p>

               </div>
            </div>
         </div>
         <!-- service 5 -->
         <div class="col-md-12">
            <div class="serviceBox2">
               <!-- service icon -->
               <div class="service-icon">
                  <i class="flaticon-syringe"></i>
               </div>
               <!-- service content -->
               <div class="service-content">
                  <h5>Vacunas y desparacitaciones</h5>
                  <p>
                    Lleva el control de las vacunas y desparasitaciones de tu doggo amigo.                  </p>

               </div>
            </div>
         </div>
         <!-- service 6 -->
         <div class="col-md-12">
            <div class="serviceBox2">
               <!-- service icon -->
               <div class="service-icon">
                  <i class="flaticon-dog-training-3"></i>
               </div>
               <!-- service content -->
               <div class="service-content">
                  <h5>
                    Modo Doggo amigo perdido</h5>
                  <p>
                    Puedes habilitar el modo doggo amigo dentro de tu perfil para indicar que tu doggo amigo se encuentra extraviado, y al momento que escanén la doggo placa, inmediatamente mostrará los datos de contacto de tu doggo amigo, así como también te llegara una notificación con la ubicación en donde fue escaneada la doggo placa.                  </p>

               </div>
            </div>
         </div>
         <!--col-md-12  -->
      </div>
      <!-- /owl-services -->
   </div>
   <!-- /mt-5 -->
   <!-- contact call to action -->
<!-- /contact-calltoaction -->
		    <!-- container-->
   <div class="container block-padding pattern4-right">
      <div class="row">
         <div class="col-lg-5 d-flex flex-wrap align-items-center">
            <!-- image -->
            <img src="img/services/servicesimg2.png" class="img-fluid " alt="">
         </div>
         <!-- /col-lg-5 -->
         <div class="col-lg-7">
            <h3>Preguntas frecuentes</h3>
            <hr class="small-divider left">
            <div class="accordion mt-5">
               <!-- collapsible accordion 1 -->
               <div class="card">
                  <div class="card-header">
                     <a class="card-link" data-toggle="collapse" href="#collapseOne">
                     Donde la puedo adquirir?
                     </a>
                  </div>
                  <!-- /card-header -->
                  <div id="collapseOne" class="collapse show" data-parent=".accordion">
                     <div class="card-body">
                        <p>Podrás adquirir la doggo placa en cualquier petshop o veterinario autorizado, para que ellos activen tu placa.</p>
                     </div>
                  </div>
               </div>
               <!-- /card -->
               <!-- collapsible accordion 2 -->
               <div class="card">
                  <div class="card-header">
                     <a class="collapsed card-link" data-toggle="collapse" href="#collapseTwo">
                     Que debo de hacer cuando mi placa fue activada?
                     </a>
                  </div>
                  <div id="collapseTwo" class="collapse" data-parent=".accordion">
                     <div class="card-body">
                        <p>Escanear el código QR o ir directo a https://www.doggofit.doggo-sistema.com.mx y llenar el perfil de tu mascota.</p>
                     </div>
                  </div>
               </div>
               <!-- /card -->
               <!-- collapsible accordion 3 -->
               <div class="card">
                  <div class="card-header">
                     <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree">
                    Mi mascota se perdió que hago?
                     </a>
                  </div>
                  <div id="collapseThree" class="collapse" data-parent=".accordion">
                     <div class="card-body">
                        <p>Al activar este modo todos los usuarios cercanos a tu zona recibiran un mensaje de aviso el cual sera difundido en nuestras redes sociales las de la mascota, podras llenar un registro explicando a detalle donde fue.</p>
                     </div>
                  </div>
               </div>
               <!-- /card -->
            </div>
            <!-- /accordion -->
         </div>
         <!-- /col-lg-7 -->
      </div>
      <!-- /row -->
   </div>
   <!-- /container -->
</div>
@stop
