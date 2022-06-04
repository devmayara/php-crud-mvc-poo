<!-- Consultas/Regras de Negócio -->
<?php

require_once('./configuration/connect.php');

class ClientModel extends Connect{
    private $table;

    function __construct()
    {
        parent::__construct();
        $this->table = 'clients';
    }
}
