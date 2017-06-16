<?php
/* Smarty version 3.1.30, created on 2017-06-02 12:19:28
  from "E:\Bewijzenmap\p1.4\proj\site2\MyBandV_M\admin.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_593157d01cf327_68913547',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3dbbe24e5aa569121ae9b28104166a8d78caf6b3' => 
    array (
      0 => 'E:\\Bewijzenmap\\p1.4\\proj\\site2\\MyBandV_M\\admin.tpl',
      1 => 1496405968,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_593157d01cf327_68913547 (Smarty_Internal_Template $_smarty_tpl) {
?>
<content class="wrapper">

    <h2 style="text-align: center">Admin</h2>

    <div class="admin">

        <div class="adminBlog">
            <h4 style="text-align: center">Blog</h4>
            <form method="post" action="includes/process_blog.php">
                <table>
                
                    
                    
                

                <tr>
                    <td><p>Auteur: *</p></td>
                    <td><input type="text" name="auteur" required/></td>
                </tr>

                <tr>
                    <td><p>Afbeelding: </p></td>
                    <input name="MAX_FILE_SIZE" type="hidden" value="50000">
                    <td><input type="file" name="image"/></td>
                </tr>

                <tr>
                    <td><p>Titel: *</p></td>
                    <td><input type="text" name="titel" required/></td>
                </tr>
                <tr>
                    <td><p>Tekst: *</p></td>
                    <td><textarea name="tekst" required></textarea></td>
                </tr>
                <tr>
                    <td><p>Wachtwoord:</p></td>
                    <td><input type="password" name="wachtwoord" required/></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" name="submitblog" value="Verzenden!"></td>
                </tr>
                </table>
            </form>


        </div>

        <div class="adminAbout">
            <h4 style="text-align: center">Over mij</h4>

        </div>

        <div class="adminAgenda">
            <h5 style="text-align: center">Agenda</h5>


        </div>


    </div>

</content><?php }
}
