<?php

namespace Symfony\Config\SyliusUser;

require_once __DIR__.\DIRECTORY_SEPARATOR.'ResourcesConfig'.\DIRECTORY_SEPARATOR.'UserConfig.php';

use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 */
class ResourcesConfig 
{
    private $user;
    
    public function user(array $value = []): \Symfony\Config\SyliusUser\ResourcesConfig\UserConfig
    {
        if (null === $this->user) {
            $this->user = new \Symfony\Config\SyliusUser\ResourcesConfig\UserConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "user()" has already been initialized. You cannot pass values the second time you call user().');
        }
    
        return $this->user;
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['user'])) {
            $this->user = new \Symfony\Config\SyliusUser\ResourcesConfig\UserConfig($value['user']);
            unset($value['user']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->user) {
            $output['user'] = $this->user->toArray();
        }
    
        return $output;
    }

}
