

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dischi JSON</title>
    <link rel="stylesheet" href="./assets/css/style.css">
</head>
<body>
    <div id="app">
        <div class="container">
            <div class="disco" v-for="disco in dischi">
                <div class="image">
                    <img :src="disco.poster" alt="">
                </div>
                <div class="text">
                    <h3>{{ disco.title }}</h3>
                    <p>{{ disco.author }}</p>
                    <h4>{{ disco.year }}</h4>
                </div>
            </div>
        </div>
    </div>

    <!-- Axios -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.6.8/axios.min.js" 
    integrity="sha512-PJa3oQSLWRB7wHZ7GQ/g+qyv6r4mbuhmiDb8BjSFZ8NZ2a42oTtAq5n0ucWAwcQDlikAtkub+tPVCw4np27WCg==" 
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Vue -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <!-- script -->
    <script src="./assets/js/script.js"></script>
</body>
</html>