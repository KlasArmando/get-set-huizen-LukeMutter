<?php
class Huizen{
    public $verdiepingen;
    public $kamers;
    public $breedte;
    public $hoogte;
    public $diepte;
    public $prijs;

    public function __construct($verdiepingen, $kamers, $breedte, $hoogte, $diepte)
    {
        $this->verdiepingen = $verdiepingen;
        $this->kamers = $kamers;
        $this->breedte = $breedte;
        $this->hoogte = $hoogte;
        $this->diepte = $diepte;
    }

    public function setPrijs($prijs){
        $this->prijs = $prijs;
    }

    public function getPrijs(){
        return $this->prijs;
    }
}
$Huis1 = new Huizen(2, 5,50,10,5);
$Huis2 = new Huizen(3, 7,70,15,7);
$Huis3 = new Huizen(4, 8,75,20,10);

$Huis1->setPrijs($Huis1->diepte * $Huis1->breedte * $Huis1->hoogte * 100);
$Huis2->setPrijs($Huis2->diepte * $Huis2->breedte * $Huis2->hoogte * 100);
$Huis3->setPrijs($Huis3->diepte * $Huis3->breedte * $Huis3->hoogte * 100);

echo "Huis 1:" . "<br>";
echo "verdiepingen: " . $Huis1->verdiepingen . "<br>";
echo "kamers: " . $Huis1->kamers . "<br>";
echo "breedte: " . $Huis1->breedte . " Meter" . "<br>";
echo "hoogte: " . $Huis1->hoogte . " Meter" . "<br>";
echo "diepte: " . $Huis1->diepte . " Meter" . "<br>";
echo "prijs: " . $Huis1->getPrijs() . "<br>";

echo "<br>" ."Huis 2:" . "<br>";
echo "verdiepingen: " . $Huis2->verdiepingen . "<br>";
echo "kamers: " . $Huis2->kamers . "<br>";
echo "breedte: " . $Huis2->breedte . " Meter" . "<br>";
echo "hoogte: " . $Huis2->hoogte . " Meter" . "<br>";
echo "diepte: " . $Huis2->diepte . " Meter" . "<br>";
echo "prijs: " . $Huis2->getPrijs() . "<br>";

echo "<br>" ."Huis 3:" . "<br>";
echo "verdiepingen: " . $Huis3->verdiepingen . "<br>";
echo "kamers: " . $Huis3->kamers . "<br>";
echo "breedte: " . $Huis3->breedte . " Meter" . "<br>";
echo "hoogte: " . $Huis3->hoogte . " Meter" . "<br>";
echo "diepte: " . $Huis3->diepte . " Meter" . "<br>";
echo "prijs: " . $Huis3->getPrijs() . "<br>";