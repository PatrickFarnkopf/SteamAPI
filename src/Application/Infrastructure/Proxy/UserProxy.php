<?php

namespace Application\Infrastructure\Proxy;

use \Application\Model\User;
use \UserAPI\ContextUserAPI;

class UserProxy extends User
{
    private $isLoaded;

    public function __construct($steamid)
    {
        parent::__construct();
        $this->setSteamid($steamid);
        $this->isLoaded = false;
    }

    public function load()
    {
        $result = ContextUserAPI::SteamUser()->getPlayerSummaries($this->getSteamid())->getResult();

        throw new \Exception("Todo: read result");
    }

    public function isLoaded()
    {
        return $this->isLoaded;
    }
}
