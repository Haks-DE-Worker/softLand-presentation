<?php
ob_start();
    include '../index.php';
    $pdo = include '../connexion.php';
    $error = '';
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      // Récupérer les données du formulaire
      $nom = htmlspecialchars(trim($_POST['nom']));
      // Vérifier si les champs ne sont pas vides
      if ($nom != '') {
          // Préparer la requête 
          $query = 'insert into fonctionnalites(nom, created_at) values(?, ?)';
          $stmt = $pdo->prepare($query);
          $stmt->execute([$nom, date('Y-m-d')]);
          header('Location: /plateformeSoftland/admin/fonctionnalites/index.php');

        }
        else{
          $error = "Champs nom vide";
        }
      }
      ob_end_flush();

  
?>
<main id="main" class="main">

<div class="pagetitle">
<h1>Fonctionnalités</h1>
<?php
 ?>
<nav>
    <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="/plateformeSoftland/admin/fonctionnalites/index.php">Fonctionnalités</a></li>
    <li class="breadcrumb-item active">Nouvelle fonctionnalité</li>
    </ol>
</nav>
</div>
<!-- End Page Title -->
<section class="section">
  <div class="row">

    <div class="col">

      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Nouvelle fonctionnalité</h5>

          <!-- Vertical Form -->
          <form class="row g-3" method="post" action="/plateformeSoftland/admin/fonctionnalites/create.php">
          <?php if (!empty($error)): ?>
                    <div class="alert alert-danger text-center">
                      <?= htmlspecialchars($error) ?>
                    </div>
                  <?php endif; ?>
            <div class="col-12">
              <label for="nom" class="form-label">Nom</label>
              <input type="text" class="form-control" id="nom" name="nom">
              <span class="error"> <?php echo isset($errors['nom']) ? $errors['nom'] : ''; ?></span>
            </div>
            </div>
            <div class="text-center mb-2">
              <button type="submit" class="btn btn-primary btn-lg">Ajouter</button>
            </div>
          </form>
          <!-- Vertical Form -->

        </div>
      </div>

    </div>
  </div>
</section>
</main>

<?php
    include '../footer.php';
?>