<?php

require_once '../loader.php';

$user = new \Application\Infrastructure\Proxy\UserProxy(76561198017244914);
$user->load();
