<?php /* Smarty version Smarty-3.1.13, created on 2014-11-10 17:14:20
         compiled from ".\themes\default\template\profile_content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:40465460e45ccb5367-62305084%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '16ba7cccba67d5f226392d0906950f6c1d3753f7' => 
    array (
      0 => '.\\themes\\default\\template\\profile_content.tpl',
      1 => 1415635788,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '40465460e45ccb5367-62305084',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'F_ACTION' => 0,
    'REDIRECT' => 0,
    'USERNAME' => 0,
    'SPECIAL_USER' => 0,
    'EMAIL' => 0,
    'ALLOW_USER_CUSTOMIZATION' => 0,
    'NB_IMAGE_PAGE' => 0,
    'template_options' => 0,
    'template_selection' => 0,
    'language_options' => 0,
    'language_selection' => 0,
    'RECENT_PERIOD' => 0,
    'radio_options' => 0,
    'EXPAND' => 0,
    'ACTIVATE_COMMENTS' => 0,
    'NB_COMMENTS' => 0,
    'NB_HITS' => 0,
    'PWG_TOKEN' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5460e45d5025b0_36226146',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5460e45d5025b0_36226146')) {function content_5460e45d5025b0_36226146($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include 'C:\\Program Files (x86)\\EasyPHP-DevServer-14.1VC11\\data\\localweb\\scripts\\piwigo\\include\\smarty\\libs\\plugins\\function.html_options.php';
if (!is_callable('smarty_function_html_radios')) include 'C:\\Program Files (x86)\\EasyPHP-DevServer-14.1VC11\\data\\localweb\\scripts\\piwigo\\include\\smarty\\libs\\plugins\\function.html_radios.php';
?><form method="post" name="profile" action="<?php echo $_smarty_tpl->tpl_vars['F_ACTION']->value;?>
" id="profile" class="properties">

  <fieldset>
    <legend><?php echo l10n('Registration');?>
</legend>
    <input type="hidden" name="redirect" value="<?php echo $_smarty_tpl->tpl_vars['REDIRECT']->value;?>
">
    <ul>
      <li>
        <span class="property"><?php echo l10n('Username');?>
</span>
        <?php echo $_smarty_tpl->tpl_vars['USERNAME']->value;?>

      </li>
    <?php if (!$_smarty_tpl->tpl_vars['SPECIAL_USER']->value){?> 
      <li>
        <span class="property">
          <label for="mail_address"><?php echo l10n('Email address');?>
</label>
        </span>
        <input type="text" name="mail_address" id="mail_address" value="<?php echo $_smarty_tpl->tpl_vars['EMAIL']->value;?>
">
      </li>
      <li>
        <span class="property">
          <label for="password"><?php echo l10n('Password');?>
</label>
        </span>
        <input type="password" name="password" id="password" value="">
      </li>
      <li>
        <span class="property">
          <label for="use_new_pwd"><?php echo l10n('New password');?>
</label>
        </span>
        <input type="password" name="use_new_pwd" id="use_new_pwd" value="">
      </li>
      <li>
        <span class="property">
          <label for="passwordConf"><?php echo l10n('Confirm Password');?>
</label>
        </span>
        <input type="password" name="passwordConf" id="passwordConf" value="">
      </li>
<?php }?>
    </ul>
  </fieldset>

<?php if ($_smarty_tpl->tpl_vars['ALLOW_USER_CUSTOMIZATION']->value){?>
  <fieldset>
    <legend><?php echo l10n('Preferences');?>
</legend>

    <ul>
      <li>
        <span class="property">
          <label for="nb_image_page"><?php echo l10n('Number of photos per page');?>
</label>
        </span>
        <input type="text" size="4" maxlength="3" name="nb_image_page" id="nb_image_page" value="<?php echo $_smarty_tpl->tpl_vars['NB_IMAGE_PAGE']->value;?>
">
      </li>
      <li>
        <span class="property">
          <label for="template"><?php echo l10n('Theme');?>
</label>
        </span>
        <?php echo smarty_function_html_options(array('name'=>'theme','options'=>$_smarty_tpl->tpl_vars['template_options']->value,'selected'=>$_smarty_tpl->tpl_vars['template_selection']->value),$_smarty_tpl);?>

      </li>
      <li>
        <span class="property">
          <label for="Language"><?php echo l10n('Language');?>
</label>
        </span>
        <?php echo smarty_function_html_options(array('name'=>'language','options'=>$_smarty_tpl->tpl_vars['language_options']->value,'selected'=>$_smarty_tpl->tpl_vars['language_selection']->value),$_smarty_tpl);?>

      </li>
      <li>
        <span class="property">
          <label for="Recent period"><?php echo l10n('Recent period');?>
</label>
        </span>
        <input type="text" size="3" maxlength="2" name="recent_period" id="recent_period" value="<?php echo $_smarty_tpl->tpl_vars['RECENT_PERIOD']->value;?>
">
      </li>
      <li>
        <span class="property"><?php echo l10n('Expand all albums');?>
</span>
        <?php echo smarty_function_html_radios(array('name'=>'expand','options'=>$_smarty_tpl->tpl_vars['radio_options']->value,'selected'=>$_smarty_tpl->tpl_vars['EXPAND']->value),$_smarty_tpl);?>

      </li>
<?php if ($_smarty_tpl->tpl_vars['ACTIVATE_COMMENTS']->value){?>
      <li>
        <span class="property"><?php echo l10n('Show number of comments');?>
</span>
        <?php echo smarty_function_html_radios(array('name'=>'show_nb_comments','options'=>$_smarty_tpl->tpl_vars['radio_options']->value,'selected'=>$_smarty_tpl->tpl_vars['NB_COMMENTS']->value),$_smarty_tpl);?>

      </li>
<?php }?>
      <li>
        <span class="property"><?php echo l10n('Show number of hits');?>
</span>
        <?php echo smarty_function_html_radios(array('name'=>'show_nb_hits','options'=>$_smarty_tpl->tpl_vars['radio_options']->value,'selected'=>$_smarty_tpl->tpl_vars['NB_HITS']->value),$_smarty_tpl);?>

      </li>
    </ul>
  </fieldset>
<?php }?>

  <p class="bottomButtons">
    <input type="hidden" name="pwg_token" value="<?php echo $_smarty_tpl->tpl_vars['PWG_TOKEN']->value;?>
">
    <input class="submit" type="submit" name="validate" value="<?php echo l10n('Submit');?>
">
    <input class="submit" type="reset" name="reset" value="<?php echo l10n('Reset');?>
">
<?php if ($_smarty_tpl->tpl_vars['ALLOW_USER_CUSTOMIZATION']->value){?>
    <input class="submit" type="submit" name="reset_to_default" value="<?php echo l10n('Reset to default values');?>
">
<?php }?>
  </p>

</form>
<?php }} ?>