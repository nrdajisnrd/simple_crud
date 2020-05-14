<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Major Input Form</h1>
    </div>
  </section>
  <div class="container-fluid">
    <div class="card">
      <div class="card-body">
        <form action="" method="post">
          <div class="row">
            <div class="col-md-6">
             <div class="form-group">
               <label for="majors_code">Majors Code</label>
               <input class="form-control" type="text" id="majors_code" name="majors_code">
               <?= form_error('majors_code', '<div class="text-small text-danger">', '</div>') ?>
             </div>
           </div>
           <div class="col-md-6">
             <div class="form-group">
               <label for="majors_name">Majors_Name</label>
               <input class="form-control" type="text" id="majors_name" name="majors_name">
               <?= form_error('majors_name', '<div class="text-small text-danger">', '</div>') ?>
             </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md">
              <button class="btn btn-primary float-right" type="submit" name="add">Add Major</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>