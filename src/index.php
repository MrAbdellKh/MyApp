<?php
// 👋 Page d'accueil d'un mini site e-commerce
$date = date('d/m/Y H:i:s');
?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Mini E-Commerce</title>
  <style>
    body {
      margin: 0;
      font-family: 'Segoe UI', sans-serif;
      background-color: #121212;
      color: #fff;
    }

    header {
      background-color: #1f1f1f;
      padding: 20px;
      text-align: center;
      box-shadow: 0 2px 10px rgba(0,0,0,0.5);
    }

    header h1 {
      margin: 0;
      font-size: 2.5em;
      color: #00d1b2;
    }

    .intro {
      text-align: center;
      margin: 20px auto;
    }

    .products {
      display: flex;
      justify-content: center;
      flex-wrap: wrap;
      gap: 20px;
      padding: 20px;
    }

    .card {
      background-color: #1e1e1e;
      border-radius: 10px;
      width: 250px;
      padding: 15px;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .card:hover {
      transform: scale(1.05);
      box-shadow: 0 0 20px rgba(0, 209, 178, 0.5);
    }

    .card img {
      width: 100%;
      border-radius: 10px;
    }

    .card h3 {
      margin: 10px 0 5px;
      font-size: 1.2em;
    }

    .card p {
      margin: 5px 0;
      color: #ccc;
    }

    .buy-btn {
      background-color: #00d1b2;
      color: #000;
      border: none;
      padding: 10px 20px;
      border-radius: 6px;
      cursor: pointer;
      transition: background 0.3s ease;
    }

    .buy-btn:hover {
      background-color: #00a896;
    }

    footer {
      text-align: center;
      padding: 15px;
      color: #888;
    }
  </style>
</head>
<body>

  <header>
    <h1>🛍️ Bonjour Amigooos</h1>
  </header>

  <div class="intro">
    <p>Bienvenue dans le monde de DevOps & E-Commerce !</p>
    <p>Date et heure actuelles : <strong><?php echo $date; ?></strong></p>
  </div>

  <div class="products">
    <div class="card">
      <img src="https://via.placeholder.com/250x150.png?text=Produit+1" alt="Produit 1">
      <h3>Casque Audio</h3>
      <p>59,99 €</p>
      <button class="buy-btn">Acheter</button>
    </div>
    <div class="card">
      <img src="https://via.placeholder.com/250x150.png?text=Produit+2" alt="Produit 2">
      <h3>Montre Connectée</h3>
      <p>129,99 €</p>
      <button class="buy-btn">Acheter</button>
    </div>
    <div class="card">
      <img src="https://via.placeholder.com/250x150.png?text=Produit+3" alt="Produit 3">
      <h3>Lunettes VR</h3>
      <p>89,99 €</p>
      <button class="buy-btn">Acheter</button>
    </div>
  </div>

  <footer>
    <p>&copy; <?php echo date('Y'); ?> DevOps E-Commerce</p>
  </footer>

</body>
</html>
