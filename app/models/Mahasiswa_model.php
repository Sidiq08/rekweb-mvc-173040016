<?php 

class Mahasiswa_model {
	private $mhs = [
		[
		"nama" => "Muhammad Aulia Asshiddiqie",
		"nrp" => "173040016",
		"email" => "m.aulia08@mail.unpas.ac.id",
		"jurusan" => "Teknik Informatika"
		],
		[
		"nama" => "Muhammad Trisnaldi",
		"nrp" => "173020179",
		"email" => "mtrisnaldi3110@mail.unpas.ac.id",
		"jurusan" => "Teknik Pangan"
		],
		[
		"nama" => "Dicky Ardianto",
		"nrp" => "173040049",
		"email" => "dicky173040049@mail.unpas.ac.id",
		"jurusan" => "Teknik Informatika"
		]
	];

	public function getAllMahasiswa(){
		return $this->mhs;
	}
}