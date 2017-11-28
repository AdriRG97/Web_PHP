<?php

require_once(dirname(__FILE__) . '/../../../utils/SessionUtils.php');
// Redirects to login page in public views or private views
SessionUtils::insertHeader();
include('../../controllers/contactController.php');

if (isset($_GET['success'])) {
    if ($_GET['success'] == true) {
        echo '<div class="alert alert-success text-center">Email enviado correctamente</div>';
    } else {
        echo '<div class="alert alert-danger text-center">Error al enviar el correo.</div>';
    }
}
?>


    <div class="container">
        <form class="form-horizontal" role="form" method="POST" action="../../controllers/contactController.php">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <h2>Contacto</h2>
                    <hr>
                </div>
                <div class="col-md-3"></div>

            </div>

            <div class="row">

                <iframe class="mb-3" width="1000" height="450" frameborder="0"
                        style="border:0; overflow: hidden; margin: 0 auto;"
                        src="https://www.google.com/maps/embed/v1/streetview?key=AIzaSyCYYI8fuqRJcYDYZdb4Mm3wUnPSHEgL3OA&location=42.8245419,-1.6603064&heading=210&pitch=10&fov=35"
                        allowfullscreen>
                </iframe>

            </div>


            <!--   <div class="row">
                   <div class="col-md-3"></div>
                   <div class="col-md-6">
                       <div class="form-group">
                           <label class="sr-only" for="name">Nombre:</label>
                           <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                               <div class="input-group-addon" style="width: 2.6rem"></div>
                               <input type="text" name="name" class="form-control" id="name"
                                      placeholder="Nombre">
                           </div>
                       </div>
                   </div>
                   <div class="col-md-3"></div>
               </div>

               <div class="row">
                   <div class="col-md-3"></div>
                   <div class="col-md-6">
                       <div class="form-group">
                           <label class="sr-only" for="surname">Apellidos:</label>
                           <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                               <div class="input-group-addon" style="width: 2.6rem"></div>
                               <input type="text" name="surname" class="form-control" id="surname"
                                      placeholder="Apellidos">
                           </div>
                       </div>
                   </div>
                   <div class="col-md-3"></div>
               </div>-->

            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <div class="form-group has-danger">
                        <label class="sr-only" for="email">Email:</label>
                        <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                            <div class="input-group-addon" style="width: 2.6rem"></div>
                            <input type="text" name="email" class="form-control" id="email"
                                   placeholder="usuario@ejemplo.com" required autofocus>
                        </div>
                    </div>
                </div>
                <div class="col-md-3"></div>
            </div>

            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="sr-only" for="asunto">Asunto:</label>
                        <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                            <div class="input-group-addon" style="width: 2.6rem"></div>
                            <input type="text" name="asunto" class="form-control" id="asunto"
                                   placeholder="Asunto" required>
                        </div>
                    </div>
                </div>
                <div class="col-md-3"></div>
            </div>

            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="sr-only" for="mensaje">Mensaje:</label>
                        <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                            <div class="input-group-addon" style="width: 2.6rem"></div>
                            <textarea type="text" name="mensaje" id="mensaje" class="form-control"
                                      placeholder="Mensaje" required></textarea>
                        </div>
                    </div>
                </div>
                <div class="col-md-3"></div>
            </div>

            <div class="row" style="padding-top: 1rem">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <button type="submit" class="btn btn-success"><i class="fa fa-sign-in"></i>Enviar</button>
                </div>
            </div>
        </form>
    </div>


<?php include('footer.php'); ?>