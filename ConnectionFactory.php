<?php
    class ConnectionFactory{
        static $conn; // variavel static, se mudar o valor dela em uma muda em todos

        public function __construct(){
            $database = "advocacia"; // coloque o nome do seu banco de dados criado no sqlXampp
            $user = "root";
            $pass = "";
            $host = "localhost";
            $port = "3306"; // porta que seu XAMPP esta utilizando
            try{
                self::$conn = new PDO("mysql:host=$host; port=$port; dbname=$database",$user, $pass);   // PDO classe utilizada para conexão em qualquer banco de dados
               // echo "conectado";
            }
            catch(PDOException $ex){
                echo "Erro".$ex->getMessage();
            }
        }

        // Método para executar uma query SQL
        public static function query($sql) {
            return self::$conn->query($sql);
        }
    }
?>