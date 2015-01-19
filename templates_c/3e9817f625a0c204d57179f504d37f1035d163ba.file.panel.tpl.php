<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-01-19 12:51:29
         compiled from "views\panel.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1713054bcfcd69fe652-89559392%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3e9817f625a0c204d57179f504d37f1035d163ba' => 
    array (
      0 => 'views\\panel.tpl',
      1 => 1421671887,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1713054bcfcd69fe652-89559392',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54bcfcd774a964_19710596',
  'variables' => 
  array (
    'name' => 0,
    'url' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54bcfcd774a964_19710596')) {function content_54bcfcd774a964_19710596($_smarty_tpl) {?><div>
<?php if ($_smarty_tpl->tpl_vars['name']->value=='') {?>
    <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
login/registerForm">Rejestracja</a>  
    <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
login/loginForm">Zaloguj się</a>
<?php } else { ?>
    Witaj <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
, <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
login/logout">Wyloguj</a>
<?php }?><div><?php }} ?>
