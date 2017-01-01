<?php

namespace Steam\Application\Model;

class User
{
    private $steamid;
    private $visibilityState;
    private $profileState;
    private $name;
    private $lastlogoff;
    private $commentPermission;
    private $profileUrl;
    private $avatarUrl;
    private $avatarMediumUrl;
    private $avatarFullUrl;
    private $countrycode;
    private $realname;

    public function __construct()
    {
    }

    /**
     * Gets the value of steamid.
     *
     * @return mixed
     */
    public function getSteamid()
    {
        return $this->steamid;
    }

    /**
     * Sets the value of steamid.
     *
     * @param mixed $steamid the steamid
     *
     * @return self
     */
    protected function setSteamid($steamid)
    {
        $this->steamid = $steamid;

        return $this;
    }

    /**
     * Gets the value of visibilityState.
     *
     * @return mixed
     */
    public function getVisibilityState()
    {
        return $this->visibilityState;
    }

    /**
     * Sets the value of visibilityState.
     *
     * @param mixed $visibilityState the visibility state
     *
     * @return self
     */
    protected function setVisibilityState($visibilityState)
    {
        $this->visibilityState = $visibilityState;

        return $this;
    }

    /**
     * Gets the value of profileState.
     *
     * @return mixed
     */
    public function getProfileState()
    {
        return $this->profileState;
    }

    /**
     * Sets the value of profileState.
     *
     * @param mixed $profileState the profile state
     *
     * @return self
     */
    protected function setProfileState($profileState)
    {
        $this->profileState = $profileState;

        return $this;
    }

    /**
     * Gets the value of name.
     *
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets the value of name.
     *
     * @param mixed $name the name
     *
     * @return self
     */
    protected function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Gets the value of lastlogoff.
     *
     * @return mixed
     */
    public function getLastlogoff()
    {
        return $this->lastlogoff;
    }

    /**
     * Sets the value of lastlogoff.
     *
     * @param mixed $lastlogoff the lastlogoff
     *
     * @return self
     */
    protected function setLastlogoff($lastlogoff)
    {
        $this->lastlogoff = $lastlogoff;

        return $this;
    }

    /**
     * Gets the value of commentPermission.
     *
     * @return mixed
     */
    public function getCommentPermission()
    {
        return $this->commentPermission;
    }

    /**
     * Sets the value of commentPermission.
     *
     * @param mixed $commentPermission the comment permission
     *
     * @return self
     */
    protected function setCommentPermission($commentPermission)
    {
        $this->commentPermission = $commentPermission;

        return $this;
    }

    /**
     * Gets the value of profileUrl.
     *
     * @return mixed
     */
    public function getProfileUrl()
    {
        return $this->profileUrl;
    }

    /**
     * Sets the value of profileUrl.
     *
     * @param mixed $profileUrl the profile url
     *
     * @return self
     */
    protected function setProfileUrl($profileUrl)
    {
        $this->profileUrl = $profileUrl;

        return $this;
    }

    /**
     * Gets the value of avatarUrl.
     *
     * @return mixed
     */
    public function getAvatarUrl()
    {
        return $this->avatarUrl;
    }

    /**
     * Sets the value of avatarUrl.
     *
     * @param mixed $avatarUrl the avatar url
     *
     * @return self
     */
    protected function setAvatarUrl($avatarUrl)
    {
        $this->avatarUrl = $avatarUrl;

        return $this;
    }

    /**
     * Gets the value of avatarMediumUrl.
     *
     * @return mixed
     */
    public function getAvatarMediumUrl()
    {
        return $this->avatarMediumUrl;
    }

    /**
     * Sets the value of avatarMediumUrl.
     *
     * @param mixed $avatarMediumUrl the avatar medium url
     *
     * @return self
     */
    protected function setAvatarMediumUrl($avatarMediumUrl)
    {
        $this->avatarMediumUrl = $avatarMediumUrl;

        return $this;
    }

    /**
     * Gets the value of avatarFullUrl.
     *
     * @return mixed
     */
    public function getAvatarFullUrl()
    {
        return $this->avatarFullUrl;
    }

    /**
     * Sets the value of avatarFullUrl.
     *
     * @param mixed $avatarFullUrl the avatar full url
     *
     * @return self
     */
    protected function setAvatarFullUrl($avatarFullUrl)
    {
        $this->avatarFullUrl = $avatarFullUrl;

        return $this;
    }

    /**
     * Gets the value of countrycode.
     *
     * @return mixed
     */
    public function getCountrycode()
    {
        return $this->countrycode;
    }

    /**
     * Sets the value of countrycode.
     *
     * @param mixed $countrycode the countrycode
     *
     * @return self
     */
    protected function setCountrycode($countrycode)
    {
        $this->countrycode = $countrycode;

        return $this;
    }

    /**
     * Gets the value of realname.
     *
     * @return mixed
     */
    public function getRealname()
    {
        return $this->realname;
    }

    /**
     * Sets the value of realname.
     *
     * @param mixed $realname the realname
     *
     * @return self
     */
    protected function setRealname($realname)
    {
        $this->realname = $realname;

        return $this;
    }
}
