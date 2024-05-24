<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Supprimer une moto</title>
    <!-- Intégration de Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1>Supprimer la moto</h1>
        <?php if ($moto): ?>
            <p>Voulez-vous vraiment supprimer la moto suivante ?</p>
            <div class="card">
                <div class="card-body">
                    <p class="card-text"><strong>Marque :</strong> <?php echo $moto->getBrand(); ?></p>
                    <p class="card-text"><strong>Modèle :</strong> <?php echo $moto->getModel(); ?></p>
                    <p class="card-text"><strong>Type :</strong> <?php echo $moto->getType(); ?></p>
                    <p class="card-text"><strong>Prix :</strong> <?php echo $moto->getPrice(); ?></p>
                    <img src="<?php echo $moto->getImage(); ?>" class="card-img-top" alt="Image de la moto">
                </div>
                <div class="card-footer">
                    <form method="post" action="/index.php?action=delete&id=<?php echo $moto->getId(); ?>">
                        <button type="submit" class="btn btn-danger">Oui, supprimer</button>
                        <a href="/index.php?action=index" class="btn btn-secondary">Annuler</a>
                    </form>
                </div>
            </div>
        <?php else: ?>
            <div class="alert alert-danger" role="alert">
                Moto non trouvée.
            </div>
            <a href="index.php?action=index" class="btn btn-primary">Retour à la liste des motos</a>
        <?php endif; ?>
    </div>

    <!-- Intégration de Bootstrap JavaScript pour les fonctionnalités avancées -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
