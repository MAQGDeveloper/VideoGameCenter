<?php
require_once('include/connection.php');

class Administrator{
    private $name;
    private $lastName;
    private $maidenName;
    private $username;
    private $password;
    private $RFC;
    private $birthdate;

    function __construct($name,$lastName,$maidenName,$username,$password,$RFC,$birthdate){
        $this->name=$name;
        $this->lastName=$name;
        $this->maidenName=$maidenName;
        $this->username=$username;
        $this->password=$password;
        $this->RFC=$RFC;
        $this->birthdate=$birthdate;
    }
    //Obtener cantidad de Administradores
    public function admins(){
        $db = new sqlConnection();
        $data = $db->queryBuilder("SELECT COUNT(*) FROM administrator");
        $db->closeConnection();
        unset($db);
        return $data[0];
    }
    //Dar de alta un nuevo admin
    public static function createAdmin($name,$lastName,$maidenName,$username,$password,$RFC,$birthdate){
        $db = new sqlConnection();
        $sql = 'INSERT INTO administrator';
        $sql .= " VALUES(null,'".$name."','".$lastName."','".$maidenName."','".$username."','".$password."','".$RFC."','".$birthdate."',0);";
        $result = $db->queryBuilder($sql);
        $db->closeConnection();
        unset($db);
        echo '<script>location.href=index.php</script>';
    }
    public function activateAdmin($username){
        $db = new sqlConecction();
        $sql = "UPDATE SET is_admin = 1";
        $sql .= " WHERE username = '".$username."';";
        $data = $db->queryBuilder($sql);
        unset($db);
    }
}