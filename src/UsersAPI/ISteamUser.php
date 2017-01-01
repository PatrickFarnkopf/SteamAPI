<?php

namespace Steam\UsersAPI;

interface ISteamUser
{
    function getPlayerSummaries(array $steamIds);
    function getFriendList($steamId);
}
