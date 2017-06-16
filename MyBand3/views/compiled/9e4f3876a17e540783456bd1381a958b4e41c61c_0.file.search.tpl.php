<?php
/* Smarty version 3.1.30, created on 2017-06-16 10:03:30
  from "E:\Bewijzenmap\p1.4\proj\site2\MyBandV_M\views\search.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5943acf2b1c6d5_31657307',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9e4f3876a17e540783456bd1381a958b4e41c61c' => 
    array (
      0 => 'E:\\Bewijzenmap\\p1.4\\proj\\site2\\MyBandV_M\\views\\search.tpl',
      1 => 1497607412,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5943acf2b1c6d5_31657307 (Smarty_Internal_Template $_smarty_tpl) {
?>
    <content class="wrapper">
        <h2 style="text-align: center; margin-bottom: 80px">Zoeken</h2>

        <div class="search">
            <form id="searchform" method="get" action="includes/process_search.php">
                <table>
                    <tr>
                        <td><input type="search" name="search" placeholder="Zoeken..." autofocus></td>
                        <td><input id="button" type="submit" name="submit_search" value="Zoeken!"/></td>
                    </tr>
                </table>
            </form>
        </div>

        <div class="searchRuimte"></div>
    </content><?php }
}
