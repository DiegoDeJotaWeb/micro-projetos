<?php
class PdoConexao {
    private static $instancia;
   
    // Impedir instanciação
    private function __construct() { }
    // Impedir clonar
    private function __clone() { }
   
    //Impedir utilização do Unserialize
    public function __wakeup() { }
   
    /**
    *
    * @return object PDO connection
    * 
    */

    public static function getInstancia() {
        if(!isset(self::$instancia)) {
             try {
                $dsn = "mysql:host=localhost;dbname=loginNivel"; // Data source name (nome do host e nome da tabela)
                $usuario = "root"; // nome usuario mysql
                $senha = ""; // senha usuario mysql

                // $dsn = "mysql:host=localhost;dbname=id19770974_agenciadigitalspacesw2023"; // Data source name (nome do host e nome da tabela)
                // $usuario = "id19770974_digitalspacesw2023"; // nome usuario mysql
                // $senha = "R3MoltUK*COoVfCP"; // senha usuario mysql
                 
                 
               
                 self::$instancia = new PDO( $dsn, $usuario, $senha );
                 
                 
                 self::$instancia->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
             
             } catch ( PDOException $excecao ){
                 echo $excecao->getMessage();
             
                 exit();
             }
         }
         return self::$instancia;
        }
   }
?>