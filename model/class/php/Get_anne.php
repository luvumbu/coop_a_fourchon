<?php



class Get_anne
{
    // permet de te donner l'adresse qui est sous ce format 
// exemple 
// 2023-12-24 06:04:58
    public $name;


    function __construct($name)
    {
        $this->name = $name;
    }
    function get_anne()
    {
        $debut = 0;
        $a = "";
        for ($xx = $debut; $xx < 4; $xx++) {
            $a = $a . $this->name[$xx];
        }
        return $a;
    }
    function get_jour()
    {
        $a = "";
        $debut = 8;
        for ($xx = $debut; $xx < $debut + 2; $xx++) {
            $a = $a . $this->name[$xx];
        }
        return $a;
    }

    function get_mois()
    {
        $a = "";
        $debut = 5;
        for ($xx = $debut; $xx < $debut + 2; $xx++) {
            $a = $a . $this->name[$xx];
        }
        return $a;
    }

}
/*
$apple = new Get_anne($liste_projet_reg_date[0]);
echo $apple->get_mois();
echo "<br>";

*/
?>