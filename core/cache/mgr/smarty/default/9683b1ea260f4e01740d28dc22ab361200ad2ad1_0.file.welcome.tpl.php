<?php /* Smarty version 3.1.27, created on 2017-04-07 13:22:31
         compiled from "E:\Work\wamp2\www\modx-revo\manager\templates\default\welcome.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2551358e79297672829_43873125%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9683b1ea260f4e01740d28dc22ab361200ad2ad1' => 
    array (
      0 => 'E:\\Work\\wamp2\\www\\modx-revo\\manager\\templates\\default\\welcome.tpl',
      1 => 1486535872,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2551358e79297672829_43873125',
  'variables' => 
  array (
    'dashboard' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_58e79297675bc4_55020288',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58e79297675bc4_55020288')) {
function content_58e79297675bc4_55020288 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2551358e79297672829_43873125';
?>
<div id="modx-panel-welcome-div"></div>

<div id="modx-dashboard" class="dashboard">
<?php echo $_smarty_tpl->tpl_vars['dashboard']->value;?>

</div><?php }
}
?>