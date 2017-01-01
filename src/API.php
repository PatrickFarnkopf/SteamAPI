<?php

namespace Steam;

class API
{
    const FORMAT_JSON    = 'json';
    const FORMAT_XML     = 'xml';
    const FORMAT_VDF     = 'vdf';

    private $key,
            $baseUrl,
            $format;

    public function __construct($baseUrl, $apiKey, $format = API::FORMAT_JSON)
    {
        $this->key = $apiKey;
        $this->format = $format;
        $this->baseUrl = $baseUrl;
    }

    public function isAvailable()
    {
        $host = str_replace(["http", ":", "/"], "", $this->baseUrl);
        if ($socket = @fsockopen($host, 80, $errno, $errstr, 5))
        {
            fclose($socket);
            return true;
        }

        return false;
    }

    public function getNewRequest()
    {
        if (!$this->isAvailable())
            throw new \Exception("SteamAPI is not available!");

        $request = new APIRequest();
        $request->setBaseUrl($this->baseUrl);
        $request->addParameter("key", $this->key);
        $request->addParameter("format", $this->format);
        return $request;
    }
}
