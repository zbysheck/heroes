<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-01-19 03:53:01
         compiled from "views\battle.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1688854bc7f9de7f139-45811644%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '386edd100f391b8b5f9f6cc5b82017bb9c910c47' => 
    array (
      0 => 'views\\battle.tpl',
      1 => 1421627532,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1688854bc7f9de7f139-45811644',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'a' => 0,
    'sol' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54bc7f9df14170_81379061',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54bc7f9df14170_81379061')) {function content_54bc7f9df14170_81379061($_smarty_tpl) {?><?php echo $_smarty_tpl->tpl_vars['a']->value;?>

<br/>
<?php echo $_smarty_tpl->tpl_vars['a']->value;?>

<br/>
<form>
A.)<input type='submit' name='answer' value='<?php echo $_smarty_tpl->tpl_vars['sol']->value[0];?>
'><br/>
B.)<input type='submit' name='answer' value='<?php echo $_smarty_tpl->tpl_vars['sol']->value[1];?>
'><br/>
C.)<input type='submit' name='answer' value='<?php echo $_smarty_tpl->tpl_vars['sol']->value[2];?>
'><br/>
</form><?php }} ?>
