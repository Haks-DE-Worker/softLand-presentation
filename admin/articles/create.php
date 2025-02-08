<?php
    include '../index.php';
?>
<main id="main" class="main">

<div class="pagetitle">
<h1>Articles</h1>
<nav>
    <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="/plateformeSoftland/admin/articles/index.php">Articles</a></li>
    <li class="breadcrumb-item active">Nouvel artcile</li>
    </ol>
</nav>
</div>
<!-- End Page Title -->
<section class="section">
  <div class="row">

    <div class="col">

      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Nouvel artcile</h5>

          <!-- Vertical Form -->
          <form class="row g-3">
            <div class="col-12">
              <label for="nom" class="form-label">Nom</label>
              <input type="text" class="form-control" id="nom" name="nom">
            </div>
            <div class="col-12">
              <label for="image" class="form-label">Image</label>
              <input type="file" class="form-control" id="image" name="image">
            </div> 
            <div class="col-12">
              <label for="courte_description" class="form-label">Courte description</label>
              <textarea type="text" class="form-control" id="courte_description" name="courte_description" placeholder="" rows="3">
              </textarea>
            </div>
            <div class="col-12">
              <label for="longue_description" class="form-label">Longue description</label>
              <textarea type="text" class="form-control" id="longue_description" name="longue_desciption" placeholder="" rows="5">
              </textarea>
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