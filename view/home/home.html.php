<?php

ob_start();
?>

<div class="box">
    <h3>Mes infos</h3>

    <hr>

    <div class="card-deck">
        <div class="card">
            <div class="card-title-wrapper">
                <h5 class="card-title">CV</h5>
            </div>

            <div class="card-body">
                <a class="card-body-element" href="/cv/nicolas_renvoise_cv.pdf">Voir le CV en PDF</a>
            </div>
        </div>

        <div class="card">
            <div class="card-title-wrapper">
                <h5 class="card-title">Profil LinkedIn</h5>
            </div>

            <div class="card-body">
                <a class="card-body-element" href="https://www.linkedin.com/in/nicolas-renvoise-developer/">Voir le profil</a>
            </div>
        </div>

        <div class="card">
            <div class="card-title-wrapper">
                <h5 class="card-title">Profil GitHub</h5>
            </div>

            <div class="card-body">
                <a class="card-body-element" href="https://github.com/nicordev">Voir le profil</a>
            </div>
        </div>
    </div>
</div>

<div class="box">
    <h3>La formation OpenClassrooms</h3>

    <hr>

    <div class="card-deck">
        <div class="card">
            <div class="card-title-wrapper">
                <h5 class="card-title">Développeur d'application php/symfony</h5>
            </div>

            <div class="card-body">
                <a class="card-body-element" href="https://openclassrooms.com/fr/paths/59-developpeur-dapplication-php-symfony">Voir le contenu de la formation</a>
            </div>
        </div>
    </div>
</div>

<div class="box">
    <h3>Mes projets liés à la formation</h3>

    <hr>

    <div class="card-deck">
        <div class="card" >
            <div class="card-title-wrapper">
                <h5 class="card-title">Intégrez un thème Wordpress pour un client</h5>
            </div>

            <div class="card-body">
                <a class="card-body-element" href="https://ocp2.nicordev.com">Voir le site</a>
            </div>
        </div>

        <div class="card">
            <div class="card-title-wrapper">
                <h5 class="card-title">Analysez les besoins de votre client pour son Festival de films</h5>
            </div>

            <div class="card-body">
                <a class="card-body-element" href="https://ocp3.nicordev.com">Voir le site</a>
                <a class="card-body-element" href="https://github.com/nicordev/formation-oc-php-projet3-livrables">Voir le code</a>
            </div>
        </div>

        <div class="card">
            <div class="card-title-wrapper">
                <h5 class="card-title">Concevez la solution technique d'une application de restauration en ligne, Express Food</h5>
            </div>

            <div class="card-body">
                <a class="card-body-element" href="https://github.com/nicordev/formation-oc-php-projet4-bd">Voir les fichiers</a>
            </div>
        </div>

        <div class="card">
            <div class="card-title-wrapper">
                <h5 class="card-title">Créez votre premier blog en PHP</h5>
            </div>

            <div class="card-body">
                <a class="card-body-element" href="https://ocp5.nicordev.com">Voir le site</a>
                <a class="card-body-element" href="https://github.com/nicordev/formation-oc-php-projet5-blog">Voir le code</a>
            </div>
        </div>

        <div class="card">
            <div class="card-title-wrapper">
                <h5 class="card-title">Développez de A à Z le site communautaire SnowTricks</h5>
            </div>

            <div class="card-body">
                <a class="card-body-element" href="https://ocp6.nicordev.com/">Voir le site</a>
                <a class="card-body-element" href="https://github.com/nicordev/formation-oc-php-projet6-symfony">Voir le code</a>
            </div>
        </div>

        <div class="card" >
            <div class="card-title-wrapper">
                <h5 class="card-title">Créez un web service exposant une API</h5>
            </div>

            <div class="card-body">
                <p class="card-body-element">Vous pouvez tester les endpoints de l'API avec <a href="https://insomnia.rest/">insomnia</a> sur ocp7.nicordev.com</p>
                <a class="card-body-element" href="http://ocp7.nicordev.com/api/doc">Voir la documentation (/api/doc)</a>
                <a class="card-body-element" href="https://github.com/nicordev/formation-oc-php-projet7-api-rest">Voir le code</a>
            </div>
        </div>

        <div class="card" >
            <div class="card-title-wrapper">
                <h5 class="card-title">Améliorez une application existante de ToDo & Co</h5>
            </div>

            <div class="card-body">
                <a class="card-body-element" href="https://ocp8.nicordev.com/login">Voir le site (login : Jim, password : pwdRocks!0)</a>
                <a class="card-body-element" href="https://nicordev.github.io/formation-oc-php-projet8-todoco/">Voir la documentation</a>
                <a class="card-body-element" href="https://github.com/nicordev/formation-oc-php-projet8-todoco">Voir le code</a>
            </div>
        </div>
    </div>
</div>

<div class="box">
    <h3>Mes projets perso (antérieurs à la formation)</h3>

    <hr>

    <div class="card-deck">
        <div class="card">
            <div class="card-title-wrapper">
                <h5 class="card-title">Un site pour s'orienter en balade</h5>
            </div>

            <div class="card-body">
                <a class="card-body-element" href="https://carte.ovh">Voir le site</a>
            </div>
        </div>

        <div class="card">
            <div class="card-title-wrapper">
                <h5 class="card-title">Un site sur la course pieds nus</h5>
            </div>

            <div class="card-body">
                <a class="card-body-element" href="https://sansgodasse.com">Voir le site</a>
            </div>
        </div>
    </div>
</div>
<?php

return ob_get_clean();
