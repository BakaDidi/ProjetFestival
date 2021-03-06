{extends file='layout.tpl'}
{block name=title}Candidature{/block}
{block name=body}
    <div class="container-fluid" xmlns="http://www.w3.org/1999/html">
        <div class="row d-flex justify-content-center align-items-center ">
            <div class="col-md-6 mx-auto">
                <div class="card shadow" style="border-radius: 1rem;">
                    <div class="card-body p-5">
                        <h1>Candidature</h1>
                        <form action="candidature" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="nomGroupe_candidature">Nom du groupe</label>
                                <input type="text" name="nomGroupe_candidature" class="form-control" id="nomGroupe_candidature" placeholder="Nom du groupe" value="{$valeurs.nomGroupe_candidature|escape|default:''}">  <!-- on récupère la valeur saisie par l'utilisateur et la resaisie automatiquement en cas d'erreur -->
                                <small class="error">{$messages.NomGroupe|escape|default:''}</small>
                                <!-- On affiche les messages d'erreurs en petit sous les champs consernés-->
                            </div>
                            <div class="form-group">
                                <label for="departement_candidature">Département d'origine du groupe</label>
                                <select class="form-select" id="departement_candidature" name="departement_candidature">
                                    <!-- on génère une liste déroulante à partir de la table département -->
                                    {php}
                                    $requete = get_results("SELECT * FROM departement");
                                    foreach ($requete as $value):
                                        echo "<option value=$value[departement_id]>";
                                        echo $value['departement_nom'];
                                    endforeach;
                                    {/php}
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="scene_candidature">Scène choisie</label>
                                <select class="form-select" id="scene_candidature" name="scene_candidature">
                                    <!-- on génère une liste déroulante à partir de la table scène -->
                                    {php}
                                    $requete = get_results("SELECT * FROM scene");
                                    foreach ($requete as $value):
                                    echo "<option value=$value[id_scene]>";
                                        echo $value['nom_scene'];
                                        endforeach;
                                    {/php}
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="nom_representant_candidature">Nom du représentant du groupe</label>
                                <input type="text" class="form-control" id="nom_representant_candidature" placeholder="Nom du représentant" name="nom_representant_candidature" value="{$valeurs.nom_representant_candidature|escape|default:''}">
                                <small class="error">{$messages.NomRepresentant|escape|default:''}</small>
                            </div>
                            <div class="form-group">
                                <label for="prenom_representant_candidature">Prénom du représentant du groupe</label>
                                <input type="text" class="form-control" id="prenom_representant_candidature" placeholder="Prenom du représentant" name="prenom_representant_candidature" value="{$valeurs.prenom_representant_candidature|escape|default:''}">
                                <small class="error">{$messages.PrenomRepresentant|escape|default:''}</small>
                            </div>
                            <div class="form-group">
                                <label for="adresse_representant_candidature">Adresse du représentant du groupe</label>
                                <input type="text" class="form-control" id="adresse_representant_candidature" placeholder="Adresse du représentant" name="adresse_representant_candidature"  value="{$valeurs.adresse_representant_candidature|escape|default:''}">
                                <small class="error">{$messages.PrenomRepresentant|escape|default:''}</small>
                            </div>
                            <div class="form-group">
                                <label for="code_postal_representant_candidature">Code postal du représentant du groupe</label>
                                <input type="text" class="form-control" id="code_postal_representant_candidature" placeholder="Code postal du représentant" name="code_postal_representant_candidature" value="{$valeurs.code_postal_representant_candidature|escape|default:''}">
                                <small class="error">{$messages.CodePostalRepresentant|escape|default:''}</small>
                                <small class="error">{$messages.codepostal|escape|default:''}</small>
                            </div>
                            <div class="form-group">
                                <label for="email_representant_candidature">Email du représentant du groupe</label>
                                <input type="email" class="form-control" id="email_representant_candidature" placeholder="Email du représentant" name="email_representant_candidature" value="{$valeurs.email_representant_candidature|escape|default:''}">
                                <small class="error">{$messages.EmailRepresentant|escape|default:''}</small>
                            </div>
                            <div class="form-group">
                                <label for="telephone_representant_candidature">Téléphone du représentant du groupe</label>
                                <input type="tel" class="form-control" id="telephone_representant_candidature" placeholder="Téléphone du représentant" name="telephone_representant_candidature" value="{$valeurs.telephone_representant_candidature|escape|default:''}">
                                <small class="error">{$messages.TelephoneRepresentant|escape|default:''}</small>
                            </div>
                            <div class="form-group">
                                <label for="style_candidature">Style du groupe</label>
                                <input type="text" class="form-control" id="style_candidature" placeholder="Style du groupe" name="style_candidature" value="{$valeurs.style_candidature|escape|default:''}">
                                <small class="error">{$messages.Style|escape|default:''}</small>
                            </div>
                            <div class="form-group">
                                <label for="annee_creation_candidature">Année de création du groupe</label>
                                <input type="date" class="form-control" id="annee_creation_candidature" placeholder="Année de création du groupe" name="annee_creation_candidature"  value="{$valeurs.annee_creation_candidature|escape|default:''}">
                                <small class="error">{$messages.AnneeCreation|escape|default:''}</small>
                            </div>
                            <div class="form-group">
                                <label for="presentation_candidature">Présentation du groupe</label>
                                <textarea class="form-control" id="presentation_candidature" rows="5" placeholder="Courte présentation de votre groupe" maxlength="500" style="resize: none" name="presentation_candidature" >{$valeurs.presentation_candidature|escape|default:''}</textarea>
                                <small class="error">{$messages.Presentation|escape|default:''}</small>
                                <small class="error">{$messages.Taille|escape|default:''}</small>
                            </div>
                            <div class="form-group">
                                <label for="experience_candidature">Expérience Scénique du groupe</label>
                                <textarea class="form-control no-resize" id="experience_candidature" rows="5" placeholder="Court résumé de vos expériences scéniques" maxlength="500" style="resize: none" name="experience_candidature">{$valeurs.experience_candidature|escape|default:''}</textarea>
                                <small class="error">{$messages.Experience|escape|default:''}</small>
                                <small class="error">{$messages.Taille|escape|default:''}</small>
                            </div>
                            <div class="form-group">
                                <label for="site_candidature">Site du groupe</label>
                                <input type="text" class="form-control" id="site_candidature" placeholder="Site du groupe" name="site_candidature" value="{$valeurs.site_candidature|escape|default:''}">
                                <small class="error">{$messages.Site|escape|default:''}</small>
                                <small class="error">{$messages.Url|escape|default:''}</small>
                            </div>
                            <div class="form-group">
                                <label for="soundcloud_candidature">Soundcloud du groupe</label>
                                <input type="text" class="form-control" id="soundcloud_candidature" placeholder="Soundcloud du groupe" name="soundcloud_candidature" value="{$valeurs.soundcloud_candidature|escape|default:''}">
                                <small>facultatif</small>
                                <small class="error">{$messages.Url|escape|default:''}</small>
                            </div>
                            <div class="form-group">
                                <label for="youtube_candidature">Youtube du groupe</label>
                                <input type="text" class="form-control" id="youtube_candidature" placeholder="Youtube du groupe" name="youtube_candidature" value="{$valeurs.youtube_candidature|escape|default:''}">
                                <small>facultatif</small>
                                <small class="error">{$messages.Url|escape|default:''}</small>
                            </div>

                            <div class="form-group">
                                <label for="nombre_membre">Nombre de membre</label>
                                <!-- liste de 1 à 8 pour choisir le nombre de membre (lié au script) -->
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
                            <p class="error"> {$messages.absence_champ_obligatoire|escape|default:''}</p>
                            <div class="" id="membre_1">
                                <div class="form-group">
                                    <label for="nom_membre1_candidature">Nom du membre 1</label>
                                    <input type="text" class="form-control" id="nom_membre1_candidature" placeholder="Nom du membre" name="nom_membre1_candidature" value="{$valeurs.nom_membre1_candidature|escape|default:''}">
                                </div>
                                <div class="form-group">
                                    <label for="prenom_membre1_candidature">Prénom du membre 1</label>
                                    <input type="text" class="form-control" id="prenom_membre1_candidature" placeholder="Prenom du membre" name="prenom_membre1_candidature" value="{$valeurs.prenom_membre1_candidature|escape|default:''}">
                                </div>
                                <div class="form-group">
                                    <label for="instruments_membre1_candidature">Instruments du membre 1</label>
                                    <input type="text" class="form-control" id="instruments_membre1_candidature" placeholder="Instrument dont le membre joue" name="instruments_membre1_candidature" value="{$valeurs.instruments_membre1_candidature|escape|default:''}">
                                </div>
                            </div>
                            <!-- la class hidden permet de ne pas afficher l'élément-->
                            <div class="hidden" id="membre_2">
                                <div class="form-group">
                                    <label for="nom_membre2_candidature">Nom du membre 2</label>
                                    <input type="text" class="form-control" id="nom_membre2_candidature" placeholder="Nom du membre" name="nom_membre2_candidature" value="{$valeurs.nom_membre2_candidature|escape|default:''}">
                                </div>
                                <div class="form-group">
                                    <label for="prenom_membre2_candidature">Prénom du membre 2</label>
                                    <input type="text" class="form-control" id="prenom_membre2_candidature" placeholder="Prenom du membre" name="prenom_membre2_candidature" value="{$valeurs.prenom_membre2_candidature|escape|default:''}">
                                </div>
                                <div class="form-group">
                                    <label for="instruments_membre2_candidature">Instruments du membre 2</label>
                                    <input type="text" class="form-control" id="instruments_membre2_candidature" placeholder="Instrument dont le membre joue" name="instruments_membre2_candidature" value="{$valeurs.instruments_membre2_candidature|escape|default:''}">
                                </div>
                            </div>
                            <div class="hidden" id="membre_3">
                                <div class="form-group">
                                    <label for="nom_membre3_candidature">Nom du membre 3</label>
                                    <input type="text" class="form-control" id="nom_membre3_candidature" placeholder="Nom du membre" name="nom_membre3_candidature" value="{$valeurs.nom_membre3_candidature|escape|default:''}">
                                </div>
                                <div class="form-group">
                                    <label for="prenom_membre3_candidature">Prénom du membre 3</label>
                                    <input type="text" class="form-control" id="prenom_membre3_candidature" placeholder="Prenom du membre" name="prenom_membre3_candidature" value="{$valeurs.prenom_membre3_candidature|escape|default:''}">
                                </div>
                                <div class="form-group">
                                    <label for="instruments_membre3_candidature">Instruments du membre 3</label>
                                    <input type="text" class="form-control" id="instruments_membre3_candidature" placeholder="Instrument dont le membre joue" name="instruments_membre3_candidature" value="{$valeurs.instruments_membre3_candidature|escape|default:''}">
                                </div>
                            </div>
                            <div class="hidden" id="membre_4">
                                <div class="form-group">
                                    <label for="nom_membre4_candidature">Nom du membre 4</label>
                                    <input type="text" class="form-control" id="nom_membre4_candidature" placeholder="Nom du membre" name="nom_membre4_candidature" value="{$valeurs.nom_membre4_candidature|escape|default:''}">
                                </div>
                                <div class="form-group">
                                    <label for="prenom_membre4_candidature">Prénom du membre 4</label>
                                    <input type="text" class="form-control" id="prenom_membre4_candidature" placeholder="Prenom du membre" name="prenom_membre4_candidature" value="{$valeurs.prenom_membre4_candidature|escape|default:''}" >
                                </div>
                                <div class="form-group">
                                    <label for="instruments_membre4_candidature">Instruments du membre 4</label>
                                    <input type="text" class="form-control" id="instruments_membre4_candidature" placeholder="Instrument dont le membre joue" name="instruments_membre4_candidature" value="{$valeurs.instruments_membre4_candidature|escape|default:''}">
                                </div>
                            </div>
                            <div class="hidden" id="membre_5">
                                <div class="form-group">
                                    <label for="nom_membre5_candidature">Nom du membre 5</label>
                                    <input type="text" class="form-control" id="nom_membre5_candidature" placeholder="Nom du membre" name="nom_membre5_candidature" value="{$valeurs.nom_membre5_candidature|escape|default:''}">
                                </div>
                                <div class="form-group">
                                    <label for="prenom_membre5_candidature">Prénom du membre 5</label>
                                    <input type="text" class="form-control" id="prenom_membre5_candidature" placeholder="Prenom du membre" name="prenom_membre5_candidature" value="{$valeurs.prenom_membre5_candidature|escape|default:''}">
                                </div>
                                <div class="form-group">
                                    <label for="instruments_membre5_candidature">Instruments du membre 5</label>
                                    <input type="text" class="form-control" id="instruments_membre5_candidature" placeholder="Instrument dont le membre joue" name="instruments_membre5_candidature" value="{$valeurs.instruments_membre5_candidature|escape|default:''}">
                                </div>
                            </div>
                            <div class="hidden" id="membre_6">
                                <div class="form-group">
                                    <label for="nom_membre6_candidature">Nom du membre 6</label>
                                    <input type="text" class="form-control" id="nom_membre6_candidature" placeholder="Nom du membre" name="nom_membre6_candidature" value="{$valeurs.nom_membre6_candidature|escape|default:''}">
                                </div>
                                <div class="form-group">
                                    <label for="prenom_membre6_candidature">Prénom du membre 6</label>
                                    <input type="text" class="form-control" id="prenom_membre6_candidature" placeholder="Prenom du membre" name="prenom_membre6_candidature" value="{$valeurs.prenom_membre6_candidature|escape|default:''}">
                                </div>
                                <div class="form-group">
                                    <label for="instruments_membre6_candidature">Instruments du membre 6</label>
                                    <input type="text" class="form-control" id="instruments_membre6_candidature" placeholder="Instrument dont le membre joue" name="instruments_membre6_candidature"  value="{$valeurs.instruments_membre6_candidature|escape|default:''}">
                                </div>
                            </div>
                            <div class="hidden" id="membre_7">
                                <div class="form-group">
                                    <label for="nom_membre7_candidature">Nom du membre 7</label>
                                    <input type="text" class="form-control" id="nom_membre7_candidature" placeholder="Nom du membre" name="nom_membre7_candidature" value="{$valeurs.nom_membre7_candidature|escape|default:''}">
                                </div>
                                <div class="form-group">
                                    <label for="prenom_membre7_candidature">Prénom du membre 7</label>
                                    <input type="text" class="form-control" id="prenom_membre7_candidature" placeholder="Prenom du membre" name="prenom_membre7_candidature" value="{$valeurs.prenom_membre7_candidature|escape|default:''}">
                                </div>
                                <div class="form-group">
                                    <label for="instruments_membre7_candidature">Instruments du membre 7</label>
                                    <input type="text" class="form-control" id="instruments_membre7_candidature" placeholder="Instrument dont le membre joue" name="instruments_membre7_candidature" value="{$valeurs.instruments_membre7_candidature|escape|default:''}">
                                </div>
                            </div>
                            <div class="hidden" id="membre_8">
                                <div class="form-group">
                                    <label for="nom_membre8_candidature">Nom du membre 8</label>
                                    <input type="text" class="form-control" id="nom_membre8_candidature" placeholder="Nom du membre" name="nom_membre8_candidature" value="{$valeurs.nom_membre8_candidature|escape|default:''}">
                                </div>
                                <div class="form-group">
                                    <label for="prenom_membre8_candidature">Prénom du membre 8</label>
                                    <input type="text" class="form-control" id="prenom_membre8_candidature" placeholder="Prenom du membre" name="prenom_membre8_candidature" value="{$valeurs.prenom_membre8_candidature|escape|default:''}">
                                </div>
                                <div class="form-group">
                                    <label for="instruments_membre8_candidature">Instruments du membre 8</label>
                                    <input type="text" class="form-control" id="instruments_membre8_candidature" placeholder="Instrument dont le membre joue" name="instruments_membre8_candidature"  value="{$valeurs.instruments_membre8_candidature|escape|default:''}">
                                </div>
                            </div>

                            <!-- on change la valeur de la checkbox avec un script-->
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="statut_associatif_candidature"  value="FALSE" name="statut_associatif_candidature">
                                <label class="form-check-label" for="statut_associatif_candidature" name="statut_associatif_candidature">Avez-vous le statut associatif ?</label>
                            </div>

                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="inscrit_Sacem_candidature" value="FALSE" name="inscrit_Sacem_candidature">
                                <label class="form-check-label" for="inscrit_Sacem_candidature" name="inscrit_Sacem_candidature">Êtes-vous inscrit à la SACEM ?</label>
                            </div>

                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="producteur_candidature" value="FALSE" name="producteur_candidature">
                                <label class="form-check-label" for="producteur_candidature" name="producteur_candidature">Êtes-vous le producteur du groupe ?</label>
                            </div>

                            <div class="form-group">
                                <label for="mp3_fichier1_candidature">Premier fichier .MP3</label>
                                <input type="file" class="form-control" id="mp3_fichier1_candidature" placeholder="Fichier MP3" name="mp3_fichier1_candidature">
                                <small class="error">{$messages.MP3_1_Type|escape|default:''}</small>
                            </div>

                            <div class="form-group">
                                <label for="mp3_fichier2_candidature">Second fichier .MP3</label>
                                <input type="file" class="form-control" id="mp3_fichier2_candidature" placeholder="Fichier MP3" name="mp3_fichier2_candidature">
                                <small class="error">{$messages.MP3_2_Type|escape|default:''}</small>
                            </div>

                            <div class="form-group">
                                <label for="mp3_fichier3_candidature">Troisième fichier .MP3</label>
                                <input type="file" class="form-control" id="mp3_fichier3_candidature" placeholder="Fichier MP3" name="mp3_fichier3_candidature">
                                <small class="error">{$messages.MP3_3_Type|escape|default:''}</small>
                            </div>

                            <div class="form-group">
                                <small class="">Facultatif</small>
                                <label for="dossier_presse_candidature">Dossier presse au format PDF</label>
                                <input type="file" class="form-control" id="dossier_presse_candidature" placeholder="Fichier PDF" name="dossier_presse_candidature">
                                <small class="error">{$messages.DossierPresseType|escape|default:''}</small>
                            </div>

                            <div class="form-group">
                                <label for="photo1_candidature">Photos candidature 1</label>
                                <input type="file" class="form-control" id="photo1_candidature" placeholder="Fichier PNG" name="photo1_candidature">
                                <small class="error">{$messages.image1Type|escape|default:''}</small>
                            </div>

                            <div class="form-group">
                                <label for="photo2_candidature">Photos candidature 2</label>
                                <input type="file" class="form-control" id="photo2_candidature" placeholder="Fichier PNG" name="photo2_candidature">
                                <small class="error">{$messages.image2Type|escape|default:''}</small>
                            </div>

                            <div class="form-group">
                                <label for="fiche_technique_candidature">Fiche technique au format PDF</label>
                                <input type="file" class="form-control" id="fiche_technique_candidature" placeholder="Fichier PDF" name="fiche_technique_candidature">
                                <small class="error">{$messages.FicheTechniqueType|escape|default:''}</small>
                            </div>


                            <div class="form-group">
                                <label for="document_sacem_candidature">Document SACEM ou tracklist</label>
                                <input type="file" class="form-control" id="document_sacem_candidature" placeholder="Fichier PDF" name="document_sacem_candidature">
                                <small class="error">{$messages.DocumentSacemType|escape|default:''}</small>
                            </div>
                            <input type="submit" class="btn btn-primary">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script>
        const SelectNbMembre = document.getElementById('nombre_membre'); <!-- On définit une constante pour la liste déroulante du nombre de membre -->
        const CheckboxAssociatif = document.getElementById('statut_associatif_candidature');<!-- On définit une constante pour chacune des checkbox-->
        const CheckboxSacem = document.getElementById('inscrit_Sacem_candidature');
        const CheckboxProducteur = document.getElementById('producteur_candidature');
        SelectNbMembre.addEventListener('change', (event) => { <!--On regarde si un changement a lieu sur la select du nombre de membre -->
            var option = SelectNbMembre.selectedIndex +1; <!-- On récupère le nombre de membre selectioné grâce à l'index-->
            let element = document.getElementById("membre_1");
            if (option >= 8){ <!--On regarde si la valeur est supérieur ou égale à 8 pour vérifier le 8eme membre -->
                let element = document.getElementById("membre_8");
                element.classList.remove("hidden");
            }
            else{
                let element = document.getElementById("membre_8");<!--Sinon on le laisse caché -->
                element.classList.add("hidden");
            }

            if (option >=7){ <!--On regarde si la valeur est supérieur ou égale à 7 pour vérifier le 7eme membre -->
                let element = document.getElementById("membre_7");
                element.classList.remove("hidden");
            }
            else{
                let element = document.getElementById("membre_7");
                element.classList.add("hidden");
            }

            if (option >=6){
                let element = document.getElementById("membre_6"); <!-- Même chose que pour le 8, 7, etc... -->!
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

        CheckboxSacem.addEventListener('change', (event) => { <!-- Si la valeur de la boîte est à TRUE on la passe à false et inversement -->
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


    </script>
{/block}