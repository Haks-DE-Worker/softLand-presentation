<?php
    include '../index.php';
?>
<main id="main" class="main">

<div class="pagetitle">
<h1>Profiles</h1>
<nav>
    <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="index.html">Profies</a></li>
    <li class="breadcrumb-item active">Nouveau profile</li>
    </ol>
</nav>
</div>
<!-- End Page Title -->
<section class="section">
  <div class="row">

    <div class="col">

      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Nouveau profile</h5>

          <!-- Vertical Form -->
          <form class="row g-3">
            <div class="col-12">
              <label for="nom" class="form-label">Nom</label>
              <input type="text" class="form-control" id="nom" name="nom">
            </div>
            </div>
            <div class="text-center mb-2">
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