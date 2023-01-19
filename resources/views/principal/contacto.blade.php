@extends('welcome')
@section('contenido')
<div class="jumbotronc jumbotronc-fluid" data-center="background-size: 100%;"
   data-top-bottom="background-size: 110%;">
   <div class="container" >
      <!-- jumbo-heading -->
      <div class="jumbo-headingc" data-aos="fade-up">
         <h1></h1>
         <!-- Breadcrumbs -->
         <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
               <li class="breadcrumb-item"><a href="/">Inicio</a></li>
               <li class="breadcrumb-item active" aria-current="page">Contacto</li>
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
         <div class="row">
            <div class="col-lg-12">
               <!-- contact-info-->
               <h2>Información para contactarnos </h2>
               <p>Tienes dudas, necesitas producto o quieres vender nuestro producto?
               </p>
			    <!-- contact info boxes start-->
               <div class="contact-info res-margin">
                  <div class="row res-margin mt-5 res-margin">
                     <div class="col-lg-4 mt-5">
                        <div class="contact-icon" style="background-color: #f4f4f4">
                           <!---icon-->
                           <i class="fa fa-envelope top-icon"></i>
                           <!-- contact-icon info-->
                           <div class="contact-icon-info">
                              <h5>Escríbenos</h5>
                              <p><a href="mailto:doggofitsma@gmail.com">doggofitsma@gmail.com</a></p>
                           </div>
                        </div>
                     </div>
                     <!-- /contact-icon-->
                     <div class="col-lg-4 mt-5 res-margin">
                        <div class="contact-icon" style="background-color: #f4f4f4">
                           <!---icon-->
                           <i class="fa fa-map-marker top-icon"></i>
                           <!-- contact-icon info-->
                           <div class="contact-icon-info">
                              <h5>Ubicación</h5>
                              <p>-</p>
                           </div>
                        </div>
                     </div>
                     <!-- /contact-icon-->
                     <div class="col-lg-4 mt-5 res-margin">
                        <div class="contact-icon" style="background-color: #f4f4f4">
                           <!---icon-->
                           <i class="fa fa-phone top-icon"></i>
                           <!-- contact-icon info-->
                           <div class="contact-icon-info">
                              <h5>LLámanos</h5>
                              <p>(464) 112-4092</p>
                           </div>
                        </div>
                     </div>
                     <!-- /contact-icon-->
                  </div>
                  <!-- /row -->
               </div>
               <!-- /contact-info-->
            </div>
            <!-- /col-lg-->
            <!-- contact-info-->
            <div class="contact-info col-lg-12 mt-5 res-margin">
               <h3>Envíanos un mensaje</h3>
               <!-- Form Starts -->
               <form id="form-pedido">
               <div id="contact_form">
                  <div class="form-group">
                     <div class="row">
                        <div class="col-md-6">
                           <label>Nombre completo<span class="required">*</span></label>
                           <input id="nombre" type="text" name="nombre" class="form-control input-field" required="">
                        </div>
                        <div class="col-md-6">
                           <label>Email <span class="required">*</span></label>
                           <input type="email" id="email" name="email" class="form-control input-field" required="">
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-md-6">
                           <label>Teléfono<span class="required">*</span></label>
                           <input type="text" id="telefono" name="telefono"class="form-control input-field" required="">
                        </div>
                        <div class="col-md-6">
                           <label>Ciudad <span class="required">*</span></label>
                           <input type="text" id="lugar" name="lugar" class="form-control input-field" required="">
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-md-12">
                           <label>Dirección</label>
                           <input type="text" id="direccion" name="direccion"  class="form-control input-field">
                        </div>
                        <div class="col-md-12">
                           <label>Referencias del lugar<span class="required">*</span></label>
                           <textarea name="message" id="referencia" name="referencia" class="textarea-field form-control" rows="3"  required=""></textarea>
                        </div>
                        <div class="col-md-12">
                            <label>Pedido<span class="required">*</span></label>
                            <textarea id="pedido" name="pedido" class="textarea-field form-control" rows="3"  required=""></textarea>
                         </div>
                     </div>
                     <button type="submit" onclick="generarPedido();" class="btn btn-primary">Enviar pedido</button>
                  </div>
                  <!-- /form-group-->
                  <!-- Contact results -->
                  <div id="contact_results"></div>
               </div>
               </form>
               <!-- /contact)form-->
            </div>
            <!-- /contact-info-->
         </div>
         <!-- /row-->
         <!-- map-->

         <!-- /map-->
      </div>
      <!-- /page-with-sidebar -->
      <!-- ==== Sidebar ==== -->
      <div id="sidebar" class="h-100 col-lg-3 card pattern3" style="background-color: #f4f4f4">
   <!--widget-area -->
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
</div>
<!--/sidebar -->   </div>
   <!-- /row -->
</div>
@section('scripts')
<script>
    function generarPedido() {
        if ($("#form-pedido")[0].checkValidity()) {
            event.preventDefault();
            var nombre = document.getElementById("nombre").value;
            var email = document.getElementById("email").value;
            var telefono = document.getElementById("telefono").value;
            var lugar = document.getElementById("lugar").value;
            var direccion = document.getElementById("direccion").value;
            var referencia = document.getElementById("referencia").value;
            var pedido = document.getElementById("pedido").value;
            alert("ESTA BIEN TODO");
            //window.location.href = "https://api.whatsapp.com/send?phone=524641124092&text=hola,%20¿qué%20tal%20estás?";
            window.open('https://api.whatsapp.com/send?phone=524111012779&text=hola,%20¿qué%20tal%20?%20Me%20gustaría%20realizar%20un%20pedido.%20Mis%20datos%20del%20pedido%20son:%0ANombre:'+nombre+'%0AEmail:'+email+'%0ATeléfono:'+telefono+'%0ACiudad:'+lugar+'%0ADirección:'+direccion+'%0AReferencia:'+referencia+'%0APedido:'+pedido,'_blank');
        } else {
            $("#form-pedido")[0].reportValidity();
        }
    }
</script>
@stop
@stop
