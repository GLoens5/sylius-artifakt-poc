<?php

namespace Symfony\Config\SonataBlock;


use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 */
class ContainerConfig 
{
    private $types;
    private $templates;
    
    /**
     * @param ParamConfigurator|list<mixed|ParamConfigurator> $value
     * @return $this
     */
    public function types($value): self
    {
        $this->types = $value;
    
        return $this;
    }
    
    /**
     * @param ParamConfigurator|list<mixed|ParamConfigurator> $value
     * @return $this
     */
    public function templates($value): self
    {
        $this->templates = $value;
    
        return $this;
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['types'])) {
            $this->types = $value['types'];
            unset($value['types']);
        }
    
        if (isset($value['templates'])) {
            $this->templates = $value['templates'];
            unset($value['templates']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->types) {
            $output['types'] = $this->types;
        }
        if (null !== $this->templates) {
            $output['templates'] = $this->templates;
        }
    
        return $output;
    }

}
