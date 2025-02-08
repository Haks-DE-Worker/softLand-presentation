<?php
    ob_start();
    include '../index.php';
    $pdo = include '../connexion.php';
          // Préparer la requête 
          $query = 'select * from fonctionnalites order by created_at desc';
          $stmt = $pdo->prepare($query);
          $stmt->execute();
          $items = $stmt->fetchAll(PDO::FETCH_ASSOC);
    //Gestion de la suppression d'une fonctionnalité
  if(isset($_GET['delete'])){
    $id = intval($_GET['delete']);
    $query2 = 'delete from fonctionnalites where id = ?';
    $stmt2 = $pdo->prepare($query2);
    $stmt2->execute([$id]);
    header('Location: /plateformeSoftland/admin/fonctionnalites/index.php');  }
          
      ob_end_flush();
      

?>

<main id="main" class="main">
<div class="pagetitle">
<h1>Fonctionnalités</h1>
<nav>
    <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#/plateformeSoftland/admin/fonctionnalites/index.php">Fonctionnalités</a></li>
    <li class="breadcrumb-item active">Liste des fonctionnalités</li>
    </ol>
</nav>
</div>
<!-- End Page Title -->

<section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Liste des fonctionnalités</h5>
              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th>
                      Nom
                    </th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                    foreach($items as $key=>$item){

                    ?>
                  <tr>
                    <td><?= $item['nom'] ?> </td>

                    <td>
                    <a href="/plateformeSoftland/admin/fonctionnalites/edit.php?id=<?=$item['id']; ?>">
                      <i class="bi bi-brush text-primary"></i>
                    </a>
                      <!-- Basic Modal -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#basicModal".$key>
                    <i class="bi bi-trash text-danger"></i>
                    </button>
                    <div class="modal fade" id="basicModal".$key tabindex="-1">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title">Suppression fonctionnalite</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                              Voulez-vous vraiment supprimé cette fonctinnalité?
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                            <a type="button" href="?delete=<?=$item['id']?>" class="btn btn-primary">Supprimmer</a>
                          </div>
                        </div>
                      </div>
                    </div>
                        

                    </td>
                  </tr>
                  <?php }?>
                  
                  
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