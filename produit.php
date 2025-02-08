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

    $query='select * from produits';
    $stmt=$pdo->prepare($query);
    $stmt->execute();

    $items= $stmt->fetchAll(PDO::FETCH_ASSOC);
    ob_end_flush();
?>

<div class="container-fluid py-2 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-1">

            <div class="header-produit">
                <img src="./img/carousel-test4.jpg" alt="" style="border-radius: 5px;">
                <div class="introduction-1 pt-md-5 pt-5">
                    <h2 class="">Quels sont les produits dont dispose <strong class="text-primary">SOFTLAND</strong> ?</h2>
                    <div class="introduction">
                        Découvrez notre gamme exceptionnelle de produits conçus pour répondre à vos besoins et 
                        dépasser vos attentes. Chez SOFTLAND, nous nous engageons à vous créer des solutions numériques 
                        de qualité supérieure alliant innovation, performance et esthétique. 
                        Explorez notre collection soigneusement sélectionnée et trouvez le produit parfait qui correspond 
                        à vos attentes et à vos bésoins. 
                        Chaque produit reflète notre passion pour l'excellence et notre désir de vous offrir le meilleur.
                    </div>
                </div>
            </div>
            <hr class="text-center" style="border: 3px solid #0a58ca; width: 75%; margin: 20px auto;"/>
            <h1 style="text-align: center;">Découvrez </h1> 
            <div class="row products">
                <div class="product-card col-lg-4 col-md-6 mb-1" style="width: 20rem;">
                    <img src="img/scoperfect.jpeg" alt="Scoperfect">
                    <h2>Scoperfect</h2>
                    <p class="short-description" style="text-align: justify;">
                        C'est un logiciel de gestion scolaire. Il permet de gérer la quasi-totalité 
                        des activités d'une unité de formation de la maternelle jusqu'au secondaire 
                        (école, collège, lycée), publique ou privée. Tous les acteurs du monde de 
                        l'éducation sont pris en compte.
                    </p>
                    <a href="scoperfect.php" class="read-more-btn">Lire plus</a>
                </div> 
                <?php foreach($items as $item) : ?>
                <div class="product-card col-lg-4 col-md-6 mb-1" style="width: 20rem;">
               
                    <img src="/plateformeSoftLand/admin/produits/image/<?=$item['image']?>" width="100px" height="165px" alt="">
                    <h2><?=$item['nom']?></h2>
                    <p class="short-description" style="text-align: justify;">
                    <?=$item['description']?>
                    </p>
                    <a href="/plateformeSoftLand/detail_produit.php?id=<?=$item['id']?>" class="read-more-btn">Lire plus</a>
                
               
                </div> 
                <?php endforeach;?>   
                   
            </div>
        </div>
</div>
<?php
    include 'footer.php';
?>