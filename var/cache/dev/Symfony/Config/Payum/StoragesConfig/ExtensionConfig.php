<?php

namespace Symfony\Config\Payum\StoragesConfig;


use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 */
class ExtensionConfig 
{
    private $all;
    private $gateways;
    private $factories;
    
    /**
     * @default true
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function all($value): self
    {
        $this->all = $value;
    
        return $this;
    }
    
    /**
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function gateways(string $key, $value): self
    {
        $this->gateways[$key] = $value;
    
        return $this;
    }
    
    /**
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function factories(string $key, $value): self
    {
        $this->factories[$key] = $value;
    
        return $this;
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['all'])) {
            $this->all = $value['all'];
            unset($value['all']);
        }
    
        if (isset($value['gateways'])) {
            $this->gateways = $value['gateways'];
            unset($value['gateways']);
        }
    
        if (isset($value['factories'])) {
            $this->factories = $value['factories'];
            unset($value['factories']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->all) {
            $output['all'] = $this->all;
        }
        if (null !== $this->gateways) {
            $output['gateways'] = $this->gateways;
        }
        if (null !== $this->factories) {
            $output['factories'] = $this->factories;
        }
    
        return $output;
    }

}
