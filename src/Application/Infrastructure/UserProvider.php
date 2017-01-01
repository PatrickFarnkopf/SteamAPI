<?php

namespace Steam\Application\Infrastructure;

use \Steam\UsersAPI\ISteamUser;

class UserProvider
{
    private $api;

    public function __construct(ISteamUser $api)
    {
        $this->api = $api;
    }

    public function getUser($steamId)
    {
        return new Proxy\UserProxy($steamId, $this->api);
    }

    public function getFriendList($steamId)
    {
        $result = [];

        $call = \Steam\UsersAPI\ContextUserAPI::SteamUser()->getFriendList($steamId)->getResult();

        $friends = $call->friendslist->friends;

        foreach ($friends as $friend)
        {
            $result[] = new Proxy\UserProxy($friend->steamid, $this->api);
        } 

        return $result;
    }

    public function loadUsers(array $users)
    {
        // at first collect steamids
        $steamids = [];
        foreach ($users as $user)
        {
            $steamids[] = $user->getSteamid();
        }

        // now get raw data
        $response = \Steam\UsersAPI\ContextUserAPI::SteamUser()->getPlayerSummaries($steamids)->getResult();

        $result = [];

        // iterate again through users to fill data
        foreach ($users as $user)
        {
            if (!$user->isLoaded())
            {
                $user->load($response);
                $result[] = $user;
            }
        }

        return $result;
    }
}
