<?php

namespace Symfony\Config\KnpGaufrette\AdapterConfig;


use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 */
class ApcConfig 
{
    private $prefix;
    private $ttl;
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function prefix($value): self
    {
        $this->prefix = $value;
    
        return $this;
    }
    
    /**
     * @default 0
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function ttl($value): self
    {
        $this->ttl = $value;
    
        return $this;
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['prefix'])) {
            $this->prefix = $value['prefix'];
            unset($value['prefix']);
        }
    
        if (isset($value['ttl'])) {
            $this->ttl = $value['ttl'];
            unset($value['ttl']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->prefix) {
            $output['prefix'] = $this->prefix;
        }
        if (null !== $this->ttl) {
            $output['ttl'] = $this->ttl;
        }
    
        return $output;
    }

}
