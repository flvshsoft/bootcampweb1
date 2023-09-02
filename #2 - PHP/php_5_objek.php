<?php 
	class Mobil {
	  // Properties
	  public $merek;
	  public $tahun;
	  public $warna;

	  // Methods
	  function set_merek($merek) {
	    $this->merek = $merek;
	  }
	  function get_merek() {
	    return $this->merek;
	  }

	  // Methods
	  function set_tahun($tahun) {
	    $this->tahun = $tahun;
	  }
	  function get_tahun() {
	    return $this->tahun;
	  }

	}

	$mobil1 = new Mobil();
	$mobil1->set_merek("Honda Jazz");
	$mobil1->set_tahun("2017");
	// $mobil1->set_warna("biru");

	echo "merek = ".$mobil1->get_merek()."<br>";
	echo "tahun = ".$mobil1->get_tahun();
?>