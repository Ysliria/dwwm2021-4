<?php

declare(strict_types=1);

include_once 'includes/header.php';
require_once 'utils/utils.php';
require_once 'utils/legendeRequest.php';

$legendes = getListePersonnage($dbconnect);

$merlin    = [
        'nom'        => 'Merlin',
        'profession' => 'Druide',
        'pv'         => 200,
        'atk'        => 80
];
$arthur    = [
        'nom'        => 'Arthur',
        'profession' => 'Roi',
        'pv'         => 400,
        'atk'        => 60
];
$guenievre = [
        'nom'        => 'Guenièvre',
        'profession' => 'Reine',
        'pv'         => 100,
        'atk'        => 20
];
$perceval  = [
        'nom'        => 'Perceval',
        'profession' => 'Chevalier',
        'pv'         => 300,
        'atk'        => 40
];
$mordred   = [
        'Mordred',
        'Chevalier',
        400,
        40
];

?>

    <section class="mt-5 mb-3">
        <h1>Les personnages</h1>

        <table class="table table-hover mt-3">
            <thead>
            <tr class="table-dark">
                <th scope="col">Nom</th>
                <th scope="col">Profession</th>
                <th scope="col">Points de vie</th>
                <th scope="col">Attaque</th>
                <th scope="col">Détails</th>
            </tr>
            </thead>
            <tbody>
            <?php
            foreach ($legendes as $legend): ?>
                <tr>
                    <th scope="row"><?= $legend['nom'] ?></th>
                    <td><?= $legend['profession'] ?></td>
                    <td><?= $legend['pv'] ?></td>
                    <td><?= $legend['atk'] ?></td>
                    <td><a href="/personnage.php?id=<?= $legend['id'] ?>">details</a></td>
                </tr>
            <?php
            endforeach; ?>
            </tbody>
        </table>
    </section>

    <hr class="mt-5">

    <section>
        <h2>Ajouter un personnage</h2>
        <form action="traitement.php" method="post">
            <div class="form-group">
                <label for="nom" class="col-sm-2 col-form-label">Nom</label>

                <div class="col-sm-10">
                    <input type="text" name="nom" id="nom" class="form-control" required>
                </div>
            </div>

            <div class="form-group">
                <label for="profession" class="col-sm-2 col-form-label">Profession</label>

                <div class="col-sm-10">
                    <select name="profession" id="profession" class="form-select" required>
                        <option value="roi">Roi</option>
                        <option value="reine">Reine</option>
                        <option value="druide">Druide</option>
                        <option value="chevalier">Chevalier</option>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label for="pv" class="col-sm-2 col-form-label">Points de vie</label>

                <div class="col-sm-10">
                    <input type="number" name="pv" id="pv" class="form-control">
                </div>
            </div>

            <div class="form-group">
                <label for="atk" class="col-sm-2 col-form-label">Attaque</label>

                <div class="col-sm-10">
                    <input type="number" name="atk" id="atk" class="form-control">
                </div>
            </div>

            <input type="submit" value="Créer" class="btn btn-primary">
        </form>
    </section>

<?php

/*switch ($arthur['profession']) {
    case 'Chevalier':
        echo 'Sir ! On en a gros ! <br>';
        break;
    case 'Druide':
        echo 'Franchement, une potion pour faire pisser bleu, ça presse forcément la minute ? <br>';
        break;
    case 'Reine':
        echo 'Ah d\'accord, vous me prenez vraiment, pour la reine des pécores. <br>';
        break;
    case 'Roi':
        echo 'Rangez moi ça, débile, la Table Ronde, c\'est pas la fête de l\'artisanat ! <br>';
        break;
    default:
        echo 'Où elle est la poulette ? <br>';
}*/

include_once 'includes/footer.php';
