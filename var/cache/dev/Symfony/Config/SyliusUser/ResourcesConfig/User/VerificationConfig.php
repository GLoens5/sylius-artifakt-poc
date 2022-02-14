<?php

namespace Symfony\Config\SyliusUser\ResourcesConfig\User;

require_once __DIR__.\DIRECTORY_SEPARATOR.'Verification'.\DIRECTORY_SEPARATOR.'TokenConfig.php';

use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 */
class VerificationConfig 
{
    private $token;
    
    public function token(array $value = []): \Symfony\Config\SyliusUser\ResourcesConfig\User\Verification\TokenConfig
    {
        if (null === $this->token) {
            $this->token = new \Symfony\Config\SyliusUser\ResourcesConfig\User\Verification\TokenConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "token()" has already been initialized. You cannot pass values the second time you call token().');
        }
    
        return $this->token;
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['token'])) {
            $this->token = new \Symfony\Config\SyliusUser\ResourcesConfig\User\Verification\TokenConfig($value['token']);
            unset($value['token']);
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
    
        return $output;
    }

}
