<?php

namespace Application\Infrastructure\Proxy;

use \Application\Model\User;
use \UsersAPI\ContextUserAPI;
use \UsersAPI\ISteamUser;

class UserProxy extends User
{
    private $isLoaded;
    private $api;

    public function __construct($steamid, ISteamUser $api)
    {
        parent::__construct();
        $this->setSteamid($steamid);
        $this->isLoaded = false;
    }

    public function load($result = null)
    {
        if ($result == null)
            $result = $this->api->getPlayerSummaries([$this->getSteamid()])->getResult();

        $players = $result->response->players;
        foreach ($players as $player)
        {
            if ($player->steamid == $this->getSteamid())
            {
                $this->setVisibilityState($player->communityvisibilitystate);
                $this->setProfileUrl($player->profileurl);
                $this->setAvatarUrl($player->avatar);
                $this->setProfileState($player->profilestate);
                $this->setName($player->personaname);
                $this->setLastlogoff($player->lastlogoff);
                $this->setCommentPermission($player->commentpermission);
                $this->setAvatarMediumUrl($player->avatarmedium);
                $this->setAvatarFullUrl($player->avatarfull);
                $this->setRealname($player->realname);
                $this->setCountrycode($player->loccountrycode);

                $this->isloaded = true;
            }
        }
    }

    public function isLoaded()
    {
        return $this->isLoaded;
    }
}
