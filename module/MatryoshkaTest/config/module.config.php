<?php
$config = array();

$matryoshka = include __DIR__ . '/matryoshka.config.php';

$config = \Zend\Stdlib\ArrayUtils::merge($config, $matryoshka);

return $config;