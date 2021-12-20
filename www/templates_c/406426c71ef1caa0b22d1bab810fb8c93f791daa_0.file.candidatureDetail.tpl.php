<?php
/* Smarty version 3.1.34-dev-7, created on 2021-12-20 18:04:43
  from 'C:\laragon\www\projetWeb2\templates\candidatureDetail.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_61c0c5bb140253_85779281',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '406426c71ef1caa0b22d1bab810fb8c93f791daa' => 
    array (
      0 => 'C:\\laragon\\www\\projetWeb2\\templates\\candidatureDetail.tpl',
      1 => 1640023481,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61c0c5bb140253_85779281 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_181438363161c0c5bb12f895_77526497', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_213379971961c0c5bb1300e7_14739826', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layout.tpl');
}
/* {block 'title'} */
class Block_181438363161c0c5bb12f895_77526497 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_181438363161c0c5bb12f895_77526497',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Candidature<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_213379971961c0c5bb1300e7_14739826 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_213379971961c0c5bb1300e7_14739826',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="container">
        <div class="row d-flex justify-content-center align-items-center ">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                <h1 class="text-center">Votre candidature</h1>
                <div class="card shadow" style="border-radius: 1rem;">
                    <div class="card-body p-5">
                            <img src="uploads\<?php echo $_smarty_tpl->tpl_vars['requete']->value[0]['nomGroupe_candidature'];?>
\img\<?php echo $_smarty_tpl->tpl_vars['requete']->value[0]['photo1_candidature'];?>
" class="img-fluid">
                            <h1 class=""><?php echo $_smarty_tpl->tpl_vars['requete']->value[0]['nomGroupe_candidature'];?>
</h1>
                            <table class="table table-borderless">
                                <tbody>
                                <tr>
                                    <th scope="row">audio</th>
                                    <td>
                                        <figure>
                                            <audio controls src="uploads\<?php echo $_smarty_tpl->tpl_vars['requete']->value[0]['nomGroupe_candidature'];?>
\mp3\<?php echo $_smarty_tpl->tpl_vars['requete']->value[0]['mp3_fichier1_candidature'];?>
"></audio>
                                        </figure>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">audio</th>
                                    <td>
                                        <figure>
                                            <audio controls src="uploads\<?php echo $_smarty_tpl->tpl_vars['requete']->value[0]['nomGroupe_candidature'];?>
\mp3\<?php echo $_smarty_tpl->tpl_vars['requete']->value[0]['mp3_fichier2_candidature'];?>
"></audio>
                                        </figure>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">audio</th>
                                    <td>
                                        <figure>
                                            <audio controls src="uploads\<?php echo $_smarty_tpl->tpl_vars['requete']->value[0]['nomGroupe_candidature'];?>
\mp3\<?php echo $_smarty_tpl->tpl_vars['requete']->value[0]['mp3_fichier3_candidature'];?>
"></audio>
                                        </figure>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">dept</th>
                                    <td>
                                        <?php echo $_smarty_tpl->tpl_vars['nomDepartement']->value[0]['departement_nom'];?>

                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">adresse</th>
                                    <td>
                                        <?php echo $_smarty_tpl->tpl_vars['requete']->value[0]['adresse_representant_candidature'];?>

                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">CP</th>
                                    <td>
                                        <?php echo $_smarty_tpl->tpl_vars['requete']->value[0]['code_postal_representant_candidature'];?>

                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">SNDC</th>
                                    <td>
                                        <?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['requete']->value[0]['soundcloud_candidature'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>

                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">WEB</th>
                                    <td>
                                        <?php echo $_smarty_tpl->tpl_vars['requete']->value[0]['site_candidature'];?>

                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">YTB</th>
                                    <td>
                                        <?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['requete']->value[0]['youtube_candidature'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>

                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">PRESENTATION</th>
                                    <td>
                                        <?php echo $_smarty_tpl->tpl_vars['requete']->value[0]['presentation_candidature'];?>

                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">EXPERIENCES</th>
                                    <td>
                                        <?php echo $_smarty_tpl->tpl_vars['requete']->value[0]['experience_candidature'];?>

                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">DOSSIER</th>
                                    <td>
                                        <a href="uploads\<?php echo $_smarty_tpl->tpl_vars['requete']->value[0]['nomGroupe_candidature'];?>
\pdf\<?php echo $_smarty_tpl->tpl_vars['requete']->value[0]['dossier_presse_candidature'];?>
"><?php echo $_smarty_tpl->tpl_vars['requete']->value[0]['dossier_presse_candidature'];?>
</a>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">SACEM</th>
                                    <td>
                                        <a href="uploads\<?php echo $_smarty_tpl->tpl_vars['requete']->value[0]['nomGroupe_candidature'];?>
\pdf\<?php echo $_smarty_tpl->tpl_vars['requete']->value[0]['document_sacem_candidature'];?>
"><?php echo $_smarty_tpl->tpl_vars['requete']->value[0]['document_sacem_candidature'];?>
</a>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">FICHE TECHNIQUE</th>
                                    <td>
                                        <a href="uploads\<?php echo $_smarty_tpl->tpl_vars['requete']->value[0]['nomGroupe_candidature'];?>
\pdf\<?php echo $_smarty_tpl->tpl_vars['requete']->value[0]['fiche_technique_candidature'];?>
"><?php echo $_smarty_tpl->tpl_vars['requete']->value[0]['fiche_technique_candidature'];?>
</a>
                                    </td>
                                </tr>

                                </tbody>
                            </table>
                        </div>
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
