<?php
    include 'header.php';

    ob_start();
try{
$host = 'localhost'; // Adresse du serveur de base de données
$dbname = 'softland'; // Nom de la base de données
$username = 'root'; // Nom d'utilisateur pour la base
$password = ''; // Mot de passe pour la base

$dsn = "mysql:host=$host;dbname=$dbname;charset=utf8mb4";
$pdo = new PDO($dsn, $username, $password);
} catch (PDOException $e) {
    $e->getMessage();
    return $e;
}

$id = intval(htmlspecialchars($_GET['id']));
$query='SELECT p.id AS id_produit, p.nom AS nom_produit, p.image, p.description, f.nom AS nom_fonctionnalite , p.created_at FROM produits p, fonctionnaliteproduits pf, fonctionnalites f WHERE p.id = pf.produit_id AND pf.fonctionnalite_id= f.id  AND  p.id=? ';
$stmt=$pdo->prepare($query);
$stmt->execute([$id]);
// Récupérer les résultats
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
ob_end_flush();
?>
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="row my-5">
            <div class="col-md-6">
                <img width=100% src="/plateformeSoftLand/admin/produits/image/<?=$results[0]['image']?>" alt="" style="border-radius: 5px;">
            </div>
            <div class="pl-md-5 col-md-6">
                <!-- <h5 class="fw-bold text-primary text-uppercase">Description du produit</h5> -->
                <h2 class="mb-3"><?=$results[0]['nom_produit']?></h2>
                <p class="mb-5 text-dark" style="font-size:1.2rem; "><?=$results[0]['description'] ?></p>
            </div>
        </div> 
            
        <div class="row">
            <div class=" text-light col-lg-12 pt-3 pt-lg-4 " style="background:#061429;">
                <h5 class=" section-title-sm position-relative pb-2 mb-2 text-light fw-bold  text-uppercase mb-3">Fonctionnalités</h5>
                
                <?php foreach($results as $key=>$result): ?>
                    <div class="link-animated d-flex flex-column justify-content-start ">
                        <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i><?=$result['nom_fonctionnalite']?></a>
                    </div>
                <?php endforeach; ?>
            </div>  
        </div>
        </div>
    </div>
</div>
<!--  End -->
<?php
    include 'footer.php';
?>