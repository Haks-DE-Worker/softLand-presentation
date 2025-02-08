<?php
    ob_start();
    include '../index.php';
    $pdo = include '../connexion.php';
    $error = '';

    // Préparer la requête 
    $query = 'SELECT nom FROM fonctionnalites';
    $stmt = $pdo->prepare($query);
    $stmt->execute();
    $fonctions = $stmt->fetchAll(PDO::FETCH_ASSOC);

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Récupérer les données du formulaire
        $nom = htmlspecialchars(trim($_POST['nom']));
        $description = $_POST['description'];
        $fonctionnalites = $_POST['fonctionnalite'] ?? [];

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

                    // Déplacer le fichier vers le dossier final
                    if (move_uploaded_file($cheminTemporaire, $cheminFinal)) {
                        $image = $nomFichier;
                    } else {
                        echo "Erreur lors du déplacement du fichier.";
                    }
                } else {
                    echo "Le fichier est trop volumineux. Taille maximale : 2 Mo.";
                }
            } else {
                echo "Extension non autorisée. Extensions valides : jpg, jpeg, png.";
            }

            // Vérifier si les champs ne sont pas vides
            if (!empty($nom)) {
                // Enregistrer le nom du produit
                $query1 = 'INSERT INTO produits(nom, image, description, created_at) VALUES (?, ?, ?, ?)';
                $stmt1 = $pdo->prepare($query1);
                $stmt1->execute([$nom, $image, $description, date('Y-m-d')]);

                // Récupérer l'ID du produit nouvellement inséré
                $produit_id_get = $pdo->lastInsertId();

                if (!empty($fonctionnalites)) {
                    // Associer les fonctionnalités
                    foreach ($fonctionnalites as $fonctionnalite) {
                        $req02 = 'SELECT id FROM fonctionnalites WHERE nom = ?';
                        $stmt02 = $pdo->prepare($req02);
                        $stmt02->execute([$fonctionnalite]);
                        $fonctionnalite_id = $stmt02->fetchColumn();

                        if ($fonctionnalite_id) {
                            $query2 = 'INSERT INTO fonctionnaliteproduits (produit_id, fonctionnalite_id) VALUES (?, ?)';
                            $stmt2 = $pdo->prepare($query2);
                            $stmt2->execute([$produit_id_get, $fonctionnalite_id]);
                        }
                    }
                } else {
                    echo "Aucune fonctionnalité sélectionnée";
                }

                header('Location: /plateformeSoftland/admin/produits/index.php');
            } else {
                $error = "Champs nom vide";
            }
        }
    }

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
                <li class="breadcrumb-item"><a href="/plateformeSoftland/admin/produits/index.php">Produits</a></li>
                <li class="breadcrumb-item active">Nouveau produit</li>
            </ol>
        </nav>
    </div>
    <!-- End Page Title -->
    <section class="section">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Nouveau produit</h5>
                        <!-- Vertical Form -->
                        <form class="row g-3" method="post" action="/plateformeSoftland/admin/produits/create.php" enctype="multipart/form-data">
                            <div class="col-12">
                                <label for="nom" class="form-label">Nom</label>
                                <input type="text" class="form-control" id="nom" name="nom" autocomplete="off">
                            </div>
                            <div class="col-12">
                                <label for="image" class="form-label">Image</label>
                                <input type="file" class="form-control" id="image" name="image" autocomplete="off">
                            </div>
                            <div class="col-12">
                                <label for="fonctionnalites" class="form-label">Fonctionnalités</label>
                                <select name="fonctionnalite[]" id="fonctionnalite" class="form-control" multiple>
                                    <?php foreach ($fonctions as $fonction) : ?>
                                        <option value="<?= htmlspecialchars_decode($fonction['nom']) ?>">
                                            <?= htmlspecialchars_decode($fonction['nom']) ?>
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                                <small>Utilisez Ctrl (Windows) ou Cmd (Mac) pour sélectionner plusieurs fonctionnalités.</small>
                            </div>
                            <div class="col-12">
                                <label for="description" class="form-label">Description</label>
                                <textarea type="text" class="form-control" id="description" name="description" placeholder="" rows="5" autocomplete="off"></textarea>
                            </div>
                            <div class="text-center">
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

<!-- Inclure les fichiers CSS et JS de Select2 -->
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<!-- Initialiser Select2 sur votre élément <select> -->
<script>
    $(document).ready(function() {
        $('#fonctionnalite').select2({
            placeholder: "Aucune sélection",
            allowClear: true
        });
    });
</script>