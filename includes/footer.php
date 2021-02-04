
    <!--footer-->
    <footer class="footer-2 ">
        <div class="container ">
            <div class="row ">
                <div class="col-md-4 text-center text-md-left ">
                    <a href="index.php"><img class="logo" src="imagenes/logo.svg " alt="Makhalu-AC"></a>
                </div>
                <div class="col-md-8 ">
                    <ul class="nav-footer mt-2 mt-md-0 ">
                        <li class="nav-item active ">
                            <a class="nav-link " href="index.php">Home <span class="sr-only ">(current)</span></a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link " href="about.php"><?php echo $lang["quienes-somos-menu"]; ?></a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link " href="servicios.php"><?php echo $lang["servicios-menu"]; ?></a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link " href="contacto.php"><?php echo $lang["contacto-menu"]; ?></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container-fluid ">
            <div class="divider "></div>
        </div>
        <div class="container ">
            <div class="row ">
                <div class="col-md-6 text-center text-md-left mt-2 mb-3 pt-1 ">
                    <p>Copyright &copy; Makhalu-AC. All rights reserved.</p>
                    <a href="privacidad.php"><p><?php echo $lang["politica-privacidad"]; ?></p></a>
                </div>
                <div class="col-md-6 text-center text-md-center mb-4 ">
                    <ul class="social ">
                        <li>
                            <a href="https://www.facebook.com/Makhalu-AC-106525984667897 " target="_blank " title="Facebook "><i class="bi bi-facebook "></i></a>
                        </li>
                       <!-- <li>
                            <a href="https://twitter.com/AcMakalu" title="Twitter " target="_blank "><i class="bi bi-twitter " ></i></a>
                        </li>
                        -->
                        <li>
                            <a href="https://www.instagram.com/makhalu.ac/" title="Instagram " target="_blank "><i class="bi bi-instagram " ></i></a>
                        </li>
                       <!-- <li>
                            <a href="https://www.linkedin.com/in/makhalu-ac-agencia-de-comunicaci%C3%B3n-4b3a31203/" title="Linkedin "><i class="bi bi-linkedin " ></i></a>
                        </li>
                        -->
                        <li>
                            <a href="mailto:info@makhalu-ac.com" title="Email "><i class="bi bi-envelope-fill"></i></a>
                        </li>
                        <div class="clear "></div>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

  


</body>
<!-- Core JavaScript-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js " integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW " crossorigin="anonymous "></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js " integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin=" anonymous "></script>
<script src="js/bootstrap.js "></script>
<script src="js/wow.min.js "></script>
<script src="js/main.js"></script>
<script>
    new WOW().init();
</script>
<script>
    var scroll = new SmoothScroll('a[href*="#"]');

</script>

</html>