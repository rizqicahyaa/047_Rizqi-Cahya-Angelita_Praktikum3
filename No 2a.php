<?php

/*      Rizqi Cahya Angelita 
        21091397047 */
        
class Kendaraan 
{
	private $jmlRoda;
	public function setJmlRoda($jmlRoda)
	{
		$this->JmlRoda = $jmlRoda;
	}
	public function getJmlRoda()
	{
		return $this->JmlRoda;
	}

	private $warna;
	public function setWarna($warna)
	{
		$this->Warna = $warna;
	}
	public function getWarna()
	{
		return $this->Warna;
	}
}

class Mobil extends Kendaraan
{
	private $bahanBakar;
	public function setBahanBakar($bahanBakar)
	{
		$this->BahanBakar = $bahanBakar;
	}
	public function getBahanBakar()
	{
		return $this->BahanBakar;
	}

	private $kapasitasMesin;
	public function setKapasitasMesin($kapasitasMesin)
	{
		$this->KapasitasMesin = $kapasitasMesin;
	}
	public function getKapasitasMesin()
	{
		return $this->KapasitasMesin;
	}
}

class Sepeda extends Kendaraan
{
	private $jmlSadel;
	public function setJmlSadel($jmlSadel)
	{
		$this->JmlSadel = $jmlSadel;
	}
	public function getJmlSadel()
	{
	return $this->JmlSadel;
	}

	private $jmlGir;
	public function setJmlGir($jmlGir)
	{
		$this->JmlGir = $jmlGir;
	}
	public function getJmlGir()
	{
		return $this->JmlGir;
	}
}

class Truk extends Mobil
{
	private $muatanMaks;
	public function setMuatanMaks($muatanMaks)
	{
		$this->MuatanMaks = $muatanMaks;
	}
	public function getMuatanMaks()
	{
		return $this->MuatanMaks;
	}
}

class Taksi extends Mobil
{
	private $tarifAwal;
	public function setTarifAwal($tarifAwal)
	{
		$this->TarifAwal = $tarifAwal;
	}
	public function getTarifAwal()
	{
	return $this->TarifAwal;
	}

	private $tarifPerKm;
	public function setTarifPerKm($tarifPerKm)
	{
		$this->TarifPerKm = $tarifPerKm;
	}
	public function getTarifPerKm()
	{
		return $this->TarifPerKm;
	}
} ?>