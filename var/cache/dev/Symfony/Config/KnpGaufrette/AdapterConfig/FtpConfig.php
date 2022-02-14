<?php

namespace Symfony\Config\KnpGaufrette\AdapterConfig;


use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 */
class FtpConfig 
{
    private $directory;
    private $host;
    private $port;
    private $username;
    private $password;
    private $timeout;
    private $passive;
    private $create;
    private $ssl;
    private $utf8;
    private $mode;
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function directory($value): self
    {
        $this->directory = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function host($value): self
    {
        $this->host = $value;
    
        return $this;
    }
    
    /**
     * @default 21
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function port($value): self
    {
        $this->port = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function username($value): self
    {
        $this->username = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function password($value): self
    {
        $this->password = $value;
    
        return $this;
    }
    
    /**
     * @default 90
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function timeout($value): self
    {
        $this->timeout = $value;
    
        return $this;
    }
    
    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function passive($value): self
    {
        $this->passive = $value;
    
        return $this;
    }
    
    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function create($value): self
    {
        $this->create = $value;
    
        return $this;
    }
    
    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function ssl($value): self
    {
        $this->ssl = $value;
    
        return $this;
    }
    
    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function utf8($value): self
    {
        $this->utf8 = $value;
    
        return $this;
    }
    
    /**
     * @default 1
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function mode($value): self
    {
        $this->mode = $value;
    
        return $this;
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['directory'])) {
            $this->directory = $value['directory'];
            unset($value['directory']);
        }
    
        if (isset($value['host'])) {
            $this->host = $value['host'];
            unset($value['host']);
        }
    
        if (isset($value['port'])) {
            $this->port = $value['port'];
            unset($value['port']);
        }
    
        if (isset($value['username'])) {
            $this->username = $value['username'];
            unset($value['username']);
        }
    
        if (isset($value['password'])) {
            $this->password = $value['password'];
            unset($value['password']);
        }
    
        if (isset($value['timeout'])) {
            $this->timeout = $value['timeout'];
            unset($value['timeout']);
        }
    
        if (isset($value['passive'])) {
            $this->passive = $value['passive'];
            unset($value['passive']);
        }
    
        if (isset($value['create'])) {
            $this->create = $value['create'];
            unset($value['create']);
        }
    
        if (isset($value['ssl'])) {
            $this->ssl = $value['ssl'];
            unset($value['ssl']);
        }
    
        if (isset($value['utf8'])) {
            $this->utf8 = $value['utf8'];
            unset($value['utf8']);
        }
    
        if (isset($value['mode'])) {
            $this->mode = $value['mode'];
            unset($value['mode']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->directory) {
            $output['directory'] = $this->directory;
        }
        if (null !== $this->host) {
            $output['host'] = $this->host;
        }
        if (null !== $this->port) {
            $output['port'] = $this->port;
        }
        if (null !== $this->username) {
            $output['username'] = $this->username;
        }
        if (null !== $this->password) {
            $output['password'] = $this->password;
        }
        if (null !== $this->timeout) {
            $output['timeout'] = $this->timeout;
        }
        if (null !== $this->passive) {
            $output['passive'] = $this->passive;
        }
        if (null !== $this->create) {
            $output['create'] = $this->create;
        }
        if (null !== $this->ssl) {
            $output['ssl'] = $this->ssl;
        }
        if (null !== $this->utf8) {
            $output['utf8'] = $this->utf8;
        }
        if (null !== $this->mode) {
            $output['mode'] = $this->mode;
        }
    
        return $output;
    }

}
