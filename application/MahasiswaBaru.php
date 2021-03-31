<?php 
    namespace application\backend;
    require_once("Mahasiswa.php");

    class MahasiswaBaru extends Mahasiswa
    {
        protected $no_registrasi;


	    public function setno_registrasi($a){
		    $this->no_registrasi = $a;
	    }

	    public function getno_registrasi() {
		    return $this->no_registrasi; 
	    }

        function __construct($nim,$nama,$tgl,$jk){
            $this->nim = $nim;
            $this->nama = $nama;
            $this->tanggal_lahir = $tgl;
            $this->jenis_kelamin = $jk;
        }
        function bayarGedung(){
        }
    }

?>

