<?php
    require_once('Smarty.class.php');
    class Construct{

        public $view;
        //ビューで表示するURL
        private $url;
        // コンストラクタ

        //ビューインスタンス化
        public function construct(){
            $this->view = new Smarty();

            $this->view->template_dir = "test/view/templates";
            $this->view->compile_dir = "test/view/templates_c";
            $this->view->cache_dir ="test/view/cache";

        //HTMLから参照すべき外部ファイルのパス設定(URLを/区切りにするとパスが変わるため)
            $this->view->assign("url",$this->url);
        }

    }

?>
