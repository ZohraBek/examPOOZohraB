<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste de motos</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Liste de motos</h1>
        <?php foreach ($motos as $moto): ?>
        <li>
            <strong>Marque :</strong> <?php echo $moto->getBrand(); ?><br>
            <strong>Modèle :</strong> <?php echo $moto->getModel(); ?><br>
            <strong>Type :</strong> <?php echo $moto->getType(); ?><br>
            <strong>Prix :</strong> <?php echo $moto->getPrice(); ?><br>
            <img src="<?php echo $moto->getImage(); ?>" alt="Image de la moto"><br>
            <a href="show.php<?php echo $moto->getId(); ?>">Voir les détails</a>
        </li>
    <?php endforeach; ?>

        <form action="" method="get" class="mb-3">
            <div class="form-group">
                <label for="type">Filtrer par type :</label>
                <select name="type" id="type" class="form-control">
                    <option value="">Toutes</option>
                    <option value="Enduro">Enduro</option>
                    <option value="Custom">Custom</option>
                    <option value="Sportive">Sportive</option>
                    <option value="Roadster">Roadster</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Filtrer</button>
        </form>

        <table class="table">
            <thead>
                <tr>
                    <th>Marque</th>
                    <th>Modèle</th>
                    <th>Type</th>
                    <th>Prix</th>
                    <th>Image</th>
                </tr>
            </thead>
            <tbody>
                <!-- Contenu du tableau -->
            </tbody>
        </table>

        <a href="add.php" class="btn btn-success">Ajouter une nouvelle moto</a>
        <a href="show.php" class="btn btn-success">Voir les détails</a>
        <a href="edit.php" class="btn btn-success">Editer une moto </a>
        <a href="delete.php" class="btn btn-success">Supprimer une moto </a>
    </div>

    <!-- Intégration de Bootstrap JavaScript pour les fonctionnalités avancées -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
