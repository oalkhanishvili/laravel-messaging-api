<?php

namespace Leavingstone\MessagingApi\Util;

class MethodWrapper
{
    protected $method;

    public function __construct(array $methodArray)
    {
        $this->method = $methodArray;
    }

    public function getClassName()
    {
        return $this->method['className'];
    }

    public function getResponseNumber()
    {
        return $this->method['responseMethod'];
    }

    public function needAuth()
    {
        return @$this->method['auth'] === true;
    }

    public function getScopes()
    {
        return $this->method['token_scopes'] ?? [];
    }
}