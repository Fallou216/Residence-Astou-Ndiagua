<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Bienvenue - Résidence Astou & Ndiaga</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
  <link rel="stylesheet" href="css/style.css" />
</head>
<body>
  <!-- Header -->
  <?php include("includes/header.php"); ?>

  <!-- Bouton hamburger -->
  <button class="menu-btn" id="menuBtn">
    <i class="fas fa-bars"></i>
  </button>

  <!-- Sidebar navigation -->
  <?php include("includes/header.php"); ?>

  <!-- Bienvenue Section -->
  <main class="main-content container py-5">
    <div class="row justify-content-center">
      <div class="col-lg-8 text-center">
        <img src="images/Logo1.png" alt="Logo Résidence Astou & Ndiaga" class="logo-img mb-4" />
        <h1 class="fw-bold text-gold mb-3">Bienvenue à la Résidence Astou & Ndiaga</h1>
        <p class="lead text-gold mb-4">Confort, sécurité et sérénité à votre portée</p>
        <p class="fs-5">
          Découvrez un cadre chaleureux et moderne, idéal pour vos séjours à Dakar. Notre résidence vous offre des chambres confortables, des services personnalisés et une équipe à votre écoute pour rendre votre expérience inoubliable.
        </p>
        <img src="images/immeuble.jpg" alt="Immeuble Résidence Astou & Ndiaga" class="img-fluid rounded shadow mb-4" style="max-width: 600px;" />
        <a href="https://wa.me/221770000000" target="_blank" class="btn btn-success btn-lg mt-3">
          <i class="fab fa-whatsapp"></i> Réserver via WhatsApp
        </a>
      </div>
    </div>
  </main>

  <!-- Footer -->
  <?php include("includes/footer.php"); ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    const menuBtn = document.getElementById('menuBtn');
    const sidebar = document.getElementById('sidebar');
    menuBtn.addEventListener('click', () => {
      sidebar.classList.toggle('active');
    });
    document.addEventListener('click', function(e) {
      if (!sidebar.contains(e.target) && !menuBtn.contains(e.target)) {
        sidebar.classList.remove('active');
      }
    });
  </script>
</body>
</html>