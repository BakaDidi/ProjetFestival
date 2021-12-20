<?php
/* Smarty version 3.1.34-dev-7, created on 2021-12-20 19:35:57
  from 'C:\laragon\www\projetWeb2\templates\layout.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_61c0db1d9eccf6_57512383',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0e4faf75a745d5c8bbf7e1397fe33e386b6fbf81' => 
    array (
      0 => 'C:\\laragon\\www\\projetWeb2\\templates\\layout.tpl',
      1 => 1640028407,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61c0db1d9eccf6_57512383 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<html>
<head>
    <!--On définit le bloc de titre de la page-->
    <title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_87233815261c0db1d9e3e85_24817965', 'title');
?>
</title>
    <!--On charge les fichiers css-->
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_120615614561c0db1d9e54e7_63006006', 'head');
?>

</head>
<body>
<!-- On charge le menu et la navbar-->
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_148101548161c0db1d9e5ad7_61661813', 'menu');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_128136000561c0db1d9ebeb4_89433053', 'body');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_196323883261c0db1d9ec631_39981890', 'script');
?>

</body>
</html><?php }
/* {block 'title'} */
class Block_87233815261c0db1d9e3e85_24817965 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_87233815261c0db1d9e3e85_24817965',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Default Page Title<?php
}
}
/* {/block 'title'} */
/* {block 'head'} */
class Block_120615614561c0db1d9e54e7_63006006 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_120615614561c0db1d9e54e7_63006006',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <link rel="stylesheet" href="https://unpkg.com/purecss@2.0.3/build/pure-min.css" integrity="sha384-cg6SkqEOCV1NbJoCu11+bm0NvBRc8IYLRGXkmNrqUBfTjmMYwNKPWBTIKyw9mHNJ" crossorigin="anonymous">
        <link rel="stylesheet" href="templates/style.css">
        <link rel="stylesheet" href="templates/boostrap/css/bootstrap.min.css">
    <?php
}
}
/* {/block 'head'} */
/* {block 'menu'} */
class Block_148101548161c0db1d9e5ad7_61661813 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'menu' => 
  array (
    0 => 'Block_148101548161c0db1d9e5ad7_61661813',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href='./'>Festival de musique</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <!-- On change les boutons si l'utilisateur n'est pas connecté -->
                    <?php if (!(isset($_smarty_tpl->tpl_vars['utilisateur']->value))) {?>
                        <li class="nav-item">
                            <a class="nav-link active" href='register'>inscription</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href='login'>connexion</a>
                        </li>
                    <?php } else { ?>
                        <li class="nav-item">
                            <a class="nav-link" href='profil'>profil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href='logout'>Se déconnecter</a>
                        </li>
                        <!-- On vérifie en utilisant l'id de l'utilisateur s'il a déjà formulé une candidature et on change le bouton
                        soit en "ma candidature" qui redirige vers la page permettant de consulter sa candidature
                        Soit en "Candidater" qui redirige vers le formulaire de candidature-->
                        <?php 
                            $emailSession =$_SESSION['utilisateur']['email_utilisateur'];
                            $requete = get_result('SELECT id_utilisateur FROM utilisateur WHERE email_utilisateur="'.$emailSession.'"');
                            $requeteListeId =(get_results("SELECT id_representant_candidature FROM candidature"));
                            foreach ($requeteListeId as $value):
                            if($requete["id_utilisateur"]==$value["id_representant_candidature"])
                            {
                            $idCandidature = $requete["id_utilisateur"];
                            echo "<li class='nav-item'><a class='nav-link' href='candidatureDetail-$idCandidature'> Ma candidature </a></li>";
                            }
                            else
                            {
                            echo"<li class='nav-item'><a class='nav-link' href='candidature'>Candidater</a></li>";
                            }
                            endforeach
                        ?>
                        <!-- On regarde si l'utilisateur est connecté en tant qu'admin et on affiche des boutons supplémentaire pour aller sur les pages "Liste candidatures" et "Liste utilisateurs-->
                        <?php if ($_smarty_tpl->tpl_vars['utilisateur']->value['admin']) {?>
                            <li class="nav-item">
                                <a class="nav-link" href="listeCandidature">Liste des candidatures</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="listeutilisateur">Liste des utilisateurs</a>
                            </li>
                        <?php }?>
                    <?php }?>
                </ul>
            </div>
        </div>
    </nav>
<?php
}
}
/* {/block 'menu'} */
/* {block 'body'} */
class Block_128136000561c0db1d9ebeb4_89433053 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_128136000561c0db1d9ebeb4_89433053',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php
}
}
/* {/block 'body'} */
/* {block 'script'} */
class Block_196323883261c0db1d9ec631_39981890 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_196323883261c0db1d9ec631_39981890',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <!-- On charge les fichiers JS nécessaire au fonctionnement de boostrap -->
    <?php echo '<script'; ?>
 src="templates/boostrap/js/bootstrap.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="templates/boostrap/js/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="templates/boostrap/js/popper.min.js"><?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'script'} */
}
