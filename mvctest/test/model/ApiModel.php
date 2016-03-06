<?php

require_once('DbManagerPdo.php');

class ApiModel {
    private $table = "api";
    private $db;

    function __construct(){
        $this->db = connectDbforPdo();
    }

    public function getUuid($uuid){

        $sql = 'select * from ' . $this->table . ' where uuid = ' . '"' . $uuid . '"';

        $stt = $this->db->query($sql);

        if(!$stt->execute()){
            return false;
        }

        return $stt->fetchAll(PDO::FETCH_ASSOC);
    }


    public function crateDate($uuid){
        $sql = 'INSERT INTO ' . $this->table . '(id, uuid)VALUES(null, ' . '"' . $uuid . '")';

        $stmt = $this->db->prepare($sql);

        $stmt->bindValue(':uuid', $uuid, PDO::PARAM_INT);
        return $stmt->execute();
    }

}
?>
