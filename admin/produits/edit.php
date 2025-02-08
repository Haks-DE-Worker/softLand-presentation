<?php
ob_start();
    include '../index.php';
    $pdo = include '../connexion.php';

    $id = intval($_GET['id']);
    if (!$id) { // Vérification de l'ID
        die("ID invalide.");
    }

    // Préparer la requête
    // $id = $_GET['id'];
    $query = 'SELECT * FROM produits WHERE id = ?';
    $stmt = $pdo->prepare($query);
    $stmt->execute([$id]);
    $items = $stmt->fetchAll(PDO::FETCH_ASSOC);

    if (!$items) {
        die("Produit introuvable.");
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $id = $_POST['id'];
        $nom = htmlspecialchars($_POST['nom']);
        $image = $items[0]['image']; // Conserver l'image actuelle par défaut
        $description = $_POST['description'];

        if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
            // Récupérer les détails du fichier
            $cheminTemporaire = $_FILES['image']['tmp_name'];
            $nomFichier = $_FILES['image']['name'];
            $tailleFichier = $_FILES['image']['size'];
            $extensionFichier = strtolower(pathinfo($nomFichier, PATHINFO_EXTENSION));

            // Extensions autorisées
            $extensionsAutorisees = ['jpg', 'jpeg', 'png'];

            if (in_array($extensionFichier, $extensionsAutorisees)) {
                if ($tailleFichier <= 2 * 1024 * 1024) { // Taille maximale : 2 Mo
                    // Dossier de destination
                    $dossierDestination = __DIR__ . './image/';
                    // Construire le chemin complet pour stocker le fichier
                    $cheminFinal = $dossierDestination . $nomFichier;

                    // // Vérifier si un fichier avec le même nom existe déjà
                    // if (file_exists($cheminFinal)) {
                    //     echo "Un fichier portant le même nom existe déjà. Veuillez renommer votre fichier.";
                    //     exit;
                    // }

                    // Déplacer le fichier vers le dossier final
                    if (move_uploaded_file($cheminTemporaire, $cheminFinal)) {
                        $image = $nomFichier;
                    } else {
                        $msg1 = "Erreur lors du déplacement du fichier.";
                        echo $msg1;
                        echo "Erreur lors du déplacement du fichier.";
                    }
                } else {
                  $msg2 = "Le fichier est trop volumineux. Taille maximale : 2 Mo.";
                  echo $msg2;
                    echo "Le fichier est trop volumineux. Taille maximale : 2 Mo.";
                }
            } else {
              $msg3 = "Extension non autorisée. Extensions valides : jpg, jpeg, png.";
              echo $msg3;
                echo "Extension non autorisée. Extensions valides : jpg, jpeg, png.";
            }
        }

        $query2 = 'UPDATE produits SET nom = ?, image = ?, description = ?, created_at = ? WHERE id = ?';
        $stmt2 = $pdo->prepare($query2);
        $res = $stmt2->execute([$nom, $image, $description, date('Y-m-d'), $id]);
        header('Location: /plateformeSoftLand/admin/produits/index.php');
      
    
    }
  ob_end_flush(); 
?>

<main id="main" class="main">

<div class="pagetitle">
<h1>Produits</h1>
<nav>
    <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="index.html">Produits</a></li>
    <li class="breadcrumb-item active">Modifier produit</li>
    </ol>
</nav>
</div>
<!-- End Page Title -->
<section class="section">
  <div class="row">

    <div class="col">

      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Modifier un produit</h5>

          <!-- Vertical Form -->
          <form class="row g-3" method="post" action="/plateformeSoftLand/admin/produits/edit.php?id=<?=$id?>"  enctype="multipart/form-data" > 
       
          <input type="hidden" id="id" name="id"  value="<?=$items[0]['id'] ?>">
            <div class="col-12">
              <label for="nom" class="form-label">Nom</label>
              <input type="text" class="form-control" id="nom" name="nom" value="<?=$items[0]['nom'] ?>">
            </div>
            <div class="col-12">
              <label for="image" class="form-label">Image</label>
              <input type="file" class="form-control" id="image" name="image" value="<?=$items[0]['image'] ?>" >
              <?php if(!empty($items[0]['image'])): ?>
              <img src="/plateformeSoftLand/admin/produits/image/<?=$items[0]['image']?>" alt="Image actuelle" style="max-width: 100px; margin-top: 10px;">
              <?php endif; ?>
            </div>
            <div class="col-12">
              <label for="description" class="form-label">Description</label>
              <textarea type="text" name="description" class="form-control" id="description" placeholder="" rows="5" ><?=$items[0]['description'] ?>
              </textarea>
            </div>
            <div class="text-center">
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