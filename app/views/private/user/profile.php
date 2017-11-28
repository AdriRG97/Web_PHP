<?php
require_once(dirname(__FILE__) . '/../../../../utils/SessionUtils.php');
// Redirects to login page in public views or private views
SessionUtils::insertHeader();
include('../../controllers/profileController.php')
?>

    <div class="container">
        <form class="form-horizontal" role="form" method="POST" action="profile.php">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <h2>Editar perfil</h2>
                    <hr>
                </div>
            </div>


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
                <div class="col-md-3">
                    <div class="form-control-feedback">
					<span class="text-danger align-middle">
                          <i class="fa fa-close"></i> <?php // if(isset($error)) { echo $error; }  ?>
                    </span>
                    </div>
                </div>
            </div>
            <!--
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="sr-only" for="pass">Contraseña:</label>
                        <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                            <div class="input-group-addon" style="width: 2.6rem"></div>
                            <input type="password" name="pass" class="form-control" id="password"
                                   placeholder="Contraseña" required>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-control-feedback">
					<span class="text-danger align-middle">
						<?php //if(isset($error)) { echo $error; } ?>
					</span>
                    </div>
                </div>
            </div>
    -->

            <div class="row">
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
                <div class="col-md-3">
                    <div class="form-control-feedback">
					<span class="text-danger align-middle">
						<?php //if(isset($error)) { echo $error; } ?>
					</span>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="sr-only" for="surname">Apellidos:</label>
                        <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                            <div class="input-group-addon" style="width: 2.6rem"></div>
                            <input type="text" name="surname" class="form-control" id="surname"
                                   placeholder="Apellidos" required>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-control-feedback">
					<span class="text-danger align-middle">
						<?php //if(isset($error)) { echo $error; } ?>
					</span>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="sr-only" for="description">Descripción:</label>
                        <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                            <div class="input-group-addon" style="width: 2.6rem"></div>
                            <input type="text" name="description" class="form-control" id="description"
                                   placeholder="Descripción" required>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-control-feedback">
					<span class="text-danger align-middle">
						<?php //if(isset($error)) { echo $error; } ?>
					</span>
                    </div>
                </div>
            </div>

            <div class="row" style="padding-top: 1rem">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <button type="submit" class="btn btn-success"><i class="fa fa-sign-in"></i> Editar</button>
                </div>
            </div>
        </form>
    </div>
<?php include('footer.php'); ?>