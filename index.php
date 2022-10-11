<?php

require_once 'vendor/autoload.php';

use Guill\Ex3composernamespaces\manager\PersonneManager;

$listePersonnes = PersonneManager::create(10);

//$personne = new PersonneManager();
//$personne->create();

?>

<table>
    <tr>
        <th>Prénom</th>
        <th>Nom</th>
        <th>Adresse</th>
    </tr>
    <?php
    foreach ($listePersonnes as $personne) {
    ?>
    <tr>
        <td><?php echo $personne->getNom(); ?></td>
    </tr>
    <?php
    }
    ?>
</table>

