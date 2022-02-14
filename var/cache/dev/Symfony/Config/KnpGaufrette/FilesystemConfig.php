<?php

namespace Symfony\Config\KnpGaufrette;


use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 */
class FilesystemConfig 
{
    private $adapter;
    private $alias;
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function adapter($value): self
    {
        $this->adapter = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function alias($value): self
    {
        $this->alias = $value;
    
        return $this;
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['adapter'])) {
            $this->adapter = $value['adapter'];
            unset($value['adapter']);
        }
    
        if (isset($value['alias'])) {
            $this->alias = $value['alias'];
            unset($value['alias']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->adapter) {
            $output['adapter'] = $this->adapter;
        }
        if (null !== $this->alias) {
            $output['alias'] = $this->alias;
        }
    
        return $output;
    }

}
