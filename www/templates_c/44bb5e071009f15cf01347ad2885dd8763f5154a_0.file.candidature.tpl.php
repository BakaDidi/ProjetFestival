<?php
/* Smarty version 3.1.34-dev-7, created on 2021-12-20 21:56:02
  from '/home/dylanh/www/templates/candidature.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_61c0ede2ecb356_21564655',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '44bb5e071009f15cf01347ad2885dd8763f5154a' => 
    array (
      0 => '/home/dylanh/www/templates/candidature.tpl',
      1 => 1640033350,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61c0ede2ecb356_21564655 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_179864992661c0ede2e9b317_42612746', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20259766261c0ede2e9bd31_27080825', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layout.tpl');
}
/* {block 'title'} */
class Block_179864992661c0ede2e9b317_42612746 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_179864992661c0ede2e9b317_42612746',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Candidature<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_20259766261c0ede2e9bd31_27080825 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_20259766261c0ede2e9bd31_27080825',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="container-fluid" xmlns="http://www.w3.org/1999/html">
        <div class="row d-flex justify-content-center align-items-center ">
            <div class="col-md-6 mx-auto">
                <div class="card shadow" style="border-radius: 1rem;">
                    <div class="card-body p-5">
                        <h1>Candidature</h1>
                        <form action="candidature" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="nomGroupe_candidature">Nom du groupe</label>
                                <input type="text" name="nomGroupe_candidature" class="form-control" id="nomGroupe_candidature" placeholder="Nom du groupe" value="<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['valeurs']->value['nomGroupe_candidature'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
">  <!-- on r??cup??re la valeur saisie par l'utilisateur et la resaisie automatiquement en cas d'erreur -->
                                <small class="error"><?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['messages']->value['NomGroupe'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
</small>
                                <!-- On affiche les messages d'erreurs en petit sous les champs consern??s-->
                            </div>
                            <div class="form-group">
                                <label for="departement_candidature">D??partement d'origine du groupe</label>
                                <select class="form-select" id="departement_candidature" name="departement_candidature">
                                    <!-- on g??n??re une liste d??roulante ?? partir de la table d??partement -->
                                    <?php 
                                    $requete = get_results("SELECT * FROM departement");
                                    foreach ($requete as $value):
                                        echo "<option value=$value[departement_id]>";
                                        echo $value['departement_nom'];
                                    endforeach;
                                    ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="scene_candidature">Sc??ne choisie</label>
                                <select class="form-select" id="scene_candidature" name="scene_candidature">
                                    <!-- on g??n??re une liste d??roulante ?? partir de la table sc??ne -->
                                    <?php 
                                    $requete = get_results("SELECT * FROM scene");
                                    foreach ($requete as $value):
                                    echo "<option value=$value[id_scene]>";
                                        echo $value['nom_scene'];
                                        endforeach;
                                    ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="nom_representant_candidature">Nom du repr??sentant du groupe</label>
                                <input type="text" class="form-control" id="nom_representant_candidature" placeholder="Nom du repr??sentant" name="nom_representant_candidature" value="<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['valeurs']->value['nom_representant_candidature'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
">
                                <small class="error"><?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['messages']->value['NomRepresentant'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
</small>
                            </div>
                            <div class="form-group">
                                <label for="prenom_representant_candidature">Pr??nom du repr??sentant du groupe</label>
                                <input type="text" class="form-control" id="prenom_representant_candidature" placeholder="Prenom du repr??sentant" name="prenom_representant_candidature" value="<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['valeurs']->value['prenom_representant_candidature'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
">
                                <small class="error"><?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['messages']->value['PrenomRepresentant'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
</small>
                            </div>
                            <div class="form-group">
                                <label for="adresse_representant_candidature">Adresse du repr??sentant du groupe</label>
                                <input type="text" class="form-control" id="adresse_representant_candidature" placeholder="Adresse du repr??sentant" name="adresse_representant_candidature"  value="<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['valeurs']->value['adresse_representant_candidature'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
">
                                <small class="error"><?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['messages']->value['PrenomRepresentant'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
</small>
                            </div>
                            <div class="form-group">
                                <label for="code_postal_representant_candidature">Code postal du repr??sentant du groupe</label>
                                <input type="text" class="form-control" id="code_postal_representant_candidature" placeholder="Code postal du repr??sentant" name="code_postal_representant_candidature" value="<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['valeurs']->value['code_postal_representant_candidature'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
">
                                <small class="error"><?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['messages']->value['CodePostalRepresentant'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
</small>
                                <small class="error"><?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['messages']->value['codepostal'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
</small>
                            </div>
                            <div class="form-group">
                                <label for="email_representant_candidature">Email du repr??sentant du groupe</label>
                                <input type="email" class="form-control" id="email_representant_candidature" placeholder="Email du repr??sentant" name="email_representant_candidature" value="<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['valeurs']->value['email_representant_candidature'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
">
                                <small class="error"><?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['messages']->value['EmailRepresentant'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
</small>
                            </div>
                            <div class="form-group">
                                <label for="telephone_representant_candidature">T??l??phone du repr??sentant du groupe</label>
                                <input type="tel" class="form-control" id="telephone_representant_candidature" placeholder="T??l??phone du repr??sentant" name="telephone_representant_candidature" value="<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['valeurs']->value['telephone_representant_candidature'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
">
                                <small class="error"><?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['messages']->value['TelephoneRepresentant'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
</small>
                            </div>
                            <div class="form-group">
                                <label for="style_candidature">Style du groupe</label>
                                <input type="text" class="form-control" id="style_candidature" placeholder="Style du groupe" name="style_candidature" value="<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['valeurs']->value['style_candidature'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
">
                                <small class="error"><?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['messages']->value['Style'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
</small>
                            </div>
                            <div class="form-group">
                                <label for="annee_creation_candidature">Ann??e de cr??ation du groupe</label>
                                <input type="date" class="form-control" id="annee_creation_candidature" placeholder="Ann??e de cr??ation du groupe" name="annee_creation_candidature"  value="<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['valeurs']->value['annee_creation_candidature'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
">
                                <small class="error"><?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['messages']->value['AnneeCreation'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
</small>
                            </div>
                            <div class="form-group">
                                <label for="presentation_candidature">Pr??sentation du groupe</label>
                                <textarea class="form-control" id="presentation_candidature" rows="5" placeholder="Courte pr??sentation de votre groupe" maxlength="500" style="resize: none" name="presentation_candidature" ><?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['valeurs']->value['presentation_candidature'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
</textarea>
                                <small class="error"><?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['messages']->value['Presentation'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
</small>
                                <small class="error"><?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['messages']->value['Taille'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
</small>
                            </div>
                            <div class="form-group">
                                <label for="experience_candidature">Exp??rience Sc??nique du groupe</label>
                                <textarea class="form-control no-resize" id="experience_candidature" rows="5" placeholder="Court r??sum?? de vos exp??riences sc??niques" maxlength="500" style="resize: none" name="experience_candidature"><?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['valeurs']->value['experience_candidature'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
</textarea>
                                <small class="error"><?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['messages']->value['Experience'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
</small>
                                <small class="error"><?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['messages']->value['Taille'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
</small>
                            </div>
                            <div class="form-group">
                                <label for="site_candidature">Site du groupe</label>
                                <input type="text" class="form-control" id="site_candidature" placeholder="Site du groupe" name="site_candidature" value="<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['valeurs']->value['site_candidature'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
">
                                <small class="error"><?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['messages']->value['Site'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
</small>
                                <small class="error"><?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['messages']->value['Url'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
</small>
                            </div>
                            <div class="form-group">
                                <label for="soundcloud_candidature">Soundcloud du groupe</label>
                                <input type="text" class="form-control" id="soundcloud_candidature" placeholder="Soundcloud du groupe" name="soundcloud_candidature" value="<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['valeurs']->value['soundcloud_candidature'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
">
                                <small>facultatif</small>
                                <small class="error"><?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['messages']->value['Url'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
</small>
                            </div>
                            <div class="form-group">
                                <label for="youtube_candidature">Youtube du groupe</label>
                                <input type="text" class="form-control" id="youtube_candidature" placeholder="Youtube du groupe" name="youtube_candidature" value="<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['valeurs']->value['youtube_candidature'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
">
                                <small>facultatif</small>
                                <small class="error"><?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['messages']->value['Url'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
</small>
                            </div>

                            <div class="form-group">
                                <label for="nombre_membre">Nombre de membre</label>
                                <!-- liste de 1 ?? 8 pour choisir le nombre de membre (li?? au script) -->
                                <select class="form-select" id="nombre_membre">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                </select>
                            </div>
                            <p class="error"> <?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['messages']->value['absence_champ_obligatoire'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
</p>
                            <div class="" id="membre_1">
                                <div class="form-group">
                                    <label for="nom_membre1_candidature">Nom du membre 1</label>
                                    <input type="text" class="form-control" id="nom_membre1_candidature" placeholder="Nom du membre" name="nom_membre1_candidature" value="<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['valeurs']->value['nom_membre1_candidature'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
">
                                </div>
                                <div class="form-group">
                                    <label for="prenom_membre1_candidature">Pr??nom du membre 1</label>
                                    <input type="text" class="form-control" id="prenom_membre1_candidature" placeholder="Prenom du membre" name="prenom_membre1_candidature" value="<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['valeurs']->value['prenom_membre1_candidature'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
">
                                </div>
                                <div class="form-group">
                                    <label for="instruments_membre1_candidature">Instruments du membre 1</label>
                                    <input type="text" class="form-control" id="instruments_membre1_candidature" placeholder="Instrument dont le membre joue" name="instruments_membre1_candidature" value="<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['valeurs']->value['instruments_membre1_candidature'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
">
                                </div>
                            </div>
                            <!-- la class hidden permet de ne pas afficher l'??l??ment-->
                            <div class="hidden" id="membre_2">
                                <div class="form-group">
                                    <label for="nom_membre2_candidature">Nom du membre 2</label>
                                    <input type="text" class="form-control" id="nom_membre2_candidature" placeholder="Nom du membre" name="nom_membre2_candidature" value="<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['valeurs']->value['nom_membre2_candidature'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
">
                                </div>
                                <div class="form-group">
                                    <label for="prenom_membre2_candidature">Pr??nom du membre 2</label>
                                    <input type="text" class="form-control" id="prenom_membre2_candidature" placeholder="Prenom du membre" name="prenom_membre2_candidature" value="<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['valeurs']->value['prenom_membre2_candidature'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
">
                                </div>
                                <div class="form-group">
                                    <label for="instruments_membre2_candidature">Instruments du membre 2</label>
                                    <input type="text" class="form-control" id="instruments_membre2_candidature" placeholder="Instrument dont le membre joue" name="instruments_membre2_candidature" value="<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['valeurs']->value['instruments_membre2_candidature'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
">
                                </div>
                            </div>
                            <div class="hidden" id="membre_3">
                                <div class="form-group">
                                    <label for="nom_membre3_candidature">Nom du membre 3</label>
                                    <input type="text" class="form-control" id="nom_membre3_candidature" placeholder="Nom du membre" name="nom_membre3_candidature" value="<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['valeurs']->value['nom_membre3_candidature'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
">
                                </div>
                                <div class="form-group">
                                    <label for="prenom_membre3_candidature">Pr??nom du membre 3</label>
                                    <input type="text" class="form-control" id="prenom_membre3_candidature" placeholder="Prenom du membre" name="prenom_membre3_candidature" value="<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['valeurs']->value['prenom_membre3_candidature'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
">
                                </div>
                                <div class="form-group">
                                    <label for="instruments_membre3_candidature">Instruments du membre 3</label>
                                    <input type="text" class="form-control" id="instruments_membre3_candidature" placeholder="Instrument dont le membre joue" name="instruments_membre3_candidature" value="<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['valeurs']->value['instruments_membre3_candidature'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
">
                                </div>
                            </div>
                            <div class="hidden" id="membre_4">
                                <div class="form-group">
                                    <label for="nom_membre4_candidature">Nom du membre 4</label>
                                    <input type="text" class="form-control" id="nom_membre4_candidature" placeholder="Nom du membre" name="nom_membre4_candidature" value="<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['valeurs']->value['nom_membre4_candidature'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
">
                                </div>
                                <div class="form-group">
                                    <label for="prenom_membre4_candidature">Pr??nom du membre 4</label>
                                    <input type="text" class="form-control" id="prenom_membre4_candidature" placeholder="Prenom du membre" name="prenom_membre4_candidature" value="<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['valeurs']->value['prenom_membre4_candidature'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
" >
                                </div>
                                <div class="form-group">
                                    <label for="instruments_membre4_candidature">Instruments du membre 4</label>
                                    <input type="text" class="form-control" id="instruments_membre4_candidature" placeholder="Instrument dont le membre joue" name="instruments_membre4_candidature" value="<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['valeurs']->value['instruments_membre4_candidature'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
">
                                </div>
                            </div>
                            <div class="hidden" id="membre_5">
                                <div class="form-group">
                                    <label for="nom_membre5_candidature">Nom du membre 5</label>
                                    <input type="text" class="form-control" id="nom_membre5_candidature" placeholder="Nom du membre" name="nom_membre5_candidature" value="<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['valeurs']->value['nom_membre5_candidature'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
">
                                </div>
                                <div class="form-group">
                                    <label for="prenom_membre5_candidature">Pr??nom du membre 5</label>
                                    <input type="text" class="form-control" id="prenom_membre5_candidature" placeholder="Prenom du membre" name="prenom_membre5_candidature" value="<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['valeurs']->value['prenom_membre5_candidature'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
">
                                </div>
                                <div class="form-group">
                                    <label for="instruments_membre5_candidature">Instruments du membre 5</label>
                                    <input type="text" class="form-control" id="instruments_membre5_candidature" placeholder="Instrument dont le membre joue" name="instruments_membre5_candidature" value="<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['valeurs']->value['instruments_membre5_candidature'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
">
                                </div>
                            </div>
                            <div class="hidden" id="membre_6">
                                <div class="form-group">
                                    <label for="nom_membre6_candidature">Nom du membre 6</label>
                                    <input type="text" class="form-control" id="nom_membre6_candidature" placeholder="Nom du membre" name="nom_membre6_candidature" value="<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['valeurs']->value['nom_membre6_candidature'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
">
                                </div>
                                <div class="form-group">
                                    <label for="prenom_membre6_candidature">Pr??nom du membre 6</label>
                                    <input type="text" class="form-control" id="prenom_membre6_candidature" placeholder="Prenom du membre" name="prenom_membre6_candidature" value="<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['valeurs']->value['prenom_membre6_candidature'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
">
                                </div>
                                <div class="form-group">
                                    <label for="instruments_membre6_candidature">Instruments du membre 6</label>
                                    <input type="text" class="form-control" id="instruments_membre6_candidature" placeholder="Instrument dont le membre joue" name="instruments_membre6_candidature"  value="<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['valeurs']->value['instruments_membre6_candidature'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
">
                                </div>
                            </div>
                            <div class="hidden" id="membre_7">
                                <div class="form-group">
                                    <label for="nom_membre7_candidature">Nom du membre 7</label>
                                    <input type="text" class="form-control" id="nom_membre7_candidature" placeholder="Nom du membre" name="nom_membre7_candidature" value="<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['valeurs']->value['nom_membre7_candidature'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
">
                                </div>
                                <div class="form-group">
                                    <label for="prenom_membre7_candidature">Pr??nom du membre 7</label>
                                    <input type="text" class="form-control" id="prenom_membre7_candidature" placeholder="Prenom du membre" name="prenom_membre7_candidature" value="<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['valeurs']->value['prenom_membre7_candidature'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
">
                                </div>
                                <div class="form-group">
                                    <label for="instruments_membre7_candidature">Instruments du membre 7</label>
                                    <input type="text" class="form-control" id="instruments_membre7_candidature" placeholder="Instrument dont le membre joue" name="instruments_membre7_candidature" value="<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['valeurs']->value['instruments_membre7_candidature'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
">
                                </div>
                            </div>
                            <div class="hidden" id="membre_8">
                                <div class="form-group">
                                    <label for="nom_membre8_candidature">Nom du membre 8</label>
                                    <input type="text" class="form-control" id="nom_membre8_candidature" placeholder="Nom du membre" name="nom_membre8_candidature" value="<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['valeurs']->value['nom_membre8_candidature'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
">
                                </div>
                                <div class="form-group">
                                    <label for="prenom_membre8_candidature">Pr??nom du membre 8</label>
                                    <input type="text" class="form-control" id="prenom_membre8_candidature" placeholder="Prenom du membre" name="prenom_membre8_candidature" value="<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['valeurs']->value['prenom_membre8_candidature'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
">
                                </div>
                                <div class="form-group">
                                    <label for="instruments_membre8_candidature">Instruments du membre 8</label>
                                    <input type="text" class="form-control" id="instruments_membre8_candidature" placeholder="Instrument dont le membre joue" name="instruments_membre8_candidature"  value="<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['valeurs']->value['instruments_membre8_candidature'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
">
                                </div>
                            </div>

                            <!-- on change la valeur de la checkbox avec un script-->
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="statut_associatif_candidature"  value="FALSE" name="statut_associatif_candidature">
                                <label class="form-check-label" for="statut_associatif_candidature" name="statut_associatif_candidature">Avez-vous le statut associatif ?</label>
                            </div>

                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="inscrit_Sacem_candidature" value="FALSE" name="inscrit_Sacem_candidature">
                                <label class="form-check-label" for="inscrit_Sacem_candidature" name="inscrit_Sacem_candidature">??tes-vous inscrit ?? la SACEM ?</label>
                            </div>

                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="producteur_candidature" value="FALSE" name="producteur_candidature">
                                <label class="form-check-label" for="producteur_candidature" name="producteur_candidature">??tes-vous le producteur du groupe ?</label>
                            </div>

                            <div class="form-group">
                                <label for="mp3_fichier1_candidature">Premier fichier .MP3</label>
                                <input type="file" class="form-control" id="mp3_fichier1_candidature" placeholder="Fichier MP3" name="mp3_fichier1_candidature">
                                <small class="error"><?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['messages']->value['MP3_1_Type'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
</small>
                            </div>

                            <div class="form-group">
                                <label for="mp3_fichier2_candidature">Second fichier .MP3</label>
                                <input type="file" class="form-control" id="mp3_fichier2_candidature" placeholder="Fichier MP3" name="mp3_fichier2_candidature">
                                <small class="error"><?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['messages']->value['MP3_2_Type'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
</small>
                            </div>

                            <div class="form-group">
                                <label for="mp3_fichier3_candidature">Troisi??me fichier .MP3</label>
                                <input type="file" class="form-control" id="mp3_fichier3_candidature" placeholder="Fichier MP3" name="mp3_fichier3_candidature">
                                <small class="error"><?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['messages']->value['MP3_3_Type'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
</small>
                            </div>

                            <div class="form-group">
                                <small class="">Facultatif</small>
                                <label for="dossier_presse_candidature">Dossier presse au format PDF</label>
                                <input type="file" class="form-control" id="dossier_presse_candidature" placeholder="Fichier PDF" name="dossier_presse_candidature">
                                <small class="error"><?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['messages']->value['DossierPresseType'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
</small>
                            </div>

                            <div class="form-group">
                                <label for="photo1_candidature">Photos candidature 1</label>
                                <input type="file" class="form-control" id="photo1_candidature" placeholder="Fichier PNG" name="photo1_candidature">
                                <small class="error"><?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['messages']->value['image1Type'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
</small>
                            </div>

                            <div class="form-group">
                                <label for="photo2_candidature">Photos candidature 2</label>
                                <input type="file" class="form-control" id="photo2_candidature" placeholder="Fichier PNG" name="photo2_candidature">
                                <small class="error"><?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['messages']->value['image2Type'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
</small>
                            </div>

                            <div class="form-group">
                                <label for="fiche_technique_candidature">Fiche technique au format PDF</label>
                                <input type="file" class="form-control" id="fiche_technique_candidature" placeholder="Fichier PDF" name="fiche_technique_candidature">
                                <small class="error"><?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['messages']->value['FicheTechniqueType'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
</small>
                            </div>


                            <div class="form-group">
                                <label for="document_sacem_candidature">Document SACEM ou tracklist</label>
                                <input type="file" class="form-control" id="document_sacem_candidature" placeholder="Fichier PDF" name="document_sacem_candidature">
                                <small class="error"><?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['messages']->value['DocumentSacemType'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
</small>
                            </div>
                            <input type="submit" class="btn btn-primary">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <?php echo '<script'; ?>
>
        const SelectNbMembre = document.getElementById('nombre_membre'); <!-- On d??finit une constante pour la liste d??roulante du nombre de membre -->
        const CheckboxAssociatif = document.getElementById('statut_associatif_candidature');<!-- On d??finit une constante pour chacune des checkbox-->
        const CheckboxSacem = document.getElementById('inscrit_Sacem_candidature');
        const CheckboxProducteur = document.getElementById('producteur_candidature');
        SelectNbMembre.addEventListener('change', (event) => { <!--On regarde si un changement a lieu sur la select du nombre de membre -->
            var option = SelectNbMembre.selectedIndex +1; <!-- On r??cup??re le nombre de membre selection?? gr??ce ?? l'index-->
            let element = document.getElementById("membre_1");
            if (option >= 8){ <!--On regarde si la valeur est sup??rieur ou ??gale ?? 8 pour v??rifier le 8eme membre -->
                let element = document.getElementById("membre_8");
                element.classList.remove("hidden");
            }
            else{
                let element = document.getElementById("membre_8");<!--Sinon on le laisse cach?? -->
                element.classList.add("hidden");
            }

            if (option >=7){ <!--On regarde si la valeur est sup??rieur ou ??gale ?? 7 pour v??rifier le 7eme membre -->
                let element = document.getElementById("membre_7");
                element.classList.remove("hidden");
            }
            else{
                let element = document.getElementById("membre_7");
                element.classList.add("hidden");
            }

            if (option >=6){
                let element = document.getElementById("membre_6"); <!-- M??me chose que pour le 8, 7, etc... -->!
                element.classList.remove("hidden");
            }
            else{
                let element = document.getElementById("membre_6");
                element.classList.add("hidden");
            }

            if (option >=5){
                let element = document.getElementById("membre_5");
                element.classList.remove("hidden");
            }
            else{
                let element = document.getElementById("membre_5");
                element.classList.add("hidden");
            }

            if (option >=4){
                let element = document.getElementById("membre_4");
                element.classList.remove("hidden");
            }
            else{
                let element = document.getElementById("membre_4");
                element.classList.add("hidden");
            }

            if (option >=3){
                let element = document.getElementById("membre_3");
                element.classList.remove("hidden");
            }
            else{
                let element = document.getElementById("membre_3");
                element.classList.add("hidden");
            }

            if (option >=2){
                let element = document.getElementById("membre_2");
                element.classList.remove("hidden");
            }
            else{
                let element = document.getElementById("membre_2");
                element.classList.add("hidden");
            }
            });

        CheckboxSacem.addEventListener('change', (event) => { <!-- Si la valeur de la bo??te est ?? TRUE on la passe ?? false et inversement -->
            var e = document.getElementById("inscrit_Sacem_candidature");
            if (e.value == 'TRUE'){
                e.value = 'FALSE';
            }
            else{
                e.value = 'TRUE';
            }

        });

        CheckboxAssociatif.addEventListener('change', (event) => {
            var e = document.getElementById("statut_associatif_candidature");
            if (e.value == 'TRUE'){
                e.value = 'FALSE';
            }
            else{
                e.value = 'TRUE';
            }

        });

        CheckboxProducteur.addEventListener('change', (event) => {
            var e = document.getElementById("producteur_candidature");
            if (e.value == 'TRUE'){
                e.value = 'FALSE';
            }
            else{
                e.value = 'TRUE';
            }
        });


    <?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'body'} */
}
