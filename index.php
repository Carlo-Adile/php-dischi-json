<?php

/* read inside dischi.json and save in json_string */
/* $json_string = file_get_contents('dischi.json'); */
/* decode json */
/* $albumCatalog = json_decode($json_string, true);

var_dump($albumCatalog);
var_dump($json_string);

 */
?>

<!DOCTYPE html>
<html lang="en">
  
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="assets/css/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  <title>Discografia JSON</title>
</head>
<body>

<div id="app">
  <header id="my_header">
    <nav class="navbar">
      <div class="container-fluid ps-4">
        <a class="navbar-brand" href="#">
          <img src="assets/img/spotify_logo.png" alt="Bootstrap" width="60" height="48">
        </a>
      </div>
    </nav>
  </header>

  <main id="my_main">
    <div class="container-xl">
      <div class="row row-cols-4 my-4">
        <div class="col mb-4" v-for="album in albums" :key="album.id">
          <div class="card">
            <img class="card-img-top" :src="album.poster" alt="album.title" />
            <div class="card-body">
              <h5 class="card-title">{{ album.title }}</h5>
              <p class="card-text">{{ album.author }}</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
</div>

<!-- axios -->
<script src='https://cdnjs.cloudflare.com/ajax/libs/axios/1.6.8/axios.min.js' integrity='sha512-PJa3oQSLWRB7wHZ7GQ/g+qyv6r4mbuhmiDb8BjSFZ8NZ2a42oTtAq5n0ucWAwcQDlikAtkub+tPVCw4np27WCg==' crossorigin='anonymous' referrerpolicy='no-referrer'></script>
<!-- vue -->
<script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
<!-- bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<!-- app.js -->
<script src='./assets/js/app.js'></script>

</body>
</html>