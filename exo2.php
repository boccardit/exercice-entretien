<?php
/**
 * Récupérer le nom et le prenom dans le formulaire ci-dessous
 * et l'afficher dans la div resultat si et seulement si le
 * formulaire a été submit
 */

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo 2</title>
</head>
<body>
    <form action="exo2.php" method="post">
        <div>
            <label for="nom">Nom</label>
            <input type="text" name="nom" id="nom">
        </div>
        <div>
            <label for="prenom">Prenom</label>
            <input type="text" name="prenom" id="prenom">
        </div>
        <input type="submit" value="Envoyer">
    </form>
    <div id="resultat">
        Cette personne s'appele NOM Prenom
    </div>
</body>
</html>