<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Éditer la moto</title>
    <!-- Intégration de Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1>Éditer la moto</h1>
        <?php if (isset($moto)): ?>
            <form method="post" action="">
                <div class="form-group">
                    <label for="brand">Marque :</label>
                    <input type="text" class="form-control" name="brand" id="brand" value="<?php echo htmlspecialchars($moto->getBrand()); ?>" required>
                </div>
                
                <div class="form-group">
                    <label for="model">Modèle :</label>
                    <input type="text" class="form-control" name="model" id="model" value="<?php echo htmlspecialchars($moto->getModel()); ?>" required>
                </div>

                <div class="form-group">
                    <label for="type">Type :</label>
                    <input type="text" class="form-control" name="type" id="type" value="<?php echo htmlspecialchars($moto->getType()); ?>" required>
                </div>

                <div class="form-group">
                    <label for="price">Prix :</label>
                    <input type="text" class="form-control" name="price" id="price" value="<?php echo htmlspecialchars($moto->getPrice()); ?>" required>
                </div>

                <div class="form-group">
                    <label for="image">Image (URL) :</label>
                    <input type="text" class="form-control" name="image" id="image" value="<?php echo htmlspecialchars($moto->getImage()); ?>" required>
                </div>

                <button type="submit" class="btn btn-primary">Enregistrer les modifications</button>
            </form>
        <?php else: ?>
            <div class="alert alert-danger" role="alert">
                Moto non trouvée.
            </div>
        <?php endif; ?>
    </div>

    <!-- Intégration de Bootstrap JavaScript pour les fonctionnalités avancées -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
