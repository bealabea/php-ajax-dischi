<!-- Milestone 2: Attraverso l’utilizzo di axios: al caricamento della pagina axios chiederà,
attraverso una chiamata api, i dischi a php e li stamperà attraverso vue. -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.20.0/axios.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <title>Dischi js</title>
</head>

<body>
    <div id="app">
        <header class="p-3 d-flex justify-content-between">
            <img src="img/spotify-logo.png" alt="" />
        </header>

        <main class="disc-container d-flex flex-wrap py-5">
        <!-- ciclo v-for per stampare tutti i dischi -->
            <div class="box text-center p-3 m-3" v-for="disc in discList">
                <img class="img-fluid pb-3" :src="disc.poster" alt="">
                <h5 class="text-uppercase">{{disc.title}}</h5>
                <div class="pt-2 disc-info">{{disc.author}}</div>
                <div class="disc-info">{{disc.year}}</div>
            </div>

        </main>
    </div>

    <script src="js/script.js"></script>
</body>

</html>