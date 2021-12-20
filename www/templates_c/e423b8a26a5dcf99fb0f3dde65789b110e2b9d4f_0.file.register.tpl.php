<?php
/* Smarty version 3.1.34-dev-7, created on 2021-12-16 19:34:14
  from 'C:\laragon\www\Web\tps\TP4EXEMPLE\templates\register.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_61bb94b62d7fd6_37723330',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e423b8a26a5dcf99fb0f3dde65789b110e2b9d4f' => 
    array (
      0 => 'C:\\laragon\\www\\Web\\tps\\TP4EXEMPLE\\templates\\register.tpl',
      1 => 1639683148,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61bb94b62d7fd6_37723330 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_110162816661bb94b62cb296_70857314', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_54550664061bb94b62cbbb8_32687839', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layout.tpl');
}
/* {block 'title'} */
class Block_110162816661bb94b62cb296_70857314 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_110162816661bb94b62cb296_70857314',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Register<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_54550664061bb94b62cbbb8_32687839 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_54550664061bb94b62cbbb8_32687839',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<h1>Register</h1>
<div class="error">
    <p><?php echo (($tmp = @$_smarty_tpl->tpl_vars['erreur']->value['user_Nom'])===null||$tmp==='' ? '' : $tmp);?>
</p>
    <p><?php echo (($tmp = @$_smarty_tpl->tpl_vars['erreur']->value['user_Email'])===null||$tmp==='' ? '' : $tmp);?>
</p>
    <p><?php echo (($tmp = @$_smarty_tpl->tpl_vars['erreur']->value['user_Ville'])===null||$tmp==='' ? '' : $tmp);?>
</p>
    <p><?php echo (($tmp = @$_smarty_tpl->tpl_vars['erreur']->value['user_Pays'])===null||$tmp==='' ? '' : $tmp);?>
</p>
    <p><?php echo (($tmp = @$_smarty_tpl->tpl_vars['erreur']->value['user_Motdepasse'])===null||$tmp==='' ? '' : $tmp);?>
</p>
</div>
<div class="form">
<form action="register" method="post">
    <table>
        <tr>
            <td>
                <label for="nom">Nom :</label>
            </td>
            <td>
                <input type="text" id="nom" name="user_Nom" placeholder="Nom" value="<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['valeurs']->value['user_Nom'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
">
            </td>
        </tr>
        <tr>
            <td> 
                <label for="mail">Email :</label>
            </td>
            <td> 
                <input type="email" id="mail" name="user_Email" placeholder="Adresse Valide" value="<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['valeurs']->value['user_Email'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
">
            </td>
        </tr>
        <tr>    
            <td> 
                <label for="ville">Ville :</label>
            </td>
            <td> 
                <input type="text" id="ville" name="user_Ville" placeholder="Ville Valide" value="<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['valeurs']->value['user_Ville'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
">
            </td>
        </tr>
        <tr>
            <td> 
                <label for="pays">Pays :</label>
            </td>
            <td> 
                <input type="text" id="pays" name="user_Pays" placeholder="Pays Valide" value="<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['valeurs']->value['user_Pays'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
">
            </td>
        </tr>
        <tr>
            <td> 
                <label for="password">Mot de passe :</label>
            </td>
            <td> 
                <input type="password" id="password" name="user_Motdepasse" placeholder="Minimum 8 caractères"">
            </td>
        </tr>
        <tr>
            <td>
                <input type="submit" value="S'enregistrer">
            </td>
        </tr>
    </table>
</form>
</div>
<?php
}
}
/* {/block 'body'} */
}
