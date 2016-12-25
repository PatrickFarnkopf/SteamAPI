<?php

use \Http\Request;
use \Http\Response;

class APIRequest
{
    private $baseUrl,
            $url,
            $interface,
            $method,
            $version,
            $parameters = [];

    public function __construct()
    {
    }

    public function setBaseUrl($url)
    {
        $this->baseUrl = $url;
        return $this;
    }

    public function getBaseUrl()
    {
        return $this->baseUrl;
    }

    public function setInterface($interface)
    {
        $this->interface = $interface;
    }

    public function getInterface()
    {
        return $this->interface;
    }

    public function setMethod($method)
    {
        $this->method = $method;
    }

    public function getMethod()
    {
        return $this->method;
    }

    public function setVersion($version)
    {
        $this->version = $version;
    }

    public function getVersion()
    {
        return $this->version;
    }

    public function addParameter($key, $value)
    {
        $this->parameters[$key] = $value;
        return $this;
    }

    public function removeParameter($key)
    {
        unset($this->parameters[$key]);
        return $this;
    }

    public function hasParameter($key)
    {
        return isset($this->parameters[$key]);
    }

    public function getParameter($key)
    {
        return $this->parameters[$key];
    }

    public function getParameters()
    {
        return $this->parameters;
    }

    private function getPreparedParameters()
    {
        $result = [];

        foreach ($this->parameters as $key => $value)
        {
            $result[] = sprintf("%s=%s", $key, $value);
        }

        return implode("&", $result);
    }

    private function buildUrl()
    {
        $this->url = sprintf("%s/%s/%s/%s/?%s", $this->baseUrl, $this->interface, $this->method, $this->version, $this->getPreparedParameters());
    }

    public function send()
    {
        $this->buildUrl();

        $request = new Request($this->url);
        return $request->send();
    }
}
