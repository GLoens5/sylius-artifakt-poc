<?php

namespace Symfony\Config\KnpGaufrette\AdapterConfig;


use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 */
class CacheConfig 
{
    private $source;
    private $cache;
    private $ttl;
    private $serialize;
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function source($value): self
    {
        $this->source = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function cache($value): self
    {
        $this->cache = $value;
    
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
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function serialize($value): self
    {
        $this->serialize = $value;
    
        return $this;
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['source'])) {
            $this->source = $value['source'];
            unset($value['source']);
        }
    
        if (isset($value['cache'])) {
            $this->cache = $value['cache'];
            unset($value['cache']);
        }
    
        if (isset($value['ttl'])) {
            $this->ttl = $value['ttl'];
            unset($value['ttl']);
        }
    
        if (isset($value['serialize'])) {
            $this->serialize = $value['serialize'];
            unset($value['serialize']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->source) {
            $output['source'] = $this->source;
        }
        if (null !== $this->cache) {
            $output['cache'] = $this->cache;
        }
        if (null !== $this->ttl) {
            $output['ttl'] = $this->ttl;
        }
        if (null !== $this->serialize) {
            $output['serialize'] = $this->serialize;
        }
    
        return $output;
    }

}
