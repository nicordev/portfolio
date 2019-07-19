<?php

ob_start();
?>
<section class="content">
    <div class="box">
        <h3>La formation OpenClassrooms</h3>

        <div class="card-deck">
            <a class="card" href="https://openclassrooms.com/fr/paths/59-developpeur-dapplication-php-symfony">
                <h5 class="card-title">Développeur d'application php/symfony</h5>
                <p class="card-body">Voir le contenu de la formation</p>
            </a>
        </div>
    </div>

    <div class="box">
        <h3>Mes projets liés à la formation</h3>

        <h4>Projets réalisés</h4>

        <div class="card-deck">
            <a class="card" href="https://formation-oc-php.sansgodasses.com/projet-2/">
                <h5 class="card-title">Intégrez un thème Wordpress pour un client</h5>
                <p class="card-body">Voir le site</p>
            </a>

            <a class="card" href="https://formation-oc-php.sansgodasses.com/projet-3/">
                <h5 class="card-title">Analysez les besoins de votre client pour son Festival de films</h5>
                <p class="card-body">Voir le site</p>
            </a>

            <a class="card" href="https://formation-oc-php.sansgodasses.com/projet-4/">
                <h5 class="card-title">Concevez la solution technique d'une application de restauration en ligne, Express Food</h5>
                <p class="card-body">Voir les diagrammes UML et le fichier .sql</p>
            </a>

            <a class="card" href="https://blog.sansgodasses.com/">
                <h5 class="card-title">Créez votre premier blog en PHP</h5>
                <p class="card-body">Voir le site</p>
            </a>

            <a class="card" href="https://snowtricks.sansgodasses.com/">
                <h5 class="card-title">Développez de A à Z le site communautaire SnowTricks</h5>
                <p class="card-body">Voir le site</p>
            </a>
        </div>

        <h4>Projets à venir...</h4>

        <ul>
            <li>Développez de A à Z le site communautaire SnowTricks</li>
            <li>Créez un web service exposant une API</li>
            <li>Améliorez une application existante de ToDo & Co</li>
        </ul>
    </div>

    <div class="box">
        <h3>Mes projets perso</h3>

        <div class="card-deck">
            <a class="card" href="https://carte.ovh">
                <h5 class="card-title">Un site pour s'orienter en balade</h5>
                <p class="card-body">Voir le site</p>
            </a>

            <a class="card" href="https://sansgodasses.com">
                <h5 class="card-title">Un site sur la course pieds nus</h5>
                <p class="card-body">Voir le site</p>
            </a>
        </div>
    </div>
</section>
<?php

return ob_get_clean();