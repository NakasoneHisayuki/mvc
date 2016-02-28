<?php
//phpinfo();
//exit();
require_once( 'test/logic/HomeLogic.php' );
require_once('Smarty.class.php');
require_once('Construct.php');

class HomeController extends Construct{

    public function __construct(){
        $this->construct();
    }

    public function Home(){
        $this->view->display("index.tpl");
    }

}
?>
