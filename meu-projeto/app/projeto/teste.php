<?php

require_once 'fisico/Produto.php';
require_once 'digital/Produto.php';

use Produto\fisico\Produto as ProdutoFisico;
use Produto\digital\Produto as ProdutoDigital;

$p = new ProdutoFisico();
echo $p->tipo();

echo PHP_EOL;

$pd = new ProdutoDigital();
echo $pd->tipo();