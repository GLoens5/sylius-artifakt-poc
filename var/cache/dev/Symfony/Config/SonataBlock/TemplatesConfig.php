<?php

namespace Symfony\Config\SonataBlock;


use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 */
class TemplatesConfig 
{
    private $blockBase;
    private $blockContainer;
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function blockBase($value): self
    {
        $this->blockBase = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function blockContainer($value): self
    {
        $this->blockContainer = $value;
    
        return $this;
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['block_base'])) {
            $this->blockBase = $value['block_base'];
            unset($value['block_base']);
        }
    
        if (isset($value['block_container'])) {
            $this->blockContainer = $value['block_container'];
            unset($value['block_container']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->blockBase) {
            $output['block_base'] = $this->blockBase;
        }
        if (null !== $this->blockContainer) {
            $output['block_container'] = $this->blockContainer;
        }
    
        return $output;
    }

}
