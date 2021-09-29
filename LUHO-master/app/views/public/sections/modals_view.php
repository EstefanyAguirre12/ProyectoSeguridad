<!-- Modal de ayuda -->
<div class="modal fade" id="ayudamodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Necesitas una mano? toma dos!</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!--Accordion wrapper-->
                <div class="accordion" id="accordionEx" role="tablist" aria-multiselectable="true">
                    <!-- Accordion card -->
                    <div class="card">
                        <!-- Card header -->
                        <div class="card-header" role="tab" id="headingOne">
                            <a data-toggle="collapse" data-parent="#accordionEx" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                <h5 class="mb-0">
                                    Preguntas frecuentes. <i class="fa fa-angle-down rotate-icon"></i>
                                </h5>
                            </a>
                        </div>
                        <!-- Card body -->
                        <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne">
                            <div class="card-body">
                                <h5>Que pasa si mi producto esta defectuoso?</h5>
                                <p>La empresa se hace responsable siempre y cuando este dentro del margen de 30 dias para devoluciones y reclamos.</p>
                                <h5>En cuanto tiempo recibire mi producto?</h5>
                                <p>Si usted contrato el envio gratis; recibira su producto en un maximo de 7 dias, por otra parte si contrato el servicio
                                    de envio Luxury su producto tardara un maximo de 48H.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Accordion card -->
                    <!-- Accordion card -->
                    <div class="card">
                        <!-- Card header -->
                        <div class="card-header" role="tab" id="headingTwo">
                            <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                <h5 class="mb-0">
                                    Como encontrarnos. <i class="fa fa-angle-down rotate-icon"></i>
                                </h5>
                            </a>
                        </div>
                        <!-- Card body -->
                        <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo">
                            <div class="card-body">
                                <p>Visitanos de lunes a viernes de 10AM-8PM y sabados de 10Am - 4PM.
                                    Sucursal San Salvador, calle Maquilishuat, cerca de La Calaca calle La Mascota y Plaza Kalpataru.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- Accordion card -->
                    <!-- Accordion card -->
                    <div class="card">
                        <!-- Card header -->
                        <div class="card-header" role="tab" id="headingThree">
                            <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                <h5 class="mb-0">
                                    Envios y entregas. <i class="fa fa-angle-down rotate-icon"></i>
                                </h5>
                            </a>
                        </div>
                        <!-- Card body -->
                        <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree">
                            <div class="card-body">
                                <p>Las entregas de nuestros productos varian segun el plan de envio que usted
                                    contrato a la hora de realizar y confirmar su compra. 
                                </p>
                                <h5> Envio gratuito.</h5>
                                <p>Todas las compras cuentan con nuestro envio gratuito, que tiene un plazo de 7 dias maximo
                                    para hacer la entrega.
                                </p>
                                <h5>Envio Luxury</h5>
                                <p>El plan de envio Luxury© hace un recargo en el total de tu compra y la entrega se hace en un plazo maximo
                                    de 48H.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- Accordion card -->
                </div>
                <!--/.Accordion wrapper-->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-dark" data-dismiss="modal">Gracias</button>
            </div>
        </div>
    </div>
</div>
<!-- Modal de ayuda -->



<!-- Modal de Carrito-->
<div class="modal fade" id="carritoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Carrito de compras</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <table class="table table-hover table-bordered table-dark">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Producto</th>
                        <th scope="col">Cantidad</th>
                        <th scope="col">Precio</th>
                        <th scopre="col">Eliminar</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Rolex President</td>
                            <td>1</td>
                            <td>$11,999</td>
                            <td><button type="button" class="btn btn-white">Eliminar</button></td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Swarovski Bracelet</td>
                            <td>1</td>
                            <td>$2,999</td>
                            <td><button type="button" class="btn btn-white">Eliminar</button></td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Heart charm Pandora</td>
                            <td>2</td>
                            <td>$120.00</td>
                            <td><button type="button" class="btn btn-white">Eliminar</button></td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td colspan="2">Sub Total:</td>
                            <td>$15,238</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-grey" data-dismiss="modal">Continuar comrpando</button>
                <button type="button" class="btn btn-dark">Proceder a comprar</button>
            </div>
        </div>
    </div>
</div>
<!-- /Modal de Carrito-->




<!-- Modal de Contacto -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Formulario de contacto</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="contact-name" class="col-lg-2 control-label">Nombre:</label>
                    <div class="col-lg-10">
                        <input type="text" class="form-control" id="contact-name" placeholder="Nombre Completo">
                    </div>
                </div>
                <div class="form-group">
                    <label for="contact-email" class="col-lg-2 control-label">Email:</label>
                    <div class="col-lg-10">
                        <input type="email" class="form-control" id="contact-email" placeholder="Ejemplo@tucorreo.com">
                    </div>
                </div>
                <div class="form-group">
                    <label for="contact-msg" class="col-lg-2 control-label">Mensaje:</label>
                    <div class="col-lg-10">
                        <textarea class="form-control" rows="8" cols="80"></textarea>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-grey" data-dismiss="modal">Cancelar</button>
                <button class="btn btn-dark" type="submit">Enviar</button>
            </div>
        </div>
    </div>
</div>
<!-- Fin Modal de Contacto-->











<!-- Central Modal Medium Info -->
<div class="modal fade bottom" id="terminosmodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-frame modal-bottom" role="document">
        <!--Content-->
        <div class="modal-content">
            <!--Header-->
            <div class="modal-header">
                <p class="heading lead">Terminos & Condiciones</p>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="black-text">&times;</span>
                </button>
            </div>

            <!--Body-->
            <div class="modal-body">
                <div class="text-left">
                    <p> Al aceptar los terminos y condiciones los compradores son resposables de colocar correctamente sus datos a la hora de registrarse, si hay algun
                        error en sus datos como ejemplo el campo de la direccion que es necesaria para realizar los envios; la empresa no se hace responsable, las devoluciones
                        y cambios seran aceptados dentro de un intervalo de 30 dias, siempre y cuando el articulo se encuentre en el estado en el que se recibio. </p>
                        <button class="btn btn-grey" data-dismiss="modal" aria-label="Close">Aceptar</button>
                </div>
            </div>
        </div>
        <!--/.Content-->
    </div>
</div>
<!-- Central Modal Medium Info-->