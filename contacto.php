<?php
include_once("includes/nav.php");
include_once("includes/idioma.php");
?>

    <div class="overlay-contacto"  id="contacto">
        <div class="col-md-12 text-center titulo-lg-servicios">
            <h2 class="letra"><?php echo $lang["contacto-menu"]; ?></h2>
        </div>>
        <div class="col-md-12 text-center align-items-center texto-servicios">
            <h3 class="mt-4 mb-2"><?php echo $lang["contactanos"]; ?></h3>
            <div class="divider "></div>
        </div>
    </div>
</header>

  <!--seccion contacto-->
    <section class="contacto">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-6">
                            <h4>Info</h4>
                            <a href="mailto:info@makhalu-ac.com" title="Email "><i class="bi bi-envelope-fill"><h6>info@makhalu-ac.com</h6></i></a> 
                            <div class="divider-trans"></div>
                        </div>
                        <div class="col-md-6">
                            <h4><?php echo $lang["soporte"]; ?></p></h4>
                            <a href="mailto:soporte@makhalu-ac.com" title="Email "><i class="bi bi-envelope-fill"><h6>soporte@makhalu-ac.com</h6></i></a>
                            <div class="divider-trans"></div>
                        </div>
                        <div class="col-md-6">
                            <h4><?php echo $lang["presupuestos"]; ?></h4>
                            <a href="mailto:contacto@makhalu-ac.com" title="Email "><i class="bi bi-envelope-fill"><h6>contacto@makhalu-ac.com</h6></i></a>
                            <div class="divider-trans"></div>
                        </div>
                        <div class="col-md-6">
                            <h4><?php echo $lang["oficina"]; ?></h4>
                            <i class="bi bi-geo-fill"></i>
                            <h6>Alicia Moreau de Justo 872, Caba.</h6>
                            <div class="divider-trans"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 imagen-contato">
                    <img class="img-fluid"src="imagenes/otras/mapa-2.jpg" alt="Marketing Digital, Makhalu-AC">
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
        <div class="separator " style="clear: both; text-align: left; ">
            <a href="#contacto"><i class="bi bi-arrow-up-circle-fill"></i></a>
        </div>
    </div>
        

<?php
include_once("includes/footer.php");
?>