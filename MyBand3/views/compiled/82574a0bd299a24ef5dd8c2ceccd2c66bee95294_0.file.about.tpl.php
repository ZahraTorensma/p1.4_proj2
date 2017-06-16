<?php
/* Smarty version 3.1.30, created on 2017-06-16 09:42:36
  from "E:\Bewijzenmap\p1.4\proj\site2\MyBandV_M\views\about.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5943a80c45ed62_02186300',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '82574a0bd299a24ef5dd8c2ceccd2c66bee95294' => 
    array (
      0 => 'E:\\Bewijzenmap\\p1.4\\proj\\site2\\MyBandV_M\\views\\about.tpl',
      1 => 1497606156,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5943a80c45ed62_02186300 (Smarty_Internal_Template $_smarty_tpl) {
?>
<content class="wrapper">
    <img src="foto_about/helloimvegan.svg" alt="Hello Im Vegan" class="helloVegan"/>
    
    <div class="aboutPage">

        <section id="aboutLinks">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['about_list']->value, 'about');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['about']->value) {
?>
                    
                <p><?php echo $_smarty_tpl->tpl_vars['about']->value['text'];?>
</p>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        </section>

        
            
                
            
        

    </div>

</content><?php }
}
