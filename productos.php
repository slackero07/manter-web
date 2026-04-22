<!DOCTYPE html>
<html lang="es">
<head>
    <title>MAN-TER Group S.A.</title>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="MAN-TER Group S.A. | Ingenier&iacute;a en Conducci&oacute;n de Fluidos &#8211; Mangueras y Terminales de Alta, Media y Baja Presi&oacute;n Hidr&aacute;ulicos y Neum&aacute;ticos">
    <meta name="keywords" content="man-ter, manter, mangueras, terminales, flexibles, man-ter.com.ar, manter group,flexibles inoxidables,flexibles inox, valvulas">

    <link rel="stylesheet" type="text/css" href="css/custom.css" media="all"/>
    <link rel="icon" href="images/favicon.png" sizes="32x32" />
    <link rel="icon" href="images/favicon.png" sizes="192x192" />
    <link rel="apple-touch-icon" href="images/favicon.png" />
    <meta name="msapplication-TileImage" content="images/favicon.png" />


    <link rel="stylesheet" href="libraries/bootstrap/css/bootstrap.css">
    <script src="libraries/jquery-2.2.0.min.js" type="text/javascript"></script>
    <script src="js/custom.js" type="text/javascript" charset="utf-8"></script>
    <script src="libraries/bootstrap/js/bootstrap.min.js"></script>

</head>
<body class="bg0">	
 <header>  
    <nav id="menu" class="navbar navbar-expand-sm navbar-dark bg-dark menu" role="navigation">
          <a class="navbar-brand logo" href="#">
            <img src="images/LOGO150X50.png" width="100%" height="100%" class="d-inline-block align-top" alt=""> 
          </a>
          <a id="logoB" class="navbar-brand" href="#">
            <img src="images/LOGO150X50 B.png" width="100%" height="100%" class="d-inline-block align-top" alt=""> 
          </a>
        <!--  <a id="marca" hidden style="font-size: 1.5em">MAN-TER</a> -->
          <button class="navbar-toggler me-auto" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav ms-auto">
            <li class="nav-item active"><a class="nav-link" href="index.php">Inicio</a></li>
            <li class="nav-item"><a class="nav-link disabled" href="#">Quienes Somos</a></li>
            <li class="nav-item"><a class="nav-link disabled" href="productos.php">Nuestros Productos</a></li>
            <li class="nav-item"><a class="nav-link disabled" href="#">Contacto</a></li>            
            <li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>
            </ul>
      </div>
      </nav>
    </header>
    <section id="contenedor">
        <section id="productos">
            <article>
                <div><h1 class="h3 mb-3 text-white fw-bold">Nuestros Productos</h1></div>
                <br>
            </article>  

            <div class="accordion" id="accordion">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="heading1">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
                            <strong>TERMINALES</strong>
                        </button>
                    </h2>
                    <div id="collapse1" class="accordion-collapse collapse show" aria-labelledby="heading1" data-bs-parent="#accordion">
                        <div class="accordion-body">
                            <?php
                                $d = "images/productos";
                                $j = "Terminales";
                                $i = 1;
                                $n = count(glob($d.'/'.$j.'/'.'{*.jpg}',GLOB_BRACE));
                                while ($i <= $n) {
                                    echo "<div class='catItem'><span class='cattitle'><p>".$j."</p></span><div class='itemPic'><img src='".$d."/".$j."/".$i.".jpg'></div></div>";
                                    $i++; 
                                }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="heading2">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                            <strong>MANGUERAS</strong>
                        </button>
                    </h2> 
                    <div id="collapse2" class="accordion-collapse collapse" aria-labelledby="heading2" data-bs-parent="#accordion">
                        <div class="accordion-body">
                            <?php
                                $d = "images/productos";
                                $j = "Mangueras";
                                $i = 1;
                                $n = count(glob($d.'/'.$j.'/'.'{*.jpg}',GLOB_BRACE));
                                while ($i <= $n) {
                                    echo "<div class='catItem'><span class='cattitle'><p>".$j."</p></span><div class='itemPic'><img src='".$d."/".$j."/".$i.".jpg'></div></div>";
                                    $i++; 
                                }
                            ?>
                        </div>
                    </div>   
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="heading3">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                             <strong>ACCESORIOS</strong>
                        </button>
                    </h2> 
                    <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="heading3" data-bs-parent="#accordion">
                        <div class="accordion-body">
                            <?php
                                $d = "images/productos";
                                $j = "Accesorios";
                                $i = 1;
                                $n = count(glob($d.'/'.$j.'/'.'{*.jpg}',GLOB_BRACE));
                                while ($i <= $n) {
                                    echo "<div class='catItem'><span class='cattitle'><p>".$j."</p></span><div class='itemPic'><img src='".$d."/".$j."/".$i.".jpg'></div></div>";
                                    $i++; 
                                }
                            ?>
                        </div>
                    </div>                      
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="heading4">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                            <strong>VALVULAS</strong>
                        </button>
                    </h2> 
                    <div id="collapse4" class="accordion-collapse collapse" aria-labelledby="heading4" data-bs-parent="#accordion">
                        <div class="accordion-body">
                            <?php
                                $d = "images/productos";
                                $j = "Valvulas";
                                $i = 1;
                                $n = count(glob($d.'/'.$j.'/'.'{*.jpg}',GLOB_BRACE));
                                while ($i <= $n) {
                                    echo "<div class='catItem'><span class='cattitle'><p>".$j."</p></span><div class='itemPic'><img src='".$d."/".$j."/".$i.".jpg'></div></div>";
                                    $i++; 
                                }
                            ?>
                        </div>
                    </div> 
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="heading5">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
                            <strong>ACOPLES INSTANTANEOS</strong>
                        </button>
                    </h2>                         
                    <div id="collapse5" class="accordion-collapse collapse" aria-labelledby="heading5" data-bs-parent="#accordion">
                        <div class="accordion-body">
                            <?php
                                $d = "images/productos";
                                $j = "Acoples Instantaneos";
                                $i = 1;
                                $n = count(glob($d.'/'.$j.'/'.'{*.jpg}',GLOB_BRACE));
                                while ($i <= $n) {
                                    echo "<div class='catItem'><span class='cattitle'><p>".$j."</p></span><div class='itemPic'><img src='".$d."/".$j."/".$i.".jpg'></div></div>";
                                    $i++; 
                                }
                            ?>
                        </div>
                    </div> 
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="heading6">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse6" aria-expanded="false" aria-controls="collapse6">
                            <strong>ACOPLES RAPIDOS</strong>
                        </button>
                    </h2> 
                    <div id="collapse6" class="accordion-collapse collapse" aria-labelledby="heading6" data-bs-parent="#accordion">
                        <div class="accordion-body">
                            <?php
                                $d = "images/productos";
                                $j = "Acoples Rapidos";
                                $i = 1;
                                $n = count(glob($d.'/'.$j.'/'.'{*.jpg}',GLOB_BRACE));
                                while ($i <= $n) {
                                    echo "<div class='catItem'><span class='cattitle'><p>".$j."</p></span><div class='itemPic'><img src='".$d."/".$j."/".$i.".jpg'></div></div>";
                                    $i++; 
                                }
                            ?>
                        </div>
                    </div> 
                </div>
            </div>
            

        </section>   
     </section>
</body>
</html>