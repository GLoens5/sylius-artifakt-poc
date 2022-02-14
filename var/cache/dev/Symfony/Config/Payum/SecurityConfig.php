<?php

namespace Symfony\Config\Payum;

require_once __DIR__.\DIRECTORY_SEPARATOR.'Security'.\DIRECTORY_SEPARATOR.'TokenStorageConfig.php';

use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 */
class SecurityConfig 
{
    private $tokenStorage;
    
    public function tokenStorage(string $key, array $value = []): \Symfony\Config\Payum\Security\TokenStorageConfig
    {
        if (!isset($this->tokenStorage[$key])) {
            return $this->tokenStorage[$key] = new \Symfony\Config\Payum\Security\TokenStorageConfig($value);
        }
        if ([] === $value) {
            return $this->tokenStorage[$key];
        }
    
        throw new InvalidConfigurationException('The node created by "tokenStorage()" has already been initialized. You cannot pass values the second time you call tokenStorage().');
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['token_storage'])) {
            $this->tokenStorage = array_map(function ($v) { return new \Symfony\Config\Payum\Security\TokenStorageConfig($v); }, $value['token_storage']);
            unset($value['token_storage']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->tokenStorage) {
            $output['token_storage'] = array_map(function ($v) { return $v->toArray(); }, $this->tokenStorage);
        }
    
        return $output;
    }

}
