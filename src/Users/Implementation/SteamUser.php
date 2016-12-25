<?php

namespace Users\Implementation;

use \Users\ISteamUser;

class SteamUser implements ISteamUser
{
    private $api;

    public function __construct($steamApi)
    {
        $this->api = $steamApi;
    }

    public function GetPlayerSummaries(array $userIds)
    {
        $request = $this->api->getNewRequest();
        $request->setMethod("GetPlayerSummaries");
        $request->setInterface("ISteamUser");
        $request->setVersion("v0002");
        $request->addParameter("steamids", implode(",", $userIds));
        return $request->send();
    }
}
