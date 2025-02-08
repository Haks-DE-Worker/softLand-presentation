<?php
    include 'header.php';
?>
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


	<!-- contact form -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
<div class="contact-from-section mt-150 mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 mb-5 mb-lg-0">
					<div class="form-title">
						<h1>Nous sommes à votre écoute!</h1>
						<p>
              Vous avez une question, un projet en tête ou besoin d'une assistance personnalisée ? Nous sommes là pour vous !
              N'hésitez pas à nous contacter à tout moment. Notre équipe dévouée est à votre disposition pour vous écouter,
              vous guider et vous apporter des solutions adaptées à vos besoins.
            </p>
					</div>
				 	<div id="form_status"></div>
					<div class="contact-form">
            <form action="traitement.php" method="POST" id="fruitkha-contact">
            <!-- <form type="POST" id="fruitkha-contact" onSubmit="return valid_datas( this );"> -->
							<p>
								<input type="text" placeholder="Nom" name="name" id="name" required>
								<input type="email" placeholder="Email" name="email" id="email" required>
							</p>
							<p>
								<input type="tel" placeholder="Telephone" name="phone" id="phone" required>
								<input type="text" placeholder="Sujet" name="subject" id="subject" required>
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
							<h4><i class="fas fa-address-book text-primary"></i>Contact</h4>
							<p>Phone: <a href="tel:+229 111 222 3333">+229 111 222 3333</a> <br>
                Email: <a href="mailto:support@fruitkha.com">support@fruitkha.com</a>
              </p>
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