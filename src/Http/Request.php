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
        $request = curl_init(); 
        curl_setopt($request, CURLOPT_URL, $this->url); 
        curl_setopt($request, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($request, CURLOPT_HEADER, false);
        $raw = curl_exec($request);

        curl_close($request);

        if ($raw == '')
            throw new \Exception("empty result");

        return new Response($raw);
    }
}
