<?php 
    require_once('models/Client.php');

    class clientControl{
        private $modal;

        function __construct()
        {
            $this->model = new ClientModel;
        }

        function getAll()
        {
            $resultData = $this->model->getAll();
            require_once('./views/index.php');
        }
    }
?>