<?php /* Smarty version 3.1.27, created on 2017-04-07 16:44:18
         compiled from "E:\Work\wamp2\www\modx-revo\manager\templates\default\welcome.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:388458e7c1e2d59328_18797851%%*/
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
  'nocache_hash' => '388458e7c1e2d59328_18797851',
  'variables' => 
  array (
    'dashboard' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_58e7c1e2d63c90_86321130',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58e7c1e2d63c90_86321130')) {
function content_58e7c1e2d63c90_86321130 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '388458e7c1e2d59328_18797851';
?>
<div id="modx-panel-welcome-div"></div>

<div id="modx-dashboard" class="dashboard">
<?php echo $_smarty_tpl->tpl_vars['dashboard']->value;?>

</div><?php }
}
?>