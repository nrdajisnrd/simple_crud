<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Student Input Form</h1>
    </div>
  </section>
  <div class="container-fluid">
    <div class="card">
      <div class="card-body">
        <form action="" method="post">
          <div class="row">
            <div class="col-md-6">
             <div class="form-group">
               <label for="sidn">SIDN</label>
               <input class="form-control" type="text" id="sidn" name="sidn">
               <?= form_error('sidn', '<div class="text-small text-danger">', '</div>') ?>
             </div>
             <div class="form-group">
               <label for="fullname">Full Name</label>
               <input class="form-control" type="text" id="fullname" name="fullname">
               <?= form_error('fullname', '<div class="text-small text-danger">', '</div>') ?>
             </div>
             <div class="form-group">
               <label for="dob">Date of Birth</label>
               <input class="form-control" type="date" id="dob" name="dob">
               <?= form_error('dob', '<div class="text-small text-danger">', '</div>') ?>
             </div>
           </div>
           <div class="col-md-6">
             <div class="form-group">
                <label for="gender">Gender</label>
                <select class="form-control" id="gender" name="gender">
                  <option value="">- Select Gender -</option>
                  <option value="Male">Male</option>
                  <option value="Female">Female</option>
                </select>
              </div>
              <div class="form-group">
               <label for="major">Major</label>
               <select class="form-control" id="major" name="major">
                  <option value="">- Select Major -</option>
                  <?php foreach ($majors as $mj) : ?>
                    <option value="<?= $mj['id_majors']; ?>"><?= $mj['majors_name']; ?></option>
                  <?php endforeach; ?>
                </select>
             </div>
             <div class="form-group">
               <label for="email">Email</label>
               <input class="form-control" type="text" id="email" name="email">
               <?= form_error('email', '<div class="text-small text-danger">', '</div>') ?>
             </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md">
              <button class="btn btn-primary float-right" type="submit" name="add">Add Student</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>