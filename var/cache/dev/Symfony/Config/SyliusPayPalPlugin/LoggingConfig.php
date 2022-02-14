<?php

namespace Symfony\Config\SyliusPayPalPlugin;


use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 */
class LoggingConfig 
{
    private $increased;
    
    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function increased($value): self
    {
        $this->increased = $value;
    
        return $this;
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['increased'])) {
            $this->increased = $value['increased'];
            unset($value['increased']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->increased) {
            $output['increased'] = $this->increased;
        }
    
        return $output;
    }

}
