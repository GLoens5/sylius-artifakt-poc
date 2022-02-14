<?php

namespace Symfony\Config\SyliusGrid;


use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 */
class TemplatesConfig 
{
    private $filter;
    private $action;
    private $bulkAction;
    
    /**
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function filter(string $name, $value): self
    {
        $this->filter[$name] = $value;
    
        return $this;
    }
    
    /**
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function action(string $name, $value): self
    {
        $this->action[$name] = $value;
    
        return $this;
    }
    
    /**
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function bulkAction(string $name, $value): self
    {
        $this->bulkAction[$name] = $value;
    
        return $this;
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['filter'])) {
            $this->filter = $value['filter'];
            unset($value['filter']);
        }
    
        if (isset($value['action'])) {
            $this->action = $value['action'];
            unset($value['action']);
        }
    
        if (isset($value['bulk_action'])) {
            $this->bulkAction = $value['bulk_action'];
            unset($value['bulk_action']);
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
        if (null !== $this->action) {
            $output['action'] = $this->action;
        }
        if (null !== $this->bulkAction) {
            $output['bulk_action'] = $this->bulkAction;
        }
    
        return $output;
    }

}
