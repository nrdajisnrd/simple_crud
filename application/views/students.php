<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>List of Students</h1>
    </div>
  </section>
  <div class="container-fluid">
    <div class="card">
      <div class="card-body">
      	<?= $this->session->flashdata('message') ?>
        <div class="row">
          <div class="col-md-8">
            <a href="<?= base_url('students/add_student') ?>"
              class="btn btn-primary btn-sm mb-3"><i class="fas fa-sm fa-plus"></i> Add Student</a>
          </div>
        </div>
      	
      	<table class="table table-bordered table-hover table-sm">
      		<thead>
      			<tr>
      				<th width="60px">#</th>
      				<th>SIDN</th>
      				<th>Full Name</th>
      				<th width="150px">Action</th>
      			</tr>
      		</thead>
          <tbody>
    			<?php 
    			$no=1;
    			foreach ($students as $st) : ?>
      			<tr>
      				<th><?= $no++ ?></th>
      				<td><?= $st['sidn'] ?></td>
      				<td><?= $st['fullname'] ?></td>
              <td>
                <a href="<?= base_url('students/detail/' .$st['sidn']) ?>" class="btn btn-sm btn-info ml-2"><i class="fas fa-eye"></i></a>
                <a href="<?= base_url('students/edit/' .$st['sidn']) ?>" class="btn btn-sm btn-primary ml-2"><i class="fas fa-edit"></i></a>
                <a href="<?= base_url('students/delete/' .$st['sidn']) ?>" class="btn btn-sm btn-danger ml-2" onclick="return confirm('Sure?');"><i class="fas fa-trash"></i></a>
              </td>
      			</tr>
    			<?php endforeach; ?>
          </tbody>
      	</table>
      </div>
    </div>
  </div>
</div>