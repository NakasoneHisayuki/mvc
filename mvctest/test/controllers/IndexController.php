<?php
//phpinfo();
//exit();
require_once( 'test/logic/IndexLogic.php' );
require_once('Smarty.class.php');
require_once('Construct.php');

class IndexController extends Construct{

    public function __construct(){
        $this->construct();
    }

    public function Index()
    {
        $index_logic = $this->logic = new IndexLogic();
        $index_logic->test();
//        $name = $this->get("name");
//        if(empty($name)){
//            //画面表示
            $this->view->display("index.tpl");
//        }else{
//            var_dump($name);
//        }

    }

    public function Home(){
        $this->view->display("home.tpl");
    }

}
?>
