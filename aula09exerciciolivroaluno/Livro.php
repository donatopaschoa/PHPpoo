    <?php
    require_once "Publicacao.php"; // Interface
    require_once "Pessoa.php";

    /*
    - Será feito uma licação entre a classe Livro com a interface Publicacao
    - Todos os métodos abstratos da interface serão migrados para a classe Livro,
    tornando Métodos espefíficos, ou seja, a classe Livro vai implementar a interface
    Publicacao
    - O método específico "detalhe()" da classe Livro continuará fazendo parte
    OBS:
    Enquanto não for importado TODOS OS MÉTODOS da interface, será gerado um erro
    */

    class Livro implements Publicacao {


        // Atributos: ------------------------------------------------------
        private $titulo;
        private $autor;
        private $totalPaginas;
        private $pagAtual;
        private $aberto;
        private $leitor;

        // Métodos específico da classe Livro: -----------------------------
        public function detalhes(){
            echo "<p>{$this->getLeitor()->getNome()} está lendo o livro {$this->getTitulo()}, ";
            echo "ele está na página {$this->getPagAtual()} e faltam " . ($this->getTotalPaginas() - $this->getPagAtual()) ." para terminar o livro</P>";
        }

        // Métodos específicos migrados da interface: ----------------------
        public function abrir(){
            $this->aberto = true;
        }
        public function fechar(){
            $this->aberto = false;
        }
        public function folhear($pag){ // Ao folhear eu vou direto numa pág. específica
            if($this->getAberto()){
                if($pag > $this->getTotalPaginas()){ // Se a pág procurada for acima da última
                    echo "Você está procurando uma página que não existe pois este livro vai até a página {$this->getTotalPaginas()}";
                }else{
                    $this->setPagAtual($pag);
                    echo "<p>{$this->leitor->getNome()} folheou para a página $pag</p>";
                }
            }else{
                echo "<p>Não é possível folhear pois o livro está fechado</p>";
            }
        }
        public function avancarPag(){
            if($this->getAberto()){
                if($this->getPagAtual() + 1 > $this->getTotalPaginas()){
                    echo "<p>Não pode avançar pois o livro está na última página!</p>";
                }else{
                    $this->pagAtual ++;
                    echo "<p>{$this->leitor->getNome()} avançou uma página";
                }
            }else{
                echo "<p>Não é possível avançar a página pois o livro está fechado</p>";
            }
        }
        public function voltarPag(){
            if($this->getAberto()){
                if($this->getPagAtual() - 1 < 1){
                    echo "<p>Não pode voltar pois o livro está na primeira página!</p>";
                }else{
                    $this->pagAtual --;
                    echo "<p>{$this->leitor->getNome()} voltou uma página";
                }
            } else{
                echo "<p>Não é possível voltar a página pois o livro está fechado</p>";
            }    
        }

        // Métodos especiais construtor, get e set: ------------------------
        public function __construct($tit, $autor, $totPag, $leitor)
        {
            $this->titulo = $tit;            
            $this->autor = $autor;
            $this->totalPaginas = $totPag;
            $this->pagAtual = 1; // A leitura inicia na primeira pág
            $this->aberto = false;
            $this->leitor = $leitor;
        }

        public function getTitulo(){
            return $this->titulo;
        }

        public function getAutor(){
            return $this->autor;
        }

        public function getTotalPaginas(){
            return $this->totalPaginas;
        }

        public function getPagAtual(){
            return $this->pagAtual;
        }

        public function getAberto(){
            return $this->aberto;
        }

        public function getLeitor(){
            return $this->leitor;
        }

        public function setTitulo($tit){
            $this->titulo = $tit;
        }

        public function setAutor($aut){
            $this->autor = $aut;
        }

        public function setTotPaginas($totPag){
            $this->totalPaginas = $totPag;
        }

        public function setPagAtual($pagAt){
            $this->pagAtual = $pagAt;
        }

        public function setAberto($aberto){
            $this->aberto = $aberto;
        }

        public function setLeitor($leitor){
            $this->leitor = $leitor;
        }
    }

?>