<?php

namespace Symfony\Config\KnpGaufrette\AdapterConfig;


use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 */
class MogilefsConfig 
{
    private $domain;
    private $hosts;
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function domain($value): self
    {
        $this->domain = $value;
    
        return $this;
    }
    
    /**
     * @param ParamConfigurator|list<mixed|ParamConfigurator> $value
     * @return $this
     */
    public function hosts($value): self
    {
        $this->hosts = $value;
    
        return $this;
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['domain'])) {
            $this->domain = $value['domain'];
            unset($value['domain']);
        }
    
        if (isset($value['hosts'])) {
            $this->hosts = $value['hosts'];
            unset($value['hosts']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->domain) {
            $output['domain'] = $this->domain;
        }
        if (null !== $this->hosts) {
            $output['hosts'] = $this->hosts;
        }
    
        return $output;
    }

}
