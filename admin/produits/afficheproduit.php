<?php
    include '../index.php';
    $pdo = include '../connexion.php';
    $error = '';
ob_start();
$donnee='';
function  valider ($donnee){
    $donnee=htmlspecialchars($donnee);
    return $donnee;
}

// la requete produits et fonctionnalité
// $query='SELECT p.id AS id_produit, p.nom AS nom_produit, p.image, p.description, f.nom AS nom_fonctionnalite , p.created_at FROM produits p, fonctionnaliteproduits pf, fonctionnalites f WHERE p.id = pf.produit_id AND pf.id= f.id ';
$queryToGetIds = 'SELECT id FROM produits';
$stmtIds = $pdo->prepare($queryToGetIds);
$stmtIds->execute();
$ids = $stmtIds->fetchAll(PDO::FETCH_ASSOC);

$allProductsFonctionnalities = [];
$position = 0;

foreach ($ids as $id) {
  $query = 'SELECT 
            p.nom AS nom_produit, 
            p.description, 
            f.nom AS nom_fonctionnalite, 
            p.created_at 
          FROM 
            produits p
          JOIN 
            fonctionnaliteproduits pf ON p.id = pf.produit_id
          JOIN 
            fonctionnalites f ON pf.fonctionnalite_id = f.id
          WHERE 
            p.id = ?';

  $stmt=$pdo->prepare($query);
  $stmt->execute([$id['id']]);
  // Récupérer les résultats
  $productIdFonctionnalities = $stmt->fetchAll(PDO::FETCH_ASSOC);
  $allProductsFonctionnalities[$position] = $productIdFonctionnalities;
  $position++;
}



ob_end_flush();
?>
<main id="main" class="main">
<div class="pagetitle">
<h1>Produits</h1>
<nav>
    <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="/plateformeSoftland/admin/produits/index.php">Produits</a></li>
    <li class="breadcrumb-item active">Liste des produits et fonctionnalités</li>
    </ol>
</nav>
</div>
   <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Liste des produits et fonctionnalités</h5>
              
                <div class="table-responsive">
                    <table class="table datatable" >
                        <thead>
                            <tr>
                                
                                <th>Nom Produit</th>
                                
                                <th>Description</th>
                                <th>Fonctionnalités</th>
                                <th>Date</th>
                            </tr>
                        </thead>
                       <tbody>
                        <?php if (!empty($allProductsFonctionnalities)) : ?>

                            <?php foreach ($allProductsFonctionnalities as $productWithFonctionnalities) : ?>
                                <tr>
                                    <td><?=$productWithFonctionnalities[0]['nom_produit']?></td>
                                    <td><?=$productWithFonctionnalities[0]['description']?></td>
                                    <td>
                                      <ul>
                                          <?php foreach ($productWithFonctionnalities as $ligne) : ?>
                                            <li><?=$ligne['nom_fonctionnalite']?></li>
                                          <?php endforeach; ?>
                                      </ul>
                                    </td>
                                    <td><?=$productWithFonctionnalities[0]['created_at']?></td>
                                    
                                </tr>
                            <?php endforeach; ?>
                        <?php else : ?>
                            <tr>Aucun produit enregistré avec ses fonctionnalittés</tr>
                        </tbody>
                        <?php endif; ?>
                    </table>
                </div>
            </div>
          </div>
        </div>
   
    </div>

   </section>
</main>
