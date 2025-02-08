<?php
  ob_start();
  include '../index.php';
  $pdo = include '../connexion.php';

  // Préparer la requête 
  $query = 'select * from produits';
  $stmt = $pdo->prepare($query);
  $stmt->execute();
  $items = $stmt->fetchAll(PDO::FETCH_ASSOC);

  // Gestion de la suppression d'un produit
  if (isset($_GET['delete'])) {
    $id = intval($_GET['delete']);

    // Supprimer les enregistrements de la table fonctionnaliteproduits qui référencent ce produit
    $query2 = 'delete from fonctionnaliteproduits where produit_id = ?';
    $stmt2 = $pdo->prepare($query2);
    $stmt2->execute([$id]);

    // Supprimer le produit
    $query1 = 'delete from produits where id = ?';
    $stmt1 = $pdo->prepare($query1);
    $stmt1->execute([$id]);

    header('Location: /plateformeSoftland/admin/produits/index.php');
  }

  ob_end_flush();
?>
<main id="main" class="main">

<div class="pagetitle">
<h1>Produits</h1>
<nav>
    <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Produits</a></li>
    <li class="breadcrumb-item active">Liste des produits</li>
    </ol>
</nav>
</div>
<!-- End Page Title -->

<section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Liste des produits</h5>
              
              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th>Nom</th>
                    <th>Image</th>
                    <th>Description</th>
                    <th>Date de création</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach($items as $key=>$item){ ?>
                  <tr>
                    <td><?=$item['nom'] ?></td>
                    <td>
                      <img src="/plateformeSoftLand/admin/produits/image/<?=$item['image']?>" alt="" style="width:50px;height:50px;">
                    </td>
                    <td> <?=$item['description']?></td>
                    <td><?=$item['created_at']?></td>
                    <td>
                      <a href="/plateformeSoftLand/admin/produits/edit.php?id=<?=$item['id']?>"> 
                        <i class="bi bi-brush text-primary">Modifier</i>
                      </a>
                      <!-- Basic Modal -->
                      <button type="button" class="btn " data-bs-toggle="modal" data-bs-target="#basicModal<?=$key?>">
                        <i class="bi bi-trash text-danger">Supprimer</i>
                      </button>
                      <a class="btn btn-primary" style="display:flex;justify-content:center;" href="/plateformeSoftLand/detail_produit.php?id=<?=$item['id']?>"> Afficher </a>
                      <div class="modal fade" id="basicModal<?=$key?>" tabindex="-1">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title">Suppression produit</h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                              Voulez-vous vraiment supprimer ce produit?
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                              <a type="button" href="?delete=<?=$item['id']?>" class="btn btn-primary">Supprimer</a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </td>
                  </tr>
                  <?php } ?>
                </tbody>
              </table>
              <!-- End Table with stripped rows -->
            </div>
          </div>
        </div>
      </div>
    </section>
</main>

<?php
    include '../footer.php';
?>