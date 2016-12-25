<?php

namespace Http;

class Response
{
    private $raw;

    public function __construct($raw = null)
    {
        $this->raw = $raw;
    }

    public function getRawResult()
    {
        return $this->raw;
    }
}
