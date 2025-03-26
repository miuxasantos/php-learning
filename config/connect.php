<!-- Conexão com o DB -->

<?php 
    
    define('HOST', 'localhost');
    define('DATABASE', 'crud-php-db');
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
                $this->connection = new PDO('mysql:host='.HOST.';dbname='.DATABASENAME, USER, PASSWORD);
            }
            catch (PDOException $e)
            {
                echo "Error!".$e->getMessage();
                die();
            }
        }
    }

    $testConnection = new Connect();
?>