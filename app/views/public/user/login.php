<?php require(dirname(__FILE__) . '/../../../../utils/SessionUtils.php');
// Redirects to login page in public views or private views
SessionUtils::insertHeader();

if (isset($_GET['error'])) {
    if ($_GET['error'] == 1) {
        $error = "Debes completar todos los campos<br>";
    } elseif ($_GET['error'] == 2) {
        $error = "<span class='error'>Email/Contraseña invalida</span><br><br>";
    }
}
?>
    <div class="container">
        <form class="form-horizontal" role="form" method="POST" action="../../../controllers/user/checkController.php">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <h2>Introduzca detalles del acceso</h2>
                    <hr>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <div class="form-group has-danger">
                        <label class="sr-only" for="email">Email:</label>
                        <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                            <div class="input-group-addon" style="width: 2.6rem"><!--<i class="fa fa-at"></i>--></div>
                            <input type="text" name="user" class="form-control" id="email"
                                   placeholder="usuario@ejemplo.com" required autofocus>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-control-feedback">
					<span class="text-danger align-middle">
                          <i class="fa fa-close"></i> <?php if (isset($error)) {
                            echo $error;
                        } ?>
                      </span>

                    </div>
                </div>
            </div>
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
						<?php if (isset($error)) {
                            echo $error;
                        } ?>
					</span>
                    </div>
                </div>
            </div>
            <div class="row" style="padding-top: 1rem">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <button type="submit" class="btn btn-success"><i class="fa fa-sign-in"></i> Acceder</button>
                </div>
            </div>
        </form>
    </div>
<?php include("../footer.php") ?>