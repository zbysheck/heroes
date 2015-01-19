<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-01-19 12:28:36
         compiled from "views\login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1562854bc26357f1896-34528960%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '500b926a990a9166d51bcaf7593eddebe9ae9d5a' => 
    array (
      0 => 'views\\login.tpl',
      1 => 1421670417,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1562854bc26357f1896-34528960',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54bc2636b5fa28_93926112',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54bc2636b5fa28_93926112')) {function content_54bc2636b5fa28_93926112($_smarty_tpl) {?>	<div>
	<form method="post" action="submitForm/">
	<h1>Zaloguj się</h1><br/>
	Login<br/>
	<input type="text" name="name"><br/>
	Hasło<br/>
	<input type="password" name="password"><br/>
	<input type="submit" name="login"><br/>
	</form>
	</div><?php }} ?>
