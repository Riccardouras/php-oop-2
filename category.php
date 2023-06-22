<!DOCTYPE html>
<html>
<head>
    <html lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animal Shop - Categorie</title>
    <style>
        .card {
            display: inline-block;
            width: 200px;
            padding: 10px;
            margin: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .card img {
            width: 100%;
            height: auto;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <h1>Categoria: <?php echo $_GET['categoria']; ?></h1>
    
    <h2>Prodotti:</h2>
    <?php
    $categoria = $_GET['categoria'];
    include './product.php';
    // var_dump($prodotti);
  
    foreach ($prodotti as $prodotto) {
        if (strcasecmp($prodotto->categoria, $categoria) === 0) {
            echo '<div class="card">';
            echo '<img src="' . $prodotto->immagine . '" alt="' . $prodotto->nome . '">';
            echo '<h3>' . $prodotto->nome . '</h3>';
            echo '<p>Prezzo: $' . $prodotto->prezzo . '</p>';
            echo '<p> Categoria: ' .  $prodotto->categoria . '</p>';
            echo '</div>';
        }
    }
    
    ?>
    <br>
    <a href="index.php">Torna alla homepage</a>
</body>
</html>

