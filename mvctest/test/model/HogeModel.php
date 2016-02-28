<?php

require_once('DbManagerPdo.php');

class HogeModel {
    private $table = "guest_t";
    private $db;
    function __construct(){
        $this->db = connectDbforPdo();
    }

    public function getTest(){

        $sql = "select * from " . $this->table;
        $stt = $this->db->query($sql);
        if(!$stt->execute()){
            return false;
        }
        return $stt->fetchAll();
    }


}
?>
