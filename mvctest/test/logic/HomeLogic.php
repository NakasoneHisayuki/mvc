<?php

require_once( 'test/model/HogeModel.php' );
class IndexLogic{
   //各処理毎にメソッドを作成。

    private $hoge_model;

    public function __construct(){
        $this->hoge_model = new HogeModel();
    }

    public function test(){
//        $get = $this->hoge_model->getTest();
//        return $get;
    }

}
?>
