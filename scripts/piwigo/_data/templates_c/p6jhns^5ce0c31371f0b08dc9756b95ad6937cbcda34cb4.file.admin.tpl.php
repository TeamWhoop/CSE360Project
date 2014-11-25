<?php /* Smarty version Smarty-3.1.13, created on 2014-11-10 17:14:34
         compiled from "C:\Program Files (x86)\EasyPHP-DevServer-14.1VC11\data\localweb\scripts\piwigo\plugins\TakeATour\tpl\admin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:322645460e46ae75f70-73098263%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5ce0c31371f0b08dc9756b95ad6937cbcda34cb4' => 
    array (
      0 => 'C:\\Program Files (x86)\\EasyPHP-DevServer-14.1VC11\\data\\localweb\\scripts\\piwigo\\plugins\\TakeATour\\tpl\\admin.tpl',
      1 => 1415635728,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '322645460e46ae75f70-73098263',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'TAT_tour_ignored' => 0,
    'F_ACTION' => 0,
    'pwg_token' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5460e46b61e4c6_00116811',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5460e46b61e4c6_00116811')) {function content_5460e46b61e4c6_00116811($_smarty_tpl) {?><div class="titrePage">
  <h2><?php echo l10n('takeatour_configpage');?>
</h2>
</div>
<div id="helpContent">
  <p><?php echo l10n('TAT_descrp');?>
</p>
<?php if (!isset($_smarty_tpl->tpl_vars['TAT_tour_ignored']->value)||(isset($_smarty_tpl->tpl_vars['TAT_tour_ignored']->value)&&in_array('first_contact',$_smarty_tpl->tpl_vars['TAT_tour_ignored']->value))){?>
  <fieldset>
    <legend><?php echo l10n('First Contact');?>
</legend>
    <div class="TAT_description"><?php echo l10n('first_contact_descrp');?>
</div>
    <form action="<?php echo $_smarty_tpl->tpl_vars['F_ACTION']->value;?>
" method="post">
      <input type="hidden" name="submited_tour_path" value="tours/first_contact">
      <input type="hidden" name="pwg_token" value="<?php echo $_smarty_tpl->tpl_vars['pwg_token']->value;?>
">
      <input type="submit" name="button2" id="button2" value="<?php echo l10n('Start the Tour');?>
">
    </form>
  </fieldset>
<?php }?>
<?php if (!isset($_smarty_tpl->tpl_vars['TAT_tour_ignored']->value)||(isset($_smarty_tpl->tpl_vars['TAT_tour_ignored']->value)&&in_array('privacy',$_smarty_tpl->tpl_vars['TAT_tour_ignored']->value))){?>
  <fieldset>
    <legend><?php echo l10n('Privacy');?>
</legend>
    <div class="TAT_description"><?php echo l10n('privacy_descrp');?>
</div>
    <form action="<?php echo $_smarty_tpl->tpl_vars['F_ACTION']->value;?>
" method="post">
      <input type="hidden" name="submited_tour_path" value="tours/privacy">
      <input type="hidden" name="pwg_token" value="<?php echo $_smarty_tpl->tpl_vars['pwg_token']->value;?>
">
      <input type="submit" name="button2" id="button2" value="<?php echo l10n('Start the Tour');?>
">
    </form>
  </fieldset>
<?php }?>
<?php if (!isset($_smarty_tpl->tpl_vars['TAT_tour_ignored']->value)||(isset($_smarty_tpl->tpl_vars['TAT_tour_ignored']->value)&&in_array('2_7_0',$_smarty_tpl->tpl_vars['TAT_tour_ignored']->value))){?>
  <fieldset>
    <legend><?php echo l10n('2.7 Tour');?>
</legend>
    <div class="TAT_description"><?php echo l10n('2_7_0_descrp');?>
</div>
    <form action="<?php echo $_smarty_tpl->tpl_vars['F_ACTION']->value;?>
" method="post">
      <input type="hidden" name="submited_tour_path" value="tours/2_7_0">
      <input type="hidden" name="pwg_token" value="<?php echo $_smarty_tpl->tpl_vars['pwg_token']->value;?>
">
      <input type="submit" name="button2" id="button2" value="<?php echo l10n('Start the Tour');?>
">
    </form>
  </fieldset>
<?php }?>
</div><?php }} ?>