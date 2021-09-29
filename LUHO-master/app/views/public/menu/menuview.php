<?php
if(isset($_SESSION['IdCliente'])){
    print("
    <!-- NAVBAR-->
    <nav class='navbar navbar-expand-lg navbar-dark bg-dark fixed-top'>
        <!-- Deplegable button -->
        <button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#navbarSupportedContent' aria-controls='navbarSupportedContent'
        aria-expanded='false' aria-label='Toggle navigation'><span class='navbar-toggler-icon'></span></button>
        <!-- Collapsible content -->
        <div class='collapse navbar-collapse' id='navbarSupportedContent'>
            <ul class='navbar-nav mr-auto'>
                <li class='nav-item dropdown mega-dropdown'>
                    <a class='nav-link dropdown-toggle' id='navbarDropdownMenuLink' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>LUHO</a>
                    <div class='dropdown-menu mega-menu row z-depth-1' aria-labelledby='navbarDropdownMenuLink'>
                        <div class='row'>
                            <div class='col-md-5 col-xl-3 sub-menu mt-5 mb-5 pl-4'>
                                <ol class='list-unstyled mx-4 dark-grey-text'>
                                    <li class='sub-title font-up'><a class='menu-item' href=''>Todos los productos</a></li>
                                    <h6 class='font-weight-bold' >HOMBRES</h6'>
              
                            ");
                            foreach($categoriasM as $categoria){
                                print("
                                    <li class='sub-title font-up'><a class='menu-item'  href='../ventas/index.php?id=$categoria[IdCategoria]'>$categoria[Categoria]</a></li>
                                       
                                ");
                            }
                                
                                print("
                                <h6 class='font-weight-bold' >MUJERES</h6>
                                ");

                                foreach($categoriasF as $categoria){
                                    print("
                                    <li class='sub-title font-up'><a class='menu-item' href='../ventas/index.php?id=$categoria[IdCategoria]'>$categoria[Categoria]</a></li>
                                           
                                    ");
                                }
                                
                                print("

                                </ol>  
                        </div>
                            <div class='col-md-7 col-xl-9'>
                                <div class='row'>
                                    <div class='col-xl-6 mt-5 mb-4 pr-5 clearfix d-none d-md-block'>
                                        <h6 class='sub-title p-sm mb-4 font-up font-bold dark-grey-text'>Noticias</h6>
                                        <!--Featured image-->
                                        <div class='view overlay hm-white-slight pb-3'>
                                            <img src='../../web/img/gold.jpg' class='img-fluid z-depth-1' alt='First sample image'>
                                            <div class='mask flex-center'>
                                                <p></p>
                                            </div>
                                        </div>
                                        <h4 class='mb-2'><a class='news-title' href=''>Me preguntan por calidad. Pero yo les pregunto, Puede pagarlo?</a></h4>
                                        <p class='font-small font-up text-muted'>By <a class='m-sm' href='#!'>Roland Vanegas</a> - Feb 14, 2018</p>
                                    </div>
                                    <div class='col-xl-6 mt-5 mb-4 pr-5 clearfix d-none d-xl-block'>
                                        <h6 class='sub-title p-sm mb-4 font-up font-bold dark-grey-text'>Ofertas(Proximamente)</h6>
                                        <div class='news-single'>
                                            <div class='row'>
                                                <div class='col-md-4'>
                                                    <!--Image-->
                                                    <div class='view overlay hm-white-slight z-depth-1'>
                                                        <img src='../../web/img/joya13.jpg' class='img-fluid' alt='Minor sample post image'>
                                                        <div class='mask flex-center'>
                                                            <p></p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class='col-md-8'>
                                                    <a class='news-title smaller mb-1' href=''> 15% off en tu segundo articulo de PANDORA.</a>
                                                    <p class='font-small font-up text-muted'>Feb 14, 2018</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class='news-single'>
                                            <div class='row'>
                                                <div class='col-md-4'>
                                                    <!--Image-->
                                                    <div class='view overlay hm-white-slight z-depth-1'>
                                                        <img src='../../web/img/rg2.jpg' class='img-fluid' alt='Minor sample post image'>
                                                        <div class='mask flex-center'>
                                                            <p></p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class='col-md-8'>
                                                    <a class='news-title smaller mb-1' href=''>Compra dos Rolex President y compra el tercero tambien!.</a>
                                                    <p class='font-small font-up text-muted'>Feb 14, 2018</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class='news-single'>
                                            <div class='row'>
                                                <div class='col-md-4'>
                                                    <!--Image-->
                                                    <div class='view overlay hm-white-slight z-depth-1'>
                                                        <img src='../../web/img/joya4.jpg' class='img-fluid' alt='Minor sample post image'>
                                                        <div class='mask flex-center'>
                                                            <p></p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class='col-md-8'>
                                                    <a class='news-title smaller mb-1' href=''>10% off en Swarovski.</a>
                                                    <p class='font-small font-up text-muted'>Feb 14, 2018</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--LINKS-->
                    <li class='nav-item active'>
                    <a class='nav-link' href='../principal/index.php'>Inicio <span class='sr-only'>(current)</span></a>
                    </li>
                   
                </li>
            </ul>
            <!-- Links Imagen -->
            <ul class='navbar-nav nav-flex-icons ml-auto'>
                <li class='nav-item'>
                    <a class='nav-link' href='../carrito/index.php' data-toggle='tooltip' title='Carrito compras'><i class='fas fa-shopping-cart' aria-hidden='true'></i></a>
                </li>
                <li class='nav-item'>
                <a class='nav-link' href='../compras/index.php' data-toggle='tooltip' title='Compras realizadas'><i class='fas fa-shopping-bag' aria-hidden='true'></i></a>
            </li>
                <li class='nav-item'>
                <a class='nav-link' href='../account/contra.php' data-toggle='tooltip' title='Cambiar Clave'><i class='fas fa-key' aria-hidden='true'></i></a>
                </li>
                <li class='nav-item'>
                    <a class='nav-link' href='../account/cuenta.php' data-toggle='tooltip' title='Cuenta'><i class='fas fa-user' aria-hidden='true'></i></a>
                </li>
                <li class='nav-item'>
                    <a class='nav-link' href='../account/logout.php' data-toggle='tooltip' title='Cerrar sesion'><i class='fas fa-sign-out-alt' aria-hidden='true'></i></a>
                </li>
             
            </ul>
            <!-- Links -->
        </div>
    </nav>
    ");
}else{
    
    print("
    <!-- NAVBAR-->
    <nav class='navbar navbar-expand-lg navbar-dark bg-dark fixed-top'>
        <!-- Deplegable button -->
        <button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#navbarSupportedContent' aria-controls='navbarSupportedContent'
        aria-expanded='false' aria-label='Toggle navigation'><span class='navbar-toggler-icon'></span></button>
        <!-- Collapsible content -->
        <div class='collapse navbar-collapse' id='navbarSupportedContent'>
            <ul class='navbar-nav mr-auto'>
                <li class='nav-item dropdown mega-dropdown'>
                    <a class='nav-link dropdown-toggle' id='navbarDropdownMenuLink' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>LUHO</a>
                    <div class='dropdown-menu mega-menu row z-depth-1' aria-labelledby='navbarDropdownMenuLink'>
                        <div class='row'>
                            <div class='col-md-5 col-xl-3 sub-menu mt-5 mb-5 pl-4'>
                                <ol class='list-unstyled mx-4 dark-grey-text'>
                                    <li class='sub-title font-up'><a class='menu-item' href=''>Todos los productos</a></li>
                                    <h6 class='font-weight-bold' >HOMBRES</h6'>
              
                            ");
                            foreach($categoriasM as $categoria){
                                print("
                                    <li class='sub-title font-up'><a class='menu-item'  href='../ventas/index.php?id=$categoria[IdCategoria]'>$categoria[Categoria]</a></li>
                                       
                                ");
                            }
                                
                                print("
                                <h6 class='font-weight-bold' >MUJERES</h6>
                                ");

                                foreach($categoriasF as $categoria){
                                    print("
                                    <li class='sub-title font-up'><a class='menu-item' href='../ventas/index.php?id=$categoria[IdCategoria]'>$categoria[Categoria]</a></li>
                                           
                                    ");
                                }
                                
                                print("

                                </ol>  
                        </div>
                            <div class='col-md-7 col-xl-9'>
                                <div class='row'>
                                    <div class='col-xl-6 mt-5 mb-4 pr-5 clearfix d-none d-md-block'>
                                        <h6 class='sub-title p-sm mb-4 font-up font-bold dark-grey-text'>Noticias</h6>
                                        <!--Featured image-->
                                        <div class='view overlay hm-white-slight pb-3'>
                                            <img src='../../web/img/gold.jpg' class='img-fluid z-depth-1' alt='First sample image'>
                                            <div class='mask flex-center'>
                                                <p></p>
                                            </div>
                                        </div>
                                        <h4 class='mb-2'><a class='news-title' href=''>Me preguntan por calidad. Pero yo les pregunto, Puede pagarlo?</a></h4>
                                        <p class='font-small font-up text-muted'>By <a class='m-sm' href='#!'>Roland Vanegas</a> - Feb 14, 2018</p>
                                    </div>
                                    <div class='col-xl-6 mt-5 mb-4 pr-5 clearfix d-none d-xl-block'>
                                        <h6 class='sub-title p-sm mb-4 font-up font-bold dark-grey-text'>Ofertas(Proximamente)</h6>
                                        <div class='news-single'>
                                            <div class='row'>
                                                <div class='col-md-4'>
                                                    <!--Image-->
                                                    <div class='view overlay hm-white-slight z-depth-1'>
                                                        <img src='../../web/img/joya13.jpg' class='img-fluid' alt='Minor sample post image'>
                                                        <div class='mask flex-center'>
                                                            <p></p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class='col-md-8'>
                                                    <a class='news-title smaller mb-1' href=''> 15% off en tu segundo articulo de PANDORA.</a>
                                                    <p class='font-small font-up text-muted'>Feb 14, 2018</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class='news-single'>
                                            <div class='row'>
                                                <div class='col-md-4'>
                                                    <!--Image-->
                                                    <div class='view overlay hm-white-slight z-depth-1'>
                                                        <img src='../../web/img/rg2.jpg' class='img-fluid' alt='Minor sample post image'>
                                                        <div class='mask flex-center'>
                                                            <p></p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class='col-md-8'>
                                                    <a class='news-title smaller mb-1' href=''>Compra dos Rolex President y compra el tercero tambien!.</a>
                                                    <p class='font-small font-up text-muted'>Feb 14, 2018</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class='news-single'>
                                            <div class='row'>
                                                <div class='col-md-4'>
                                                    <!--Image-->
                                                    <div class='view overlay hm-white-slight z-depth-1'>
                                                        <img src='../../web/img/joya4.jpg' class='img-fluid' alt='Minor sample post image'>
                                                        <div class='mask flex-center'>
                                                            <p></p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class='col-md-8'>
                                                    <a class='news-title smaller mb-1' href=''>10% off en Swarovski.</a>
                                                    <p class='font-small font-up text-muted'>Feb 14, 2018</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--LINKS-->
                    <li class='nav-item active'>
                    <a class='nav-link' href='../principal/index.php'>Inicio <span class='sr-only'>(current)</span></a>
                    </li>
                  
                </li>
            </ul>
            <!-- Links Imagen -->
            <ul class='navbar-nav nav-flex-icons ml-auto'>
                <li class='nav-item'>
                    <a class='nav-link' href='../account/login.php' data-toggle='tooltip' title='Ingresar'><i class='fas fa-sign-in-alt' aria-hidden='true'></i></a>
                </li>
            </ul>
            <!-- Links -->
        </div>
    </nav>
    ");
}
?>