<?php
require_once("../../app/models/database.class.php");
require_once("../../app/helpers/validator.class.php");
require_once("../../app/helpers/component.class.php");
require_once("../../app/models/cliente.class.php");
class Page extends Component{
	public static function templateHeader($title){
		session_start();
        ini_set("date.timezone","America/El_Salvador");

 //Comprobamos si esta definida la sesión 'tiempo'.
 if(isset($_SESSION['tiempo']) ) {

    //Tiempo en segundos para dar vida a la sesión.
    $inactivo = 60;//1min en este caso.

    //Calculamos tiempo de vida inactivo.
    $vida_session = time() - $_SESSION['tiempo'];

        //Compraración para redirigir página, si la vida de sesión sea mayor a el tiempo insertado en inactivo.
        if($vida_session > $inactivo)
        {
            //Removemos sesión.
            session_unset();
            //Destruimos sesión.
            session_destroy();              
            //Redirigimos pagina.
            header("Location: ../principal/index.php");

            exit();
        }

}
$_SESSION['tiempo'] = time();

        print("
        <!DOCTYPE html>
        <html lang='en' class='z'>
            <head>
                <meta charset='UTF-8'>
                <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                <meta http-equiv='X-UA-Compatible' content='ie=edge'>
                <title>Nosotros</title>	
                <!-- BOOTSTRAP-->
                <link rel='stylesheet' href='../../web/css/bootstrap.min.css'>
                <!-- Material Design Bootstrap -->
                <link href='../../web/css/mdb.min.css' rel='stylesheet'>
                <!-- FONTS -->
                <link rel='stylesheet' href='../../web/css/fontawesome-all.css'>
                <!-- CSS -->
                <link rel='stylesheet' href='../../web/css/style.css'> 
                <script type='text/javascript' src='../../web/js/sweetalert.min.js'></script>
                <script src='https://www.google.com/recaptcha/api.js'></script>

            </head>
            <body class='z'>    
                
        ");
		require_once("../../app/views/public/sections/modals_view.php");
    }

    public static function actualizacionN(){
        $cliente = new Cliente;
                $cliente->setId($_SESSION['IdCliente']);
                if ($cliente->readCliente()) {
                    $ingreso   = date_create($cliente->getFecha());
                    $val       = date("Y-m-d");
                    $valor     = date_create($val);
                    $intervalo = date_diff($ingreso,$valor);
                    if ($intervalo->format('%a') >= 2) {
                        Page::showMessage(3, "Debe cambiar contraseña", "actualizarC.php");
                    }
                 }
      }

public static function templateFooter(){
    print("
    <!--Footer-->
<footer class='page-footer center-on-small-only blue-grey lighten-5 pt-0'>
    <div style='background-color: black;'>
        <div class='container'>
            <!--Grid row-->
            <div class='row py-4 d-flex align-items-center'>
                <!--Grid column-->
                <div class='col-12 col-md-5 text-left mb-4 mb-md-0'>
                    <h6 class='mb-0 white-text text-center text-md-left tituliyo'><strong>Encuentranos en nuestras redes sociales!</strong></h6>
                </div>
                <!--Grid column-->
                <div class='col-12 col-md-7 text-center text-md-right'>
                    <!--Facebook-->
                    <a class='icons-sm fb-ic ml-0' href='http://www.facebook.com' target='_blank'><i class='fab fa-facebook-square fa-2x'> </i></a>
                    <!--Twitter-->
                    <a class='icons-sm tw-ic' href='http://www.twitter.com' target='_blank'><i class='fab fa-twitter fa-2x'> </i></a>
                    <!--Instagram-->
                    <a class='icons-sm ins-ic' href='http://www.instagram.com' target='_blank'><i class='fab fa-instagram fa-2x'> </i></a>
                </div>
                <!--Grid column-->
            </div>
            <!--Grid row-->
        </div>
    </div>
    <div class='container mt-5 mb-4 text-center text-md-left'>
        <div class='row mt-3'>
            <!--First column-->
            <div class='col-md-5 col-lg-6 col-xl-5 mb-r dark-grey-text'>
                <h6 class='title font-bold'><strong>LUHO</strong></h6>
                <hr class='teal accent-3 mb-4 mt-0 d-inline-block mx-auto' style='width: 60px;'>
                <p> Hay LUHOS que solo puedes darte una vez en la vida.</p>
                <p>-Roland Vanegas.</p>
            </div>
            <!--/.First column-->          
            <!--Third column-->
            <div class='col-md-3 col-lg-4 col-xl-3 mb-r dark-grey-text'>
                <h6 class='title font-bold'><strong>LUHO links</strong></h6>
                <hr class='teal accent-3 mb-4 mt-0 d-inline-block mx-auto' style='width: 60px;'>
                <p><a href='#!' data-toggle='modal' data-target='#ayudamodal' class='dark-grey-text'>Ayuda</a></p>
                <p><a href='#!' data-toggle='modal' data-target='#terminosmodal' class='dark-grey-text'>Terminos y condiciones</a></p>
                <p><a href='../nosotros/index.php' class='dark-grey-text'>Nosotros</a></p>
            </div>
            <!--/.Third column-->
            <!--Fourth column-->
            <div class='col-md-4 col-lg-3 col-xl-3 dark-grey-text'>
                <h6 class='title font-bold'><strong>Contact</strong></h6>
                <hr class='teal accent-3 mb-4 mt-0 d-inline-block mx-auto' style='width: 60px;'>
                <p><i class='fas fa-home fa-lg'></i> Sivar, San Salvador 503, SV</p>
                <p><i class='far fa-envelope fa-lg'></i> LuhoLuxury@gmail.com</p>
                <p><i class='fas fa-phone fa-lg'></i> +503 2525-2525</p>
                <p><i class='fas fa-code fa-lg'></i> Hecho con amor</p>
            </div>
            <!--/.Fourth column-->
        </div>
    </div>
    <!-- Copyright-->
    <div class='footer-copyright'>
        <div class='container-fluid'>
            © 2018 Copyright: <a href='https://www.Luho.com'><strong> Luho.com</strong></a>
        </div>
    </div>
    <!--/.Copyright -->
</footer>
<!--/.Footer-->

<!-- SCRIPTS-->
<!-- BOOTSTRAP JS-->
<script src='../../web/js/jquery-3.2.1.slim.min.js'></script>
<script src='../../web/js/bootstrap.min.js'></script>
<script src='../../web/js/popper.min.js'></script>
<script type='text/javascript' src='../../web/js/mdb.min.js'></script>
<!-- SLIDER JS-->
<script src='../../web/js/index.js'></script>
<!-- Galeria JS-->
<script src='../../web/js/index1.js'></script>
<script type='text/javascript' src='../../web/js/select.js'></script>

    ");
}
}

?>