
<?php
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <title >LUXURY</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="CSS/GENERAL.CSS">
        <script language="javascript" src="JS/Login.js"></script>
    </head>
    <body>
       
        <header>
       <input type="checkbox" id="check-menu">
          <label class="icon-menu" for="check-menu"></label>
          
          <img src="IMG/Logo.png" alt="" id="Logo">
            <img src="IMG/LogoText1.png" alt="" id="LogoText">
          <nav class="menu">
                <ul>
                    <li><a href="sesion.php">INICIO</a></li>
                    <li><a href="contacto2.php">CONTACTOS</a></li>
                    <li><a href="reservar2.php">RESERVAR</a></li>
                    <li><a href="destinos2.php">DESTINO</a></li>
                    <li id="usuario" name="usuario">
                       <a href=""><?php echo $_SESSION['user']?></a>
                        <ul>
                            <a href="">Mis reservas</a>
                            <a href="index.html">Cerrar sesion</a>
                        </ul>
                    </li>
                </ul>
            </nav>
        </header>
        
       <div class="contenedorBanner">
            <div id="banner">
                <img src="IMG/banner.jpg" alt="">
                <p>Usted nos elige y nosotros lo ponemos cómodo</p>
            </div>
        </div>
        <section id="intro">
        <br><br>
        <h1>LUXURY</h1>
        <br><!--rese;a de pag-->
        <p>LUXURY hace más sencilla la reservación de tu próxima estancia en un hotel. Ya sea que viajes por negocios o por placer, te ofrecemos algunas de las mejores ofertas de hoteles en el mundo. Descubre tarifas baratas en habitaciones cerca del mar, Con LUXURY, tus opciones de reservación de hotel en el pais son infinitas.</p>
        </section>
        
        <section id="inf">
                       
                <h2>MAS BUSCADOS</h2>
            <div class="contenedor" >
                <article>
                    <a href="redir-body/item-1.html"><img src="IMG/n1.jpg"></a>
                    <h4 class="icon-star"> Resort Duglas Juan Dolio</h4>
                </article>
                        
                <article>
                    <a href="redir-body/item-2.html"><img src="IMG/n2.jpg" ></a>
                        <h4 class="icon-star" >Hotel Sayson Distrito Nacional</h4>
                </article>
                    
                <article>
                    <a href="redir-body/item-3.html"><img src="IMG/n7.jpg" ></a>
                        <h4 class="icon-star">Habitacion Ejecutiva</h4>
                </article>
                    
                <article>
                    <a href="redir-body/item-4.html"><img src="IMG/n4.jpg" ></a>
                        <h4 class="icon-star" >Hotel Nahiboa para Vacacionar</h4>
                </article>
                    
                <article>
                    <a href="redir-body/item-5.html"><img src="IMG/n5.jpeg"></a>
                        <h4 class="icon-star">OFERTA! de familia (niños gratis)</h4>
                </article>
                <article>
                    <a href="redir-body/item-6.html"><img src="IMG/n6.jpg" ></a>
                        <h4 class="icon-star" >
                        Hotel Cascadas las Terrenas</h4>
                </article>
            </div>
        </section>
        
    </body>
</html>
