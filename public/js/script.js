$(function(){

	$('.tombolTambahData').on('click', function(){
		$('#judulModalLabel').html('Tambah Data Mahasiswa');

		$('.modal-footer button[type=submit]').html('Tambah Data');
	});

	$('.tampilModalEdit').on('click', function(){

		$('#judulModalLabel').html('Ubah Data Mahasiswa');
		$('.modal-footer button[type=submit]').html('Ubah Data');
	});

});