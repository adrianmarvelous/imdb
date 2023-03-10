<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<style>
    body{
        background-image: url("resource/background/pexels-pixabay-33129.jpg");
        background-repeat: no-repeat;
        background-size: cover;
        background-attachment:fixed;
    }
    .backcover{
        display:flex;
        justify-content:center;
        padding:50px;
    }
    .cover{
        height:100%;
        width:100%;
        display:flex;
        background-color: rgba(255, 255, 255, .15);  
        backdrop-filter: blur(10px);
        border-radius:50px;
        border:1px solid white;
    }
    .div1{
        width:100%;
        height:100%;
    }
</style>
<body>
    
<nav class="navbar navbar-expand-lg" style="
    background: rgba(255, 255, 255, 0.9); // Make sure this color has an opacity of less than 1
    backdrop-filter: blur(8px); // This be the blur;
    width:100%;
    display:flex;
  <div class="logo">
      <a style="font-size:48px;margin-left:50px" class="navbar-brand" href="#">IMDB</a>
  </div>
  <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      </ul>
      <div class="d-flex" style="">
          <ul class="navbar-nav me-auto mb-2 mb-lg-3">
              <!--<li class="nav-item" style="font-size:24px;margin:20px;font-family: 'Anton', sans-serif;">
                  <a class="nav-link" href="?pages=">Home <span class="sr-only"></span></a>
              </li>
              <li class="nav-item" style="font-size:24px;margin:20px;font-family: 'Anton', sans-serif;">
                  <a class="nav-link" href="calendar/calendar.php">Booking<span class="sr-only"></span></a>
              </li>
              <li class="nav-item" style="font-size:24px;margin:20px;font-family: 'Anton', sans-serif;">
                  <a class="nav-link" href="?pages=index_kegiatan">Kegiatan<span class="sr-only"></span></a>
              </li>
              <li class="nav-item" style="font-size:24px;margin:20px;font-family: 'Anton', sans-serif;">
                  <a class="nav-link" href="login/login_page.php">Login<span class="sr-only"></span></a>
              </li>-->
          </ul>
      </div>
      </div>
  </div>
</nav>
    <div class="backcover">
        <div class="cover">
            <div class="div1" style="">
                <?php
                    if(@htmlentities($_GET['pages']) == ""){
                        include 'home.php';
                    }
                ?>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>    
</body>
</html>