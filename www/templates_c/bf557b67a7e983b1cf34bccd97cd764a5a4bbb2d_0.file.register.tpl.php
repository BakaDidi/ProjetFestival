<?php
/* Smarty version 3.1.34-dev-7, created on 2021-12-16 12:39:40
  from 'C:\Users\rocar\OneDrive\Bureau\web\tps\TP4EXEMPLE\templates\register.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_61bb338cb18fc2_28022164',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bf557b67a7e983b1cf34bccd97cd764a5a4bbb2d' => 
    array (
      0 => 'C:\\Users\\rocar\\OneDrive\\Bureau\\web\\tps\\TP4EXEMPLE\\templates\\register.tpl',
      1 => 1639655969,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61bb338cb18fc2_28022164 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_25072888161bb338cb08f56_20345778', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_171153501861bb338cb09807_10840012', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layout.tpl');
}
/* {block 'title'} */
class Block_25072888161bb338cb08f56_20345778 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_25072888161bb338cb08f56_20345778',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Register<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_171153501861bb338cb09807_10840012 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_171153501861bb338cb09807_10840012',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<h1>Register</h1>
<div class="error">
    <p><?php echo (($tmp = @$_smarty_tpl->tpl_vars['erreur']->value['utilisateur_Nom'])===null||$tmp==='' ? '' : $tmp);?>
</p>
    <p><?php echo (($tmp = @$_smarty_tpl->tpl_vars['erreur']->value['utilisateur_Email'])===null||$tmp==='' ? '' : $tmp);?>
</p>
    <p><?php echo (($tmp = @$_smarty_tpl->tpl_vars['erreur']->value['utilisateur_Ville'])===null||$tmp==='' ? '' : $tmp);?>
</p>
    <p><?php echo (($tmp = @$_smarty_tpl->tpl_vars['erreur']->value['utilisateur_Pays'])===null||$tmp==='' ? '' : $tmp);?>
</p>
    <p><?php echo (($tmp = @$_smarty_tpl->tpl_vars['erreur']->value['utilisateur_Motdepasse'])===null||$tmp==='' ? '' : $tmp);?>
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
                <input type="text" id="nom" name="utilisateur_Nom" placeholder="Nom" value="<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['valeurs']->value['utilisateur_Nom'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
">
            </td>
        </tr>
        <tr>
            <td> 
                <label for="mail">e-mail :</label>
            </td>
            <td> 
                <input type="email" id="mail" name="utilisateur_Email" placeholder="Adresse Valide" value="<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['valeurs']->value['utilisateur_Email'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
">
            </td>
        </tr>
        <tr>    
            <td> 
                <label for="ville">Ville :</label>
            </td>
            <td> 
                <input type="text" id="ville" name="utilisateur_Ville" placeholder="Ville Valide" value="<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['valeurs']->value['utilisateur_Ville'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
">
            </td>
        </tr>
        <tr>
            <td> 
                <label for="pays">Pays :</label>
            </td>
            <td> 
                <input type="text" id="pays" name="utilisateur_Pays" placeholder="Pays Valide" value="<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['valeurs']->value['utilisateur_Pays'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
">
            </td>
        </tr>
        <tr>
            <td> 
                <label for="password">Mot de passe :</label>
            </td>
            <td> 
                <input type="password" id="password" name="utilisateur_Motdepasse" placeholder="Minimum 8 caractères"">
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
