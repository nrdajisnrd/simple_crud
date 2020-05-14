<div class="main-content">
  <section class="section">
  	<div class="section-header">
    	<h1>Detail Student</h1>
  	</div>
  </section>
  <div class="container-fluid">
    <div class="card">
      <div class="card-body">
      	<div class="row">
          <div class="col-md-8">
            <a href="<?= base_url('students') ?>"
              class="btn btn-danger btn-sm mb-3">Back</a>
          </div>
        </div>
      	<div class="row">
      		<div class="col-md-6">
		      	<table class="table table-stripped table-bordered">
		      		<thead>
			      		<tr>
			      			<th>SIDN</th>
			      			<td><?= $detail['sidn'] ?></td>
			      		</tr>
			      		<tr>
			      			<th>Full Name</th>
			      			<td><?= $detail['fullname'] ?></td>
			      		</tr>
			      		<tr>
			      			<th>Date of Birth</th>
			      			<td><?= $detail['dateofbirth'] ?></td>
			      		</tr>
			      		<tr>
			      			<th>Gender</th>
			      			<td><?= $detail['gender'] ?></td>
			      		</tr>
			      		<tr>
			      			<th>Major</th>
			      			<td><?= $detail['majors_name'] ?></td>
			      		</tr>
			      		<tr>
			      			<th>Email</th>
			      			<td><?= $detail['email'] ?></td>
			      		</tr>
			      	</thead>
		      	</table>
      		</div>
      	</div>
      </div>
  	</div>
	</div>
</div>