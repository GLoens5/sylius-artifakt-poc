<?php

namespace Symfony\Config\SonataBlock\Exception;


use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 */
class DefaultConfig 
{
    private $filter;
    private $renderer;
    
    /**
     * @default 'debug_only'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function filter($value): self
    {
        $this->filter = $value;
    
        return $this;
    }
    
    /**
     * @default 'throw'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function renderer($value): self
    {
        $this->renderer = $value;
    
        return $this;
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['filter'])) {
            $this->filter = $value['filter'];
            unset($value['filter']);
        }
    
        if (isset($value['renderer'])) {
            $this->renderer = $value['renderer'];
            unset($value['renderer']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->filter) {
            $output['filter'] = $this->filter;
        }
        if (null !== $this->renderer) {
            $output['renderer'] = $this->renderer;
        }
    
        return $output;
    }

}
