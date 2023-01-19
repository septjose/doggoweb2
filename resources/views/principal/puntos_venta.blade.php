@extends('welcome')
@section('contenido')
<div class="jumbotronpv jumbotronpv-fluid" data-center="background-size: 100%;"
   data-top-bottom="background-size: 110%;">
   <div class="container" >
      <div class="jumbo-headingpv" data-aos="fade-up">
         <h1></h1>
         <!-- Breadcrumbs -->
         <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
               <li class="breadcrumb-item"><a href="/">Inicio</a></li>
               <li class="breadcrumb-item active" aria-current="page">Puntos de venta </li>
            </ol>
         </nav>
      </div>
   </div>
   <!-- /jumbo-heading -->
</div>
<!-- /jumbotron -->
<!-- ==== Page Content ==== -->
<div class="page container">
   <div class="row">
      <div class="col-lg-7">
         <h2>Doggo puntos de venta</h2>
         <p class="mt-4">Buscamos más puntos de venta para que tengas más cerca y puedas darle a tus amigos los premios que más les encanta. </p>
         <p class="font-weight-bold">Si te gustaría, vender nuestros productos,<a href="/contacto">contáctanos y te daremos más información</a>
         </p>
      </div>
	  <!-- /col-lg -->
      {{--<div class="col-lg-5 card" style="background-color: #f4f4f4">
         <h5>Ready for adoption</h5>
         <ul class="checkmark pl-0 font-weight-bold">
            <li>All pets are neutered and vaccinated</li>
            <li>All pets are examined by a vet and treated as required</li>
            <li>We help to match you with a pet that meet you needs</li>
         </ul>
      </div>--}}
	  <!-- /col-lg -->
   </div>
   <!-- centered Gallery navigation -->
   <ul class="nav nav-pills category-isotope center-nav mt-5">
      <li class="nav-item">
         <a class="nav-link active" href="#" data-toggle="tab" data-filter="*">Todos</a>
      </li>
      <li class="nav-item">
         <a class="nav-link" href="#" data-toggle="tab" data-filter=".sal">Salamanca</a>
      </li>
      {{--<li class="nav-item">
         <a class="nav-link" href="#" data-toggle="tab" data-filter=".corta">Cortazar</a>
      </li>--}}
      <li class="nav-item">
        <a class="nav-link" href="#" data-toggle="tab" data-filter=".cel">Celaya</a>
     </li>
     <li class="nav-item">
        <a class="nav-link" href="#" data-toggle="tab" data-filter=".sma">San Miguel de Allende</a>
     </li>
     <li class="nav-item">
        <a class="nav-link" href="#" data-toggle="tab" data-filter=".quer">Querétaro</a>
     </li>
     <li class="nav-item">
        <a class="nav-link" href="#" data-toggle="tab" data-filter=".mor">Morelia</a>
     </li>
   </ul>
   <!-- /ul -->
   <!-- Gallery -->
   <div id="gallery-isotope" class="row row-eq-height mt-lg-5">
      <!-- Adopt 1 -->
      <div class="sal col-lg-6">
         <div class="isotope-item">
            <div class="adopt-card res-margin row pattern2" style="background-color: #f4f4f4">
               <div class="col-md-5">
                  <!-- Image -->
                  <div class="adopt-image d-flex flex-wrap align-items-center ">

                     <img src="/img/sal1.jpg" class="img-fluid" alt="">

                  </div>
               </div>
               <div class="col-md-7 res-margin">
                  <!-- Name -->
                  <div class="caption-adoption">
                     <h5 class="adoption-header"><a href="https://www.google.com.mx/maps/place/Blvd.+Faja+de+Oro+1119,+Los+Rangeles,+36749+Salamanca,+Gto./@20.581309,-101.2110387,3a,60y,174h,90t/data=!3m7!1e1!3m5!1sNvk0qB3acOOUU41dZTb7ug!2e0!6shttps:%2F%2Fstreetviewpixels-pa.googleapis.com%2Fv1%2Fthumbnail%3Fpanoid%3DNvk0qB3acOOUU41dZTb7ug%26cb_client%3Dsearch.gws-prod.gps%26w%3D86%26h%3D86%26yaw%3D99.749016%26pitch%3D0%26thumbfov%3D100!7i13312!8i6656!4m5!3m4!1s0x842c85aba65f2217:0x7d2f4c96600d9e51!8m2!3d20.5812823!4d-101.2108744" target="_blank">Hospital cocan salamanca</a></h5>
                     <!-- List -->
                     <ul class="list-unstyled">
                        <li><strong>Tipo:</strong>Clinica veterinaria</li>
                        <li><strong>Dirección:</strong>Boulevard Faja de Oro #1119 36748 Salamanca, México</li>
                     </ul>
                  </div>
               </div>
               <div class="col-md-12 mt-3">
                  <!-- Button -->
                  <div class="text-center">
                     <!-- Adopt info -->
                     <ul class="adopt-card-info list-unstyled">
                        <a href="https://www.facebook.com/profile.php?id=100076506001579"><li ><i class="fab fa-facebook fa-xl"></i>Facebook</li></a>
                        <a href="https://www.instagram.com/cocanmascotas/" target="_blank"><li ><i class="fab fa-instagram fa-xl"></i>Instagram</li></a>
                     </ul>
                     <!-- button-->
                     <a href="https://www.google.com.mx/maps/place/Blvd.+Faja+de+Oro+1119,+Los+Rangeles,+36749+Salamanca,+Gto./@20.581309,-101.2110387,3a,60y,174h,90t/data=!3m7!1e1!3m5!1sNvk0qB3acOOUU41dZTb7ug!2e0!6shttps:%2F%2Fstreetviewpixels-pa.googleapis.com%2Fv1%2Fthumbnail%3Fpanoid%3DNvk0qB3acOOUU41dZTb7ug%26cb_client%3Dsearch.gws-prod.gps%26w%3D86%26h%3D86%26yaw%3D99.749016%26pitch%3D0%26thumbfov%3D100!7i13312!8i6656!4m5!3m4!1s0x842c85aba65f2217:0x7d2f4c96600d9e51!8m2!3d20.5812823!4d-101.2108744" class="btn btn-primary" target="_blank">Búscalos</a>
                  </div>
                  <!-- /text-center -->
               </div>
               <!-- /col-md -->
            </div>
            <!-- /adopt-card -->
         </div>
         <!-- /isotope-item-->
      </div>
      <!-- /col-lg- -->
      <!-- Adopt 2 -->
      <div class="sal col-lg-6">
         <div class="isotope-item">
            <div class="adopt-card res-margin row pattern2" style="background-color: #f4f4f4">
               <div class="col-md-5">
                  <!-- Image -->
                  <div class="adopt-image d-flex flex-wrap align-items-center ">

                     <img src="/img/sal2.jpg" class="img-fluid" alt="">

                  </div>
               </div>
               <div class="col-md-7 res-margin">
                  <!-- Name -->
                  <div class="caption-adoption">
                     <h5 class="adoption-header"><a href="https://www.google.com.mx/maps/place/La+Croqueta+de+Misi/@20.5935298,-101.2013737,17z/data=!3m1!4b1!4m5!3m4!1s0x842c859944a26da5:0x8276f187f967becb!8m2!3d20.5935251!4d-101.1991876" target="_blank">La Croqueta De Misi</a></h5>
                     <!-- List -->
                     <ul class="list-unstyled">
                        <li><strong>Tipo:</strong> Pet shop</li>
                        <li><strong>Dirección:</strong>Carr. Lázaro Cárdenas 316, Francisco Villa, 36723 Salamanca, Gto.</li>
                     </ul>
                  </div>
               </div>
               <div class="col-md-12 mt-3">
                  <!-- Button -->
                  <div class="text-center">
                     <!-- Adopt info -->
                     <ul class="adopt-card-info list-unstyled">
                        <a href="https://www.facebook.com/lacroquetademisi" target="_blank"><li ><i class="fab fa-facebook fa-xl"></i>Facebook</li></a>
                        {{--<li ><i class="flaticon-dog-4"></i>Friendly to other pets</li>--}}
                     </ul>
                     <!-- button-->
                     <a href="https://www.google.com.mx/maps/place/La+Croqueta+de+Misi/@20.5935298,-101.2013737,17z/data=!3m1!4b1!4m5!3m4!1s0x842c859944a26da5:0x8276f187f967becb!8m2!3d20.5935251!4d-101.1991876" target="_blank" class="btn btn-primary">Búscalos</a>
                  </div>
                  <!-- /text-center -->
               </div>
               <!-- /col-md -->
            </div>
            <!-- /adopt-card -->
         </div>
         <!-- /isotope-item-->
      </div>
      <!-- /col-lg- -->
      <!-- Adopt 3 -->
      <!-- /col-lg- -->
      <!-- Adopt 4 -->
      <!-- /col-lg- -->
      <div class="sal col-lg-6">
        <div class="isotope-item">
           <div class="adopt-card res-margin row pattern2" style="background-color: #f4f4f4">
              <div class="col-md-5">
                 <!-- Image -->
                 <div class="adopt-image d-flex flex-wrap align-items-center ">
                    <img src="/img/sal3.png" class="img-fluid" alt="">
                 </div>
              </div>
              <div class="col-md-7 res-margin">
                 <!-- Name -->
                 <div class="caption-adoption">
                    <h5 class="adoption-header"><a href="https://www.google.com.mx/maps/place/C.+Tomasa+Esteves+812,+Centro,+36700+Salamanca,+Gto./@20.5766775,-101.1969393,19z/data=!3m1!4b1!4m5!3m4!1s0x842c850528615627:0xda7b5376cc78b653!8m2!3d20.5766762!4d-101.1963921" target="_blank">Veterinario orozco</a></h5>
                    <!-- List -->
                    <ul class="list-unstyled">
                       <li><strong>Tipo:</strong> Clínica veterinaria</li>
                       <li><strong>Dirección:</strong>C. Tomasa Esteves 812, Centro, 36700 Salamanca, Gto. </li>
                    </ul>
                 </div>
              </div>
              <div class="col-md-12 mt-3">
                 <!-- Button -->
                 <div class="text-center">
                    <!-- Adopt info -->
                    {{--<ul class="adopt-card-info list-unstyled">
                       <li ><i class="flaticon-syringe"></i>Vaccinated</li>
                       <li ><i class="flaticon-dog-20"></i>Children Friendly</li>
                    </ul>--}}
                    <!-- button-->
                    <a href="https://www.google.com.mx/maps/place/C.+Tomasa+Esteves+812,+Centro,+36700+Salamanca,+Gto./@20.5766775,-101.1969393,19z/data=!3m1!4b1!4m5!3m4!1s0x842c850528615627:0xda7b5376cc78b653!8m2!3d20.5766762!4d-101.1963921" target="_blank" class="btn btn-primary">Búscalos</a>
                 </div>
                 <!-- /text-center -->
              </div>
              <!-- /col-md -->
           </div>
           <!-- /adopt-card -->
        </div>
        <!-- /isotope-item-->
     </div>

      <!-- Adopt 5 -->
      <div class="cel col-lg-6">
         <div class="isotope-item">
            <div class="adopt-card res-margin row pattern2" style="background-color: #f4f4f4">
               <div class="col-md-5">
                  <!-- Image -->
                  <div class="adopt-image d-flex flex-wrap align-items-center ">
                     <img src="/img/cel.png" class="img-fluid" alt="">
                  </div>
               </div>
               <div class="col-md-7 res-margin">
                  <!-- Name -->
                  <div class="caption-adoption">
                     <h5 class="adoption-header"><a href="https://goo.gl/maps/Zy4mq2yE3XMkFqxb6" target="_blank">Solovino shop</a></h5>
                     <!-- List -->
                     <ul class="list-unstyled">
                        <li><strong>Tipo:</strong> Pet shop</li>
                        <li><strong>Dirección:</strong>Blvd. Adolfo Lopez M. Ote 211 conjunto comercial Boulevard local C8 Ultimo pasillo (El de la óptica Centro, 38000 Celaya, Gto.</li>
                     </ul>
                  </div>
               </div>
               <div class="col-md-12 mt-3">
                  <!-- Button -->
                  <div class="text-center">
                     <!-- Adopt info -->
                     <ul class="adopt-card-info list-unstyled">
                        <a href="https://www.facebook.com/SolovinoShop" target="_blank"><li ><i class="fab fa-facebook fa-xl"></i>Facebook</li></a>
                        <a href="https://www.instagram.com/solovino.shop/" target="_blank"><li ><i class="fab fa-instagram fa-xl"></i>Instagram</li></a>
                     </ul>
                     <!-- button-->
                     <a href="https://goo.gl/maps/Zy4mq2yE3XMkFqxb6" target="_blank" class="btn btn-primary">Búscalos</a>
                  </div>
                  <!-- /text-center -->
               </div>
               <!-- /col-md -->
            </div>
            <!-- /adopt-card -->
         </div>
         <!-- /isotope-item-->
      </div>
      <!-- /col-lg- -->
      <!-- Adopt 6 -->
      <div class="mor col-lg-6">
         <div class="isotope-item">
            <div class="adopt-card res-margin row pattern2" style="background-color: #f4f4f4">
               <div class="col-md-5">
                  <!-- Image -->
                  <div class="adopt-image d-flex flex-wrap align-items-center ">
                     <img src="/img/mor1.jpg" class="img-fluid" alt="">
                  </div>
               </div>
               <div class="col-md-7 res-margin">
                  <!-- Name -->
                  <div class="caption-adoption">
                     <h5 class="adoption-header"><a href="https://www.google.com.mx/maps/place/Proyectos/@19.6861568,-101.1585969,3a,75y,234.02h,90.49t/data=!3m7!1e1!3m5!1so69o6GcTtGSM7MisuWq2ZA!2e0!5s20170801T000000!7i13312!8i6656!4m12!1m6!3m5!1s0x842d1209d283af7f:0x380c448db8eaff71!2sClub+Campestre+Morelia!8m2!3d19.6816559!4d-101.1585021!3m4!1s0x842d12062891ef3d:0xdd70816eb5dcc090!8m2!3d19.6839355!4d-101.1582749" target="_blank">Aviario periquito amarillo</a></h5>
                     <!-- List -->
                     <ul class="list-unstyled">
                        <li><strong>Tipo:</strong> Pet shop</li>
                        <li><strong>Dirección:</strong>Av. Campestre No. 890 Col. Campestre 5829 Morelia, México</li>
                     </ul>
                  </div>
               </div>
               <div class="col-md-12 mt-3">
                  <!-- Button -->
                  <div class="text-center">
                     <!-- Adopt info -->
                     <ul class="adopt-card-info list-unstyled">
                        <a href="https://www.facebook.com/profile.php?id=100057214489543" target="_blank"><li ><i class="fab fa-facebook fa-xl"></i>Facebook</li></a>
                     </ul>
                     <!-- button-->
                     <a href="https://www.google.com.mx/maps/place/Proyectos/@19.6861568,-101.1585969,3a,75y,234.02h,90.49t/data=!3m7!1e1!3m5!1so69o6GcTtGSM7MisuWq2ZA!2e0!5s20170801T000000!7i13312!8i6656!4m12!1m6!3m5!1s0x842d1209d283af7f:0x380c448db8eaff71!2sClub+Campestre+Morelia!8m2!3d19.6816559!4d-101.1585021!3m4!1s0x842d12062891ef3d:0xdd70816eb5dcc090!8m2!3d19.6839355!4d-101.1582749" target="_blank" class="btn btn-primary">Búscalos</a>
                  </div>
                  <!-- /text-center -->
               </div>
               <!-- /col-md -->
            </div>
            <!-- /adopt-card -->
         </div>
         <!-- /isotope-item-->
      </div>
      <!-- /col-lg- -->
      <!-- Adopt 7 -->
      <div class="mor col-lg-6">
         <div class="isotope-item">
            <div class="adopt-card res-margin row pattern2" style="background-color: #f4f4f4">
               <div class="col-md-5">
                  <!-- Image -->
                  <div class="adopt-image d-flex flex-wrap align-items-center ">
                     <img src="/img/mor3.jpg" class="img-fluid" alt="">
                  </div>
               </div>
               <div class="col-md-5 res-margin">
                  <!-- Name -->
                  <div class="caption-adoption">
                     <h5 class="adoption-header"><a href="https://www.google.com.mx/maps/@19.693637,-101.2756352,3a,75y,320.87h,79.94t/data=!3m6!1e1!3m4!1sc0BqJtadYxKEucZEfTi9rw!2e0!7i13312!8i6656" target="_blank">Sra Leticia y Mónica</a></h5>
                     <!-- List -->
                     <ul class="list-unstyled">
                        <li><strong>Tipo:</strong> Vendedores oficiales</li>
                        <li><strong>Direccion:</strong>Calle antonio gaona,col. héroes republicanos #162 Morelia</li>
                     </ul>
                  </div>
               </div>
               <div class="col-md-12 mt-3">
                  <!-- Button -->
                  <div class="text-center">
                     <!-- Adopt info -->
                     {{--<ul class="adopt-card-info list-unstyled">
                     </ul>--}}
                     <!-- button-->
                     <a href="https://www.google.com.mx/maps/@19.693637,-101.2756352,3a,75y,320.87h,79.94t/data=!3m6!1e1!3m4!1sc0BqJtadYxKEucZEfTi9rw!2e0!7i13312!8i6656" target="_blank" class="btn btn-primary">Búscalos</a>
                  </div>
                  <!-- /text-center -->
               </div>
               <!-- /col-md -->
            </div>
            <!-- /adopt-card -->
         </div>
         <!-- /isotope-item-->
      </div>
      <!-- /col-lg- -->
      <!-- Adopt 8 -->
      <div class="mor col-lg-6">
         <div class="isotope-item">
            <div class="adopt-card res-margin row pattern2" style="background-color: #f4f4f4">
               <div class="col-md-5">
                  <!-- Image -->
                  <div class="adopt-image d-flex flex-wrap align-items-center ">

                     <img src="/img/mor2.jpg" class="img-fluid" alt="">

                  </div>
               </div>
               <div class="col-md-7 res-margin">
                  <!-- Name -->
                  <div class="caption-adoption">
                     <h5 class="adoption-header"><a href="https://www.facebook.com/profile.php?id=100080151207946" target="_blank">Pet shop morelia(Mújeres en acción)</a></h5>
                     <!-- List -->
                     <ul class="list-unstyled">
                        <li><strong>Tipo:</strong>Refugio de animales</li>
                        <li><strong>Dirección:</strong>-</li>
                     </ul>
                  </div>
               </div>
               <div class="col-md-12 mt-3">
                  <!-- Button -->
                  <div class="text-center">
                     <!-- Adopt info -->
                     <ul class="adopt-card-info list-unstyled">
                        <a href="https://www.facebook.com/profile.php?id=100080151207946" target="_blank"><li ><i class="fab fa-facebook fa-xl"></i>Facebook</li></a>
                     </ul>
                     <!-- button-->
                     <a href="https://www.facebook.com/profile.php?id=100080151207946" target="_blank" class="btn btn-primary">Búscalos</a>
                  </div>
                  <!-- /text-center -->
               </div>
               <!-- /col-md -->
            </div>
            <!-- /adopt-card -->
         </div>
         <!-- /isotope-item-->
      </div>

      <div class="mor col-lg-6">
        <div class="isotope-item">
           <div class="adopt-card res-margin row pattern2" style="background-color: #f4f4f4">
              <div class="col-md-5">
                 <!-- Image -->
                 <div class="adopt-image d-flex flex-wrap align-items-center ">
                    <img src="/img/mor4.jpg" class="img-fluid" alt="">
                 </div>
              </div>
              <div class="col-md-7 res-margin">
                 <!-- Name -->
                 <div class="caption-adoption">
                    <h5 class="adoption-header"><a href="https://www.facebook.com/chatitos.pet.accesorios" target="_blank">Chatitos pet</a></h5>
                    <!-- List -->
                    <ul class="list-unstyled">
                       <li><strong>Tipo:</strong> Pet shop</li>
                       <li><strong>Dirección:</strong></li>
                    </ul>
                 </div>
              </div>
              <div class="col-md-12 mt-3">
                 <!-- Button -->
                 <div class="text-center">
                    <!-- Adopt info -->
                    <ul class="adopt-card-info list-unstyled">
                       <a href="https://www.facebook.com/chatitos.pet.accesorios" target="_blank"><li ><i class="fab fa-facebook fa-xl"></i>Facebook</li></a>
                       <a href="https://www.instagram.com/chatitos.pet/" target="_blank"><li ><i class="fab fa-instagram fa-xl"></i>Instagram</li></a>
                    </ul>
                    <!-- button-->
                    <a href="https://www.facebook.com/chatitos.pet.accesorios" target="_blank" class="btn btn-primary">Búscalos</a>
                 </div>
                 <!-- /text-center -->
              </div>
              <!-- /col-md -->
           </div>
           <!-- /adopt-card -->
        </div>
        <!-- /isotope-item-->
     </div>

     <div class="quer col-lg-6">
        <div class="isotope-item">
           <div class="adopt-card res-margin row pattern2" style="background-color: #f4f4f4">
              <div class="col-md-5">
                 <!-- Image -->
                 <div class="adopt-image d-flex flex-wrap align-items-center ">

                    <img src="/img/queretaro.png" class="img-fluid" alt="">

                 </div>
              </div>
              <div class="col-md-7 res-margin">
                 <!-- Name -->
                 <div class="caption-adoption">
                    <h5 class="adoption-header"><a href="https://www.google.com.mx/maps/place/SOLOVINO+SHOP+%26+GROOMING/@20.5849747,-100.4015576,17z/data=!3m1!4b1!4m5!3m4!1s0x85d34557503df589:0x84b1a72a2f2c4669!8m2!3d20.5849697!4d-100.3993689" target="_blank">Solovino shop & grooming</a></h5>
                    <!-- List -->
                    <ul class="list-unstyled">
                       <li><strong>Tipo:</strong>Pet shop</li>
                       <li><strong>Dirección:</strong>C. Ignacio Pérez 28A, Centro, 76000 Santiago de Querétaro, Qro.</li>
                    </ul>
                 </div>
              </div>
              <div class="col-md-12 mt-3">
                 <!-- Button -->
                 <div class="text-center">
                    <!-- Adopt info -->
                    <ul class="adopt-card-info list-unstyled">
                       <a href="https://www.facebook.com/solovino.marca" target="_blank"><li ><i class="fab fa-facebook fa-xl"></i>Facebook</li></a>
                    </ul>
                    <!-- button-->
                    <a href="https://www.google.com.mx/maps/place/SOLOVINO+SHOP+%26+GROOMING/@20.5849747,-100.4015576,17z/data=!3m1!4b1!4m5!3m4!1s0x85d34557503df589:0x84b1a72a2f2c4669!8m2!3d20.5849697!4d-100.3993689" target="_blank" class="btn btn-primary">Búscalos</a>
                 </div>
                 <!-- /text-center -->
              </div>
              <!-- /col-md -->
           </div>
           <!-- /adopt-card -->
        </div>
        <!-- /isotope-item-->
     </div>

     <div class="sma col-lg-6">
        <div class="isotope-item">
           <div class="adopt-card res-margin row pattern2" style="background-color: #f4f4f4">
              <div class="col-md-5">
                 <!-- Image -->
                 <div class="adopt-image d-flex flex-wrap align-items-center ">

                    <img src="/img/pvsma1.png" class="img-fluid" alt="">

                 </div>
              </div>
              <div class="col-md-7 res-margin">
                 <!-- Name -->
                 <div class="caption-adoption">
                    <h5 class="adoption-header"><a href="https://www.google.com.mx/maps/place/La+Luz+1,+San+Antonio,+37750+San+Miguel+de+Allende,+Gto./@20.9086687,-100.7529356,17z/data=!3m1!4b1!4m5!3m4!1s0x842b51b27348e513:0xce6f5ad85ad9a401!8m2!3d20.9086637!4d-100.7507469" target="_blank">Alimento para mascotas el chino</a></h5>
                    <!-- List -->
                    <ul class="list-unstyled">
                       <li><strong>Tipo:</strong>Pet shop</li>
                       <li><strong>Dirección:</strong>La Luz 1, San Antonio, 37750 San Miguel de Allende, Gto.</li>
                    </ul>
                 </div>
              </div>
              <div class="col-md-12 mt-3">
                 <!-- Button -->
                 <div class="text-center">
                    <!-- Adopt info -->
                    {{--<ul class="adopt-card-info list-unstyled">
                       <a href="https://www.facebook.com/profile.php?id=100080151207946" target="_blank"><li ><i class="fab fa-facebook fa-xl"></i>Facebook</li></a>
                    </ul>--}}
                    <!-- button-->
                    <a href="https://www.google.com.mx/maps/place/La+Luz+1,+San+Antonio,+37750+San+Miguel+de+Allende,+Gto./@20.9086687,-100.7529356,17z/data=!3m1!4b1!4m5!3m4!1s0x842b51b27348e513:0xce6f5ad85ad9a401!8m2!3d20.9086637!4d-100.7507469" target="_blank" class="btn btn-primary">Búscalos</a>
                 </div>
                 <!-- /text-center -->
              </div>
              <!-- /col-md -->
           </div>
           <!-- /adopt-card -->
        </div>
        <!-- /isotope-item-->
     </div>

     <div class="sma col-lg-6">
        <div class="isotope-item">
           <div class="adopt-card res-margin row pattern2" style="background-color: #f4f4f4">
              <div class="col-md-5">
                 <!-- Image -->
                 <div class="adopt-image d-flex flex-wrap align-items-center ">

                    <img src="/img/pvsma2.png" class="img-fluid" alt="">

                 </div>
              </div>
              <div class="col-md-7 res-margin">
                 <!-- Name -->
                 <div class="caption-adoption">
                    <h5 class="adoption-header"><a href="https://www.google.com.mx/maps/place/P.%C2%BA+Alameda+71,+Jardines+II,+37747+San+Miguel+de+Allende,+Gto./@20.8935594,-100.7198837,3a,75y,165.4h,90.35t/data=!3m7!1e1!3m5!1s0n7Bcqdjoq51YIncomgXhg!2e0!6shttps:%2F%2Fstreetviewpixels-pa.googleapis.com%2Fv1%2Fthumbnail%3Fpanoid%3D0n7Bcqdjoq51YIncomgXhg%26cb_client%3Dsearch.gws-prod.gps%26w%3D86%26h%3D86%26yaw%3D199.8865%26pitch%3D0%26thumbfov%3D100!7i13312!8i6656!4m5!3m4!1s0x842b5179ec3f2a55:0x307a8d5369357ebb!8m2!3d20.8934694!4d-100.7199134" target="_blank">Peek Miis</a></h5>
                    <!-- List -->
                    <ul class="list-unstyled">
                       <li><strong>Tipo:</strong>Clínica veterinaria</li>
                       <li><strong>Dirección:</strong>P.º Alameda 71, Jardines II, 37747 San Miguel de Allende, Gto.</li>
                    </ul>
                 </div>
              </div>
              <div class="col-md-12 mt-3">
                 <!-- Button -->
                 <div class="text-center">
                    <!-- Adopt info -->
                    <ul class="adopt-card-info list-unstyled">
                       <a href="https://www.facebook.com/vetpeekmiis" target="_blank"><li ><i class="fab fa-facebook fa-xl"></i>Facebook</li></a>
                    </ul>
                    <!-- button-->
                    <a href="https://www.google.com.mx/maps/place/P.%C2%BA+Alameda+71,+Jardines+II,+37747+San+Miguel+de+Allende,+Gto./@20.8935594,-100.7198837,3a,75y,165.4h,90.35t/data=!3m7!1e1!3m5!1s0n7Bcqdjoq51YIncomgXhg!2e0!6shttps:%2F%2Fstreetviewpixels-pa.googleapis.com%2Fv1%2Fthumbnail%3Fpanoid%3D0n7Bcqdjoq51YIncomgXhg%26cb_client%3Dsearch.gws-prod.gps%26w%3D86%26h%3D86%26yaw%3D199.8865%26pitch%3D0%26thumbfov%3D100!7i13312!8i6656!4m5!3m4!1s0x842b5179ec3f2a55:0x307a8d5369357ebb!8m2!3d20.8934694!4d-100.7199134" target="_blank" class="btn btn-primary">Búscalos</a>
                 </div>
                 <!-- /text-center -->
              </div>
              <!-- /col-md -->
           </div>
           <!-- /adopt-card -->
        </div>
        <!-- /isotope-item-->
     </div>
      <!-- /col-lg- -->
   </div>
   <!-- /gallery-isotope-->
	    {{--<div class="col-md-12 mt-5">
		   <!-- pagination -->
		   <nav aria-label="pagination">
			  <ul class="pagination">
				 <li class="page-item"><a class="page-link active" href="#">1</a></li>
				 <li class="page-item"><a class="page-link" href="#">2</a></li>
				 <li class="page-item"><a class="page-link" href="#">3</a></li>
				 <li class="page-item"><a class="page-link" href="#">Next</a></li>
			  </ul>
		   </nav>
		   <!-- /nav -->
		</div>--}}
		<!-- /col-md -->
</div>
<!-- /page --><!-- ==== Newsletter - call to action ==== -->

<!--/container-fluid-->
@stop
