<!DOCTYPE html>
<html lang="en">

<head>
   <!-- basic -->
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <!-- mobile metas -->
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <!-- site metas -->
   <title>Monterreal</title>
   <meta name="keywords" content="">
   <meta name="description" content="Proyectos Inmobiliarios, Porque te mereces tener tu PROPIO TERRENO, te acompañamos a celebrar tu nuevo hogar.">
   <meta name="author" content="Cristtofher Ccalash">
   <!-- bootstrap css -->
   <link rel="stylesheet" href="css/bootstrap.min.css">
   <!-- style css -->
   <link rel="stylesheet" href="css/style.css">  
   <!-- Responsive-->
   <link rel="stylesheet" href="css/responsive.css">


   <link rel="stylesheet" href="css/owl.carousel.min.css">  
   <!-- fevicon -->  
   <link rel="icon" href="images/fevicon.png" type="image/gif" />
   <link rel="icon" href="./images/logo_mini.png" sizes="32x32" />
   <!-- Scrollbar Custom CSS -->
   <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
   <link rel="stylesheet" href="css/main.css">

   <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet">
   <!-- Tweaks for older IEs -->
   <!--[if lt IE 9]>
         <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
         <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->     
   <!-- Font Awesome -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
   <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"
   
   
      media="screen">
</head>

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
                                 <a class="nav-link " href="service.htm" onclick="hideNavbar()">INICIO</a>
                              </li>
                              <li class="nav-item">  
                                 <a class="nav-link active" href="proyectos.htm" onclick="hideNavbar()">NUESTROS PROYECTOS</a>
                              </li>
                              <li class="nav-item ">
                                 <a class="nav-link" href="nosotros.htm" onclick="hideNavbar()">NOSOTROS</a>
                              </li>       
                              <li class="nav-item">
                                 <a class="nav-link" href="info.htm" onclick="hideNavbar()">INFORMACION</a>
                              </li>  
                              <li class="nav-item">
                                 <a class="nav-link" href="index.htm" onclick="hideNavbar()">TRABAJA CON NOSOTROS</a> 
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
   <br><br>
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

