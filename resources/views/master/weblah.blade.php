
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>daffa dan ari - Start Bootstrap Theme</title>

  <!-- Bootstrap core CSS -->
  <link href="{{ asset('weblen/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="{{ asset('weblen/css/business-casual.min.css')}}" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('weblen/tgss/css/bootstrap.css')}}"/> 

</head>

<body>

  <h1 class="site-heading text-center text-white d-none d-lg-block">
    <span class="site-heading-upper text-primary mb-3">Masuk Gratis Keluar Bayar</span>
    <span class="site-heading-lower">Kedai kopi Polo</span>
  </h1>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
    <div class="container">
      <a class="navbar-brand text-uppercase text-expanded font-weight-bold d-lg-none" href="#">Start Bootstrap</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item active px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="weblah.blade.php">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Coffe
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Kopi Hitam</a>
            <a class="dropdown-item" href="#">Kopi Susu</a>
            <a class="dropdown-item" href="#">Capucinno</a>
            </div>
        </li>
          <li class="nav-item px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="products.html">Products</a>
          </li>
          <li class="nav-item px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="store.blade.php">Store</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <section class="page-section clearfix">
    <div class="container">
      <div class="intro">
        <img class="intro-img img-fluid mb-3 mb-lg-0 rounded" src="{{ asset('weblen/img/kopi.jpg')}}" alt="">
        <div class="intro-text left-0 text-center bg-faded p-5 rounded">
          <h2 class="section-heading mb-4">
            <span class="section-heading-upper">Kopi Segar</span>
            <span class="section-heading-lower">Sangat Nikmat</span>
          </h2>
          <p class="mb-3">Kopi yang bisa menyejukan otak dan badan sehingga bisa kembali ceria disaat dia meninggalkanmu
          </p>
          <div class="intro-button mx-auto">
            <a class="btn btn-primary btn-xl" href="#">Mari Sini!!!</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="page-section cta">
    <div class="container">
      <div class="row">
        <div class="col-xl-9 mx-auto">
          <div class="cta-inner text-center rounded">
            <h2 class="section-heading mb-4">
              <span class="section-heading-upper">Harapan Anda</span>
              <span class="section-heading-lower">Untuk Anda</span>
            </h2>
            <p class="mb-0">Semoga semuanya baik-baik saja.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <footer class="footer text-faded text-center py-5">
    <div class="container">
      <p class="m-0 small">Copyright &copy; Your Website 2020</p>
    </div>
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="{{ asset('weblen/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{ asset('weblen/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

</body>

</html>
