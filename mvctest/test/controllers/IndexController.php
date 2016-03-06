<?php

require_once( 'test/logic/IndexLogic.php' );
require_once('Smarty.class.php');
require_once('Construct.php');

class IndexController extends Construct{

    public $test_data = "";
    private $index_logic;
    public function __construct(){
        $this->construct();
        $this->index_logic = $this->logic = new IndexLogic();
    }

    public function Index(){

        $request_uuid = "";
        $request_data = "";
        $request_user_name = "";
        $json_data = "";

        if(!empty($_REQUEST['uuid'])){
            $request_uuid = $_REQUEST['uuid'];
            $request_data = $request_uuid;
        }
//        var_dump("request_uuid : " + $request_uuid);
        if(!empty($_REQUEST['userName'])){
            $request_user_name = $_REQUEST['userName'];
            $request_data = $request_user_name;
        }


        switch($request_data){
            case $request_user_name && $request_uuid:
                // user_data 登録
//                var_dump("user_data 登録");
                $this->ApiUserName($request_uuid , $request_user_name);
//                return;
            break;
            case $request_uuid:
                // API UUID
//                var_dump("API UUID");
                $data = $this->index_logic->getApi($request_data);
                $user_data = $this->index_logic->getApiUserId($data[0]['id']);

                if(empty($user_data)){
                    $data[0]['user_id'] = "";
                    $json_data = $data;

                }else{
                    $json_data = $user_data;
                }

            break;
        }

        header( 'Content-type: application/json; charset=UTF-8' );
        print json_encode($json_data);

    }

    private function ApiUserName($request_uuid , $request_user_name){
        $this->index_logic->getUserName($request_uuid , $request_user_name);

    }



}
?>
