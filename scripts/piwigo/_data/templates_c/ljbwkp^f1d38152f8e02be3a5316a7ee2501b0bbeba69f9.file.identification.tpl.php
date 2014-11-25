<?php /* Smarty version Smarty-3.1.13, created on 2014-11-10 19:28:28
         compiled from ".\themes\default\template\identification.tpl" */ ?>
<?php /*%%SmartyHeaderCode:659546103cc323d80-13740943%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f1d38152f8e02be3a5316a7ee2501b0bbeba69f9' => 
    array (
      0 => '.\\themes\\default\\template\\identification.tpl',
      1 => 1415635788,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '659546103cc323d80-13740943',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MENUBAR' => 0,
    'U_HOME' => 0,
    'LEVEL_SEPARATOR' => 0,
    'F_LOGIN_ACTION' => 0,
    'authorize_remembering' => 0,
    'U_REDIRECT' => 0,
    'U_REGISTER' => 0,
    'U_LOST_PASSWORD' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_546103cc92a6d3_68395909',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_546103cc92a6d3_68395909')) {function content_546103cc92a6d3_68395909($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['MENUBAR']->value)){?><?php echo $_smarty_tpl->tpl_vars['MENUBAR']->value;?>
<?php }?>
<div id="content" class="content<?php if (isset($_smarty_tpl->tpl_vars['MENUBAR']->value)){?> contentWithMenu<?php }?>">

<div class="titrePage">
	<ul class="categoryActions">
	</ul>
	<h2><a href="<?php echo $_smarty_tpl->tpl_vars['U_HOME']->value;?>
"><?php echo l10n('Home');?>
</a><?php echo $_smarty_tpl->tpl_vars['LEVEL_SEPARATOR']->value;?>
<?php echo l10n('Identification');?>
</h2>
</div>

<?php echo $_smarty_tpl->getSubTemplate ('infos_errors.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<form action="<?php echo $_smarty_tpl->tpl_vars['F_LOGIN_ACTION']->value;?>
" method="post" name="login_form" class="properties">
  <fieldset>
    <legend><?php echo l10n('Connection settings');?>
</legend>

    <ul>
      <li>
        <span class="property">
          <label for="username"><?php echo l10n('Username');?>
</label>
        </span>
        <input tabindex="1" class="login" type="text" name="username" id="username" size="25">
      </li>

      <li>
        <span class="property">
          <label for="password"><?php echo l10n('Password');?>
</label>
        </span>
        <input tabindex="2" class="login" type="password" name="password" id="password" size="25">
      </li>

<?php if ($_smarty_tpl->tpl_vars['authorize_remembering']->value){?>
      <li>
        <span class="property">
          <label for="remember_me"><?php echo l10n('Auto login');?>
</label>
        </span>
        <input tabindex="3" type="checkbox" name="remember_me" id="remember_me" value="1">
      </li>
<?php }?>
    </ul>
  </fieldset>

  <p>
    <input type="hidden" name="redirect" value="<?php echo urlencode($_smarty_tpl->tpl_vars['U_REDIRECT']->value);?>
">
    <input tabindex="4" type="submit" name="login" value="<?php echo l10n('Submit');?>
">
  </p>

	<p>
<?php if (isset($_smarty_tpl->tpl_vars['U_REGISTER']->value)){?>
		<a href="<?php echo $_smarty_tpl->tpl_vars['U_REGISTER']->value;?>
" title="<?php echo l10n('Register');?>
" class="pwg-state-default pwg-button">
			<span class="pwg-icon pwg-icon-register">&nbsp;</span><span><?php echo l10n('Register');?>
</span>
		</a>
<?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['U_LOST_PASSWORD']->value)){?>
		<a href="<?php echo $_smarty_tpl->tpl_vars['U_LOST_PASSWORD']->value;?>
" title="<?php echo l10n('Forgot your password?');?>
" class="pwg-state-default pwg-button">
			<span class="pwg-icon pwg-icon-lost-password">&nbsp;</span><span><?php echo l10n('Forgot your password?');?>
</span>
		</a>
<?php }?>
	</p>

</form>

<script type="text/javascript"><!--
document.login_form.username.focus();
//--></script>

</div> <!-- content -->
<?php }} ?>