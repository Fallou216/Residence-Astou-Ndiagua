<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Résidence Astou & Ndiaga</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
  <link rel="stylesheet" href="css/style.css" />
 
</head>
<body class="bg-dark text-white">

  <!-- Barre de navigation en haut -->
  <nav class="navbar navbar-dark" style="background: #000;">
    <div class="container-fluid justify-content-center">
      <span class="navbar-brand mb-0 h1 text-gold fw-bold">Résidence Astou & Ndiaga</span>
    </div>
  </nav>

  <!-- Bouton hamburger -->
  <button class="menu-btn" id="menuBtn">
    <i class="fas fa-bars"></i>
  </button>

  <!-- Sidebar navigation -->
 <?php include("includes/header.php"); ?>

  <!-- Contenu principal -->
  <div class="main-content">
    <!-- ...ton contenu ici... -->
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    const menuBtn = document.getElementById('menuBtn');
    const sidebar = document.getElementById('sidebar');
    menuBtn.addEventListener('click', function(e) {
      e.stopPropagation();
      sidebar.classList.toggle('active');
    });
    document.addEventListener('click', function(e) {
      if (!sidebar.contains(e.target) && !menuBtn.contains(e.target)) {
        sidebar.classList.remove('active');
      }
    });
    sidebar.addEventListener('click', function(e) {
      e.stopPropagation();
    });
  </script>
  <div class="main-content">
    <!-- Logo & titre -->
    <header class="text-center py-5">
      <img src="images/Logo1.png" alt="Logo Résidence Astou & Ndiaga" class="logo-img mb-4" />
      <h1 class="fw-bold text-gold">Résidence Astou & Ndiaga</h1>
      <p class="lead text-gold">Confort, sécurité et sérénité à votre portée</p>
    </header>
    <!-- Section des liens -->
    <section class="container pb-5">
      <div class="row g-4 justify-content-center">
        <div class="col-6 col-md-4 col-lg-3">
          <a href="bienvenue.php" class="card-box text-decoration-none">
            <div class="icon-card text-center">
              <i class="fas fa-door-open fa-2x mb-2"></i>
              <p>Bienvenue</p>
            </div>
          </a>
        </div>
        <div class="col-6 col-md-4 col-lg-3">
          <a href="menus.php" class="card-box text-decoration-none">
            <div class="icon-card text-center">
              <i class="fas fa-book-open fa-2x mb-2"></i>
              <p>Menus</p>
            </div>
          </a>
        </div>
        <div class="col-6 col-md-4 col-lg-3">
          <a href="installations.php" class="card-box text-decoration-none">
            <div class="icon-card text-center">
              <i class="fas fa-building fa-2x mb-2"></i>
              <p>Nos installations</p>
            </div>
          </a>
        </div>
        <div class="col-6 col-md-4 col-lg-3">
          <a href="services.php" class="card-box text-decoration-none">
            <div class="icon-card text-center">
              <i class="fas fa-concierge-bell fa-2x mb-2"></i>
              <p>Services aux résidents</p>
            </div>
          </a>
        </div>
        <div class="col-6 col-md-4 col-lg-3">
          <a href="avantages.php" class="card-box text-decoration-none">
            <div class="icon-card text-center">
              <i class="fas fa-gift fa-2x mb-2"></i>
              <p>Avantages</p>
            </div>
          </a>
        </div>
        <div class="col-6 col-md-4 col-lg-3">
          <a href="entretien.php" class="card-box text-decoration-none">
            <div class="icon-card text-center">
              <i class="fas fa-broom fa-2x mb-2"></i>
              <p>Entretien</p>
            </div>
          </a>
        </div>
        <div class="col-6 col-md-4 col-lg-3">
          <a href="securite.php" class="card-box text-decoration-none">
            <div class="icon-card text-center">
              <i class="fas fa-shield-alt fa-2x mb-2"></i>
              <p>Sécurité</p>
            </div>
          </a>
        </div>
        <div class="col-6 col-md-4 col-lg-3">
          <a href="sejour.php" class="card-box text-decoration-none">
            <div class="icon-card text-center">
              <i class="fas fa-calendar-week fa-2x mb-2"></i>
              <p>Pendant votre séjour</p>
            </div>
          </a>
        </div>
      </div>
    </section>
    <!-- ===== Footer ===== -->
    <?php include("includes/footer.php"); ?>
</body>
</html>
