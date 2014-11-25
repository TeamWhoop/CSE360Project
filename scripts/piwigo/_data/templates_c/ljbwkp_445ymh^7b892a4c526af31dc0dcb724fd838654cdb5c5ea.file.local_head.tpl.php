<?php /* Smarty version Smarty-3.1.13, created on 2014-11-10 17:14:05
         compiled from "C:\Program Files (x86)\EasyPHP-DevServer-14.1VC11\data\localweb\scripts\piwigo\themes\default\local_head.tpl" */ ?>
<?php /*%%SmartyHeaderCode:66305460e44d21de32-58224813%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7b892a4c526af31dc0dcb724fd838654cdb5c5ea' => 
    array (
      0 => 'C:\\Program Files (x86)\\EasyPHP-DevServer-14.1VC11\\data\\localweb\\scripts\\piwigo\\themes\\default\\local_head.tpl',
      1 => 1415635771,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '66305460e44d21de32-58224813',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'load_css' => 0,
    'ROOT_URL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5460e44d2e4315_31766170',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5460e44d2e4315_31766170')) {function content_5460e44d2e4315_31766170($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['load_css']->value){?> 
	<!--[if lt IE 7]>
		<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['ROOT_URL']->value;?>
themes/default/fix-ie5-ie6.css">
	<![endif]-->
	<!--[if IE 7]>
		<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['ROOT_URL']->value;?>
themes/default/fix-ie7.css">
	<![endif]-->
	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_css'][0][0]->func_combine_css(array('path'=>"themes/default/print.css",'order'=>-10),$_smarty_tpl);?>

<?php }?>
<?php }} ?>