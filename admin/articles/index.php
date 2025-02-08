<?php
    include '../index.php';
?>
<main id="main" class="main">

<div class="pagetitle">
<h1>Articles</h1>
<nav>
    <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Articles</a></li>
    <li class="breadcrumb-item active">Liste des articles</li>
    </ol>
</nav>
</div>
<!-- End Page Title -->

<section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Liste des articles</h5>
              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th>
                      Nom
                    </th>
                    <th>Courte description</th>
                    <th>Date de création</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Unity Pugh</td>
                    <td>9958</td>
                    <td>Curicó</td>
                    <td>
                        <a href="/plateformeSoftland/admin/articles/edit.php"><i class="bi bi-brush text-primary"></i></a>
                        <i class="bi bi-trash text-danger"></i>

                    </td>
                  </tr>
                  <tr>
                    <td>Theodore Duran</td>
                    <td>8971</td>
                    <td>Dhanbad</td>
                    <td>
                    <a href="/plateformeSoftland/admin/articles/edit.php"><i class="bi bi-brush text-primary"></i></a>
                    <i class="bi bi-trash text-danger"></i>
                    </td>
                  </tr>
                  <tr>
                    <td>Kylie Bishop</td>
                    <td>3147</td>
                    <td>Norman</td>
                    <td>
                    <a href="/plateformeSoftland/admin/articles/edit.php"><i class="bi bi-brush text-primary"></i></a>
                    <i class="bi bi-trash text-danger"></i>

                    </td>
                    
                  </tr>
                  <tr>
                    <td>Willow Gilliam</td>
                    <td>3497</td>
                    <td>Amqui</td>
                    <td>
                    <a href="/plateformeSoftland/admin/articles/edit.php"><i class="bi bi-brush text-primary"></i></a>
                    <i class="bi bi-trash text-danger"></i>
                    </td>
                  
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