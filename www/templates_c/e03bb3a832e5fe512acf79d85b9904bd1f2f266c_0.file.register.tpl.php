<?php
/* Smarty version 3.1.34-dev-7, created on 2021-12-20 19:45:36
  from 'C:\laragon\www\projetWeb2\templates\register.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_61c0dd607d63b2_06564884',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e03bb3a832e5fe512acf79d85b9904bd1f2f266c' => 
    array (
      0 => 'C:\\laragon\\www\\projetWeb2\\templates\\register.tpl',
      1 => 1640028407,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61c0dd607d63b2_06564884 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
 <!-- On charge le layout -->
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_51480492161c0dd607cb253_55101413', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15451289961c0dd607cbaa0_69957100', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layout.tpl');
}
/* {block 'title'} */
class Block_51480492161c0dd607cb253_55101413 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_51480492161c0dd607cb253_55101413',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Register<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_15451289961c0dd607cbaa0_69957100 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_15451289961c0dd607cbaa0_69957100',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="container">
    <div class="row d-flex justify-content-center align-items-center ">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
            <div class="card shadow-lg" style="border-radius: 1rem;">
                <div class="card-body p-5">
                    <h3 class="mb-2">Inscription</h3>
                    <hr class="divider">
                    <form action="register" method="post">
                        <div class="form-group">
                            <div class="mb-2">
                                <label for="nom_utilisateur">Nom d'utilisateur:</label>
                                <input class="form-control" type="text" id="nom_utilisateur"name="nom_utilisateur" placeholder="Nom" value="<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['valeurs']->value['nom_utilisateur'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
"> <!-- on r??cup??re la valeur saisie par l'utilisateur et la resaisie automatiquement en cas d'erreur -->
                                <small class="error"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['erreur']->value['nom_utilisateur'])===null||$tmp==='' ? '' : $tmp);?>
</small>
                                <!-- On affiche les messages d'erreurs en petit sous les champs consern??s-->
                            </div>
                            <div class="mb-2">
                                <label for="email_utilisateur">Email:</label>
                                <input class="form-control" type="email" id="email_utilisateur" name="email_utilisateur" placeholder="Adresse mail" value="<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['valeurs']->value['email_utilisateur'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
">
                                <small class="error"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['erreur']->value['email_utilisateur'])===null||$tmp==='' ? '' : $tmp);?>
</small>
                            </div>
                            <div class="mb-2">
                                <label for="mdp_utilisateur">Mot de passe :</label>
                                <input class="form-control" type="password" id="mdp_utilisateur" name="mdp_utilisateur" placeholder="Minimum 8 caract??res"">
                                <small class="error"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['erreur']->value['mdp_utilisateur'])===null||$tmp==='' ? '' : $tmp);?>
</small>
                            </div>
                            <button class="btn btn-primary btn-lg btn-block" type="submit">S'inscrire</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
}
}
/* {/block 'body'} */
}
