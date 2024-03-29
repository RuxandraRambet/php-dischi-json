<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Dischi JSON</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <!-- Stylesheet -->
    <link rel="stylesheet" href="src/css/style.css">
</head>

<body>
    <div id="app">
        <header class="p-5 mb-5">
                <div class="logo-container">
                    <img src="src/img/logo-small.svg" alt="logo">
                </div>
        </header>
        <main>
            <div class="container text-center">
                <ul class=" list-unstyled d-flex flex-wrap album">
                    <li v-for="(disc, index) in discs" class="p-4 album-container">
                        <div class="card">
                            <img :src="disc.album_poster" :alt="disc.album_name">
                        </div>
                        <div class="disc-info text-white py-3">
                            <h3>{{ disc.album_name }}</h3>
                            <h4>{{ disc.artist }}</h4>
                            <h4>{{ disc.year }}</h4>
                        </div>
                    </li>
                </ul>
            </div>
        </main>
    </div>



    <!-- Vue JS -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <!-- Axios -->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <!-- My JS -->
    <script src="src/js/index.js"></script>


</body>

</html>