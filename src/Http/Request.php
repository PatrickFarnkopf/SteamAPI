<?php

namespace Http;

class Request
{
    private $url;

    public function __construct($url)
    {
        $this->url = $url;
    }

    public function setUrl($url)
    {
        $this->url = $url;
    }

    public function getUrl()
    {
        return $this->url;
    }

    public function send()
    {
        $raw = file_get_contents($this->url);
        if ($raw == '')
            throw new \Exception("empty result");

        return new Response($raw);
    }
}