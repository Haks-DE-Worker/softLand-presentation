<?php
ob_start();
    include '../index.php';
    $pdo = include '../connexion.php';

    $id = intval(htmlspecialchars($_GET['id']));
    // Préparer la requête 
    $query = 'select * from fonctionnalites where id = ?';
    $stmt = $pdo->prepare($query);
    
    $stmt->execute([$id]);
    $items = $stmt->fetchAll(PDO::FETCH_ASSOC);
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
      $id = $_POST['id'];
      $nom = htmlspecialchars($_POST['nom']);
      if(!empty($nom)){
        $query2 = 'update fonctionnalites set nom = ? where id = ?';
        $stmt2 = $pdo->prepare($query2);
        $res = $stmt2->execute([$nom, $id]);
        header('Location:  /plateformeSoftland/admin/fonctionnalites/index.php');
        
        
      }
    }
ob_end_flush();

?>

<main id="main" class="main">

<div class="pagetitle">
<h1>Fonctionnalités</h1>
<nav>
    <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="index.html">Fonctionnalités</a></li>
    <?php
     ?>
    <li class="breadcrumb-item active">Modifier une fonctionnalité</li>
    </ol>
</nav>
</div>
<!-- End Page Title -->
<section class="section">
  <div class="row">

    <div class="col">

      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Modifier une fonctionnalité</h5>
          
<?php
 ?>
          <!-- Vertical Form -->
          <form class="row g-3" method="post" action="/plateformeSoftland/admin/fonctionnalites/edit.php">
            <div class="col-12">
              <label for="nom" class="form-label">Nom</label>
              <input type="hidden" id="id" name="id"  value="<?= $items[0]['id']?>">
              <input type="text" class="form-control" id="nom" name="nom" value="<?= $items[0]['nom']?>">
            </div>
            </div>
            <div class="text-center mb-2">
              <button type="submit" class="btn btn-primary btn-lg">Modifier</button>
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