<?php
class Movie{
    public $name;
    public $price;
    function __construct($_name,$_price){
        $this->name=$_name;
        $this->price=$_price;
        $this->metodo();
    }
    public function metodo(){
        return $this->price;
    }
}
$avenger = new Movie('avengers', 9);
$avatar = new Movie('avatar', 12);
// var_dump($avatar);
// var_dump($avenger);
echo "il prezzo del film $avatar->name è di" . $avatar->metodo() ."euro <br>";
echo "il prezzo del film $avenger->name è di $avenger->price euro"
?>