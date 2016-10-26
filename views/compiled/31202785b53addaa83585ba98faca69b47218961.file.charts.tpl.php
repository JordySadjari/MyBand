<?php /* Smarty version Smarty-3.1.18, created on 2016-10-24 08:24:35
         compiled from "views\charts.tpl" */ ?>
<?php /*%%SmartyHeaderCode:29710580dc37f36b4d1-88426225%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '31202785b53addaa83585ba98faca69b47218961' => 
    array (
      0 => 'views\\charts.tpl',
      1 => 1477297318,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29710580dc37f36b4d1-88426225',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_580dc37f36c070_91812262',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_580dc37f36c070_91812262')) {function content_580dc37f36c070_91812262($_smarty_tpl) {?><script>
function showUser(str) {
    if (str == "") {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else {
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","getuser.php?q="+str,true);
        xmlhttp.send();
    }
}
</script>

<h1 style="margin-left: 20px; font-size: 2.3em;">top charts</h1>

<form>
<select name="users" onchange="showUser(this.value)">
    <option value="">Select a chart:</option>
    <option value="1">top anime</option>
    <option value="2">top manga</option>
    <option value="2">top characters</option>
  </select>
</form>
<br>
<div id="txtHint"><b>Person info will be listed here...</b></div>
<?php }} ?>
