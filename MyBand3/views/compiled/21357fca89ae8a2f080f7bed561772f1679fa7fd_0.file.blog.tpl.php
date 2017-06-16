<?php
/* Smarty version 3.1.30, created on 2017-06-16 15:10:44
  from "E:\Bewijzenmap\p1.4\proj\site2\MyBandV_M\views\blog.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5943f4f4cd6dd3_03618445',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '21357fca89ae8a2f080f7bed561772f1679fa7fd' => 
    array (
      0 => 'E:\\Bewijzenmap\\p1.4\\proj\\site2\\MyBandV_M\\views\\blog.tpl',
      1 => 1497625844,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5943f4f4cd6dd3_03618445 (Smarty_Internal_Template $_smarty_tpl) {
?>
<content class="wrapper">
    <h2 style="text-align: center">Blog</h2>

    <section class="blog">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['blog_list']->value, 'blog');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['blog']->value) {
?>
                <p><?php echo $_smarty_tpl->tpl_vars['blog']->value['timestamp'];?>
</p>
                <p>Bron: <?php echo $_smarty_tpl->tpl_vars['blog']->value['author'];?>
</p>
                <h3><?php echo $_smarty_tpl->tpl_vars['blog']->value['title'];?>
</h3>
                <img src=" <?php echo $_smarty_tpl->tpl_vars['blog']->value['image'];?>
">
                <content><?php echo $_smarty_tpl->tpl_vars['blog']->value['text'];?>
</content>
                <div class="blogRuimte"></div>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        </section>

    
    
        
            
                
                
                
            
        
        
            
                
                
                
            
        
    
<?php }
}
