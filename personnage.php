<?php

include_once 'includes/header.php';
require_once 'utils/legendeRequest.php';

$id         = (int)htmlentities($_GET['id']);
$personnage = getPersonnageById($dbconnect, $id);

?>

    <div class="card text-white bg-primary mb-3 mt-5">
        <div class="card-header"><?= $personnage['profession'] ?></div>

        <div class="card-body">
            <h4 class="card-title"><?= $personnage['nom'] ?></h4>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet atque consequatur
                doloribus earum esse facere harum hic incidunt laboriosam laudantium modi necessitatibus odio placeat
                praesentium, repellendus sed, sunt, veniam. Earum?.</p>
        </div>
    </div>

<?php

include_once 'includes/footer.php';