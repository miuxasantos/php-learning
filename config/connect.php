<!-- Conexão com o DB -->

<?php 
    
    define('HOST', 'localhost');
    define('DBNAME', 'crud-php-db');
    define('USER', 'root');
    define('PASSWORD', 'root');

    class Connect{
        protected $connection;

        function __construct()
        {
            $this->connectDatabase();

        }

        function connectDatabase()
        {
            try
            {
                $this->connection = new PDO('mysql:host='.HOST.';dbname='.DBNAME, USER, PASSWORD);
            }
            catch (PDOException $e)
            {
                echo "Error!".$e->getMessage();
                die();
            }
        }
    }

?>