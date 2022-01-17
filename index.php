<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    class Movie {

        public $titolo;
        public $sottoTitolo;
        public $regista;

        public function __construct($titolo) {

            $this -> titolo = $titolo;
        }

        public function getFulltitle() {
            if($this -> sottoTitolo){
                return $this -> titolo . " : " . $this -> sottoTitolo;
            }else{
                return $this -> titolo;
            }
        }        

        public function __toString() {
            if($this -> regista){
                return $this -> getFulltitle() . " | " . $this -> regista;
            }else{
                return $this -> getFulltitle() . " | " . "???";
            }
        }
    }

    $s1 = new Movie("No Time To Die");
    $s2 = new Movie("Drive My Car");
    $s3 = new Movie("Dune");

    $s2 -> sottoTitolo = "Una donna scomparsa";
    $s3 -> sottoTitolo = "Il reboot diretto da Denis Villeneuve";

    $s3 -> regista = "Denis Villeneuve";
    

    echo  $s1 . "<br>";
    echo  $s2 . "<br>";
    echo  $s3 . "<br>";
    ?>
</body>
</html>