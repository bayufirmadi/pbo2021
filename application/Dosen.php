<?php

    namespace application\backend;
    require_once("Pegawai.php");

    class Dosen extends Pegawai
    {
        protected $nidn;
        protected $jabatan_akademis;

	    public function setnidn($a){
		$this->nidn = $a;
	    }
	    public function setjabatan_akademis($a){
		$this->jabatan_akademis = $a;
	    }

	    public function getnidn() {
		return $this->nidn; 
	    }
	    public function getjabatan_akademis() {
		return $this->jabatan_akademis;
	    }

        function __construct($nip,$nama,$hp,$gp){
            $this->nip = $nip;
            $this->nama = $nama;
            $this->no_hp = $hp;
            $this->gaji_pokok = $gp;
        }
        function mengajar(){
            echo $this->nama . "sedang mengajar<br>";
        }
        function meneliti(){
            echo $this->nama . "sedang meneliti<br>";
        }
    }

    namespace application\frontend;

    class Dosen
    {
        public function ucapan()
        {
            echo "terimakasih";
        }
    }

    
?>

