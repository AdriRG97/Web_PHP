<?php

//dirname(__FILE__) Es el directorio del archivo actual
require_once(dirname(__FILE__) . '/../conf/PersistentManager.php');

class UserDAO
{

    //Se define una constante con el nombre de la tabla
    const USER_TABLE = 'members';

    //Conexión a BD
    private $conn = null;

    //Constructor de la clase
    public function __construct()
    {
        $this->conn = PersistentManager::getInstance()->get_connection();
    }

    public function selectAll()
    {
        $query = "SELECT * FROM " . UserDAO::USER_TABLE;
        $result = mysqli_query($this->conn, $query);
        $users = array();
        while ($userBD = mysqli_fetch_array($result)) {

            $user = new User();
            $user->setUserid($userBD["id"]);
            $user->setEmail($userBD["email"]);
            $user->setPassword($userBD["password"]);

            array_push($users, $user);
        }
        return $users;
    }

    public function insert($user)
    {
        $query = "INSERT INTO " . UserDAO::USER_TABLE .
            " (user, pass) VALUES(?,?)";
        $stmt = mysqli_prepare($this->conn, $query);
        $email = $user->getEmail();
        $password = $user->getPassword();

        $stmt->bind_param('ss', $email, $password);
        return $stmt->execute();
    }

    public function check($user)
    {
        $query = "SELECT user, pass FROM " . UserDAO::USER_TABLE . " WHERE user=? AND pass=?";
        $stmt = mysqli_prepare($this->conn, $query);
        $auxEmail = $user->getEmail();
        $auxPass = $user->getPassword();

        mysqli_stmt_bind_param($stmt, 'ss', $auxEmail, $auxPass);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_store_result($stmt);
        $rows = mysqli_stmt_num_rows($stmt);
        if ($rows > 0)
            return true;
        else
            return false;
    }

    public function checkExists($user)
    {
        $query = "SELECT user FROM " . UserDAO::USER_TABLE . " WHERE user=?";
        $stmt = mysqli_prepare($this->conn, $query);
        $auxEmail = $user->getEmail();

        mysqli_stmt_bind_param($stmt, 's', $auxEmail);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_store_result($stmt);
        $rows = mysqli_stmt_num_rows($stmt);
        if ($rows > 0) {
            return true;
        } else {
            return false;
        }

    }

    public function selectById($id)
    {
        $query = "SELECT user, pass FROM " . UserDAO::USER_TABLE . " WHERE id=?";
        $stmt = mysqli_prepare($this->conn, $query);
        mysqli_stmt_bind_param($stmt, 'i', $id);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_bind_result($stmt, $email, $password);

        $user = new User();
        while (mysqli_stmt_fetch($stmt)) {
            $user->setUserid($id);
            $user->setEmail($email);
            $user->setPassword($password);
        }

        return $user;
    }

    public function update($user)
    {
        $query = "UPDATE " . UserDAO::USER_TABLE .
            " SET user=?, pass=?"
            . " WHERE id=?";
        $stmt = mysqli_prepare($this->conn, $query);
        $email = $user->getEmail();
        $password = $user->getPassword();
        $id = $user->getUserid();
        mysqli_stmt_bind_param($stmt, 'ssi', $email, $password, $id);
        return $stmt->execute();
    }

    public function delete($id)
    {
        $query = "DELETE FROM " . UserDAO::USER_TABLE . " WHERE id =?";
        $stmt = mysqli_prepare($this->conn, $query);
        mysqli_stmt_bind_param($stmt, 'i', $id);
        return $stmt->execute();
    }


}

?>
