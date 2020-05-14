<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Major Edit Form</h1>
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
               <input type="hidden" name="id_majors" value="<?= $major['id_majors'] ?>">
               <input class="form-control" type="text" id="majors_code" name="majors_code" value="<?= $major['majors_code'] ?>">
               <?= form_error('majors_code', '<div class="text-small text-danger">', '</div>') ?>
             </div>
           </div>
           <div class="col-md-6">
             <div class="form-group">
               <label for="majors_name">Majors Name</label>
               <input class="form-control" type="text" id="majors_name" name="majors_name" value="<?= $major['majors_name'] ?>">
               <?= form_error('majors_name', '<div class="text-small text-danger">', '</div>') ?>
             </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md">
              <button class="btn btn-primary float-right" type="submit" name="add">Update Major</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>