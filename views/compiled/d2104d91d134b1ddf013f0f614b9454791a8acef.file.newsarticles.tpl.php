<?php /* Smarty version Smarty-3.1.18, created on 2016-10-24 08:03:31
         compiled from "views\newsarticles.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15671580db21de351e8-69985469%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd2104d91d134b1ddf013f0f614b9454791a8acef' => 
    array (
      0 => 'views\\newsarticles.tpl',
      1 => 1477296200,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15671580db21de351e8-69985469',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_580db21de6ab32_29043938',
  'variables' => 
  array (
    'result' => 0,
    'oneItem' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_580db21de6ab32_29043938')) {function content_580db21de6ab32_29043938($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include 'C:\\wamp64\\www\\AnimeFest\\libs\\plugins\\modifier.truncate.php';
if (!is_callable('smarty_modifier_date_format')) include 'C:\\wamp64\\www\\AnimeFest\\libs\\plugins\\modifier.date_format.php';
?><h1 style="margin-left: 20px; font-size: 2.3em;">News articles</h1>
<div id="section">
  <?php  $_smarty_tpl->tpl_vars['oneItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oneItem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['result']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['oneItem']->key => $_smarty_tpl->tpl_vars['oneItem']->value) {
$_smarty_tpl->tpl_vars['oneItem']->_loop = true;
?>
      <div class="article">
          <img src=images/<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['image'];?>
 style="width:100px; height:100px;">
          <h1><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['title'];?>
</h1>
          <content><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['oneItem']->value['content'],40);?>
</content>
          <p><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['oneItem']->value['date_created'],"%e %B %Y");?>
</p>
      </div>
  <?php } ?>
</div>
<?php }} ?>
