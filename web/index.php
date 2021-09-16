<?php
  session_name('session');
  session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Home · Komikato</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" 
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" 
        integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous"/>
        
    <!-- Custom styles for this template -->
    <link href="/assets/css/carousel.css" rel="stylesheet">
    <link rel="stylesheet" href="/assets/css/default.css">
  </head>
<body class="d-flex flex-column min-vh-100"> 
  <header>
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-dark">
            <a class="navbar-brand" href="/">
                <img src="https://cdn.discordapp.com/emojis/750342786825584811.png" width="30" height="30"
                    class="d-inline-block align-top" alt="">Komikato</a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                  aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>

            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav ml-auto nav-flex-icons">
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown"
                      aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-user"></i>
                    </a>
                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink-333">
                    <a class="dropdown-item" href="/logout">Logout</a>
                    <a class="dropdown-item" href="/favorite">Favorite</a>
                  </div>
                </li>
              </ul>    
            </div>
    </nav>
  </header>

  <main role="main">
    <div class="container source-mangas">

      <hr class="featurette-divider">

      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="col-lg-4">
          <img class="bd-placeholder-img rounded-circle" width="140" height="140" src="https://gambar.club/uploads/2020/12/fav.png">
            <h2>Komikindo</h2>
            <p>Baca Komik di Source Komikindo.</p>
            <p><a class="btn btn-secondary" href="/komikindo">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->

        <div class="col-lg-4">
          <img class="bd-placeholder-img rounded-circle" src="https://m.mangabat.com/favicon-96x96.png" width="140" height="140">
            <h2>Mangabat</h2>
            <p>Baca Manga di Source Mangabat</p>
            <p><a class="btn btn-secondary" href="/mangabat">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->

        <div class="col-lg-4">
            <img src="https://cdn.discordapp.com/attachments/795771950076133438/882442876926185522/images.png" class="bd-placeholder-img rounded-circle" width="140" height="140"/>
            <h2>Nhentai </h2>
            <p>Baca Doujin di Source Nhentai.</p>
            <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->

      <hr class="featurette-divider">
    </div><!-- /.container -->


    <button type="button" class="btn btn-dark btn-floating btn-lg" id="btn-back-to-top"><i class="fas fa-arrow-up"></i></button>
      <!-- Footer -->
      <footer class="page-footer font-small mt-auto">
        <div class="container">
            <!-- Copyright -->
            <div class="footer-copyright text-center py-3">© 2021 All Rights Reserved.
                <a href="https://github.com/KatowProject/"> KatowProject</a>
            </div>
            <!-- Copyright -->
        </div>
      </footer>
      <!-- Footer -->
  </main>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

      
</body>
</html>
