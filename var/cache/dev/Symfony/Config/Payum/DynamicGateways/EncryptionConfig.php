<?php

namespace Symfony\Config\Payum\DynamicGateways;


use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 */
class EncryptionConfig 
{
    private $defuseSecretKey;
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function defuseSecretKey($value): self
    {
        $this->defuseSecretKey = $value;
    
        return $this;
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['defuse_secret_key'])) {
            $this->defuseSecretKey = $value['defuse_secret_key'];
            unset($value['defuse_secret_key']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->defuseSecretKey) {
            $output['defuse_secret_key'] = $this->defuseSecretKey;
        }
    
        return $output;
    }

}
