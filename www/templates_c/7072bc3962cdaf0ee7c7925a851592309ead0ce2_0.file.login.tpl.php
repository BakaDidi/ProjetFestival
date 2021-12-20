<?php
/* Smarty version 3.1.34-dev-7, created on 2021-12-20 21:55:52
  from '/home/dylanh/www/templates/login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_61c0edd827f912_97763303',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7072bc3962cdaf0ee7c7925a851592309ead0ce2' => 
    array (
      0 => '/home/dylanh/www/templates/login.tpl',
      1 => 1640033351,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61c0edd827f912_97763303 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_205764614761c0edd8279451_82763921', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_140872825361c0edd8279b22_40878788', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layout.tpl');
}
/* {block 'title'} */
class Block_205764614761c0edd8279451_82763921 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_205764614761c0edd8279451_82763921',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Login<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_140872825361c0edd8279b22_40878788 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_140872825361c0edd8279b22_40878788',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="container">
    <div class="row d-flex justify-content-center align-items-center ">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
            <div class="card shadow" style="border-radius: 1rem;">
                <div class="card-body p-5">
                    <h3 class="mb-2">Connexion</h3>
                    <hr class="divider">
                    <form action="login" method="post">
                        <div class="form-group">
                            <div class="mb-2">
                                <label for="mail">Email:</label>
                                <input class="form-control" type="email" id="mail" name="email_utilisateur" placeholder="Adresse Valide" value="<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['valeurs']->value['email_utilisateur'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
">
                                <small class="error"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['erreur']->value['email_utilisateur'])===null||$tmp==='' ? '' : $tmp);?>
</small>
                            </div>
                            <div class="mb-2">
                                <label for="password">Mot de passe :</label>
                                <input class="form-control" type="password" id="password" name="mdp_utilisateur" placeholder="Minimum 8 caractères">
                                <small class="error"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['erreur']->value['mdp_utilisateur'])===null||$tmp==='' ? '' : $tmp);?>
</small>
                            </div>
                            <button class="btn btn-primary btn-lg btn-block" type="submit">Se connecter</button>
                        <div>
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
