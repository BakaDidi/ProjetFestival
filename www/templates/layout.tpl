<html>
<head>
    <!--On définit le bloc de titre de la page-->
    <title>{block name=title}Default Page Title{/block}</title>
    <!--On charge les fichiers css-->
    {block name=head}
        <link rel="stylesheet" href="https://unpkg.com/purecss@2.0.3/build/pure-min.css" integrity="sha384-cg6SkqEOCV1NbJoCu11+bm0NvBRc8IYLRGXkmNrqUBfTjmMYwNKPWBTIKyw9mHNJ" crossorigin="anonymous">
        <link rel="stylesheet" href="templates/style.css">
        <link rel="stylesheet" href="templates/boostrap/css/bootstrap.min.css">
    {/block}
</head>
<body>
<!-- On charge le menu et la navbar-->
{block name=menu}
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href='./'>Festival de musique</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <!-- On change les boutons si l'utilisateur n'est pas connecté -->
                    {if !isset($utilisateur)}
                        <li class="nav-item">
                            <a class="nav-link active" href='register'>inscription</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href='login'>connexion</a>
                        </li>
                    {else}
                        <li class="nav-item">
                            <a class="nav-link" href='profil'>profil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href='logout'>Se déconnecter</a>
                        </li>
                        <!-- On vérifie en utilisant l'id de l'utilisateur s'il a déjà formulé une candidature et on change le bouton
                        soit en "ma candidature" qui redirige vers la page permettant de consulter sa candidature
                        Soit en "Candidater" qui redirige vers le formulaire de candidature-->
                        {php}
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
                        {/php}
                        <!-- On regarde si l'utilisateur est connecté en tant qu'admin et on affiche des boutons supplémentaire pour aller sur les pages "Liste candidatures" et "Liste utilisateurs-->
                        {if $utilisateur.admin}
                            <li class="nav-item">
                                <a class="nav-link" href="listeCandidature">Liste des candidatures</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="listeutilisateur">Liste des utilisateurs</a>
                            </li>
                        {/if}
                    {/if}
                </ul>
            </div>
        </div>
    </nav>
{/block}
{block name=body}
{/block}
{block name=script}
    <!-- On charge les fichiers JS nécessaire au fonctionnement de boostrap -->
    <script src="templates/boostrap/js/bootstrap.min.js"></script>
    <script src="templates/boostrap/js/jquery.min.js"></script>
    <script src="templates/boostrap/js/popper.min.js"></script>
{/block}
</body>
</html>