<?php

namespace UsersAPI\Implementation;

use \UsersAPI\ISteamUser;

class SteamUser implements ISteamUser
{
    private $api;

    public function __construct($steamApi)
    {
        $this->api = $steamApi;
    }

    public function getPlayerSummaries(array $steamIds)
    {
        $request = $this->api->getNewRequest();
        $request->setMethod("GetPlayerSummaries");
        $request->setInterface("ISteamUser");
        $request->setVersion("v0002");
        $request->addParameter("steamids", implode(",", $steamIds));
        return $request->send();
    }

    public function getFriendList($steamId)
    {
        $request = $this->api->getNewRequest();
        $request->setMethod("GetFriendList");
        $request->setInterface("ISteamUser");
        $request->setVersion("v0001");
        $request->addParameter("steamid", $steamId);
        $request->addParameter("relationship", "friend");
        return $request->send();
    }
}
