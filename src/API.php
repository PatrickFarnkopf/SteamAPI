<?php

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

    public function getNewRequest()
    {
        $request = new APIRequest();
        $request->setBaseUrl($this->baseUrl);
        $request->addParameter("key", $this->key);
        $request->addParameter("format", $this->format);
        return $request;
    }
}
