<?php
/* Smarty version 3.1.30, created on 2017-06-12 08:00:48
  from "E:\Bewijzenmap\p1.4\proj\site2\MyBandV_M\views\menu.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_593e4a30edd928_41081441',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7b0de7517d72ae6d3223107c7d2c2b82dc7d25b9' => 
    array (
      0 => 'E:\\Bewijzenmap\\p1.4\\proj\\site2\\MyBandV_M\\views\\menu.tpl',
      1 => 1497254450,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_593e4a30edd928_41081441 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="menuDESK" id="nav">
    
    <a href="?page=blog">Blog</a>
    <a href="?page=about">Over mij</a>
    <a href="?page=agenda">Agenda</a>
    <a href="?page=search">Zoeken</a>

</div>

<?php echo '<script'; ?>
 src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">
    $("#nav").addClass("js").before('<div class="menuDESK">&#9776;</div>');
    $(".menuDESK").click(function(){
        $("#nav").toggle();
    });
    $(window).resize(function(){
        if(window.innerWidth > 650) {
            $("#nav").removeAttr("style");
        }
    });
<?php echo '</script'; ?>
><?php }
}
