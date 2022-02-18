<!-- Milestone 1: Stampiamo i dischi solo con l’utilizzo di PHP, che stampa direttamente i dischi in pagina:
al caricamento della pagina ci saranno tutti i dischi. -->

<?php
// includo db.php che contiene il mio database sottoforma di array multidimensionale php
include __DIR__ . "/database/db.php"

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Dischi php</title>
</head>
<body>

    <header class="p-3 d-flex justify-content-between">
        <img src="img/spotify-logo.png" alt="" />
    </header>

    <main class="disc-container d-flex flex-wrap py-5">
        <!-- ciclo foreach per stampare tutti i dischi -->
        <?php foreach ($discList as $disc) { ?>
            <div class="box text-center p-3 m-3">
                <img class="img-fluid pb-3" src=<?php echo $disc['poster'] ?> alt="">
                <h5 class="text-uppercase"><?php echo $disc['title'] ?></h5>
                <div class="pt-2 disc-info"><?php echo $disc['author'] ?></div>
                <div class="disc-info"><?php echo $disc['year'] ?></div>
            </div>
        <?php } ?>
    </main>
</body>

</html>