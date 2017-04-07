<?php /* Smarty version 3.1.27, created on 2017-04-07 13:24:01
         compiled from "E:\Work\wamp2\www\modx-revo\manager\templates\default\workspaces\index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1426458e792f17fb066_57008341%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4a9ba45444ee822f6b802f4b7ffe19e273573596' => 
    array (
      0 => 'E:\\Work\\wamp2\\www\\modx-revo\\manager\\templates\\default\\workspaces\\index.tpl',
      1 => 1486535872,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1426458e792f17fb066_57008341',
  'variables' => 
  array (
    'error' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_58e792f1818590_56402910',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58e792f1818590_56402910')) {
function content_58e792f1818590_56402910 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1426458e792f17fb066_57008341';
echo (($tmp = @$_smarty_tpl->tpl_vars['error']->value)===null||$tmp==='' ? '' : $tmp);?>

<div id="modx-panel-workspace-div"></div>
<?php }
}
?>