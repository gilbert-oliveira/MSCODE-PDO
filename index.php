<?php

error_reporting(E_ALL);
ini_set('display_errors', '1');

require_once 'vendor/autoload.php';

use App\Database\Query;


$query = new Query();

$alunos = $query->select(
    tabela: 'alunos'
);

dd($alunos);

