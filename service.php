<!DOCTYPE html>
<html lang="en">
<!-- head -->
<?php include 'includes/head.php'; ?>

<!-- body -->
<body class="main-layout"> 
   <!-- loader  -->    
  <div class="loader_bg">  
    <div class="loader">
        <div class="loader-circle"></div>
        <img src="./images/logo_mini.png" alt="Cargando..." />
    </div>
  </div>
<!-- End loader -->  
  
<!-- Header -->
<div id="inicio" class="carousel slide" data-ride="carousel">
    <header>
        <div class="header">
            <div class="container">
                <nav class="navbar navbar-expand-md navbar-dark">
                    <a class="navbar-brand" href="#">
                        <img src="images/logo.png" alt="Logo" class="logo-img" />
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link active" href="index.php" onclick="hideNavbar()">INICIO</a>
                            </li>
                            <li class="nav-item">  
                                <a class="nav-link" href="proyectos.php" onclick="hideNavbar()">NUESTROS PROYECTOS</a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="nosotros.php" onclick="hideNavbar()">NOSOTROS</a>
                            </li>       
                            <li class="nav-item">
                                <a class="nav-link" href="info.php" onclick="hideNavbar()">INFORMACION</a>
                            </li>  
                            <li class="nav-item">
                                <a class="nav-link" href="index.php" onclick="hideNavbar()">TRABAJA CON NOSOTROS</a> 
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
     </header>
</div>
   <!-- end header inner -->
   <!-- end header -->
   <!-- end contact  section -->
   <div class="blu">
      <div class="row-fluid homeRF">
         <div class="span12">
            <div class="backEmpresa" style="background-image: url(images/imagenActualidad.jpg);">
               <div class="headMsgAct">
                  <div class="titHead">Grupo Monterreal</div>
                  <div class="txtHead">
                     El Grupo Monterreal es una empresa local de Inmobiliarias con más años de experiencia, dedicada a las inversiones en la ciudad de Tacna.<br><br>
                   
                     Somos una empresa líder en la región, en la distribución de lugares adecuados para vivienda negocio y mas. Nuestro compromiso es ofrecer soluciones innovadoras que mejoren la vida de nuestros clientes, asegurando una inversion confiable y duradera.<br><br>
                  </div>                   
               <div class="flechaMas"></div>
            </div>
         </div>
      </div><!--/row-->
      <div class="row-fluid whiteBack">
         <div class="container">
            <div class="row bloquemisvis">
               <div class="col-md-6">
                  <div class="tituloEmp">Misión</div>
                  <div class="descEmp">“Nuestra misión es generar un buen servicio de bienestar a nuestros clientes a bien de nuestro servicio estrella que es la fibra óptica, teniendo como objetivo crecer de manera innovadora en cada unos de los mercados en los que estamos presentes, marcando diferencia con nuestros competidores.”</div>
               </div>
               <div class="col-md-6">
                  <div class="tituloEmp">Vision</div>
                  <div class="descEmp">“Para el 2025 nos proyectamos con ser una empresa líder en el departamento de Tacna y lograr expandirnos a nivel nacional proporcionando un buen servicio a nuestros clientes con un acceso optimo a internet y cable.”</div>
               </div>
            </div>
         </div>
      </div>
      <!--  footer -->
      <footer>
         <footer class="footer">
            <div class="footer-container">
               <div class="footer-column">
                  <h2 class="footer-heading">Contáctanos</h2>
                  <div class="footer-social-icons">
                     <span class="social-icon">
                        <a href="https://www.facebook.com/MonterrealPeru" target="_blank" aria-label="Facebook">
                           <i class="fab fa-facebook-f"></i>
                        </a>
                     </span>
                     <span class="social-icon">
                        <a href="https://www.instagram.com/" target="_blank" aria-label="Instagram">
                           <i class="fab fa-instagram"></i>
                        </a>
                     </span>
                     <span class="social-icon">
                        <a href="https://www.tiktok.com/" target="_blank" aria-label="TikTok">
                           <i class="fab fa-tiktok"></i>
                        </a>
                     </span>
                     <span class="social-icon">
                        <a href="https://www.youtube.com/" target="_blank" aria-label="YouTube">
                           <i class="fab fa-youtube"></i>
                        </a>
                     </span>
                     <span class="social-icon">
                        <a href="https://" target="_blank" aria-label="WhatsApp">
                           <i class="fab fa-whatsapp"></i>
                        </a>
                     </span>
                  </div>
                  <div class="footer-logo">
                     <a href="https://cabletacna.com.pe/">
                        <img src="./images/logo_empr2.png" alt="Monterreal Logo" />
                     </a>
                  </div>
                  <h2 class="footer-rights">© Grupo Monterreal 2025 - Todos los derechos reservados.</h2>
                  <h2 class="footer-rights">Powered By Cristtofher Ccalash</h2>
               </div>
            </div>
         </footer>
      </footer>
   </div>
   <!-- end footer -->
   <!-- Javascript files-->
   <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
   <script src="js/popper.min.js"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
   <script src="js/owl.carousel.min.js"></script>
   <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
   <script src="js/custom.js"></script>
   <script src="js/whatsapp.var.js"></script>