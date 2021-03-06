<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contacto</title>
    <link rel="shortcut icon" href="img/IconAvyanna-removebg-preview.png" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cabin+Sketch:wght@700&display=swap" rel="stylesheet">
   
<link rel="stylesheet" href="css/estilosContacto.css">
    <link rel="stylesheet" href="css/whatsapp.css">
   
    
    
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/normalize.css">
</head>

<body>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<a href="https://api.whatsapp.com/send?phone=526621845529&text=Bienvenidos%20a%20Avyanna%20!" class="float" target="_blank">
<i class="fa fa-whatsapp my-float"></i>
</a>

    <header>
        <a href="index.html"><img src="img/LOGO.png" class="logito"></a>
        
        <nav class="TamLe">
            <a href="index.html">Inicio</a>
            <a href="#1">Ofrecemos</a>
            <a href="#2">Servicios</a>
            <a href="contacto.html">Contacto</a>
        </nav>
  
       
        <div class="wave" style="height: 140px; overflow: hidden;"><svg viewBox="0 0 500 150" preserveAspectRatio="none"
                style="height: 100%; width: 100%;">
                <path d="M0.00,49.98 C150.00,150.00 349.20,-50.00 500.00,49.98 L500.00,150.00 L0.00,150.00 Z"
                    style="stroke: none; fill: rgb(226, 226, 226);"></path>
            </svg></div>
        
    </header>
    <div class="container-form">
        <div class="info-form">
            <h2>CONTACTANOS</h2>
            <p>Avyanna espacio psicopedag??gico Creando grandes historias, transformando futuros.</p>
            <a href="#"><i class="fa fa-phone"></i> 662 184 5529</a>
            <a href="#"><i class="fa fa-envelope"></i> ad.avyanna@gmail.com</a>
            <a href="#"><i class="fa fa-map-marked"></i> Quinta Blanca #1 Local E. Colonia Las Quintas</a>
        </div>
        
        <form>
            <input type="text" name="nombre" placeholder="Tu Nombre" class="campo">
            <input type="email" name="email" placeholder="Tu Email" class="campo">
            <input type="telefone" name="telefone" placeholder="Telefono" class="campo">
            <textarea name="msg" placeholder="Tu Mensaje..."></textarea>

            <input type="submit" name="enviar" value="Enviar Mensaje" class="btn-enviar">
        </form>
        <?php
    include("correo.php");
        ?>
    </div>

    <section class="about-services">
        <div class="contenedor">
            <div class="servicio-cont">
                <div class="servicio-ind">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3486.7715907305046!2d-110.99393478566375!3d29.082893770307074!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x86ce8532996a648d%3A0x340663d5377ca601!2sAVYANNA%20ESPACIO%20PSICOPEDAGOGICO%20HERMOSILLO!5e0!3m2!1ses-419!2smx!4v1646106834080!5m2!1ses-419!2smx" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            <div class="servicio-ind">
                    <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FAvyanna-107300088340242&tabs=timeline&width=450&height=500&small_header=true&adapt_container_width=true&hide_cover=true&show_facepile=true&appId" width="350" height="400" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                    
                </div>
            </div>
        </div>
    </section>
    <footer>
        <div class="contenedor-footer">
            <div class="content-foo">
                <h4>TELEFONO</h4>
                <p>+52 662 184 5529</p>
            </div>
            <div class="content-foo">
                <h4>CORREO</h4>
                <p>ad.avyanna@gmail.com</p>
            </div>
            <div class="content-foo">
                <h4>UBICACION</h4>
                <p>Quinta Blanca #1 83240 </p>
                <p>Hermosillo, Sonora, M??xico</p>
            </div>
        </div>
    </footer>
</body>
</html>