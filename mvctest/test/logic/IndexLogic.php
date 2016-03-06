<?php

require_once( 'test/model/HogeModel.php' );
require_once( 'test/model/ApiModel.php' );
require_once( 'test/model/UserDataModel.php' );

class IndexLogic{
   //各処理毎にメソッドを作成。

    public function __construct(){
        $this->hoge_model = new HogeModel();
        $this->api_model = new ApiModel();
        $this->user_data = new UserDataModel();
    }

    public function getApi($api){
        $get_api_data = $this->api_model->getUuid($api);

        if(empty($get_api_data)){
            $get_api_data = $this->api_model->crateDate($api);
        }
        return $get_api_data;

    }
    public function getApiUserId($user_id){
        return $this->user_data->getUuid($user_id);
    }

    public function getUserName($api_uuid , $api_user_name){
        $api_uuid_date = $this->api_model->getUuid($api_uuid);

        if(!empty($api_uuid_date)){
            $this->user_data->crateDate($api_uuid_date[0]['id'] , $api_user_name);
        }

    }


}
?>
