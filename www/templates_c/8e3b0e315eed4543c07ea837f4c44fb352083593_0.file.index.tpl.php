<?php
/* Smarty version 3.1.34-dev-7, created on 2021-12-20 21:55:45
  from '/home/dylanh/www/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_61c0edd1b3c071_56713710',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8e3b0e315eed4543c07ea837f4c44fb352083593' => 
    array (
      0 => '/home/dylanh/www/templates/index.tpl',
      1 => 1640033350,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61c0edd1b3c071_56713710 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_38935868461c0edd1b33260_55918940', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_63987788761c0edd1b33d85_75180827', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layout.tpl');
}
/* {block 'title'} */
class Block_38935868461c0edd1b33260_55918940 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_38935868461c0edd1b33260_55918940',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Accueil<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_63987788761c0edd1b33d85_75180827 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_63987788761c0edd1b33d85_75180827',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="container">
        <div class="row d-flex justify-content-center align-items-center ">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                <div class="card shadow" style="border-radius: 1rem;">
                    <div class="card-body p-5">
                        <h1 class="text-center">Accueil</h1>
                        <hr class="divider">
                        <?php if ((isset($_smarty_tpl->tpl_vars['utilisateur']->value))) {?>
                        <p>Vous êtes connecté <?php echo $_smarty_tpl->tpl_vars['utilisateur']->value['nom_utilisateur'];?>
</p>
                        <?php 
                            $emailSession =$_SESSION['utilisateur']['email_utilisateur'];
                            $requete = get_result('SELECT id_utilisateur FROM utilisateur WHERE email_utilisateur="'.$emailSession.'"');
                            $requeteListeId =(get_results("SELECT id_representant_candidature FROM candidature"));
                            foreach ($requeteListeId as $value):
                            if($requete["id_utilisateur"]==$value["id_representant_candidature"])
                            {
                            $idCandidature = $requete["id_utilisateur"];
                            echo "<h3>Consulter ma candidature</h3>";
                            echo "<a href='candidatureDetail-$idCandidature'> consulter ma candidature </a>";
                            }
                            else
                            {
                            echo "<h3>Formuler une candidature</h3>";
                            echo "<a href='candidature'>Formuler ma candidature</a>";
                            }
                            endforeach;
                        ?>

                        <?php } else { ?>
                        <p>Vous n'êtes pas connecté</p>
                        <p>Connectez vous sur la page <a href='login'>connexion</a></p>
                        <p>Ou inscrivez-vous  <a href='register'>inscription</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    
<?php }?>

</div>
<?php
}
}
/* {/block 'body'} */
}
