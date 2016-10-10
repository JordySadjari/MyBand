<?php /* Smarty version Smarty-3.1.18, created on 2016-10-10 09:20:10
         compiled from "views\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2380957f2259fb96e69-99805538%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '765d62663ff840c30179c2633d916fc5606f6d1d' => 
    array (
      0 => 'views\\header.tpl',
      1 => 1476091209,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2380957f2259fb96e69-99805538',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_57f2259fbe93b9_78505594',
  'variables' => 
  array (
    'headerString' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57f2259fbe93b9_78505594')) {function content_57f2259fbe93b9_78505594($_smarty_tpl) {?><header>
    <p><?php echo $_smarty_tpl->tpl_vars['headerString']->value;?>
</p>
    <nav>
      <ul>
        <li><a href="?action=about">About</a></li>
        <li><a href="index.php">Home</a></li>
        <li><a href="?action=news">newarticles</a></li>
      </ul>
    </nav>
</header>
<?php }} ?>
