<!DOCTYPE html>
<html lang="en">
<!-- head -->
<?php include 'includes/head.php'; ?>

<!-- body -->

<body> 
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
                                 <a class="nav-link " href="service.php" onclick="hideNavbar()">INICIO</a>
                              </li>
                              <li class="nav-item">  
                                 <a class="nav-link active" href="proyectos.php" onclick="hideNavbar()">NUESTROS PROYECTOS</a>
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
   <br><br><br><br>
   <div class="image-container" id="imageContainer">
      <img id="mapImage" src="images/plano.png" alt="Plano del Proyecto">
      <div class="controls">
         <button onclick="zoomIn()">➕ Acercar</button>
         <button onclick="zoomOut()">➖ Alejar</button>
         <button onclick="moveLeft()">⬅ Izquierda</button>
         <button onclick="moveRight()">➡ Derecha</button>
         <button onclick="moveUp()">⬆ Arriba</button>
         <button onclick="moveDown()">⬇ Abajo</button>
         <button onclick="resetPosition()">🔄 Restablecer</button>
      </div>
   </div>
   <!-- end contact  section -->
   <!--  footer -->
   <?php include 'includes/footer.php'; ?>
   <!-- end footer -->
   <!-- Javascript files-->
   <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
   <script src="js/custom.js"></script>
   <script src="js/visor.js"></script>
   <script src="js/scripts.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.16.105/pdf.min.js"></script>
   <script src="js/owl.carousel.min.js"></script>

