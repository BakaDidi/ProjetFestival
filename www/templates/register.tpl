{extends file='layout.tpl'} <!-- On charge le layout -->
{block name=title}Register{/block}
{block name=body}
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
                                <input class="form-control" type="text" id="nom_utilisateur"name="nom_utilisateur" placeholder="Nom" value="{$valeurs.nom_utilisateur|escape|default:''}"> <!-- on récupère la valeur saisie par l'utilisateur et la resaisie automatiquement en cas d'erreur -->
                                <small class="error">{$erreur.nom_utilisateur|default:''}</small>
                                <!-- On affiche les messages d'erreurs en petit sous les champs consernés-->
                            </div>
                            <div class="mb-2">
                                <label for="email_utilisateur">Email:</label>
                                <input class="form-control" type="email" id="email_utilisateur" name="email_utilisateur" placeholder="Adresse mail" value="{$valeurs.email_utilisateur|escape|default:''}">
                                <small class="error">{$erreur.email_utilisateur|default:''}</small>
                            </div>
                            <div class="mb-2">
                                <label for="mdp_utilisateur">Mot de passe :</label>
                                <input class="form-control" type="password" id="mdp_utilisateur" name="mdp_utilisateur" placeholder="Minimum 8 caractères"">
                                <small class="error">{$erreur.mdp_utilisateur|default:''}</small>
                            </div>
                            <button class="btn btn-primary btn-lg btn-block" type="submit">S'inscrire</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
{/block}