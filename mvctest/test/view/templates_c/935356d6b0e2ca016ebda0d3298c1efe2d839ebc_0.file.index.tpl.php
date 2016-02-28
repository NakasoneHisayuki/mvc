<?php /* Smarty version 3.1.27, created on 2016-02-21 22:20:58
         compiled from "test/view/templates/index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:3714084256c9b9baee58e6_41319852%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '935356d6b0e2ca016ebda0d3298c1efe2d839ebc' => 
    array (
      0 => 'test/view/templates/index.tpl',
      1 => 1456061053,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3714084256c9b9baee58e6_41319852',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56c9b9bb0b6853_52406671',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56c9b9bb0b6853_52406671')) {
function content_56c9b9bb0b6853_52406671 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '3714084256c9b9baee58e6_41319852';
echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<form action="/mvctest" method="post">
    <select>
        <option value="name" selected>顧客の名前</option>
        <option value="address">顧客の住所</option>
        <option value="tel">顧客の電話番号</option>
        <option value="point">メモ</option>
        <option value="id">最終買物日</option>
    </select>
    <input type="search" name="example" size="30" />
    <input type="submit" value="ご意見を送信" />
</form>


<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<?php }
}
?>