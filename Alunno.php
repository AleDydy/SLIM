
    <?php class Alunno{
            public $nome;
            public $cognome;
            public $eta;

            function __construct($n, $c, $e){
                $this->nome = $n;
                $this->cognome = $c;
                $this->eta = $e;
            }

            //getter
            function getNome(){
                return $this->nome;
            }

            function getCognome(){
                return $this->cognome;
            }

            function getEta(){
                return $this->eta;
            }


            //setter
            function setNome($n){
                $this->nome = $nome;
            }

            function setCognome($c){
                $this->cognome = $cognome;
            }

            function setEta($e){
                $this->eta = $eta;
            }


            //toString
            function toString(){
                echo "NOME: " . $this->nome . "<br>"; 
                echo "COGNOME: " . $this->cognome . "<br>"; 
                echo "ETA: " . $this->eta . "<br>";
            }
        }

    ?>