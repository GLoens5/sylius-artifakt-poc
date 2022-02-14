<?php

namespace Symfony\Config\SonataBlock;


use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 */
class HttpCacheConfig 
{
    private $handler;
    private $listener;
    
    /**
     * @default 'sonata.block.cache.handler.default'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function handler($value): self
    {
        $this->handler = $value;
    
        return $this;
    }
    
    /**
     * @default true
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function listener($value): self
    {
        $this->listener = $value;
    
        return $this;
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['handler'])) {
            $this->handler = $value['handler'];
            unset($value['handler']);
        }
    
        if (isset($value['listener'])) {
            $this->listener = $value['listener'];
            unset($value['listener']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->handler) {
            $output['handler'] = $this->handler;
        }
        if (null !== $this->listener) {
            $output['listener'] = $this->listener;
        }
    
        return $output;
    }

}
