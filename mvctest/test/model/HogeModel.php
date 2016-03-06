<?php

require_once('DbManagerPdo.php');

class HogeModel {
    private $table = "user_data";
    private $db;
    function __construct(){
        $this->db = connectDbforPdo();
    }

    public function getTest($user_id){

        $sql = 'select * from ' . $this->table . ' where id = ' . $user_id;

        $stt = $this->db->query($sql);

        if(!$stt->execute()){
            return false;
        }

        return $stt->fetchAll(PDO::FETCH_ASSOC);
    }




}
?>
