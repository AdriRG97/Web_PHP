<?php
//Es necesario que importemos los ficheros creados con anterioridad porque los vamos a utilizar desde este fichero.
require_once(dirname(__FILE__) . '/../../../persistence/DAO/UserDAO.php');
require_once(dirname(__FILE__) . '/../../../app/models/User.php');
require_once(dirname(__FILE__) . '/../../../app/models/validations/ValidationsRules.php');

require_once(dirname(__FILE__) . '/../../../utils/SessionUtils.php');


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    checkAction();

}


function checkAction()
{


    $user = new User();
    $user->setEmail($_POST["user"]);
    $user->setPassword($_POST["pass"]);

    if ($user->getEmail() == "" || $user->getPassword() == "") {
//        $error = "Debes completar todos los campos<br>";
        $error = 1;
    } else {


        //Creamos un objeto UserDAO para hacer las llamadas a la BD
        $userDAO = new UserDAO();
        if ($userDAO->check($user)) {
            // Establecemos la sesión
            SessionUtils::startSessionIfNotStarted();
            SessionUtils::setSession($user->getEmail());

            header('Location: ../../../index.php');
        } else {

//            $error = "<span class='error'>Email/Contraseña invalida</span><br><br>";
            $error = 2;
            // TODO No existe
            if (isset($_SESSION['user'])) {
                header('Location: ../../../index.php');
            } else {
                header('Location: ../../views/public/user/login.php?error=' . $error);
            }
        }
    }
}

    