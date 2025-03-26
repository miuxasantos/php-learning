<!-- Rotas e chamadas de métodos -->

<?php 
    require_once('./controllers/clienteController.php');

    $controller = new clientControl();

    $action = !empty( $_GET['a']) ? $_GET['a'] : 'getAll';

    $controller->{$action}();

?>