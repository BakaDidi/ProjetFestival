<?php
/* Smarty version 3.1.34-dev-7, created on 2021-12-16 12:18:32
  from 'C:\Users\rocar\OneDrive\Bureau\web\tps\TP4EXEMPLE\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_61bb2e985331a7_99298619',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b9248431c7906ce55f3802ea797c7c7a40d588c1' => 
    array (
      0 => 'C:\\Users\\rocar\\OneDrive\\Bureau\\web\\tps\\TP4EXEMPLE\\templates\\login.tpl',
      1 => 1639655940,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61bb2e985331a7_99298619 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_111190252761bb2e9850afd6_02078365', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_73359864861bb2e9850b8b0_49108993', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layout.tpl');
}
/* {block 'title'} */
class Block_111190252761bb2e9850afd6_02078365 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_111190252761bb2e9850afd6_02078365',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Login<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_73359864861bb2e9850b8b0_49108993 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_73359864861bb2e9850b8b0_49108993',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div id='main'>
<h1>Login</h1>
<p>
Contenu du template login.tpl
</p>
</div>
<div class="error">
    <p><?php echo (($tmp = @$_smarty_tpl->tpl_vars['erreur']->value['utilisateur_Email'])===null||$tmp==='' ? '' : $tmp);?>
</p>
    <p><?php echo (($tmp = @$_smarty_tpl->tpl_vars['erreur']->value['utilisateur_Motdepasse'])===null||$tmp==='' ? '' : $tmp);?>
</p>
</div>
<div class="form">
<form action="login" method="post">
    <table>
        <tr>
            <td> 
                <label for="mail">e-mail???:</label>
            </td>
            <td> 
                <input type="email" id="mail" name="utilisateur_Email" placeholder="Adresse Valide" value="<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['valeurs']->value['utilisateur_Email'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
">
            </td>
        </tr>
        <tr>
            <td> 
                <label for="password">Mot de passe :</label>
            </td>
            <td> 
                <input type="password" id="password" name="utilisateur_Motdepasse" placeholder="Minimum 8 caract??res">
            </td>
        </tr>
        <tr>
            <td>
                <input type="submit" value="Se connecter">
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
