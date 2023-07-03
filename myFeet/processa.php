<?php 

include 'sql.php';


conectar();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];

    function alterarCliente(&$cliente) {
        global $id;
        $cliente = $id;
    }

    alterarCliente($cliente);

    header('location: altera.php');
}

?>