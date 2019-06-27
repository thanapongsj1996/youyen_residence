<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <!-- Prevent Cache  -->
  <link rel="stylesheet" href="assets/css/style.css?v=<?=time()?>">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Prompt">
  <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.min.css">
  <script src="https://kit.fontawesome.com/56a5f7cfae.js"></script>

  <title>You yen Residence</title>
  <style>
    html {
      scroll-behavior: smooth;
    }

    .progress-container {
      width: 100%;
      height: 8px;
      background: rgba(0, 0, 0, 0.6);
    }

    .progress-bar {
      height: 8px;
      background: rgba(217, 125, 17, 0.3);
      ;
      width: 0%;
    }

    
  </style>
</head>

<body id="body">
  <!-- NavBar -->
  <div class="fixed-top">
    <nav class="navbar navbar-expand-lg navbar-dark" style="background: rgba(0, 0, 0 , 0.6); padding:5px">
      <div class="container">
        <a class="navbar-brand" href="#body">You Yen Residence</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#services">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#rooms">Rooms</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#location">Location</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contact">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="progress-container sticky-top">
      <div class="progress-bar" id="myBar"></div>
    </div>
  </div>

  <!-- Carousel -->
  <section id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <div class="carousel-img" style="background-image: url('https://images.unsplash.com/photo-1501183638710-841dd1904471?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1950&q=80')">
          <div class="carousel-caption">
            <h1 class="display-4 font-weight-bold">You Yen Residence @ Phuket</h1>
            <p class="lead">Welcome to Phuket, The happiness place</p>
          </div>
          <div class="blackscreen"></div>
        </div>
      </div>
      <div class="carousel-item">
        <div class="carousel-img" style="background-image: url('https://images.unsplash.com/photo-1513694203232-719a280e022f?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1949&q=80')">
          <div class="carousel-caption">
            <h1 class="display-4 font-weight-bold">You Yen Residence @ Phuket</h1>
            <p class="lead">Welcome to Phuket, The happiness place</p>
          </div>
          <div class="blackscreen"></div>
        </div>
      </div>
      <div class="carousel-item">
        <div class="carousel-img" style="background-image: url('https://images.unsplash.com/photo-1493809842364-78817add7ffb?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1950&q=80')">
          <div class="carousel-caption">
            <h1 class="display-4 font-weight-bold">You Yen Residence @ Phuket</h1>
            <p class="lead">Welcome to Phuket, The happiness place</p>
          </div>
          <div class="blackscreen"></div>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </section>

  <!-- Services -->
  <section id="services" class="container my-3 py-5">
    <h1 class="border-short-bottom">Services</h1>
    <div class="row text-center mt-5 mb-5">
      <div class="col-6 col-md-4">
        <i class="fas fa-wifi fa-6x icon-style"></i>
        <h4 class="card-title mt-3">Free Wifi</h4>
      </div>
      <div class="col-6 col-md-4">
        <i class="fas fa-wifi fa-6x icon-style"></i>
        <h4 class="card-title mt-3">Free Wifi</h4>
      </div>
      <div class="col-6 col-md-4">
        <i class="fas fa-wifi fa-6x icon-style"></i>
        <h4 class="card-title mt-3">Free Wifi</h4>
      </div>
      <div class="col-6 col-md-4">
        <i class="fas fa-wifi fa-6x icon-style"></i>
        <h4 class="card-title mt-3">Free Wifi</h4>
      </div>
      <div class="col-6 col-md-4">
        <i class="fas fa-wifi fa-6x icon-style"></i>
        <h4 class="card-title mt-3">Free Wifi</h4>
      </div>
      <div class="col-6 col-md-4">
        <i class="fas fa-wifi fa-6x icon-style"></i>
        <h4 class="card-title mt-3">Free Wifi</h4>
      </div>
    </div>

  </section>

  <!-- 4Images -->
  <section>
    <div class="row container-fluid p-0 m-0">
      <div class="col-6 col-sm p-0"><img style="width:100%" src="https://images.unsplash.com/photo-1499933374294-4584851497cc?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=975&q=80" /></div>
      <div class="col-6 col-sm p-0"><img style="width:100%" src="https://images.unsplash.com/photo-1499933374294-4584851497cc?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=975&q=80" /></div>
      <div class="col-6 col-sm p-0"><img style="width:100%" src="https://images.unsplash.com/photo-1499933374294-4584851497cc?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=975&q=80" /></div>
      <div class="col-6 col-sm p-0"><img style="width:100%" src="https://images.unsplash.com/photo-1499933374294-4584851497cc?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=975&q=80" /></div>
    </div>
  </section>

  <!-- Our Rooms -->
  <section id="rooms" class="container my-3 py-5">
    <h1 class="border-short-bottom">Our Rooms</h1>
    <div class="row justify-content-between text-center">
      <div class="col-12 col-md-4">
        <div class="card mb-3">
          <img src="https://images.unsplash.com/photo-1540000592003-2786d612ef0e?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=60" class="card-img-top" alt="...">
          <div class="card-body">
            <h4 class="card-title d-inline">Delux Room</h4><span class="text-muted"> (20 m<sup>2</sup>)</span>
            <p class="card-text text-muted my-1">800 Baht/Night</p>
            <p class="card-text text-muted my-1">8000 Baht/Month</p>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-4">
        <div class="card mb-3">
          <img src="https://images.unsplash.com/photo-1533008093099-e2681382639a?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1001&q=80" class="card-img-top" alt="...">
          <div class="card-body">
            <h4 class="card-title d-inline">Delux Room</h4><span class="text-muted"> (20 m<sup>2</sup>)</span>
            <p class="card-text text-muted my-1">800 Baht/Night</p>
            <p class="card-text text-muted my-1">8000 Baht/Month</p>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-4">
        <div class="card mb-3">
          <img src="https://images.unsplash.com/photo-1534889156217-d643df14f14a?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1000&q=80" class="card-img-top" alt="...">
          <div class="card-body">
            <h4 class="card-title d-inline">Delux Room</h4><span class="text-muted"> (20 m<sup>2</sup>)</span>
            <p class="card-text text-muted my-1">800 Baht/Night</p>
            <p class="card-text text-muted my-1">8000 Baht/Month</p>
          </div>
        </div>
      </div>
    </div>

  </section>

  <!-- Image Grid -->
  <section class="p-5" style="background-color: #EDECEC">
    <div class="container">
      <div class="row justify-content-center text-center">
        <div class="col-sm-5 px-1">
          <img src="https://images.unsplash.com/photo-1444201983204-c43cbd584d93?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1950&q=80" style="width:100%; margin-top: 8px; vertical-align: middle;">
          <img src="https://images.unsplash.com/photo-1545022388-43a762e088b0?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1950&q=80" style="width:100%; margin-top: 8px; vertical-align: middle;">
          <img src="https://images.unsplash.com/photo-1492139059069-0413793f4c1f?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=60" style="width:100%; margin-top: 8px; vertical-align: middle;">
        </div>
        <div class="col-sm-5 px-1">
          <img src="https://images.unsplash.com/photo-1547110287-71448271b1de?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1867&q=80" style="width:100%; margin-top: 8px; vertical-align: middle;">
          <img src="https://images.unsplash.com/photo-1535827841776-24afc1e255ac?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=975&q=80" style="width:100%; margin-top: 8px; vertical-align: middle;">
          <img src="https://images.unsplash.com/photo-1553444892-20174939d7bb?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1950&q=80" style="width:100%; margin-top: 8px; vertical-align: middle;">
          <img src="https://images.unsplash.com/photo-1545060894-7e7f4895450f?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1952&q=80" style="width:100%; margin-top: 8px; vertical-align: middle;">
        </div>
      </div>
    </div>
  </section>

  <!-- Location -->
  <section id="location" class="container my-3 py-5" style="height:500px">
    <h1 class="border-short-bottom">Location</h1>
  </section>

  <!-- Contact Us -->
  <section id="contact" class="py-5" style="height:500px;background-color: #EDECEC">
    <div class="container">
      <h1 class="border-short-bottom">Contact Us</h1>
    </div>
  </section>

  <!-- Footer -->
  <footer class="footer">
    <span>COPYRIGHT &copy; 2019</span>
    <span>All Rights Reserved. Website by Thanapong Somjai
  </footer>



  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script>
    // When the user scrolls the page, execute myFunction 
    window.onscroll = function() {
      myFunction()
    };

    function myFunction() {
      var winScroll = document.body.scrollTop || document.documentElement.scrollTop; //height from top
      var height = document.documentElement.scrollHeight - document.documentElement.clientHeight; //max height - screen height
      var scrolled = (winScroll / height) * 100;
      document.getElementById("myBar").style.width = scrolled + "%";
    }
  </script>
</body>

</html>