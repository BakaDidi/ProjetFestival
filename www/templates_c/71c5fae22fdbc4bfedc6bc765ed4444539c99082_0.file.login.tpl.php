<?php
/* Smarty version 3.1.34-dev-7, created on 2021-12-16 19:34:34
  from 'C:\laragon\www\Web\tps\TP4EXEMPLE\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_61bb94cad1b270_53599831',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '71c5fae22fdbc4bfedc6bc765ed4444539c99082' => 
    array (
      0 => 'C:\\laragon\\www\\Web\\tps\\TP4EXEMPLE\\templates\\login.tpl',
      1 => 1639683272,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61bb94cad1b270_53599831 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_174210864361bb94cad112d8_46116659', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_180750599561bb94cad11b53_31263497', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layout.tpl');
}
/* {block 'title'} */
class Block_174210864361bb94cad112d8_46116659 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_174210864361bb94cad112d8_46116659',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Login<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_180750599561bb94cad11b53_31263497 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_180750599561bb94cad11b53_31263497',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div id='main'>
<h1>Login</h1>
</div>
<div class="error">
    <p><?php echo (($tmp = @$_smarty_tpl->tpl_vars['erreur']->value['user_Email'])===null||$tmp==='' ? '' : $tmp);?>
</p>
    <p><?php echo (($tmp = @$_smarty_tpl->tpl_vars['erreur']->value['user_Motdepasse'])===null||$tmp==='' ? '' : $tmp);?>
</p>
</div>
<div class="form">
<form action="login" method="post">
    <div>
        <div>
                <label for="mail">Email :</label>
         
                <input type="email" id="mail" name="user_Email" placeholder="Adresse Valide" value="<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['valeurs']->value['user_Email'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
">
            </div>
        </div>
        <div>
            <div> 
                <label for="password">Mot de passe :</label>
            </div>
            <div> 
                <input type="password" id="password" name="user_Motdepasse" placeholder="Minimum 8 caractères">
            </div>
        </div>
        <div>
            <div>
                <input type="submit" value="Se connecter">
            </div>
        </div>
    </div>
</form>
</div>
<?php
}
}
/* {/block 'body'} */
}
