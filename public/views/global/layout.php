<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="./public/assets/css/styles.css">
  <title>SpeedyEats | KO</title>
</head>
<body>
  
  <main>
    <?php
      require './src/controllers/' . $route . '_controller.php';
    ?>
  </main>

</body>
</html>