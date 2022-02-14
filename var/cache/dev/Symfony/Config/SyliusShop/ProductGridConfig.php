<?php

namespace Symfony\Config\SyliusShop;


use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 */
class ProductGridConfig 
{
    private $includeAllDescendants;
    
    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function includeAllDescendants($value): self
    {
        $this->includeAllDescendants = $value;
    
        return $this;
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['include_all_descendants'])) {
            $this->includeAllDescendants = $value['include_all_descendants'];
            unset($value['include_all_descendants']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->includeAllDescendants) {
            $output['include_all_descendants'] = $this->includeAllDescendants;
        }
    
        return $output;
    }

}
