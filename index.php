<?php
  include_once("includes/nav.php");
  include_once("includes/video.php");
  include_once("includes/idioma.php");
?>

<body>
    <main>
        <!--seccion propuesta-->
        <section class="cta-5 text-center about" id="conocenos">
            <div class="container">
                <div class="row align-items-center about-soluciones">
                    <div class="col-lg-12 text-center">
                        <h2 class="mt-4 mb-2"><?php echo $lang["proponemos"]; ?> </br><span><?php echo $lang["soluciones"]; ?> </span></h2>
                        <div class="divider "></div>
                    </div>
                </div>
            </div>

            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm col-md-7 letras-uno">
                        <h2 class=" letras-mover-tres line-1 anim-typewriter"><?php echo $lang["innovadoras"]; ?></h2>
                    </div>
                    <div class="div-imagen-uno col-sm col-md-5 wow animated bounceInLeft" data-wow-duration="2s"></div>
                </div>
                <div class="row ">
                    <div class="col-sm letras-dos col-md-7">
                        <h2 class="letras-mover-tres line-1 anim-typewriter"><?php echo $lang["creativas"]; ?></h2>
                    </div>
                    <div class="div-imagen-dos col-sm col-md-5 wow animated bounceInLeft" data-wow-duration="2s"></div>
                </div>
                <div class="row ">
                    <div class="col-sm letras-tres col-md-7">
                        <h2 class="letras-mover-tres line-1 anim-typewriter"><?php echo $lang["disrruptivas"]; ?></h2>
                    </div>
                    <div class="div-imagen-tres col-sm col-md-5 wow animated bounceInLeft" data-wow-duration="2s"></div>
                </div>
            </div>
        </section>
    </main>

    <!--Contactanos-->
    <section class="cta-5 text-center contactanos ">
        <div class="container ">
            <div class="row align-items-center about-soluciones">
                <div class="col-lg-12 text-center text-lg-center" data-wow-duration="1s">
                    <h2 class="mt-4 mb-2 "><?php echo $lang["h2-form"]; ?> </br><span><?php echo $lang["span-h2-form"]; ?></span></h2>
                    <div class="divider "></div>
                </div>
            </div>
            <div class="row ">
                <div class="col-lg-6 planeta ">
                    <img class="tierra" src="imagenes/mundo-min.jpg ">
                </div>
                <div class="col-lg-6 text-center mb-4 formulario">
                    <h3><?php echo $lang["contactanos"]; ?></h3>
                    <form action="envia.php" method="post" class="contact-form mt-4 ">
                        <div class="row ">
                            <div class="col-md-12 ">
                                <input type="text " class="form-control-custom mb-4 " name='nombre' placeholder="<?php echo $lang["nombre"]; ?>" value="<?php echo $lang["nombre"]; ?>">
                            </div>
                            <div class="col-md-6 ">
                                <input type="text " class="form-control-custom mb-4 " name='pais' placeholder="<?php echo $lang["pais"]; ?> " value="<?php echo $lang["pais"]; ?>">
                            </div>
                            <div class="col-md-6 ">
                                <input type="tel " class="form-control-custom mb-4 " name='telefono' placeholder="<?php echo $lang["tel"]; ?>" value="<?php echo $lang["tel"]; ?>">
                            </div>
                            <div class="col-md-12 ">
                                <input type="text " class="form-control-custom mb-4 " name='email' placeholder="Email " value="Email">
                            </div>
                            <br/>
                        </div>
                        <div class="row ">
                            <div class="col-md-12 ">
                                <textarea class="form-control-custom mb-4 " name='consulta' value="mensaje" placeholder="<?php echo $lang["su-msj"]; ?>" rows="3" onFocus="if(this.value=='mensaje')this.value=' '"></textarea><br/>
                                <div class="g-recaptcha" data-sitekey="6LcuISsaAAAAACx7TdwCXEx0KX3GeU9Y4AQiC0mL"></div>
                                <button type="submit " class="btn btn-primary btn-lg mb-4 "><?php echo $lang["enviar"]; ?></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row paises">
                <div class="col-md-12">
                    <img src="imagenes/otras/argentina.svg" alt="Argentina bandera" class="img-fluid bandera">
                    <img src="imagenes/otras/paraguay.png" alt="Paraguay bandera" class="img-fluid bandera">
                    <img src="imagenes/otras/brazil.png" alt="Brasil bandera" class="img-fluid bandera">
                    <img src="imagenes/otras/peru.svg" alt="Peru bandera" class="img-fluid bandera">
                    <img src="imagenes/otras/colombia.svg" alt="Colombia bandera" class="img-fluid bandera">
                    <img src="imagenes/otras/bolivia.png" alt="Bolivia bandera" class="img-fluid bandera">
                    <img src="imagenes/otras/uruguay.png" alt="Uruguay bandera" class="img-fluid bandera">
                    <img src="imagenes/otras/espana.svg" alt="España bandera" class="img-fluid bandera">
                    <img src="imagenes/otras/reino-unido.svg" alt="Reino Unido bandera" class="img-fluid bandera">
                    <img src="imagenes/otras/italia.svg" alt="Italia bandera" class="img-fluid bandera">
                    <img src="imagenes/otras/francia.svg" alt="Francia bandera" class="img-fluid bandera">
                    <img src="imagenes/otras/andorra.png" alt="Andorra bandera" class="img-fluid bandera">
                    <img src="imagenes/otras/paises-bajos.svg" alt="Luxemburgo bandera" class="img-fluid bandera">
                    <img src="imagenes/otras/alemania.svg" alt="Alemania bandera" class="img-fluid bandera">
                    <img src="imagenes/otras/portugal.svg" alt="Portugal bandera" class="img-fluid bandera">
                </div>  
            </div>
        </div>
    </section>

   
      <!--icono flotante-->
      <div class='redes-flotantes'>
        <div class="separator " style="clear: both; text-align: left; ">
        </div>
        <div class="separator " style="clear: both; text-align: center; ">
        </div>
        <div class="separator " style="clear: both; text-align: center; ">
        </div>
        <div class="separator " style="clear: both; text-align: left; ">
            <a href="http://wa.me/5491169465437?text=Hola,%20quisiera%20que%20me%20contacten " style="clear: left; float: left; margin-bottom: 1em; margin-right: 1em; " target="_blank "><img border="0 " data-original-height="59
                        " data-original-width="59 " src="https://1.bp.blogspot.com/-q3Dot9N2qac/XOQgr9etVpI/AAAAAAABT1M/6V4Bqaqr-6UQcl9Fy2_CaVgex0N_OYuQgCLcBGAs/s1600/whatsapp%2Bicono.png " /></a>
        </div>
        <div class="separator" style="clear: both; text-align: left; ">
            <a href="#home"><i class="bi bi-arrow-up-circle-fill"></i></a>
        </div>
    </div>
 
    <?php
      include_once("includes/contact.php");
      include_once("includes/footer.php");
    ?>