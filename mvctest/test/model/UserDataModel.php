<?php

require_once('DbManagerPdo.php');

class UserDataModel {
    private $table = "user_data";
    private $db;
    private $lv = 1;
    private $exp = 0;
    private $full = 15;
    private $coin = 0;

    function __construct(){
        $this->db = connectDbforPdo();
    }

    public function getUuid($user_id){

        $sql = 'select * from ' . $this->table . ' where user_id = ' . '"' . $user_id . '"';

        $stt = $this->db->query($sql);

        if(!$stt->execute()){
            return false;
        }

        return $stt->fetchAll(PDO::FETCH_ASSOC);
    }


    public function crateDate($api_id, $user_name){

        $sql = 'INSERT INTO ' . $this->table . '(id, user_id, name, lv, exp, full, coin)
        VALUES(null, ' . $api_id . ',"' . $user_name . '",' . $this->lv . ',' . $this->exp . ',' . $this->full . ',' . $this->coin . ')';

        $stmt = $this->db->prepare($sql);

        $stmt->bindValue(':user_name', $user_name, PDO::PARAM_INT);
        return $stmt->execute();
    }

}
?>
