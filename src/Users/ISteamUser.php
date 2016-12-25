<?php

namespace Users;

interface ISteamUser
{
    function GetPlayerSummaries(array $userIds);
}
