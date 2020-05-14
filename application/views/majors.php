<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>List of Majors</h1>
    </div>
  </section>
  <div class="container-fluid">
    <div class="card">
      <div class="card-body">
      	<?= $this->session->flashdata('message') ?>
        <div class="row">
          <div class="col-md-8">
            <a href="<?= base_url('majors/add_major') ?>"
              class="btn btn-primary btn-sm mb-3"><i class="fas fa-sm fa-plus"></i> Add Major</a>
          </div>
        </div>
      	
      	<table class="table table-bordered table-hover table-sm">
      		<thead>
      			<tr>
      				<th width="60px">#</th>
      				<th>Majors Code</th>
      				<th>Majors Name</th>
      				<th width="100px">Action</th>
      			</tr>
      		</thead>
          <tbody>
    			<?php 
    			$no=1;
    			foreach ($majors as $mj) : ?>
      			<tr>
      				<th><?= $no++ ?></th>
      				<td><?= $mj['majors_code'] ?></td>
      				<td><?= $mj['majors_name'] ?></td>
              <td>
                <a href="<?= base_url('majors/edit/' .$mj['id_majors']) ?>" class="btn btn-sm btn-primary ml-2"><i class="fas fa-edit"></i></a>
                <a href="<?= base_url('majors/delete/' .$mj['id_majors']) ?>" class="btn btn-sm btn-danger ml-2" onclick="return confirm('Sure?');"><i class="fas fa-trash"></i></a>
              </td>
      			</tr>
    			<?php endforeach; ?>
          </tbody>
      	</table>
      </div>
    </div>
  </div>
</div>