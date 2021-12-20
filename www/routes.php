<?php

require '../includes/pdo.php';
$db = new PDO("mysql:host=$dbHost;port=$dbPort;dbname=$dbName;charset=utf8", "$dbUser", "$dbPassword");
$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);



Flight::set ('PDO', $db); #On définit le PDO


function nettoyer_nom_fichier($nom){ #Fonction donné pour nettoyer le nom d'un fichier et boucher des failles de sécurité
    $transliterator = Transliterator::createFromRules(
        ':: NFD; :: [:Nonspacing Mark:] Remove; ::NFC;', Transliterator::FORWARD
    );
    $normalized = $transliterator->transliterate($nom);
    return preg_replace("/[^a-zA-Z0-9\.]/","-",$normalized);
}
#Fonction utile pour récupérer les résultats d'une requête BDD (source spécialité web)
function get_results($requete){
    global $db,$DEBUG_SELECT_MULTIPLE;
    if($DEBUG_SELECT_MULTIPLE) var_dump($requete);
    $requete = $db->query($requete);
    if($DEBUG_SELECT_MULTIPLE) var_dump($requete);
    return $requete->fetchAll(PDO::FETCH_ASSOC);
}
#Fonction utile pour récuperer le résultat d'une requête BDD (source spécialité web)
function get_result($requete){
    global $db, $DEBUG_SELECT;
    if($DEBUG_SELECT) var_dump($requete);
    $requete = $db->query($requete);
    if($DEBUG_SELECT) var_dump($requete);
    return $requete->fetch(PDO::FETCH_ASSOC);
}


# Route de la racine affichant l'index du fichier
Flight::route('/', function(){
    Flight::render("index.tpl",array());
});


#Route pour le formulaire de candidature, affichée uniquement si l'utilisateur est connecté sinon le redirige vers la connexion
Flight::route('GET /candidature', function(){
    if (isset($_SESSION['utilisateur'])) #vérifie si l'utilisateur est connecté.
        Flight::render("candidature.tpl",array());
    else
        Flight::redirect("/login"); # redirige vers la route permettant de se connecter

});

#Route pour traiter avec la méthode "post" le résultat du formulaire de candidature
Flight::route('POST /candidature', function(){
    $form = Flight::request()->data; #récupère les données du formulaire
    $messages = array(); #tableau stockant les messages d'erreurs
    $emailSession =$_SESSION['utilisateur']['email_utilisateur']; #L'email de l'utilisateur connecté
    $requete = get_result('SELECT id_utilisateur FROM utilisateur WHERE email_utilisateur="'.$emailSession.'"'); #On utilise l'email pour récupérer l'uID
    $requeteListeId =(get_results("SELECT id_representant_candidature FROM candidature")); #On récupère la liste des personnes ayant formulé une candidature


    #Tout les prochains tests vérifient si les champs obligatoires sont remplis
    if(empty($form['nomGroupe_candidature'])){
        $messages['NomGroupe'] = 'Nom groupe non rempli';
    }

    if(empty($form['departement_candidature'])){
        $messages['DepartementGroupe'] = 'departement groupe non rempli';
    }

    if(empty($form['scene_candidature'])){
        $messages['Scene'] = 'Erreur scene';
    }

    if(empty($form['nom_representant_candidature'])){
        $messages['NomRepresentant'] = 'Nom representant non rempli';
    }

    if(empty($form['prenom_representant_candidature'])){
        $messages['PrenomRepresentant'] = 'Prenom representant non rempli';
    }

    if(empty($form['adresse_representant_candidature'])){
        $messages['AdresseRepresentant'] = 'Adresse representant non rempli';
    }

    if(empty($form['code_postal_representant_candidature'])){
        $messages['CodePostalRepresentant'] = 'Code Postal representant non rempli';
    }

    if(empty($form['email_representant_candidature'])){
        $messages['EmailRepresentant'] = 'Email representant non rempli';
    }

    if(empty($form['telephone_representant_candidature'])){
        $messages['TelephoneRepresentant'] = 'Téléphone representant non rempli';
    }

    if(empty($form['style_candidature'])){
        $messages['Style'] = 'Style du groupe non rempli';
    }

    if(empty($form['annee_creation_candidature'])){
        $messages['AnneeCreation'] = 'Année de création du groupe non rempli';
    }

    if(empty($form['presentation_candidature'])){
        $messages['Presentation'] = 'Présentation du groupe non rempli';
    }

    if(empty($form['experience_candidature'])){
        $messages['Experience'] = 'Expérience du groupe non rempli';
    }

    if(empty($form['site_candidature'])){
        $messages['Site'] = 'Site du groupe non rempli';
    }

    if(empty($_FILES['mp3_fichier1_candidature']['name'])){ #on regarde ici dans $_FILES qui contient tout les fichiers envoyés par l'utilisateur
        $messages['mp3fichier1'] = 'Fichier MP3 n°1 non trouvé';
    }

    if(empty($_FILES['mp3_fichier2_candidature']['name'])){
        $messages['mp3fichier2'] = 'Fichier MP3 n°2 non trouvé';
    }

    if(empty($_FILES['mp3_fichier3_candidature']['name'])){
        $messages['mp3fichier3'] = 'Fichier MP3 n°3 non trouvé';
    }

    if(empty($_FILES['fiche_technique_candidature']['name'])){
        $messages['FicheTechnique'] = 'Fiche technique non trouvé';
    }

    if(empty($_FILES['document_sacem_candidature']['name'])){
        $messages['DocSacem'] = 'Document Sacem non trouvé';
    }

    if(empty($_FILES['photo1_candidature']['name'])){
        $messages['photo1'] = 'Photo 1 non trouvé';
    }
    if(empty($_FILES['photo2_candidature']['name'])){
        $messages['photo2'] = 'Photo 2 non trouvé';
    }

    for ($i = 1; $i <= ($form->nombre_membre); $i++) { #boucle pour vérifier si le bon nombre d'utilisateurs est saisie
        if ((empty($form["nom_membre$i"."_candidature"])) || (empty($form["prenom_membre$i"."_candidature"])) || (empty($form["instruments_membre$i"."_candidature"])) )
        {
            $messages['absence_champ_obligatoire']="L'un des membres n'a pas été correctement saisi membre";
        }
    }

    #Vérifie si l'utilisateur a saisie des url au bon format avec un filtre
    if( ((!filter_var($form['soundcloud_candidature'],FILTER_VALIDATE_URL)) && (!empty($form['soundcloud_candidature'])))|| (!filter_var($form['youtube_candidature'],FILTER_VALIDATE_URL)&& (!empty($form['soundcloud_candidature']))) || !filter_var(($form['site_candidature'])))
    {
        $messages['Url'] = "url au mauvais format";
    }

    #Vérifie si l'utilisateur a saisie une email avec un filtre
    if(!filter_var($form['email_representant_candidature'],FILTER_VALIDATE_EMAIL))
    {
        $messages['EmailFormat'] = "Email au mauvais format";
    }

    #Vérifie que l'utilisateur a saisi moins de 500 caractères (contrainte énoncé)
    if( (strlen($form['presentation_candidature']) > 500) || (strlen($form['experience_candidature']) >500))
    {
        $messages['Taille'] = "Erreur message trop long, veuillez saisir - de 500 caractères";
    }

    #Vérifie que l'utilisateur a saisi un entier pour le code postal (On suppose que tout les codes postaux sont une suite de chiffre)
    if(!filter_var($form['code_postal_representant_candidature'],FILTER_VALIDATE_INT))
    {
        $messages['codepostal'] = "Code postal au mauvais format";
    }

    #Vérifie si le fichier est bien au format mp3
    if ($_FILES['mp3_fichier1_candidature']['type'] != 'audio/mpeg')
    {
        $messages['MP3_1_Type']="Erreur de type Fichier mp3 N°1";
    }

    if ($_FILES['mp3_fichier2_candidature']['type'] != 'audio/mpeg')
    {
        $messages['MP3_2_Type']="Erreur de type Fichier mp3 N°2";
    }

    if ($_FILES['mp3_fichier3_candidature']['type'] != 'audio/mpeg')
    {
        $messages['MP3_3_Type']="Erreur de type Fichier mp3 N°3";
    }

    #Vérifie si le fichier est bien au format pdf
    if ($_FILES['document_sacem_candidature']['type'] != 'application/pdf')
    {
        $messages['DocumentSacemType']="Erreur de type Document SACEM";
    }

    if ($_FILES['fiche_technique_candidature']['type'] != 'application/pdf')
    {
        $messages['FicheTechniqueType']="Erreur de type Fiche Technique";
    }

    #Vérifie si le fichier est au format pdf & n'est pas vide (sinon erreur en cas de non présence, un fichier vide n'a pas de type)
    if (($_FILES['dossier_presse_candidature']['type'] != 'application/pdf') && (!empty($_FILES['dossier_presse_candidature']['name'])))
    {
        $messages['DossierPresseType'] = "Erreur de type Dossier presse";
    }

    #Vérifie si le fichier est une image au format png ou jpeg (les plus courants)
    if(($_FILES['photo1_candidature']['type']!='image/png') && ($_FILES['photo1_candidature']['type']!='image/jpeg'))
    {
        $messages['image1Type']="Erreur de type Image n°1";
    }

    if(($_FILES['photo2_candidature']['type'] != 'image/png') && ($_FILES['photo2_candidature']['type']!='image/jpeg'))
    {
        $messages['image2Type']="Erreur de type Image n°2";
    }

    #Vérifie que l'utilisateur n'a pas déjà formulé une candidature
    foreach ($requeteListeId as $value):
        if($requete["id_utilisateur"]==$value["id_representant_candidature"])
        {
            $messages['dejaInscript']="Vous avez déjà formulé une candidature";
        }
    endforeach;

    #S'il y a pas de "0" messages d'erreur, on les affiche.
    if (count($messages)>0){
        Flight::render("candidature.tpl",array("valeurs"=>$_POST, "messages"=>$messages));
    }

    #Sinon si pas d'erreurs
    else{


        #On définit les dossiers d'uplaods
        $uploads_dir_img = "/uploads/".$form['nomGroupe_candidature']."/img";
        $uploads_dir_pdf = "/uploads/".$form['nomGroupe_candidature']."/pdf";
        $uploads_dir_mp3 = "/uploads/".$form['nomGroupe_candidature']."/mp3";


        #On vérifie leur existence, et si non on crée les dossiers
        if (!file_exists(__DIR__."$uploads_dir_mp3/"))
        {
            mkdir(__DIR__."$uploads_dir_mp3/",0777,true);
        }
        if (!file_exists(__DIR__."$uploads_dir_pdf/"))
        {
            mkdir(__DIR__."$uploads_dir_pdf/",0777,true);
        }
        if (!file_exists(__DIR__."$uploads_dir_img/"))
        {
            mkdir(__DIR__."$uploads_dir_img/",0777,true);
        }

        #On vérifie si le fichier a rencontré des erreurs
        if ($_FILES['mp3_fichier1_candidature']['error'] == 0)
        {
            $nomNettoye = nettoyer_nom_fichier($_FILES['mp3_fichier1_candidature']['name']); #On nettoie le nom du fichier pour des raisons de sécurité
            move_uploaded_file(($_FILES['mp3_fichier1_candidature']['tmp_name']),__DIR__."$uploads_dir_mp3/$nomNettoye"); #On le déplace dans le bon dossier
        }

        #Même explications pour les prochains tests
        if ($_FILES['mp3_fichier2_candidature']['error'] == 0)
        {
            $nomNettoye = nettoyer_nom_fichier($_FILES['mp3_fichier2_candidature']['name']);
            move_uploaded_file(($_FILES['mp3_fichier2_candidature']['tmp_name']),__DIR__."$uploads_dir_mp3/$nomNettoye");
        }

        if ($_FILES['mp3_fichier3_candidature']['error'] == 0)
        {
            $nomNettoye = nettoyer_nom_fichier($_FILES['mp3_fichier3_candidature']['name']);
            move_uploaded_file(($_FILES['mp3_fichier3_candidature']['tmp_name']),__DIR__."$uploads_dir_mp3/$nomNettoye");
        }

        if ($_FILES['dossier_presse_candidature']['error'] == 0)
        {
            $nomNettoye = nettoyer_nom_fichier($_FILES['dossier_presse_candidature']['name']);

            move_uploaded_file(($_FILES['dossier_presse_candidature']['tmp_name']),__DIR__."$uploads_dir_pdf/$nomNettoye");
        }

        if ($_FILES['photo1_candidature']['error'] == 0)
        {
            $nomNettoye = nettoyer_nom_fichier($_FILES['photo1_candidature']['name']);
            move_uploaded_file(($_FILES['photo1_candidature']['tmp_name']),__DIR__."$uploads_dir_img/$nomNettoye");
        }

        if ($_FILES['photo2_candidature']['error'] == 0)
        {
            $nomNettoye = nettoyer_nom_fichier($_FILES['photo2_candidature']['name']);
            move_uploaded_file(($_FILES['photo1_candidature']['tmp_name']),__DIR__."$uploads_dir_img/$nomNettoye");
        }

        if ($_FILES['fiche_technique_candidature']['error'] == 0)
        {
            $nomNettoye = nettoyer_nom_fichier($_FILES['fiche_technique_candidature']['name']);
            move_uploaded_file(($_FILES['fiche_technique_candidature']['tmp_name']),__DIR__."$uploads_dir_pdf/$nomNettoye");
        }

        if ($_FILES['document_sacem_candidature']['error'] == 0)
        {
            $nomNettoye = nettoyer_nom_fichier($_FILES['document_sacem_candidature']['name']);
            move_uploaded_file(($_FILES['document_sacem_candidature']['tmp_name']),__DIR__."$uploads_dir_pdf/$nomNettoye");
        }


        #On prépare la requête de base de données
        $stmt = Flight::get ('PDO')-> prepare("insert into candidature(
        id_candidature,
        nomGroupe_candidature,
        departement_candidature,
        scene_candidature,
        id_representant_candidature,
        nom_representant_candidature,
        prenom_representant_candidature,	
        adresse_representant_candidature,	
        code_postal_representant_candidature,	
        email_representant_candidature,	
        telephone_representant_candidature,	
        style_candidature,	
        annee_creation_candidature,	
        presentation_candidature,	
        experience_candidature,
        site_candidature,	
        soundcloud_candidature,
        youtube_candidature,	
        nom_membre1_candidature,
        prenom_membre1_candidature,
        instruments_membre1_candidature,
        nom_membre2_candidature,	
        prenom_membre2_candidature,
        instruments_membre2_candidature,
        nom_membre3_candidature,
        prenom_membre3_candidature,
        instruments_membre3_candidature,
        nom_membre4_candidature,
        prenom_membre4_candidature,	
        instruments_membre4_candidature,	
        nom_membre5_candidature,	
        prenom_membre5_candidature,	
        instruments_membre5_candidature,	
        nom_membre6_candidature,
        prenom_membre6_candidature,	
        instruments_membre6_candidature,	
        nom_membre7_candidature,	
        prenom_membre7_candidature,	
        instruments_membre7_candidature,	
        nom_membre8_candidature,	
        prenom_membre8_candidature,	
        instruments_membre8_candidature,	
        statut_associatif_candidature,	
        inscrit_Sacem_candidature,	
        producteur_candidature,	
        mp3_fichier1_candidature,	
        mp3_fichier2_candidature,	
        mp3_fichier3_candidature,	
        dossier_presse_candidature,	
        photo1_candidature,	
        photo2_candidature,	
        fiche_technique_candidature,	
        document_sacem_candidature)
        values (
        :id_candidature,	                      
        :nomGroupe_candidature,	
        :departement_candidature,	
        :scene_candidature,	
        :id_representant_candidature,
        :nom_representant_candidature,	
        :prenom_representant_candidature,	
        :adresse_representant_candidature,	
        :code_postal_representant_candidature,	
        :email_representant_candidature,	
        :telephone_representant_candidature,	
        :style_candidature,	
        :annee_creation_candidature,	
        :presentation_candidature,	
        :experience_candidature,
        :site_candidature,	
        :soundcloud_candidature,
        :youtube_candidature,	
        :nom_membre1_candidature,
        :prenom_membre1_candidature,
        :instruments_membre1_candidature,
        :nom_membre2_candidature,	
        :prenom_membre2_candidature,
        :instruments_membre2_candidature,
        :nom_membre3_candidature,
        :prenom_membre3_candidature,
        :instruments_membre3_candidature,
        :nom_membre4_candidature,
        :prenom_membre4_candidature,	
        :instruments_membre4_candidature,	
        :nom_membre5_candidature,	
        :prenom_membre5_candidature,	
        :instruments_membre5_candidature,	
        :nom_membre6_candidature,
        :prenom_membre6_candidature,	
        :instruments_membre6_candidature,	
        :nom_membre7_candidature,	
        :prenom_membre7_candidature,	
        :instruments_membre7_candidature,	
        :nom_membre8_candidature,	
        :prenom_membre8_candidature,	
        :instruments_membre8_candidature,	
        :statut_associatif_candidature,	
        :inscrit_Sacem_candidature,	
        :producteur_candidature,	
        :mp3_fichier1_candidature,	
        :mp3_fichier2_candidature,	
        :mp3_fichier3_candidature,	
        :dossier_presse_candidature,	
        :photo1_candidature,	
        :photo2_candidature,	
        :fiche_technique_candidature,	
        :document_sacem_candidature
        )");
        #On l'execute
        $stmt ->execute(array(
        ':id_candidature' =>$requete["id_utilisateur"],
        ':nomGroupe_candidature'=>$form->nomGroupe_candidature,
        ':departement_candidature'=>$form->departement_candidature,
        ':scene_candidature'=>$form->scene_candidature,
        ':id_representant_candidature'=>$requete["id_utilisateur"],
        ':nom_representant_candidature'=>$form->nom_representant_candidature,
        ':prenom_representant_candidature'=>$form->prenom_representant_candidature,
        ':adresse_representant_candidature'=>$form->adresse_representant_candidature,
        ':code_postal_representant_candidature'=>$form->code_postal_representant_candidature,
        ':email_representant_candidature'=>$form->email_representant_candidature,
        ':telephone_representant_candidature'=>$form->telephone_representant_candidature,
        ':style_candidature'=>$form->style_candidature,
        ':annee_creation_candidature'=>$form->annee_creation_candidature,
        ':presentation_candidature'=>$form->presentation_candidature,
        ':experience_candidature'=>$form->experience_candidature,
        ':site_candidature'=>$form->site_candidature,
        ':soundcloud_candidature'=>$form->soundcloud_candidature,
        ':youtube_candidature'=>$form->youtube_candidature,
        ':nom_membre1_candidature'=>$form->nom_membre1_candidature,
        ':prenom_membre1_candidature'=>$form->prenom_membre1_candidature,
        ':instruments_membre1_candidature'=>$form->instruments_membre1_candidature,
        ':nom_membre2_candidature'=>$form->nom_membre2_candidature,
        ':prenom_membre2_candidature'=>$form->prenom_membre2_candidature,
        ':instruments_membre2_candidature'=>$form->instruments_membre2_candidature,
        ':nom_membre3_candidature'=>$form->nom_membre3_candidature,
        ':prenom_membre3_candidature'=>$form->prenom_membre3_candidature,
        ':instruments_membre3_candidature'=>$form->instruments_membre3_candidature,
        ':nom_membre4_candidature'=>$form->nom_membre4_candidature,
        ':prenom_membre4_candidature'=>$form->prenom_membre4_candidature,
        ':instruments_membre4_candidature'=>$form->instruments_membre4_candidature,
        ':nom_membre5_candidature'=>$form->nom_membre5_candidature,
        ':prenom_membre5_candidature'=>$form->prenom_membre5_candidature,
        ':instruments_membre5_candidature'=>$form->instruments_membre5_candidature,
        ':nom_membre6_candidature'=>$form->nom_membre6_candidature,
        ':prenom_membre6_candidature'=>$form->prenom_membre6_candidature,
        ':instruments_membre6_candidature'=>$form->instruments_membre6_candidature,
        ':nom_membre7_candidature'=>$form->nom_membre7_candidature,
        ':prenom_membre7_candidature'=>$form->prenom_membre7_candidature,
        ':instruments_membre7_candidature'=>$form->instruments_membre7_candidature,
        ':nom_membre8_candidature'=>$form->nom_membre8_candidature,
        ':prenom_membre8_candidature'=>$form->prenom_membre8_candidature,
        ':instruments_membre8_candidature'=>$form->instruments_membre8_candidature,
        ':statut_associatif_candidature'=>$form->statut_associatif_candidature,
        ':inscrit_Sacem_candidature'=>$form->inscrit_Sacem_candidature,
        ':producteur_candidature'=>$form->producteur_candidature,
        ':mp3_fichier1_candidature'=>nettoyer_nom_fichier($_FILES['mp3_fichier1_candidature']['name']),
        ':mp3_fichier2_candidature'=>nettoyer_nom_fichier($_FILES['mp3_fichier2_candidature']['name']),
        ':mp3_fichier3_candidature'=>nettoyer_nom_fichier($_FILES['mp3_fichier3_candidature']['name']),
        ':dossier_presse_candidature'=>nettoyer_nom_fichier($_FILES['dossier_presse_candidature']['name']),
        ':photo1_candidature'=>nettoyer_nom_fichier($_FILES['photo1_candidature']['name']),
        ':photo2_candidature'=>nettoyer_nom_fichier($_FILES['photo2_candidature']['name']),
        ':fiche_technique_candidature'=>nettoyer_nom_fichier($_FILES['fiche_technique_candidature']['name']),
        ':document_sacem_candidature'=>nettoyer_nom_fichier($_FILES['document_sacem_candidature']['name'])
        ));

        #On affiche la page montrant à l'utilisateur que sa candidature a bien été prise en compte
        Flight::render("candidature_success.tpl",array());
    }

});

#Route de la page affichant que la candidature de l'utilisateur a été prise en compte
Flight::route('/candidature_success', function(){
    Flight::render("candidature_success.tpl",array());
});

#Route pour l'inscription en méthode GET
Flight::route('GET /register', function(){
    Flight::render("register.tpl",array());
});

#Route pour l'inscription en méthode POST, faisant des tests sur les données
Flight::route('POST /register', function(){
    $form = Flight::request()->data; #Même utilité que plus haut
    $messages = array();

    //On verifie ici si les champs ne sont pas vide
    if (empty(trim($form->nom_utilisateur)))
     $messages['nom_utilisateur']="Le champs nom est obligatoire";
    else
    {
        #On fait une requête base de donnée afin de savoir si le nom d'utilisateur est déjà utilisé.
        $st = Flight::get('PDO')->prepare("SELECT nom_utilisateur FROM utilisateur WHERE nom_utilisateur=:nom_utilisateur");
        $st -> execute(array(':nom_utilisateur' => $form->nom_utilisateur));
        if ($st->rowCount())
            $messages['nom_utilisateur']="Le nom d'utilistateur saisi est déjà utilisé";
    }
    #On teste si le mot de passe est bien entré
    if (empty(trim($form->mdp_utilisateur)))
     $messages['mdp_utilisateur']="Le champs mot de passe est obligatoire";
    #Et s'il respecte les conditions (>8 caractères)
    else if (strlen($form->mdp_utilisateur) < 8)
     $messages['mdp_utilisateur']="Le Mot de passe est trop court";

     //On verifie si le champs email est bien remplie, si celle ci est correcte et si celle ci n'est pas déjà utilisée
    if (empty(trim($form->email_utilisateur)))
     $messages['email_utilisateur']="Le champs email est obligatoire";
    else if (!filter_var($form->email_utilisateur, FILTER_VALIDATE_EMAIL))
     $messages['email_utilisateur']="L'adresse email saisie est invalide";
    else {
        $st = Flight::get('PDO')->prepare("SELECT email_utilisateur FROM utilisateur WHERE email_utilisateur=:email_utilisateur");
        $st -> execute(array(':email_utilisateur' => $form->email_utilisateur));
        if ($st->rowCount())
        $messages['email_utilisateur']="L'adresse email saisie est déjà utilisée";
    }
    //Affiche les messages d'erreurs si un critére n'est pas rempli
    if (count($messages)>0)
        Flight::render("register.tpl",array("erreur" => $messages, "valeurs" => $_POST));
    else{
        #Sinon on envoie en base de données
        $st = Flight::get ('PDO')->prepare("insert into utilisateur (nom_utilisateur,email_utilisateur,mdp_utilisateur) values(:nom_utilisateur,:email_utilisateur,:mdp_utilisateur)");

        $st->execute(array(':nom_utilisateur' => $form->nom_utilisateur, ':email_utilisateur' => $form->email_utilisateur, ':mdp_utilisateur' => password_hash($form->mdp_utilisateur, PASSWORD_DEFAULT)));

        #On redirige vers une page affichant a l'utilisateur qu'il a bien été inscript
        Flight::redirect("/success");
    }
});

#Route de la page montrant que l'inscription a été validée
Flight::route('/success', function(){
    Flight::render("success.tpl",array());
});


#Route vers laquelle est redirigé l'utilisateur s'il essaie d'accéder à des pages auxquels il n'a pas accès (cf page admin)
Flight::route('/erreur', function(){
    Flight::render("erreur.tpl",array());
});

#On vérifie si l'utilisateur est un admin et on affiche la liste des candidatures sinon on redirige vers la page d'erreur
Flight::route('GET /listecandidature', function(){
    if((!empty($_SESSION)))
    {
        if (($_SESSION['utilisateur']['admin'] == 1))
            Flight::render("listeCandidature.tpl",array());
        else
            Flight::redirect("/erreur");
    }
    else
        Flight::redirect("/erreur");
});

#Même explication mais pour la liste des utilisateurs
Flight::route('/listeutilisateur', function(){
    if((!empty($_SESSION)))
    {
        if (($_SESSION['utilisateur']['admin'] == 1))
            Flight::render("listeUtilisateur.tpl",array());
        else
            Flight::redirect("/erreur");
    }

    else
        Flight::redirect("/erreur");
});

#On utilise la méthode GET pour récupérer la valeur @id dans l'url et on l'utilise pour afficher les détails de la candidature
Flight::route('GET /candidatureDetail-@id', function($id){
    $requete = get_results("SELECT * FROM candidature WHERE $id = id_candidature");
    $nomDepartement=get_results("SELECT departement_nom FROM departement dp, candidature cd WHERE dp.departement_id=departement_candidature AND $id = id_candidature"); #lie la table candidature et la table département
    $nomScene=get_results("SELECT nom_scene FROM scene sc, candidature cd WHERE sc.id_scene=cd.scene_candidature AND $id = id_candidature"); # lie la table scène et candidature
    Flight::render("candidatureDetail.tpl",array('idGroupe' => $id,'requete'=>$requete, 'nomDepartement'=>$nomDepartement,'nomScene'=>$nomScene));
});

#Route de la page de connexion, la méthode GET permet l'envoie des informations
Flight::route('GET /login', function(){
    Flight::render("login.tpl",array());
});

#Route de la page de connexion en méthode POST afin d'analyser les résultats du formulaire de connexion
Flight::route('POST /login', function(){
    $form = Flight::request()->data; #cf en haut
    $messages = array();

    //Verification si le champs mot de passe n'est pas vide, si le champs email n'est pas vide, si celle ci est valide et qu'elle est présente dans la BDD
    if (empty(trim($form->mdp_utilisateur)))
        $messages['mdp_utilisateur']="Le champs mot de passe est obligatoire";
    else if (strlen($form->mdp_utilisateur) < 8)
        $messages['mdp_utilisateur']="Le Mot de passe est trop court";
    if (empty(trim($form->email_utilisateur)))
        $messages['email_utilisateur']="Le champs email est obligatoire";
    else if (!filter_var($form->email_utilisateur, FILTER_VALIDATE_EMAIL))
        $messages['email_utilisateur']="L'adresse email saisie est invalide";
    else {
        $st = Flight::get('PDO')->prepare("SELECT * FROM utilisateur WHERE email_utilisateur=:email_utilisateur");
        $st -> execute(array(':email_utilisateur' => $form->email_utilisateur));

        if (!$st->rowCount())
            $messages['email_utilisateur']="L'adresse email saisie est inconnue";
        else {
            //Verifie si le mot de passe est bien celui de l'adresse email
            $stock = $st -> fetch();
            if (!(password_verify($form->mdp_utilisateur, $stock['mdp_utilisateur']))){
                $messages['mdp_utilisateur']="Le Mot de passe est incorrect";
            }
        }
    }

    $email_utilisateur= $form->email_utilisateur;
    $admin = get_result('SELECT admin FROM utilisateur WHERE email_utilisateur="'.$email_utilisateur.'"'); # on récupère si l'utilisateur est admin ou non


    if (count($messages)>0) #s'il n'y a pas de messages d'erreur
        Flight::render("login.tpl",array("erreur" => $messages, "valeurs" => $_POST));

    //la session utilisateur prend toutes les informations de l'utilisateur
    else {
        $_SESSION['utilisateur'] = array('email_utilisateur' => $form->email_utilisateur, 'nom_utilisateur' => $stock['nom_utilisateur'],'admin'=> $admin['admin'][0]);
        Flight::redirect("/"); # on redirige vers l'index
    }

});

//On affiche le profil uniquement si un utilisateur est connecté
Flight::route('GET /profil', function(){
    if (isset($_SESSION['utilisateur'])){ #test de connexion (session vide = utilisateur non connecté)
        Flight::render("profil.tpl",array());
    }
    else
        Flight::redirect("/login"); #Sinon on le redirige vers la page de connexion
});

//Vide la tableau avec les informations de l'utilisateur pour le déconnecter
Flight::route('GET /logout', function(){
    $_SESSION = array();

    Flight::redirect("/");
});
