
    <?php 
    class Classe{
            include_once "Alunno.php";
            public $listaAlunni;

            public function __construct(Type $var = null) {
                $this->listaAlunni = [
                    new Alunno("Alessandro", "Gonzalez", 20),
                    new Alunno("Matteo", "Falli", 18),
                    new Alunno("Gondrano", "Pivellini", 15),
                    new Alunno("Ciccio", "Gamer", 89),
                    new Alunno("Paolo", "Fox", 370),
                    new Alunno("Ivan", "Piri", 16),
                ];
            }

            function toString(){
                $str='';
                for ($x = 0; $x < count($this->listaAlunni); $x++) {
                     $str.=$this->listaAlunni[$x]->toString() . "<br>";
                }
                return $str;
            }

            function getClass(){
                $str='';
                    for ($x = 0; $x < count($this->listaAlunni); $x++) {
                        $str.=$this->listaAlunni[$x]->toString() . "<br>";
                    }
                return $str;
            }
            
        }
    ?>