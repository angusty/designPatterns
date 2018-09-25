<?php
namespace DesignPatterns\DependencyInjection;

class DatabaseConfiguration
{
    private $password;
    private $port;
    private $host;
    private $username;

    public function __construct(string $host, int $port, string $username, string $password)
    {
        $this->host = $host;
        $this->port = $port;
        $this->username= $username;
        $this->password = $password;
    }

    public function getHost() : string
    {
        return $this->host;
    }

    public function getPort() : int
    {
        return $this->port;
    }

    public function getUsername() : string
    {
        return $this->username;
    }

    public function getPassword() : string
    {
        return $this->password;
    }
}
