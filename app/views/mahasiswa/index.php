<div class="container mt-5">
	
	<div class="row">
		<div class="col-6">
			<h3>Data Mahasiswa</h3>
				<?php foreach ( $data['mhs'] as $mhs ) : ?>
					<ul class="list-group d-flex justify-content-between align-items-center">
						<li class="list-group-item">
							<?= $mhs['nama']; ?>
							<a href="<?= BASEURL; ?>/mahasiswa/detail/<?= $mhs['id']; ?>" class="badge badge-primary">detail</a>
						</li>
					</ul>
				<?php endforeach; ?>
		</div>
	</div>
</div>