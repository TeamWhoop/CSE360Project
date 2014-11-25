<?php /* Smarty version Smarty-3.1.13, created on 2014-11-10 17:16:08
         compiled from ".\themes\default\template\register.tpl" */ ?>
<?php /*%%SmartyHeaderCode:272185460e4c84413c2-75887984%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b060edcaf087f66f7789d3325451c76621834066' => 
    array (
      0 => '.\\themes\\default\\template\\register.tpl',
      1 => 1415635787,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '272185460e4c84413c2-75887984',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MENUBAR' => 0,
    'U_HOME' => 0,
    'LEVEL_SEPARATOR' => 0,
    'F_ACTION' => 0,
    'F_LOGIN' => 0,
    'obligatory_user_mail_address' => 0,
    'F_EMAIL' => 0,
    'F_KEY' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5460e4c8981404_99298552',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5460e4c8981404_99298552')) {function content_5460e4c8981404_99298552($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['MENUBAR']->value)){?><?php echo $_smarty_tpl->tpl_vars['MENUBAR']->value;?>
<?php }?>
<div id="registerPage">

<div id="content" class="content<?php if (isset($_smarty_tpl->tpl_vars['MENUBAR']->value)){?> contentWithMenu<?php }?>">

<div class="titrePage">
	<ul class="categoryActions">
	</ul>
	<h2><a href="<?php echo $_smarty_tpl->tpl_vars['U_HOME']->value;?>
"><?php echo l10n('Home');?>
</a><?php echo $_smarty_tpl->tpl_vars['LEVEL_SEPARATOR']->value;?>
<?php echo l10n('Registration');?>
</h2>
</div>

<?php echo $_smarty_tpl->getSubTemplate ('infos_errors.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<form method="post" action="<?php echo $_smarty_tpl->tpl_vars['F_ACTION']->value;?>
" class="properties" name="register_form">
  <fieldset>
    <legend><?php echo l10n('Enter your personnal informations');?>
</legend>

    <ul>
      <li>
        <span class="property">
          <label for="login">* <?php echo l10n('Username');?>
</label>
        </span>
        <input type="text" name="login" id="login" value="<?php echo $_smarty_tpl->tpl_vars['F_LOGIN']->value;?>
" >
      </li>
      <li>
        <span class="property">
          <label for="password">* <?php echo l10n('Password');?>
</label>
        </span>
        <input type="password" name="password" id="password" >
      </li>
      <li>
        <span class="property">
          <label for="password_conf">* <?php echo l10n('Confirm Password');?>
</label>
        </span>
        <input type="password" name="password_conf" id="password_conf" >
      </li>
      <li>
        <span class="property">
          <label for="mail_address"><?php if ($_smarty_tpl->tpl_vars['obligatory_user_mail_address']->value){?>* <?php }?><?php echo l10n('Email address');?>
</label>
        </span>
        <input type="text" name="mail_address" id="mail_address" value="<?php echo $_smarty_tpl->tpl_vars['F_EMAIL']->value;?>
" >
<?php if (!$_smarty_tpl->tpl_vars['obligatory_user_mail_address']->value){?>
        (<?php echo l10n('useful when password forgotten');?>
)
<?php }?>
      </li>
      <li>
        <span class="property">
          <label for="send_password_by_mail"><?php echo l10n('Send my connection settings by email');?>
</label>
        </span>
        <input type="checkbox" name="send_password_by_mail" id="send_password_by_mail" value="1" checked="checked">
      </li>
    </ul>

  </fieldset>

  <p class="bottomButtons">
		<input type="hidden" name="key" value="<?php echo $_smarty_tpl->tpl_vars['F_KEY']->value;?>
" >
    <input class="submit" type="submit" name="submit" value="<?php echo l10n('Register');?>
">
    <input class="submit" type="reset" value="<?php echo l10n('Reset');?>
">
  </p>

</form>

<script type="text/javascript"><!--
document.register_form.login.focus();
//--></script>

</div> <!-- content -->
</div> <!-- registerPage -->
<?php }} ?>