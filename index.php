<?php
    include 'header.php';
?>
<link rel="stylesheet" href="css/owl.carousel.css">
<style>
    /*
My own styles
*/

.form-title {
    margin-bottom: 25px;
  }
  
  .form-title h2 {
    font-size: 25px;
  }
  
  .form-title p {
    font-size: 15px;
    line-height: 1.8;
  }
  
  div.contact-form form p input[type=text], .contact-form form p input[type=tel], .contact-form form p input[type=email] {
    width: 49%;
    padding: 15px;
    border: 1px solid #ddd;
    border-radius: 3px;
  }
  
  .contact-form form p textarea {
    border: 1px solid #ddd;
    padding: 15px;
    height: 200px;
    border-radius: 3px;
    width: 100%;
    resize: none;
  }
  
  .contact-form-wrap {
    background-color: #FBFBFB;
    padding: 45px 30px;
    border-radius: 5px;
  }
  
  .contact-form-box {
    padding-left: 40px;
    margin-bottom: 30px;
  }
  
  .contact-form-box h4 {
    font-size: 20px;
    font-weight: 600;
    position: relative;
    margin-bottom: 10px;
  }
  
  .contact-form-box h4 i {
    position: absolute;
    left: -13%;
    color: #F28123;
    top: 2px;
  }
  
  .contact-form-box p {
    line-height: 1.8;
    opacity: 0.8;
  }
  
  .contact-form-wrap .contact-form-box:last-child {
    margin: 0;
  }
  
  .find-location p {
    color: #fff;
    font-size: 40px;
    margin: 0;
    font-weight: 600;
    padding: 95px 0;
  }
  
  .find-location p i {
    margin-right: 10px;
    color: #F28123;
  }
  
  #form_status span {
    color: #fff;
    font-size: 14px;
    font-weight: normal;
    background: #E74C3C;
    width: 100%;
    text-align: center;
    display: inline-block;
    padding: 10px 0px;
    border-radius: 3px;
    margin-bottom: 18px;
  }
  
  #form_status span.loading {
    color: #333;
    background: #eee;
    border-radius: 3px;
    padding: 18px 0px;
  }
  
  #form_status span.notice {
    color: yellow;
  }
  
  #form_status .success {
    color: #fff;
    text-align: center;
    background: #2ecc71;
    border-radius: 3px;
    padding: 30px 0px;
  }
  
  #form_status .success i {
    color: #fff;
    font-size: 45px;
    margin-bottom: 14px;
  }
  
  #form_status .success h3 {
    color: #fff;
    margin-bottom: 10px;
  }
/**** End ****/  
</style>

<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-7">
                <div class="section-title position-relative pb-3 mb-5">
                    <h2 class="mb-0">SOFTLAND : Votre Partenaire en Solutions Logicielles Innovantes</h2>
                </div>
                <p class="mb-4 text-dark"> <strong class="text-primary">SOFTLAND</strong>
                 est une entreprise spécialisée dans le développement, la gestion et le déploiement de solutions logicielles innovantes et performantes. 
                Nous accompagnons les acteurs de l'éducation en leur proposant des outils numériques adaptés pour transformer leur manière 
                d'enseigner et de gérer leurs activités. Parallèlement, nous intervenons dans le secteur commercial en offrant des solutions 
                technologiques optimisées pour améliorer la gestion des opérations, stimuler la productivité et renforcer la satisfaction client.
            </p>
                <div class="row g-0 mb-3  display flex align-items-center justify-content-left">
                    <div class="col-sm-6 wow zoomIn" data-wow-delay="0.2s">
                        <h6 class="mb-3"><i class="fa fa-check text-primary me-2"></i>Dévéloppement des solutions numériques</h6>
                        <h6 class="mb-3"><i class="fa fa-check text-primary me-2"></i>Vente des équipements informatiques</h6>
                        <h6 class="mb-3"><i class="fa fa-check text-primary me-2"></i>Accompagnement des acteurs de l'éducations</h6>
                    </div>

                </div>
                <div class="d-flex align-items-center mb-4 wow fadeIn" data-wow-delay="0.6s">
                    <div class="bg-primary d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
                        <i class="fa fa-phone-alt text-white"></i>
                    </div>
                    <div class="ps-4">
                        <h5 class="mb-2">Contactez-nous</h5>
                        <h4 class="text-primary mb-0">+229 000 000 00</h4>
                    </div>
                </div>

            </div>
            <div class="col-lg-5" style="min-height: 500px;">
                <div class="position-relative h-100">
                    <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s" src="img/about2.jpg" style="object-fit: cover;">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->


<!-- Features Start -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
            <h5 class="fw-bold text-primary text-uppercase">Pourquoi nous choisir</h5>
        </div>
        <div class="row g-5">
            <div class="col-lg-6">
                <div class="row g-5">
                    <div class="col-12 wow zoomIn" data-wow-delay="0.2s">
                        <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                            <i class="fa fa-cubes text-white"></i>
                        </div>
                        <h4>Expertise et Innovation</h4>
                        <p class="mb-0">
                        Une maîtrise avérée des technologies de pointe et une capacité à développer des solutions adaptées aux besoins
                         spécifiques des secteurs de l'éducation et du commerce.
                        </p>
                    </div>
                    <div class="col-12 wow zoomIn" data-wow-delay="0.6s">
                        <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                            <i class="fa fa-award text-white"></i>
                        </div>
                        <h4>Amélioration de la productivité</h4>
                        <p class="mb-0">
                        Des solutions technologiques conçues pour optimiser les processus, réduire les inefficacités et augmenter 
                        les performances globales.
                        </p>
                    </div>
                </div>
            </div>
            <!-- <div class="col-lg-4  wow zoomIn" data-wow-delay="0.9s" style="min-height: 350px;">
                <div class="position-relative h-100">
                    <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.1s" src="img/feature.jpg" style="object-fit: cover;">
                </div>
            </div> -->
            <div class="col-lg-6">
                <div class="row g-5">
                    <div class="col-12 wow zoomIn" data-wow-delay="0.4s">
                        <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                            <i class="fa fa-users-cog text-white"></i>
                        </div>
                        <h4>Soutien et accompagnement</h4>
                        <p class="mb-0">
                            Un service client fiable et un accompagnement continu pour assurer le succès et la pérennité des solutions déployées.
                        </p>
                    </div>
                    <div class="col-12 wow zoomIn" data-wow-delay="0.8s">
                        <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                            <i class="fa fa-star text-white"></i>
                        </div>
                        <h4>Réputation et fiabilité</h4>
                        <p class="mb-0">Un engagement envers la qualité et le respect des délais, avec des projets réalisés dans les 
                            règles de l'art pour bâtir une relation de confiance avec les partenaires.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Features Start -->


<!-- Service Start -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
            <h5 class="fw-bold text-primary text-uppercase">Nos Services</h5>
        </div>
        <div class="row g-5">
    <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
        <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
            <h4 class="mb-3">Développement des logiciels de gestion</h4>
            <p class="m-0">Nous concevons des logiciels de gestion performants et adaptés aux besoins spécifiques des entreprises, facilitant la gestion des opérations et l'optimisation des ressources.</p>
        
        </div>
    </div>
    <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
        <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
            <h4 class="mb-3">Vente de matériel informatique</h4>
            <p class="m-0">Nous proposons une large gamme d'équipements informatiques de qualité, allant des ordinateurs aux accessoires, pour répondre aux besoins professionnels et personnels.</p>

        </div>
    </div>
    <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.9s">
        <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
            <h4 class="mb-3">Développement des plateformes de communication par SMS</h4>
            <p class="m-0">Nous créons des plateformes de messagerie SMS robustes pour permettre une communication rapide et efficace entre les entreprises et leurs clients.</p>

        </div>
    </div>
    <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
        <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
            <h4 class="mb-3">Réalisation de spots publicitaires</h4>
            <p class="m-0">Nous produisons des spots publicitaires captivants et professionnels pour valoriser votre marque et atteindre efficacement votre audience cible.</p>

        </div>
    </div>
    <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
        <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
            <h4 class="mb-3">Développement des sites internet</h4>
            <p class="m-0">Nous créons des sites web modernes, dynamiques et adaptés à vos besoins, mettant en avant votre entreprise et vos services de manière efficace.</p>

        </div>
    </div>
    <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
        <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
            <h4 class="mb-3">Formations</h4>
            <p class="m-0">Nous offrons des formations professionnelles pour renforcer vos compétences dans les domaines technologiques, logiciels et informatiques.</p>

        </div>
    </div>
    <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
        <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
            <h4 class="mb-3">Conseils</h4>
            <p class="m-0">Nous vous accompagnons avec des conseils stratégiques et techniques pour optimiser vos projets informatiques et atteindre vos objectifs.</p>

        </div>
    </div>
    <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
        <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
            <h4 class="mb-3">Vente de consommables informatiques</h4>
            <p class="m-0">Nous fournissons des consommables informatiques de qualité tels que des cartouches, des toners et d'autres accessoires pour vos équipements.</p>
            <!-- <a class="btn btn-lg btn-primary rounded" href="">
                <i class="bi bi-arrow-right"></i>
            </a> -->
        </div>
    </div>
</div>


        </div>
    </div>
</div>
<!-- Service End -->



<!-- Blog Start -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
            <h5 class="fw-bold text-primary text-uppercase">Actualités</h5>
            <h1 class="mb-0">Lisez nos dernières actualités</h1>
        </div>
        <div class="row g-5">
            <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                <div class="blog-item bg-light rounded overflow-hidden">
                    <div class="blog-img position-relative overflow-hidden">
                        <img class="img-fluid" src="img/blog-1.jpg" alt="">
                    </div>
                    <div class="p-4">
                        <div class="d-flex mb-3">
                            <small class="me-3"><i class="far fa-user text-primary me-2"></i>John Doe</small>
                            <small><i class="far fa-calendar-alt text-primary me-2"></i>01 Jan, 2045</small>
                        </div>
                        <h4 class="mb-3">Comment développer un site web</h4>
                        <p>Dolor et eos labore stet justo sed est sed sed sed dolor stet amet</p>
                        <a class="text-uppercase" href="#">Lire Plus <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 wow slideInUp" data-wow-delay="0.6s">
                <div class="blog-item bg-light rounded overflow-hidden">
                    <div class="blog-img position-relative overflow-hidden">
                        <img class="img-fluid" src="img/blog-2.jpg" alt="">
                    </div>
                    <div class="p-4">
                        <div class="d-flex mb-3">
                            <small class="me-3"><i class="far fa-user text-primary me-2"></i>John Doe</small>
                            <small><i class="far fa-calendar-alt text-primary me-2"></i>01 Jan, 2045</small>
                        </div>
                        <h4 class="mb-3">Créer des plateformes de communications par sms</h4>
                        <p>Dolor et eos labore stet justo sed est sed sed sed dolor stet amet</p>
                        <a class="text-uppercase" href="#">Lire Plus <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 wow slideInUp" data-wow-delay="0.9s">
                <div class="blog-item bg-light rounded overflow-hidden">
                    <div class="blog-img position-relative overflow-hidden">
                        <img class="img-fluid" src="img/blog-3.jpg" alt="">
                    </div>
                    <div class="p-4">
                        <div class="d-flex mb-3">
                            <small class="me-3"><i class="far fa-user text-primary me-2"></i>John Doe</small>
                            <small><i class="far fa-calendar-alt text-primary me-2"></i>01 Jan, 2045</small>
                        </div>
                        <h4 class="mb-3">Rélaiser un spot publicitaire</h4>
                        <p>Dolor et eos labore stet justo sed est sed sed sed dolor stet amet</p>
                        <a class="text-uppercase" href="#">Lire Plus<i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


	<!-- contact form -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
<div class="contact-from-section mt-150 mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 mb-5 mb-lg-0">
					<div class="form-title">
						<h2>Nous sommes à votre écoute!</h2>
						<p>
                        Vous avez une question, un projet ou besoin d'assistance ? N'hésitez pas à nous contacter. Notre équipe est 
                        disponible pour vous accompagner et répondre à toutes vos demandes dans les plus brefs délais.
                        </p>
					</div>
				 	<div id="form_status"></div>
					<div class="contact-form">
						<form action="traitement.php" method="POST" id="fruitkha-contact">
							<p>
								<input type="text" placeholder="Nom" name="name" id="name" required>
								<input type="email" placeholder="Email" name="email" id="email" required>
							</p>
							<p>
								<input type="tel" placeholder="Telephone" name="phone" id="phone" required>
								<input type="text" placeholder="Subject" name="subject" id="subject" required>
							</p>
							<p><textarea name="message" id="message" cols="30" rows="10" placeholder="Message" required></textarea></p>
							<input type="hidden" name="token" value="FsWga4&@f6aw" />
							<p><input type="submit" class="btn btn-primary" value="Soumettre"></p>
						</form>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="contact-form-wrap">
						<div class="contact-form-box">
							<h4><i class="far fa-clock text-primary"></i>Heure d'ouverture</h4>
							<p>Lundi - Vendredi: 8 à 9 PM <br> Samedi: 10 à 8 PM </p>
						</div>
						<div class="contact-form-box">
							<h4><i class="fas fa-address-book text-primary"></i> Contact</h4>
							<p>Phone: <a href="tel:+229 111 222 3333 ">+229 111 222 3333</a><br> Email: <a href="mailto:support@fruitkha.com">support@fruitkha.com</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

</div>
	
	<!-- end contact form -->

<?php 
    include 'footer.php';
?>

