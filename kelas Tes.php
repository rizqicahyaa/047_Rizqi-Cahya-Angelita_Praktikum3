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
}
        $truk1 = new Truk;
        $truk1->setjmlRoda(4);
        $truk1->setWarna('Kuning');
        $truk1->setBahanBakar('Solar');
        $truk1->setKapasitasMesin(1500);
        $truk1->setMuatanMaks(1000);

        $truk2 = new Truk;
        $truk2->setJmlRoda(6);
        $truk2->setWarna('Merah');
        $truk2->setBahanBakar('Solar');
        $truk2->setKapasitasMesin(2000);
        $truk2->setMuatanMaks(5000);

        $taksi1 = new Taksi;
        $taksi1->setJmlRoda(4);
        $taksi1->setWarna('Oranye');
        $taksi1->setBahanBakar('Bensin');
        $taksi1->setKapasitasMesin(1500);
        $taksi1->setTarifAwal(10000);
        $taksi1->setTarifPerKm(5000);

        $taksi2 = new Taksi;
        $taksi2->setJmlRoda(4);
        $taksi2->setWarna('Biru');
        $taksi2->setBahanBakar('Bensin');
        $taksi2->setKapasitasMesin(1300);
        $taksi2->setTarifAwal(7000);
        $taksi2->setTarifPerKm(3500);

        $sepeda1 = new Sepeda;
        $sepeda1->setJmlRoda(3);
        $sepeda1->setWarna('Hitam');
        $sepeda1->setJmlSadel(1);
        $sepeda1->setJmlGir(2);

        $sepeda2 = new Sepeda;
        $sepeda2->setJmlRoda(2);
        $sepeda2->setWarna('Putih');
        $sepeda2->setJmlSadel(2);
        $sepeda2->setJmlGir(5); 
?>

<html>
    <head>
        <title>Nomer 2b</title>
    </head>
    <style>
        table {
            width: 100%;
        }
        table, td, th {
            border: 3px solid black;
        }

        #table1 {
            border-collapse: collapse;
        }

        thead{
            background: #D3D3D3;
        }

         tbody{
            text-align: center;
        } 

    </style>
    <body>
        <table id="table1">
            <thead>
                <tr>
                    <th>Obyek</th>
                    <th>jmlRoda</th>
                    <th>warna</th>
                    <th>bahanBakar</th>
                    <th>kapasitasMesin</th>
                    <th>muatanMaks</th>
                    <th>tarifAwal</th>
                    <th>tarifPerkm</th>
                    <th>jmlSadel</th>
                    <th>jmlGir</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>truk 1</td>
                    <td><?= $truk1->getJmlRoda(); ?></td>
                    <td><?= $truk1->getWarna(); ?></td>
                    <td><?= $truk1->getBahanBakar(); ?></td>
                    <td><?= $truk1->getKapasitasMesin(); ?></td>
                    <td><?= $truk1->getMuatanMaks(); ?></td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <tr>
                    <td>truk 2</td>
                    <td><?= $truk2->getJmlRoda(); ?></td>
                    <td><?= $truk2->getWarna(); ?></td>
                    <td><?= $truk2->getBahanBakar(); ?></td>
                    <td><?= $truk2->getKapasitasMesin(); ?></td>
                    <td><?= $truk2->getMuatanMaks(); ?></td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <tr>
                    <td>taksi 1</td>
                    <td><?= $taksi1->getJmlRoda(); ?></td>
                    <td><?= $taksi1->getWarna(); ?></td>
                    <td><?= $taksi1->getBahanBakar(); ?></td>
                    <td><?= $taksi1->getKapasitasMesin(); ?></td>
                    <td>-</td>
                    <td><?= $taksi1->getTarifAwal(); ?></td>
                    <td><?= $taksi1->getTarifPerKm(); ?></td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <tr>
                    <td>taksi 2</td>
                    <td><?= $taksi2->getJmlRoda(); ?></td>
                    <td><?= $taksi2->getWarna(); ?></td>
                    <td><?= $taksi2->getBahanBakar(); ?></td>
                    <td><?= $taksi2->getKapasitasMesin(); ?></td>
                    <td>-</td>
                    <td><?= $taksi2->getTarifAwal(); ?></td>
                    <td><?= $taksi2->getTarifPerKm(); ?></td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <tr>
                    <td>sepeda 1</td>
                    <td><?= $sepeda1->getJmlRoda(); ?></td>
                    <td><?= $sepeda1->getWarna(); ?></td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td><?= $sepeda1->getJmlSadel(); ?></td>
                    <td><?= $sepeda1->getJmlGir(); ?></td>
                </tr>
                <tr>
                    <td>sepeda 2</td>
                    <td><?= $sepeda2->getJmlRoda(); ?></td>
                    <td><?= $sepeda2->getWarna(); ?></td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td><?= $sepeda2->getJmlSadel(); ?></td>
                    <td><?= $sepeda2->getJmlGir(); ?></td>
                </tr>
                </tbody>
        </table>
    </body>
</html>