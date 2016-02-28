<?php
function IncludePathSetting($dispatcher){
    $path = '../smarty/libs/';
    //$path .= PATH_SEPARATOR . '/vagrant/smarty/libs/ とは別にインクルードするディレクトリあれば指定/';
    $dispatcher->setSystemRoot('../mvctest/test/');
    set_include_path(get_include_path() . PATH_SEPARATOR . $path);
}
?>
