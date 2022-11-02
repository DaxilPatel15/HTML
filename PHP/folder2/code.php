<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Capturing Data & Control Structures</title>
    <meta name="description" content="">
    <meta name="robots" content="noindex, nofollow">
    <!-- add fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,400;0,700;1,400&family=Poppins:ital,wght@0,400;0,500;1,400&display=swap" rel="stylesheet">
    <!-- add Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" >
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" ></script>
    <!-- add our custom CSS -->
    <link rel="stylesheet" href="./css/style.css">
  </head>
  <body>
    <header>
      <nav class="navbar navbar-dark bg-dark fixed-top">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">
            <img src="./img/php-logo.png" alt="PHP logo">
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
            <div class="offcanvas-header">
              <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Menu</h5>
              <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
              <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                <li class="nav-item"><a class="nav-link active" aria-current="page" href="index.php">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="#variables">Variables</a></li>
                <li class="nav-item"><a class="nav-link" href="#structures">Control Structures</a></li>
                <li class="nav-item"><a class="nav-link" href="#capture">Capture the Data!</a></li>
              </ul>
            </div>
          </div>
        </div>
      </nav>
    </header>
    <main>
      <section class="row masthead">
        <div class="col-sm-12 col-md-12 col-lg-12">
          <h1>Capturing Data & Control Structures</h1>
        </div>
      </section>
      <section class="row" id="variables">
        <div class="col">
          <h2>Working with Variables</h2>
          <p>Before we can start capturing the data we need to look at what we will need to use to store the captured data!</p>
          <!-- PHP starts -->

        </div>
      </section>
      <section class="row" id="structures">
        <div class="col">
          <h3 class="col-12">Control Structures</h3>
          <!-- PHP starts -->

        </div>
      </section>
      <section class="row" id="capture">
        <h3 class="col-12">Capture the Data</h3>
        <div class="col-sm-12 col-md-6 col-lg-6">
          <!-- PHP starts -->


          <!-- The $_SERVER["PHP_SELF"] is a super global variable that returns the filename of the currently executing script. The htmlspecialchars() function converts special characters to HTML entities. This means that it will replace HTML characters like < and > with &lt; and &gt;. This prevents attackers from exploiting the code by injecting HTML or Javascript code (Cross-site Scripting attacks) in forms. -->

        </div>
        <div class="col-sm-12 col-md-4 col-lg-4">
          
        </div>
      </section>
    </main>
    <footer></footer>
  </body>
</html>
