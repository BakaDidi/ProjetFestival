{extends file='layout.tpl'}
{block name=title}Login{/block}
{block name=body}
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
                                <input class="form-control" type="email" id="mail" name="email_utilisateur" placeholder="Adresse Valide" value="{$valeurs.email_utilisateur|escape|default:''}">
                                <small class="error">{$erreur.email_utilisateur|default:''}</small>
                            </div>
                            <div class="mb-2">
                                <label for="password">Mot de passe :</label>
                                <input class="form-control" type="password" id="password" name="mdp_utilisateur" placeholder="Minimum 8 caractères">
                                <small class="error">{$erreur.mdp_utilisateur|default:''}</small>
                            </div>
                            <button class="btn btn-primary btn-lg btn-block" type="submit">Se connecter</button>
                        <div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
{/block}