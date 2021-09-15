<?php

require_once "vendor/autoload.php";

use Ssperandio\DigitalCep\Search;

$busca = new Search;

$resultado = $busca->getAddressFromZipcode('13203-813');

print_r($resultado);