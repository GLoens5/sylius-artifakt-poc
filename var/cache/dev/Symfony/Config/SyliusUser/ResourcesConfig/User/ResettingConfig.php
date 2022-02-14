<?php

namespace Symfony\Config\SyliusUser\ResourcesConfig\User;

require_once __DIR__.\DIRECTORY_SEPARATOR.'Resetting'.\DIRECTORY_SEPARATOR.'TokenConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Resetting'.\DIRECTORY_SEPARATOR.'PinConfig.php';

use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 */
class ResettingConfig 
{
    private $token;
    private $pin;
    
    public function token(array $value = []): \Symfony\Config\SyliusUser\ResourcesConfig\User\Resetting\TokenConfig
    {
        if (null === $this->token) {
            $this->token = new \Symfony\Config\SyliusUser\ResourcesConfig\User\Resetting\TokenConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "token()" has already been initialized. You cannot pass values the second time you call token().');
        }
    
        return $this->token;
    }
    
    public function pin(array $value = []): \Symfony\Config\SyliusUser\ResourcesConfig\User\Resetting\PinConfig
    {
        if (null === $this->pin) {
            $this->pin = new \Symfony\Config\SyliusUser\ResourcesConfig\User\Resetting\PinConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "pin()" has already been initialized. You cannot pass values the second time you call pin().');
        }
    
        return $this->pin;
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['token'])) {
            $this->token = new \Symfony\Config\SyliusUser\ResourcesConfig\User\Resetting\TokenConfig($value['token']);
            unset($value['token']);
        }
    
        if (isset($value['pin'])) {
            $this->pin = new \Symfony\Config\SyliusUser\ResourcesConfig\User\Resetting\PinConfig($value['pin']);
            unset($value['pin']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->token) {
            $output['token'] = $this->token->toArray();
        }
        if (null !== $this->pin) {
            $output['pin'] = $this->pin->toArray();
        }
    
        return $output;
    }

}
