<div class="container mt-3">

	<div class="row">
		<div class="col-lg-6">
			<?php Flasher::flash(); ?>
		</div>
	</div>
	
	<div class="row">
		<div class="col-6 mb-3">
		<button type="button" class="btn btn-primary tombolTambahData" data-toggle="modal" data-target="#formModal">
  			Tambah Data Mahasiswa
		</button>
		</div>
	</div>
		<div class="row mb-3">
			<div class="col-lg-6">
				<form action="<?= BASEURL; ?>/mahasiswa/cari" method="post">
					<div class="input-group mb-3">
					<input type="text" class="form-control" placeholder="Cari Mahasiswa" autocomplate="off" name="keyword" id = "keyword">
					<div class="input-group-append">
						<button class="btn btn-primary" type="submit" id="tombolCari">Cari</button>
					</div>
					</div>
				</form>
			</div>
		</div>
			<h3>Data Mahasiswa</h3>
				<?php foreach ( $data['mhs'] as $mhs ) : ?>
					<ul class="list-group">
						<li class="list-group-item">
							<?= $mhs['nama']; ?>
							<a href="<?= BASEURL; ?>/mahasiswa/hapus/<?= $mhs['id']; ?>" class="badge badge-danger float-right ml-1" onclick="return confirm('yakin ?');">X</a>
							<a href="<?= BASEURL; ?>/mahasiswa/ubah/<?= $mhs['id']; ?>" class="badge badge-success float-right ml-1 tampilModalUbah" data-toggle="modal" data-target="#formModal" data-id="<?= $mhs['id'];?>">ubah</a>
							<a href="<?= BASEURL; ?>/mahasiswa/detail/<?= $mhs['id']; ?>" class="badge badge-primary float-right ml-1">detail</a>
						</li>
					</ul>
				<?php endforeach; ?>
		</div>
	</div>
</div>

<div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="judulModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="judulModalLabel">Tambah Data Mahasiswa</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
     	<div class="modal-body">
        

      	<form action="<?= BASEURL; ?>/mahasiswa/tambah" method="post">
		  <input type="hidden" name="id" id="id">
      		<div class="form-group">
		   		<label for="nama">Nama</label>
		    	<input type="text" class="form-control" id="nama" name = "nama">
		  	</div>
		  	<div class="form-group">
		   		<label for="nrp">NRP</label>
		    	<input type="number" class="form-control" id="nrp" name = "nrp">
		  	</div>
		  	<div class="form-group">
		   		<label for="email">Email</label>
		    	<input type="email" class="form-control" id="email" name = "email" placeholder="email@example.com">
		  	</div>
		  	 <div class="form-group">
			    <label for="jurusan">Jurusan</label>
			    <select class="form-control" id="jurusan" name="jurusan">
			      <option value="Teknik Industri">Teknik Industri</option>
			      <option value="Teknologi Pangan">Teknologi Pangan</option>
			      <option value="Teknik Mesin">Teknik Mesin</option>
			      <option value="Teknik Informatika">Teknik Informatika</option>
			      <option value="Teknik Lingkungan">Teknik Lingkungan</option>
			      <option value="Teknik Perancangan Wilayah Kota">Teknik Perancangan Wilayah Kota</option>
			    </select>
  			</div>
		</div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		        <button type="submit" class="btn btn-primary">Tambah Data</button>
        </form>
      </div>
    </div>
  </div>
</div>


