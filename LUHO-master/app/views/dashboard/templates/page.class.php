<?php
require_once("../../app/models/database.class.php");
require_once("../../app/helpers/validator.class.php");
require_once("../../app/helpers/component.class.php");
require_once("../../app/models/usuario.class.php");
class Page extends Component{
    
    public static function Administrador(){
        print("
        <header class='fixed-top'>
        <nav class='navbar navbar-expand-lg navbar-dark bg-dark '>
            <a class='navbar-brand' href='../inicio/index.php'>LUHO</a>
            <button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#navbarNav' aria-controls='navbarNav' aria-expanded='false' aria-label='Toggle navigation'>
                <span class='navbar-toggler-icon'></span>
            </button>
            <div class='collapse navbar-collapse' id='navbarNav'>
                <ul class='navbar-nav'>
                    <li class='nav-item'>
                        <a class='nav-link' href='../categoria/index.php'>Categoria</a>
                    </li>
                    <li class='nav-item'>
                        <a class='nav-link' href='../marca/index.php'>Marca</a>
                    </li>
                    <li class='nav-item'>
                        <a class='nav-link' href='../material/index.php'>Material</a>
                    </li>
                    <li class='nav-item'>
                        <a class='nav-link' href='../ocasion/index.php'>Ocasion</a>
                    </li>
                    <li class='nav-item'>
                        <a class='nav-link' href='../talla/index.php'>Talla</a>
                    </li>
                    <li class='nav-item'>
                        <a class='nav-link' href='../producto/index.php'>Producto</a>
                    </li>
                    <li class='nav-item'>
                        <a class='nav-link' href='../usuario/index.php'>Empleados</a>
                    </li>
                </ul>
                <!-- Links Imagen -->
                <ul class='navbar-nav nav-flex-icons ml-auto'>
                    <li class='nav-item'>
                        <a class='nav-link' href='../account/contra.php'><i class='fas fa-key' aria-hidden='true'></i></a>
                    </li>
                    <li class='nav-item'>
                        <a class='nav-link' href='../account/cuenta.php'><i class='fas fa-user' aria-hidden='true'></i></a>
                    </li>
                    <li class='nav-item'>
                    <a class='nav-link' href='../account/logout.php'><i class='fas fa-sign-in-alt' aria-hidden='true'></i></a>
                </li>
                </ul>
            </div>
        </nav>
    </header>
    <main>

        ");
    }
    public static function AdministradorProductos(){
        print("
        <header class='fixed-top'>
        <nav class='navbar navbar-expand-lg navbar-dark bg-dark '>
            <a class='navbar-brand' href='../inicio/index.php'>LUHO</a>
            <button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#navbarNav' aria-controls='navbarNav' aria-expanded='false' aria-label='Toggle navigation'>
                <span class='navbar-toggler-icon'></span>
            </button>
            <div class='collapse navbar-collapse' id='navbarNav'>
                <ul class='navbar-nav'>
                    <li class='nav-item'>
                        <a class='nav-link' href='../categoria/index.php'>Categoria</a>
                    </li>
                    <li class='nav-item'>
                        <a class='nav-link' href='../producto/index.php'>Producto</a>
                    </li>
                </ul>
                <!-- Links Imagen -->
                <ul class='navbar-nav nav-flex-icons ml-auto'>
                    <li class='nav-item'>
                        <a class='nav-link' href='../account/contra.php'><i class='fas fa-key' aria-hidden='true'></i></a>
                    </li>
                    <li class='nav-item'>
                        <a class='nav-link' href='../account/cuenta.php'><i class='fas fa-user' aria-hidden='true'></i></a>
                    </li>
                    <li class='nav-item'>
                    <a class='nav-link' href='../account/logout.php'><i class='fas fa-sign-in-alt' aria-hidden='true'></i></a>
                </li>
                </ul>
            </div>
        </nav>
    </header>
    <main>

        ");
    }
    public static function AdministradorUsuarios(){
        print("
        <header class='fixed-top'>
        <nav class='navbar navbar-expand-lg navbar-dark bg-dark '>
            <a class='navbar-brand' href='../inicio/index.php'>LUHO</a>
            <button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#navbarNav' aria-controls='navbarNav' aria-expanded='false' aria-label='Toggle navigation'>
                <span class='navbar-toggler-icon'></span>
            </button>
            <div class='collapse navbar-collapse' id='navbarNav'>
                <ul class='navbar-nav'>
                    <li class='nav-item'>
                        <a class='nav-link' href='../categoria/index.php'>Categoria</a>
                    </li>
                    <li class='nav-item'>
                        <a class='nav-link' href='../marca/index.php'>Marca</a>
                    </li>
                    <li class='nav-item'>
                        <a class='nav-link' href='../material/index.php'>Material</a>
                    </li>
                    <li class='nav-item'>
                        <a class='nav-link' href='../ocasion/index.php'>Ocasion</a>
                    </li>
                    <li class='nav-item'>
                        <a class='nav-link' href='../talla/index.php'>Talla</a>
                    </li>
                    <li class='nav-item'>
                        <a class='nav-link' href='../producto/index.php'>Producto</a>
                    </li>
                    <li class='nav-item'>
                        <a class='nav-link' href='../usuario/index.php'>Empleados</a>
                    </li>
                </ul>
                <!-- Links Imagen -->
                <ul class='navbar-nav nav-flex-icons ml-auto'>
                    <li class='nav-item'>
                        <a class='nav-link' href='../account/contra.php'><i class='fas fa-key' aria-hidden='true'></i></a>
                    </li>
                    <li class='nav-item'>
                        <a class='nav-link' href='../account/cuenta.php'><i class='fas fa-user' aria-hidden='true'></i></a>
                    </li>
                    <li class='nav-item'>
                    <a class='nav-link' href='../account/logout.php'><i class='fas fa-sign-in-alt' aria-hidden='true'></i></a>
                </li>
                </ul>
            </div>
        </nav>
    </header>
    <main>

        ");
    }
    public static function AdministradorCatalogos(){
        print("
        <header class='fixed-top'>
        <nav class='navbar navbar-expand-lg navbar-dark bg-dark '>
            <a class='navbar-brand' href='../inicio/index.php'>LUHO</a>
            <button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#navbarNav' aria-controls='navbarNav' aria-expanded='false' aria-label='Toggle navigation'>
                <span class='navbar-toggler-icon'></span>
            </button>
            <div class='collapse navbar-collapse' id='navbarNav'>
                <ul class='navbar-nav'>
                    <li class='nav-item'>
                        <a class='nav-link' href='../marca/index.php'>Marca</a>
                    </li>
                    <li class='nav-item'>
                        <a class='nav-link' href='../material/index.php'>Material</a>
                    </li>
                    <li class='nav-item'>
                        <a class='nav-link' href='../ocasion/index.php'>Ocasion</a>
                    </li>
                    <li class='nav-item'>
                        <a class='nav-link' href='../talla/index.php'>Talla</a>
                    </li>
                </ul>
                <!-- Links Imagen -->
                <ul class='navbar-nav nav-flex-icons ml-auto'>
                    <li class='nav-item'>
                        <a class='nav-link' href='../account/contra.php'><i class='fas fa-key' aria-hidden='true'></i></a>
                    </li>
                    <li class='nav-item'>
                        <a class='nav-link' href='../account/cuenta.php'><i class='fas fa-user' aria-hidden='true'></i></a>
                    </li>
                    <li class='nav-item'>
                    <a class='nav-link' href='../account/logout.php'><i class='fas fa-sign-in-alt' aria-hidden='true'></i></a>
                </li>
                </ul>
            </div>
        </nav>
    </header>
    <main>

        ");
    }
    public static function ObtenerPermisos($valu){
        switch ($valu) {
            case 1:
                Page::Administrador();
                break;
            case 2:
                Page::AdministradorProductos();
                break;
            case 3:
                Page::AdministradorUsuarios();
                break;
            case 4:
                Page::AdministradorCatalogos();
                break;
            default:
                echo "";
        }	
    }
    public static function templateHeader($title){
        session_start();
		ini_set("date.timezone","America/El_Salvador");
		print("
        <!DOCTYPE html>
        <html lang='en' >
            <head>
                <meta charset='UTF-8'>
                <title>LUHO - $title </title>
                <!-- Bootstrap core CSS -->
                <link href='../../web/css/bootstrap.min.css' rel='stylesheet'>
                <!-- Material Design Bootstrap -->
                <link href='../../web/css/mdb.min.css' rel='stylesheet'>
                <!-- Estilo css -->
                <link href='../../web/css/style.css' rel='stylesheet'>
                <!-- FONTS -->
                <link href='../../web/css/fontawesome-all.min.css' rel='stylesheet'>
                <script type='text/javascript' src='../../web/js/sweetalert.min.js'></script>

                <script src='https://www.google.com/recaptcha/api.js'></script>

            </head>
            <body>
        ");



        if(isset($_SESSION['IdUsuario'])){

 //Comprobamos si esta definida la sesión 'tiempo'.
 if(isset($_SESSION['tiempo']) ) {

    //Tiempo en segundos para dar vida a la sesión.
    $inactivo = 300;//5min en este caso.

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
            header("Location: ../account/login.php");
            exit();
        }

}


$_SESSION['tiempo'] = time();


          
            
            Page::ObtenerPermisos($_SESSION['cargo']);
            //Restringiendo acceso
            if ($_SERVER['HTTP_REFERER'] == ""){
                //CAMBIAR PAGINA
                header ("Location: ../../web/403.html");
                exit;
            }
		}else{
            $filename = basename($_SERVER['PHP_SELF']);
			if($filename != "login.php" && $filename != "registro.php"  && $filename != "recuperar.php"){
				self::showMessage(3, "¡Debe iniciar sesión!", "../account/login.php");
				self::templateFooter();
				exit;
			}else{
			}
          
			print("
            <nav class='navbar navbar-expand-lg navbar-dark bg-dark fixed-top'>
                <a class='navbar-brand' href=''>LUHO</a>
                <button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#navbarNav' aria-controls='navbarNav' aria-expanded='false' aria-label='Toggle navigation'>
                    <span class='navbar-toggler-icon'></span>
                </button>
                <div class='collapse navbar-collapse' id='navbarNav'>
                    
                </div>
            </nav>
			");
			
		}
    }

    public static function actualizacionNecesaria(){
        $usuario = new Usuario;
        $usuario->setId($_SESSION['IdUsuario']);
        if ($usuario->readUsuario()) {
            $ingreso   = date_create($usuario->getFecha());
            $val       = date("Y-m-d");
            $valor     = date_create($val);
            $intervalo = date_diff($ingreso,$valor);
            if ($intervalo->format('%a') >= 2) {
                Page::showMessage(3, "Debe cambiar contraseña", "../account/cambiarcontra.php");
            }
        }
    }
    public static function templateFooter(){
        print("
        </main>
        <!--Footer-->
        <footer class='page-footer center-on-small-only blue-grey lighten-5 pt-0'>
            <div style='background-color: black;'>
                <div class='container'>
                    <!--Grid row-->
                    <div class='row py-4 d-flex align-items-center'>
                        <!--Grid column-->
                        <div class='col-12 col-md-5 text-left mb-4 mb-md-0'>
                            <h6 class='mb-0 white-text text-center text-md-left tituliyo'><strong>Redes sociales!</strong></h6>
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
                        <p>'Hay LUHOS que solo puedes darte una vez en la vida.'</p>
                        <p>-Roland Vanegas.</p>
                    </div>
                    <!--/.First column-->
                    <!--First column-->
                    <div class='col-md-3 col-lg-4 col-xl-3 mb-r dark-grey-text'>
                        <h6 class='title font-bold'><strong>Dashboard</strong></h6>
                        <hr class='teal accent-3 mb-4 mt-0 d-inline-block mx-auto' style='width: 60px;'>
                        <p>Todos los privilegios solo para ti. A tu disposicion todo lo que se necesita para que LUHO sea posible.</p>
                    </div>
                    <!--/.First column-->
                    <!--Fourth column-->
                    <div class='col-md-4 col-lg-3 col-xl-3 dark-grey-text'>
                        <h6 class='title font-bold'><strong>Contactanos</strong></h6>
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
				<!-- SCRIPTS -->
        <script src='../../web/js/jquery.min.js'></script>
        <!-- JQuery -->
        <script type='text/javascript' src='../../web/js/jquery-3.2.1.min.js'></script>
        <!-- Bootstrap tooltips -->
        <script type='text/javascript' src='../../web/js/popper.min.js'></script>
        <!-- Bootstrap core JavaScript -->
        <script type='text/javascript' src='../../web/js/bootstrap.min.js'></script>
        <!-- MDB core JavaScript -->
        <script type='text/javascript' src='../../web/js/mdb.min.js'></script>
        <script type='text/javascript' src='../../web/js/jsdash.js'></script>
        <script type='text/javascript' src='../../web/js/select.js'></script>
        <!-- SLIDER JS-->
        <script src='../../web/js/index.js'></script>
        <!-- Galeria JS-->
        <script src='../../web/js/index1.js'></script>
			</body>
			</html>
		");
	}
}


?>