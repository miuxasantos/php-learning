<!-- Consultas e regras de negócio -->

<?php 

    require_once('./config/connect.php');

    class ClientModel extends Connect{
        private $table;

        function __construct()
        {
            parent::__construct();
            $this->table = 'clients';
        }

        function getAll()
        {
            $sqlSelect = $this->connection->query("SELECT * FROM $this->table");
            $resultQuery = $sqlSelect->fetchAll();

            return $resultQuery;
        }
    }
?>